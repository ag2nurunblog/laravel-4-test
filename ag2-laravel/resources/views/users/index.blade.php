@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 text-right">
            <p><a href="{{ url('user/register') }}" class="btn btn-md btn-primary">Cadastrar Usuário</a></p>
        </div>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Usuários</div>
                <div class="panel-body">
                    <table class="table table-hover">
                    	<thead>
                    		<tr>
                    			<td>Nome</td>
                    			<td>E-Mail</td>
                    			<td>Grupo</td>
                    			<td>Companhia</td>
                    			<td>Status</td>
                    		</tr>
                    	</thead>
                    	<tbody>
                            @if($users->isEmpty())

                                <tr>
                                    <td colspan="5" class="text-center"><h4>Nenhum resultado encontrado</h4></td>
                                </tr>
                            @else
                        		@foreach($users as $u)
    		                		<tr>
    		                			<td>{{ $u->name }}</td>
    		                			<td>{{ $u->email }}</td>
    		                			<td>
    		                				@foreach($u->group as $g)
    		                					<span class="label label-default">{{ $g->name }}</span>
    		                				@endforeach
    		                			</td>
    		                			<td>{{ $u->company->name }}</td>
    		                			<td><span class="label {{ ($u->active == '1' ? 'label-success' : 'label-danger') }}">{{ $controlador->exibeStatus($u->active) }}</span></td>
    		                			<td>
    		                				<a href="{{ url('user/show/'.$u->id) }}"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
    		                				<a href="{{ url('user/edit/'.$u->id) }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
    		                				<a href="{{ url('user/destroy/'.$u->id) }}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
    		            				</td>
    		                		</tr>
                        		@endforeach
                            @endif
                    	</tbody>
                    </table>
                    
                    @if(session('status'))
                        <div class="alert alert-{{ session('status')['type'] }}" role="alert">{{ session('status')['retorno'] }}</div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
