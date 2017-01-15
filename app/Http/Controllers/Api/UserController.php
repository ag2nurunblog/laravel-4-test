<?php

namespace App\Http\Controllers\Api;

use App\{
    Company, Group, User
};
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id', 'desc')->get();
        foreach ($users as $user) {
            $user->company = $user->company;
            unset($user->company_id);
            $user->groups = $user->groups->each(function($e) {
                unset($e->pivot);
            });
        }
        return response()->json($users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $company = 0;
        if (isset($data['company'])) {
            if (is_integer($data['company'])) {
                $company = $data['company'];
            } else if (is_string($data['company'])) {
                $company = Company::firstOrCreate([
                    'name' => $data['company']
                ])->id;
            }
            unset($data['company']);
        }
        $groups = [];
        if (isset($data['groups']) && is_array($data['groups'])) {
            foreach ($data['groups'] as $group) {
                if (is_integer($group)) {
                    $groups[] = $group;
                } else if (is_string($group)) {
                    $groups[] = Group::firstOrCreate([
                        'name' => $group
                    ])->id;
                }
            }
            unset($data['groups']);
        }

        $user = User::firstOrCreate($data);
        if ($company) {
            $user->company()->associate($company);
            $user->save();
        }
        foreach ($groups as $group) {
            $user->groups()->attach($group);
        }
        return response()->json($user, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $user->company = $user->company;
        unset($user->company_id);
        $user->groups = $user->groups->each(function($e) {
            unset($e->pivot);
        });
        return response()->json($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $data = $request->all();
        $company = 0;
        if (array_key_exists('company', $data)) {
            if (is_integer($data['company'])) {
                $company = $data['company'];
            } else if (is_string($data['company'])) {
                $company = Company::firstOrCreate([
                    'name' => $data['company']
                ])->id;
            } else if ($data['company'] === null) {
                $company = null;
            }
            unset($data['company']);
        }
        $groups = [];
        if (isset($data['groups']) && is_array($data['groups'])) {
            foreach ($data['groups'] as $group) {
                if (is_integer($group)) {
                    $groups[] = $group;
                } else if (is_string($group)) {
                    $groups[] = Group::firstOrCreate([
                        'name' => $group
                    ])->id;
                }
            }
            unset($data['groups']);
        }
        $user->fill($data)->save();
        if ($company) {
            $user->company()->associate($company);
            $user->save();
        } else if ($company === null) {
            $user->fill([
                'company_id' => null
            ])->save();
        }
        if (count($groups)) {
            $user->groups = $user->groups->each(function($e) use($user) {
                $user->groups()->detach($e->id);
            });
            foreach ($groups as $group) {
                $user->groups()->attach($group);
            }
        }
        return response()->json($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return response()->json([], 204);
    }
}
