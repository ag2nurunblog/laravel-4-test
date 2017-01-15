<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Session;
use Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/admin/users';

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $user             = new User();
        $user->name       = $data['name'];
        $user->email      = $data['email'];
        $user->company_id = $data['company_id'];
        $user->password   = bcrypt($data['password']);
        $user->save();

        $user->groups()->detach();
        $user->groups()->sync($data['group_id'], true);

        Session::flash(
            'flash_message',
            ['User added with success!', 'alert-success']
        );

        return redirect('admin/users');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        return redirect($this->redirectPath());
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $users = User::all();

        return view(
            'auth.index',
            compact('users')
        );
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view(
            'auth.edit',
            compact('user')
        );
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'name' => 'required|max:255',
            'email' => "required|email|max:255|unique:users,email,$id",
            'password' => 'required|min:6|confirmed',
        ));

        $user = User::findOrFail($id);

        $user->name          = $request->name;
        $user->company_id    = $request->company_id;
        $user->email         = trim($request->email);
        $user->password      = ($user->password != $request->password) ? bcrypt($request->password) : $user->password;
        $user->save();

        $user->groups()->detach();
        $user->groups()->sync($request->group_id, false);

        Session::flash(
            'flash_message',
            ['User updated with success!', 'alert-success']
        );

        return redirect('admin/users');
    }


    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view(
            'auth.show',
            compact('user')
        );
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function perfil($id)
    {
        $user = User::findOrFail($id);

        return view(
            'auth.perfil',
            compact('user')
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param bool $id
     * @return string
     */
    public function destroy(Request $request, $id = false)
    {
        $data = $request->all();

        if (!isset($data) || empty($data)) {
            return json_encode(0);
        }

        $user = User::find($data['id']);
        $user->delete();
        $user->groups()->detach();

        Session::flash(
            'flash_message',
            ['User Deleted!', 'alert-success']
        );

        return json_encode(1);
    }
}
