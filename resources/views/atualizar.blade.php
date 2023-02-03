@extends('layout/plantilha')

@section("titulopagina", "Criar um novo registro")

@section('container')

<div class="card">
  <h5 class="card-header">Atualizar um Novo</h5>
  <div class="card-body">
    
    <p class="card-text">
      <form action="{{ route('escolas.update', $escolas->id) }}" method="POST">
        @csrf
        @method("PUT")
        <label for="">Escola</label>
        <input type="text" name="Id_School" class="form-control" required value="{{$escolas->Id_School}}">
        <label for="">Nome</label>
        <input type="text" name="Nome" class="form-control" required  value="{{$escolas->Nome}}">
        <label for="">Localização</label>
        <input type="text" name="Localização" class="form-control" required  value="{{$escolas->Localização}}">
        <br>
        <button class="btn btn-warning">
            <span class="fa-thin fa-arrow-rotate-left">Atualizar</span>
        </button>
        <a href="{{ route('escolas.index')}}" class="btn btn-info">
            <span class="fa-thin fa-arrow-turn-down-left">Voltar</span> 
        </a>
      </form>
    </p>
    
  </div>
</div>
@endsection