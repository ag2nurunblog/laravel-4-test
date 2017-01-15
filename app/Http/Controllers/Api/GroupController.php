<?php

namespace App\Http\Controllers\Api;

use App\Group;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = $request->get('query');
        $limit = $request->get('limit');
        if ($query) {
            $groups = Group::where('name', 'like', $query . '%');
        } else {
            $groups = Group::orderBy('id', 'desc');
        }
        if ($limit) {
            $groups = $groups->limit($limit);
        }
        $groups = $groups->get();
        foreach ($groups as $group) {
            $group->users = $group->users->each(function($e) {
                unset($e->pivot);
            });
        }
        return response()->json($groups);
        $company->users = $company->users->each(function($e) {
            unset($e->pivot);
        });
        return response()->json($company);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return response()->json(Group::create($request->all()), 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        $group->users = $group->users->each(function($e) {
            unset($e->pivot);
        });
        return response()->json($group);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        $group->fill($request->all())->save();
        return response()->json($group);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        $group->delete();
        return response()->json([], 204);
    }
}
