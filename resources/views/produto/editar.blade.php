@extends('layout.principal')


@section('conteudo')


<h1>Editar Produto</h1>


<form action="/produtos/update" method="put">

	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
	<input type="hidden" name="id" value="{{$p->id}}" />

	<div class="form-group">
		<label for="">Nome</label>
		<input type="text" class="form-control" name="nome" value="{{$p->nome}}" >
	</div>
	<div class="form-group">
		<label for="">Descrição</label>
		<input type="text" class="form-control" name="descricao" value="{{$p->descricao}}" >
	</div>
	<div class="form-group">
		<label for="">Valor</label>
		<input type="text" class="form-control" name="valor" value="{{$p->valor}}" >
	</div>
	<div class="form-group">
		<label for="">Quantidade</label>
		<input type="text" class="form-control" name="quantidade" value="{{$p->quantidade}}" >
	</div>

	<button type="submit" class="btn btn-primary btn-block">Adicionar</button>

</form>


@stop