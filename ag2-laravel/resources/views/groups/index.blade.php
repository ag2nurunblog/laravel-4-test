@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 text-right">
            <p><a href="{{ url('group/register') }}" class="btn btn-md btn-primary">Cadastrar grupo</a></p>
        </div>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Grupos</div>
                <div class="panel-body">
                    <table class="table table-hover">
                    	<thead>
                    		<tr>
                    			<td>Grupo</td>
                                <td>Usuários</td>
                    		</tr>
                    	</thead>
                    	<tbody>
                            @if($groups->isEmpty())

                                <tr>
                                    <td colspan="5" class="text-center"><h4>Nenhum resultado encontrado</h4></td>
                                </tr>
                            @else
                        		@foreach($groups as $g)
    		                		<tr>
    		                			<td>{{ $g->name }}</td>
    		                			<td>
		                					@foreach($g->user as $u)
                                                <span class="label label-default">{{ $u->name }}</span>
                                            @endforeach
    		                			</td>
    		                			<td>
    		                				<a href="{{ url('group/edit/'.$g->id) }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
    		                				<a href="{{ url('group/destroy/'.$g->id) }}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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
