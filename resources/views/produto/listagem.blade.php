@extends('layout.principal')
@section('conteudo')

<h1>Listagem de produtos</h1>

@if(old('nome'))
<div class="alert alert-success">
	<strong>Sucesso!</strong>
	O produto {{ old('nome') }} foi adicionado.
</div>
@endif

@if(empty($produtos))

<div class="alert alert-danger">
	Você não tem nenhum produto cadastrado.
</div>

@else

<table class="table table-striped">
	@foreach ($produtos as $p)
	<tr class="{{ $p->quantidade<=1 ? 'danger' : ''}}">
		<td>{{ $p->nome }}</td>
		<td>{{ $p->valor }}</td>
		<td>{{ $p->descricao }}</td>
		<td>{{ $p->quantidade }}</td>
		<td><a href="{{action('ProdutoController@mostra', $p->id)}}"><i class="glyphicon glyphicon-search"></i></a></td>
		<td><a href="{{action('ProdutoController@editar', $p->id)}}"><i class="glyphicon glyphicon-pencil"></i></a></td>
		<td><a href="{{action('ProdutoController@remove', $p->id)}}"><i class="glyphicon glyphicon-trash"></i></a></td>

	</tr>
	@endforeach
</table>

@endif
@stop