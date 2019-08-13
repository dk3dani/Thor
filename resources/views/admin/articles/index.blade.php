@extends('layouts.app')

@section('content')

<page tamanho="12">
	<panel titulo="Dashboard">
	<migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>
	<modallink tipo="button" nome="meumodal" titulo="Criar" css=""></modallink>
		<table-list 
		v-bind:titulos="['#','Titulo','Descrição']"
		v-bind:itens="[['1','php','curso de app'],['2','vue','curso de web']]"
		criar="#criar"  detalhe="#detalhe" editar="#editar"  deletar="#deletar" token="4534534534" ordem="Asc" ordemCol="2"
		
		></table-list>
		

	</panel>


</page>
<modal nome="meumodal">
	<form>
		<div class="form-group">
		  <label for="exampleInputEmail1">Email address</label>
		  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
		</div>
		<div class="form-group">
		  <label for="exampleInputPassword1">Password</label>
		  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		</div>
		<div class="form-group">
		  <label for="exampleInputFile">File input</label>
		  <input type="file" id="exampleInputFile">
		  <p class="help-block">Example block-level help text here.</p>
		</div>
		<div class="checkbox">
		  <label>
			<input type="checkbox"> Check me out
		  </label>
		</div>
		<button type="submit" class="btn btn-default">Submit</button>
	  </form>

</modal>
@endsection
