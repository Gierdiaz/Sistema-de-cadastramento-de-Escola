@extends('layout/plantilha')

@section("titulopagina", "Criar um novo registro")

@section('container')

<div class="card">
  <h5 class="card-header">Excluir uma Escola</h5>
  <div class="card-body">
    
    <p class="card-text">
        <div class="alert alert-danger" role="alert">
           Você quer mesmo excluir esse registro?

          <table class="table table-sm table-hover table-bordered" style="background-color: white">
            <thead>
                <th>Escola</th>
                <th>Nome</th>
                <th>Localização</th>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $escolas->Id_School }}</td>
                    <td>{{ $escolas->Nome }}</td>
                    <td>{{ $escolas->Localização }}</td>
                </tr>
            </tbody>
           </table>
           <hr>
           <form action=" {{route('escolas.destroy', $escolas->id)}}" method="POST">
            @csrf
            @method('DELETE')
           <button class="btn btn-danger">
                <span class="fa-thin fa-trash">Deletar</span>
           </button>
            <a href="{{ route('escolas.index')}}" class="btn btn-info">
                <span class="fa-thin fa-arrow-turn-down-left">Voltar</span>
            </a>           
           </form>
         </div>
    </p>
    
  </div>
</div>
@endsection