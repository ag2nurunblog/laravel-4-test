<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests\UsersGroupsRequest;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\UserGroup;
use App\Group;
class UserGroupsController extends Controller
{
  public function index()
  {
    if (Auth::check())
    {
      $usersGroup = UserGroup::all();
      if(Request::wantsJson()){
        return $usersGroup;
      }else{
        return view('users-group.index', compact('usersGroup'));
      }
    }else{
      return redirect('login');
    }
  }
  public function create()
  {
    if (Auth::check())
    {
      $userGroup = new UserGroup;
      $users = User::pluck('name','id')->all();
      $groups = Group::pluck('name','id')->all();
      return view("users-group.create",compact('userGroup', 'users','groups'));
    }else{
      return redirect('login');
    }
  }
  public function store(UsersGroupsRequest $request)
  {
    if (Auth::check())
    {
      $usersGroup = UserGroup::create($request->all());
      session()->flash('flash_message', 'User Group was stored with success');
      if(Request::wantsJson()){
        return $usersGroup;
      }else{
        $usersGroup = UserGroup::all();
        return view('users-group.index', compact('usersGroup'));
      }
    }else{
      return redirect('login');
    }
  }
  public function show(UserGroup $userGroup)
  {
    if (Auth::check())
    {
      if(Request::wantsJson()){
        return $userGroup;
      }else{
        return view('users-group.show', compact('userGroup'));
      }
    }else{
      return redirect('login');
    }
  }
  public function edit($id)
  {

    if (Auth::check())
    {
      $userGroup = UserGroup::findOrFail($id);
      $users = User::pluck('name','id')->all();
      $groups = Group::pluck('name','id')->all();
      return view('users-group.edit', compact('userGroup','users','groups'));
    }else{
      return redirect('login');
    }

  }
  public function update(UsersGroupsRequest $request, $id)
  {
    if (Auth::check())
    {
      $userGroup = UserGroup::findOrFail($id);
      $userGroup->update($request->all());
      session()->flash('flash_message', 'User Group was updated with success');
      if(Request::wantsJson()){
        return $userGroup;
      }else{
        return redirect('users-group');
      }
    }else{
      return redirect('login');
    }

  }
  public function destroy($id)
  {
    if (Auth::check())
    {
      $userGroup = UserGroup::findOrFail($id);
      $deleted = $userGroup->delete();
      session()->flash('flash_message', 'User Group was removed with success');
      if(Request::wantsJson()){
        return (string) $userGroup;
      }else{
        return redirect('users-group');
      }
    }else{
      return redirect('login');
    }
  }
}
