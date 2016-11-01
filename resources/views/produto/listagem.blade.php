@extends('layout.principal')
@section('conteudo')

<h1>Listagem de produtos</h1>

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
		<td><a href="/produtos/mostra/<?= $p->id ?>"><i class="glyphicon glyphicon-search"></i></a></td>
	</tr>
	@endforeach
</table>

@endif
@stop