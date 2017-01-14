<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests\UsersRequest;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Company;
class UsersController extends Controller
{

    public function index()
    {
      if (Auth::check())
      {
        $users =  User::all();
        if(Request::wantsJson()){
          return $users;
        }else{
          return view('users.index', compact('users'));
        }
      }else{
        return redirect('login');
      }

    }
    public function create()
    {
      if (Auth::check())
      {
        $user = new User;
        $companies = Company::pluck('name','id')->all();
        return view("users.create",compact('user', 'companies'));
      }else{
        return redirect('login');
      }
    }
    public function store(UsersRequest $request)
    {
      if (Auth::check())
      {
        $users = User::create($request->all());
        session()->flash('flash_message', 'User was stored with success');
        if(Request::wantsJson()){
          return $users;
        }else{
          $users =  User::all();
          return view('users.index', compact('users'));
        }
      }else{
        return redirect('login');
      }
    }

    public function show(User $user)
    {
      if (Auth::check())
      {
        if(Request::wantsJson()){
          return $user;
        }else{
          return view('users.show', compact('user'));
        }
      }else{
        return redirect('login');
      }
    }
    public function edit(User $user)
    {

      if (Auth::check())
      {
        $companies = Company::pluck('name','id')->all();
        return view('users.edit', compact('user','companies'));
      }else{
        return redirect('login');
      }

    }
    public function update(UsersRequest $request, User $user)
    {
      if (Auth::check())
      {
        $user->update($request->all());
        session()->flash('flash_message', 'User was updated with success');
        if(Request::wantsJson()){
          return $user;
        }else{
          return redirect('users');
        }
      }else{
        return redirect('login');
      }

    }
    public function destroy(User $user)
    {
      if (Auth::check())
      {
        $deleted = $user->delete();
        session()->flash('flash_message', 'User was removed with success');
        if(Request::wantsJson()){
          return (string) $user;
        }else{
          return redirect('users');
        }
      }else{
        return redirect('login');
      }
    }
}
