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
<modal nome="meumodal">
	<panel titulo="Adicionar">
		<formulario css="" action="#" method="post" enctype="multipart/form-data" token="7777">
				<div class="form-group">
						<label for="titulo">Titulo</label>
						<input type="text" class="form-control" id="titulo" placeholder="Titulo">
					  </div>
					  <div class="form-group">
							<label for="descricao">Descrição</label>
							<input type="text" class="form-control" id="descricao" placeholder="Descrição">
						  </div>
					  <button class="btn btn-primary" type="submit">Adicionar</button>

		</formulario>

	</panel>

</modal>
<modal nome="editar">
		<panel titulo="Editar">
			<formulario css="" action="#" method="post" enctype="multipart/form-data" token="7777">
					<div class="form-group">
							<label for="titulo">Titulo</label>
							<input type="text" class="form-control" id="titulo" placeholder="Titulo">
						  </div>
						  <div class="form-group">
								<label for="descricao">Descrição</label>
								<input type="text" class="form-control" id="descricao" placeholder="Descrição">
							  </div>
						  <button class="btn btn-primary" type="submit">Editar</button>
	
			</formulario>
	
		</panel>
	
	</modal>
@endsection
