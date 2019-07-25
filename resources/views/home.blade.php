@extends('layouts.app')

@section('content')

  <page tamanho="8">
        <panel titulo="Dashboard">
                Teste de conteúdo..
                  
                <div class="row">

                  <div class="col-md-4">
                   
                    
                   
                      <box qtd="80" titulo="Artigos" icone="ion ion-pie-graph" url="{{ route('article.index') }}" cor="orange"></box>

                  </div>
                  <div class="col-md-4">
                    <panel titulo="Conteúdo 2" cor="blue">
                      Teste de conteúdo..

                    </panel>
                  </div>
                  <div class="col-md-4">
                    <panel titulo="Conteúdo 3" cor="panel-info">
                      Teste de conteúdo..

                    </panel>
                  </div>

                </div>

                

              </panel>


  </page>
@endsection
