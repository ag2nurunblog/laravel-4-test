<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Group;

use App\Http\Requests\GroupRequest;


class GroupController extends Controller
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
        $groups = Group::all();

        return view('groups.index', ['groups' => $groups] )
                                    ->with('controlador', new Controller);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('groups.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GroupRequest $request)
    {
        if(!Group::where('name', 'LIKE', $request->name)->first()){

            if(Group::create($request->all())){

                $mensagem = array(
                                'type' => 'success',
                                'retorno' => 'Grupo cadastrado com sucesso!'
                            );
            }else{

                $mensagem = array(
                                'type' => 'danger',
                                'retorno' => 'Erro ao cadastrar grupo!'
                            );
            }
        }else{

            $mensagem = array(
                                'type' => 'danger',
                                'retorno' => 'Este grupo já foi cadastrado!'
                            );

            return redirect('group/register')->with('status', $mensagem)
                                                ->withInput($request->only('name'));
        }

        return redirect('/group')->with('status', $mensagem);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $group = Group::find($id);

        return view('groups.edit')->with('group', $group);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $group = Group::find($id);

        if($group->name != $request->name){
            if(!Group::where('name', 'LIKE', $request->name)->first()){

                $group->name = $request->name;

                if($group->save()){

                    $mensagem = array(
                                    'type' => 'success',
                                    'retorno' => 'Grupo editado com sucesso!'
                                );
                }else{

                    $mensagem = array(
                                    'type' => 'danger',
                                    'retorno' => 'Erro ao editar grupo!'
                                );
                }
            }else{

                $mensagem = array(
                                    'type' => 'danger',
                                    'retorno' => 'Este grupo já foi cadastrado!'
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
        $group = Group::find($id);

        if($group->delete()){

            $mensagem = array(
                            'type' => 'success',
                            'retorno' => 'Grupo excluido com sucesso!'
                        );
        }else{

            $mensagem = array(
                            'type' => 'danger',
                            'retorno' => 'Erro ao excluir grupo!'
                        );
        }

        return redirect('/group')->with('status', $mensagem);
    }
}
