<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests\CompaniesRequest;
use Illuminate\Support\Facades\Auth;
use App\Company;
class CompaniesController extends Controller
{
  public function index()
  {
    if (Auth::check())
    {
      $companies = Company::all();
      if(Request::wantsJson()){
        return $companies;
      }else{
        return view('companies.index', compact('companies'));

      }
    }else{
      return redirect('login');
    }
  }
    public function create()
    {
      if (Auth::check())
      {
        $companies = new Company;
        return view("companies.create",compact('companies'));
      }else{
        return redirect('login');
      }

    }

    public function store(CompaniesRequest $request)
    {
      if (Auth::check())
      {
        $companies = Company::create($request->all());
        session()->flash('flash_message', 'Company was stored with success');
        if(Request::wantsJson()){
          return $companies;
        }else{
          $companies = Company::all();
          return view('companies.index', compact('companies'));
        }
      }else{
        return redirect('login');
      }
    }

    public function edit(Company $company)
    {
      if (Auth::check())
      {
        return view('companies.edit', compact('company'));
      }else{
        return redirect('login');
      }
    }
    public function show(Company $company)
    {
      if (Auth::check())
      {
        if(Request::wantsJson()){
          return $company;
        }else{
          return view('companies.show', compact('company'));
        }
      }else{
        return redirect('login');
      }

    }
    public function update(CompaniesRequest $request, Company $company)
    {
      if (Auth::check())
      {
        $company->update($request->all());
        session()->flash('flash_message', 'Company was updated with success');
        if(Request::wantsJson()){
          return $company;
        }else{
          return redirect('companies');
        }
      }else{
        return redirect('login');
      }
    }
    public function destroy(Company $company)
    {
      if (Auth::check())
      {
        $deleted = $company->delete();
        session()->flash('flash_message', 'Company was removed with success');
        if(Request::wantsJson()){
          return (string) $company;
        }else{
          return redirect('companies');
        }
      }else{
        return redirect('login');
      }
    }
}
