<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests\UsersRequest;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Company;
class UsersController extends Controller
{
    /** Rota index do Controller Users **/
    public function index()
    {
      // Verifica se o usuário está logado
      if (Auth::check())
      {
        $users =  User::all();
        if(Request::wantsJson()){
          return $users;
        }else{
          // Retorna a view users.index com todos os usuários
          return view('users.index', compact('users'));
        }
      }else{
        // Se o usuário não estiver logado redireciona para a rota de login
        return redirect('login');
      }

    }
    /** Rota create do Controller Users **/
    public function create()
    {
      // Verifica se o usuário está logado
      if (Auth::check())
      {
        $user = new User;
        $companies = Company::pluck('name','id')->all();
        // Retorna a view users.create com todas as companhias
        return view("users.create",compact('user', 'companies'));
      }else{
        // Se o usuário não estiver logado redireciona para a rota de login
        return redirect('login');
      }
    }
    /** Rota store do Controller Users **/
    public function store(UsersRequest $request)
    {
      // Verifica se o usuário está logado
      if (Auth::check())
      {
        $users = User::create($request->all());
        session()->flash('flash_message', 'User was stored with success');
        if(Request::wantsJson()){
          return $users;
        }else{
          $users =  User::all();
          // Retorna a view users.index com todos os usuários
          return view('users.index', compact('users'));
        }
      }else{
        // Se o usuário não estiver logado redireciona para a rota de login
        return redirect('login');
      }
    }
    /** Rota show do Controller Users **/
    public function show(User $user)
    {
      // Verifica se o usuário está logado
      if (Auth::check())
      {
        if(Request::wantsJson()){
          return $user;
        }else{
          // Retorna a view users.index com as informações do usuário
          return view('users.show', compact('user'));
        }
      }else{
        // Se o usuário não estiver logado redireciona para a rota de login
        return redirect('login');
      }
    }
    /** Rota edit do Controller Users **/
    public function edit(User $user)
    {
      // Verifica se o usuário está logado
      if (Auth::check())
      {
        $companies = Company::pluck('name','id')->all();
        // Retorna a view users.edit com as informações de todas as companhias e do usuário
        return view('users.edit', compact('user','companies'));
      }else{
        // Se o usuário não estiver logado redireciona para a rota de login
        return redirect('login');
      }

    }
    /** Rota update do Controller Users **/
    public function update(UsersRequest $request, User $user)
    {
      // Verifica se o usuário está logado
      if (Auth::check())
      {
        // Atualiza as informações do usuário
        $user->update($request->all());
        session()->flash('flash_message', 'User was updated with success');
        if(Request::wantsJson()){
          return $user;
        }else{
          // Retorna a view users.index
          return redirect('users');
        }
      }else{
        // Se o usuário não estiver logado redireciona para a rota de login
        return redirect('login');
      }

    }
    /** Rota destroy do Controller Users **/
    public function destroy(User $user)
    {
      // Verifica se o usuário está logado
      if (Auth::check())
      {
        // Deleta o usuário
        $deleted = $user->delete();
        session()->flash('flash_message', 'User was removed with success');
        if(Request::wantsJson()){
          return (string) $user;
        }else{
          // Retorna a view users.index
          return redirect('users');
        }
      }else{
        // Se o usuário não estiver logado redireciona para a rota de login
        return redirect('login');
      }
    }
}
