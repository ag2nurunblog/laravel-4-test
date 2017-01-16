<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Company;

use App\Http\Requests\CompanyRequest;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $companys = Company::all();

        return view('companys.index', ['companys' => $companys] )
                                    ->with('controlador', new Controller);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('companys.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyRequest $request)
    {
        if(!Company::where('name', 'LIKE', $request->name)->first()){

            if(Company::create($request->all())){

                $mensagem = array(
                                'type' => 'success',
                                'retorno' => 'Empresa cadastrada com sucesso!'
                            );
            }else{

                $mensagem = array(
                                'type' => 'danger',
                                'retorno' => 'Erro ao cadastrar empresa!'
                            );
            }
        }else{

            $mensagem = array(
                                'type' => 'danger',
                                'retorno' => 'Está empresa já foi cadastrada!'
                            );

            return redirect('company/register')->with('status', $mensagem)
                                                ->withInput($request->only('name'));
        }

        return redirect('/company')->with('status', $mensagem);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::find($id);

        return view('companys.edit')->with('company', $company);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyRequest $request, $id)
    {
        $company = Company::find($id);

        if($company->name != $request->name){
            if(!Company::where('name', 'LIKE', $request->name)->first()){

                $company->name = $request->name;

                if($company->save()){

                    $mensagem = array(
                                    'type' => 'success',
                                    'retorno' => 'Empresa editada com sucesso!'
                                );
                }else{

                    $mensagem = array(
                                    'type' => 'danger',
                                    'retorno' => 'Erro ao editar editada!'
                                );
                }
            }else{

                $mensagem = array(
                                    'type' => 'danger',
                                    'retorno' => 'Está empresa já foi cadastrada!'
                                );
            }
        }else{

            return Redirect::back();
        }

        return Redirect::back()->with('status', $mensagem);   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::find($id);

        if($company->delete()){

            $mensagem = array(
                            'type' => 'success',
                            'retorno' => 'Empresa excluida com sucesso!'
                        );
        }else{

            $mensagem = array(
                            'type' => 'danger',
                            'retorno' => 'Erro ao excluir empresa!'
                        );
        }

        return redirect('/company')->with('status', $mensagem);
    }
}
