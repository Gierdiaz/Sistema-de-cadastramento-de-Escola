@extends('layout\plantilha');

@section('titulopagina', 'Crud com laravel')

@section('container')
<br><br>
<div class="card">
    <h4 class="card-header text-center">Sistema de Cadastramento Escolar</h4>
    <div class="card-body">
        <div class="col-sm-12">
            @if ($mensagem = Session::get('success')) 
                <div class="alert alert-success" role="alert">
                    {{$mensagem}}
                </div>
            @endif
        </div>
        <h5 class="card-title"></h5>
        <p>
            <a href="{{ route('escolas.create') }}" class="btn btn-primary"> 
            <span class="fa-thin fa-plus">Adicionar nova escola</span>
            </a>
        </p>
        <hr>
  
        <p class="card-text"><div class="table table-responsive" >
                <table class="table table-sm table-bordered">
                    <thead>
                        <th>Escola: </th>
                        <th>Nome: </th>
                        <th>Localização: </th>
                        <th>Alterar</th>
                        <th>Remover</th>
                    </thead>
                    <tbody>
                    @foreach($dados as $item)    
                        <tr>
                            <td>{{ $item->Id_School}}</td>
                            <td>{{ $item->Nome}}</td>
                            <td>{{ $item->Localização}}</td>
                            <td>
                                <form action="{{route('escolas.edit', $item->id) }}" method="GET">
                                    <button class="btn btn-warning btn-sm"></button>
                                    <span class="fa-thin fa-pen-to-square" ></span>
                                </form>
                            </td>
                            
                            <td>
                                <form action="{{route('escolas.show', $item->id) }}" method="GET">
                                    <button class="btn btn-danger btn-sm"></button>
                                    <span class="fa-thin fa-xmark" ></span>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </p>
       
    </div>
</div>


@endsection