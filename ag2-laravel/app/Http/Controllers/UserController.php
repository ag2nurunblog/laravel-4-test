<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

use Hash;

use App\Http\Requests;
use App\User;
use App\Group;
use App\Company;

use App\Http\Requests\UserRequest;

class UserController extends Controller
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
        $user = new User();

        $users = $user->userGroup(Auth::user());

        return view('users.index', ['users' => $users] )
                                    ->with('controlador', new Controller);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        $companys = Company::all();
        $groups = null;

        if(Auth::user()->group()->where('group.id', 1)->first()){

            $groups = Group::all();

        }else if(Auth::user()->group()->where('group.id', 2)->first()){

            $groups = Group::where('id', '!=', 1)->get();

        }

        return view('users.register')->with('companys', $companys)
                                        ->with('groups', $groups);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {   
        $user = new User();

        if(!$user->where('email', 'LIKE', $request->email)){

            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->created_at = (new \DateTime())->format("Y/m/d H:i:s");
            $user->updated_at = (new \DateTime())->format("Y/m/d H:i:s");
            $user->active = $request->active;
            $user->remember_token = str_random(10);
            $user->company_id = $request->company;

            if($user->save()){

                $user->group()->sync($request->group);
                $mensagem = array(
                                'type' => 'success',
                                'retorno' => 'Usuário cadastrado com sucesso!'
                            );
            }else{

                $mensagem = array(
                                'type' => 'danger',
                                'retorno' => 'Erro ao cadastrar usuário!'
                            );
            }
        }else{

            $mensagem = array(
                                'type' => 'danger',
                                'retorno' => 'E-mail já associado a um usuário!'
                            );

            return redirect('user/register')->with('status', $mensagem)
                                                ->withInput($request->except('password', 'password_confirmation'));
        }

        return redirect('/user')->with('status', $mensagem);
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
        $user = User::find($id);

        $groups = null;
        $companys = null;
        $status = null;

        if(Auth::user()->group()->where('group.id', 1)->first()){

            $groups = Group::all();

        }else if(Auth::user()->group()->where('group.id', 2)->first()){

            $groups = Group::where('id', '!=', 1)->get();

        }

        if(Auth::user()->group()->whereIn('group.id', [1, 2])->first()){

            $companys = Company::all();
            $status = true;
        }

        return view('users.edit')->with('user', $user)
                                    ->with('companys', $companys)
                                    ->with('groups', $groups)
                                    ->with('status', $status);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $user = User::find($id);

        if(!$user->where('email', 'LIKE', $request->email)){

            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->updated_at = (new \DateTime())->format("Y/m/d H:i:s");
            $user->active = $request->active;
            $user->company_id = $request->company;

            if($user->save()){

                $user->group()->sync($request->group);
                $mensagem = array(
                                'type' => 'success',
                                'retorno' => 'Usuário editado com sucesso!'
                            );
            }else{

                $mensagem = array(
                                'type' => 'danger',
                                'retorno' => 'Erro ao editar usuário!'
                            );
            }

        }else{

            $mensagem = array(
                                'type' => 'danger',
                                'retorno' => 'E-mail já associado a um usuário!'
                            );
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
        $user = User::find($id);

        if($user->delete()){

            $mensagem = array(
                            'type' => 'success',
                            'retorno' => 'Usuário excluido com sucesso!'
                        );
        }else{

            $mensagem = array(
                            'type' => 'danger',
                            'retorno' => 'Erro ao excluir usuário!'
                        );
        }

        return redirect('/user')->with('status', $mensagem);
    }
}
