@extends('layouts.app')

@section('content')

<page tamanho="12">
	<panel titulo="Dashboard">

		<table-list 
		v-bind:titulos="['#','Titulo','Descrição']"
		v-bind:itens="[['1','php','curso'],['2','vue','curso']]"
		criar="#criar"  detalhe="#detalhe" editar="#editar"  deletar="#deletar" token="4534534534"
		
		></table-list>
		

	</panel>


</page>
@endsection
