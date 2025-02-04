@extends('layouts.app')

@section('content')

<page tamanho="12">
	<panel titulo="Dashboard">
	<migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>
	
		<table-list 
		v-bind:titulos="['#','Titulo','Descrição']"
		v-bind:itens="{{$listaDados}}"
		criar="#criar"  detalhe="#detalhe" editar="#editar"  deletar="#deletar" token="4534534534" ordem="asc" ordemCol="2"
		modal="sim"
		
		></table-list>
		

	</panel>


</page>
<modal nome="meumodal" titulo="Adicionar">
{{-- tem que dar um id ao form para relacionar ao button que esta no slot  --}}
		<formulario id="formadd" css="" action="#" method="post" enctype="multipart/form-data" token="7777">
				<div class="form-group">
						<label for="titulo">Titulo</label>
						<input type="text" class="form-control" id="titulo" placeholder="Titulo">
					  </div>
					  <div class="form-group">
							<label for="descricao">Descrição</label>
							<input type="text" class="form-control" id="descricao" placeholder="Descrição">
						  </div>
					  

		</formulario>
		{{-- button no slot deve receber o form com o id  --}}
	 <span slot="addbutton">
		 <button form="formadd" class="btn btn-primary" type="submit">Adicionar</button>
	</span>


</modal>
<modal nome="editar" titulo="Editar">
		
			<formulario  id="formedit" css="" action="#" method="post" enctype="multipart/form-data" token="7777">
					<div class="form-group">
							<label for="titulo">Titulo</label>
							<input type="text" v-model="$store.state.item.titulo" class="form-control" id="titulo" placeholder="Titulo">
						  </div>
						  <div class="form-group">
								<label for="descricao">Descrição</label>
								<input type="text" v-model="$store.state.item.descricao"  class="form-control" id="descricao" placeholder="Descrição">
							  </div>
						  
	
			</formulario>
	    <span slot="addbutton">
		 <button form="formedit" class="btn btn-primary" type="submit">Editar</button>
		</span>
	
	</modal>
	<modal nome="detalhe" titulo="Detalhe">
		<panel v-bind:titulo="$store.state.item.titulo">
		  <p>@{{$store.state.item.descricao}}</p>
		</panel>
	  </modal>
@endsection
