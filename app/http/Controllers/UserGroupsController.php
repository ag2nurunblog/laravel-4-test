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
        // Retorna a view users-group.index com as informações dos Users Groups
        return view('users-group.index', compact('usersGroup'));
      }
    }else{
      // Se o usuário não estiver logado redireciona para a rota de login
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
      // Retorna a view users-group.create com as informações de usuários e grupos
      return view("users-group.create",compact('userGroup', 'users','groups'));
    }else{
      // Se o usuário não estiver logado redireciona para a rota de login
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
        // Retorna a view users-group.index com todos os Users Groups
        return view('users-group.index', compact('usersGroup'));
      }
    }else{
      // Se o usuário não estiver logado redireciona para a rota de login
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
        // Retorna a view users-group.show com informação do User Group
        return view('users-group.show', compact('userGroup'));
      }
    }else{
      // Se o usuário não estiver logado redireciona para a rota de login
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
      // Retorna a view users-group.edit com as informaçõe dos Users e Groups
      return view('users-group.edit', compact('userGroup','users','groups'));
    }else{
      // Se o usuário não estiver logado redireciona para a rota de login
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
        // Retorna a view users-group.index
        return redirect('users-group');
      }
    }else{
      // Se o usuário não estiver logado redireciona para a rota de login
      return redirect('login');
    }

  }
  /** Rota destroy do Controller UserGroups **/
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
        // Retorna a view users-group.index
        return redirect('users-group');
      }
    }else{
      // Se o usuário não estiver logado redireciona para a rota de login
      return redirect('login');
    }
  }
}
