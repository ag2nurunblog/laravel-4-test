<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests\CompaniesRequest;
use Illuminate\Support\Facades\Auth;
use App\Company;
class CompaniesController extends Controller
{
    /** Rota index do Controller Companies **/
    public function index()
    {
      // Verifica se o usuário está logado
      if (Auth::check())
      {
        $companies = Company::all();
        if(Request::wantsJson()){
          return $companies;
        }else{
          // Retorna a view companies.index
          return view('companies.index', compact('companies'));

        }
      }else{
        // Se o usuário não estiver logado redireciona para a rota de login
        return redirect('login');
      }
    }
    /** Rota create do Controller Companies **/
    public function create()
    {
      // Verifica se o usuário está logado
      if (Auth::check())
      {
        $companies = new Company;
        // Retorna a view companies.create com todas as informações da companhia
        return view("companies.create",compact('companies'));
      }else{
        // Se o usuário não estiver logado redireciona para a rota de login
        return redirect('login');
      }

    }
    /** Rota store do Controller Companies **/
    public function store(CompaniesRequest $request)
    {
      // Verifica se o usuário está logado
      if (Auth::check())
      {
        $companies = Company::create($request->all());
        session()->flash('flash_message', 'Company was stored with success');
        if(Request::wantsJson()){
          return $companies;
        }else{
          $companies = Company::all();
          // Retorna a view companies.index com as informações de todas as companhias
          return view('companies.index', compact('companies'));
        }
      }else{
        // Se o usuário não estiver logado redireciona para a rota de login
        return redirect('login');
      }
    }
    /** Rota edit do Controller Companies **/
    public function edit(Company $company)
    {
      // Verifica se o usuário está logado
      if (Auth::check())
      {
        // Retorna a view companies.edit com as informações da companhia
        return view('companies.edit', compact('company'));
      }else{
        // Se o usuário não estiver logado redireciona para a rota de login
        return redirect('login');
      }
    }
    /** Rota show do Controller Companies **/
    public function show(Company $company)
    {
      // Verifica se o usuário está logado
      if (Auth::check())
      {
        if(Request::wantsJson()){
          return $company;
        }else{
          // Retorna a view companies.show com as informações da companhia
          return view('companies.show', compact('company'));
        }
      }else{
        // Se o usuário não estiver logado redireciona para a rota de login
        return redirect('login');
      }

    }
    /** Rota update do Controller Companies **/
    public function update(CompaniesRequest $request, Company $company)
    {
      // Verifica se o usuário está logado
      if (Auth::check())
      {
        $company->update($request->all());
        session()->flash('flash_message', 'Company was updated with success');
        if(Request::wantsJson()){
          return $company;
        }else{
          // Retorna a view companies.index
          return redirect('companies');
        }
      }else{
        // Se o usuário não estiver logado redireciona para a rota de login
        return redirect('login');
      }
    }
    /** Rota destroy do Controller Companies **/
    public function destroy(Company $company)
    {
      // Verifica se o usuário está logado
      if (Auth::check())
      {
        $deleted = $company->delete();
        session()->flash('flash_message', 'Company was removed with success');
        if(Request::wantsJson()){
          return (string) $company;
        }else{
          // Retorna a view companies.index
          return redirect('companies');
        }
      }else{
        // Se o usuário não estiver logado redireciona para a rota de login
        return redirect('login');
      }
    }
}
