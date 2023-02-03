@extends('layout/plantilha')

@section("titulopagina", "Criar um novo registro")

@section('container')

<div class="card">
  <h5 class="card-header">Adicionar um Novo</h5>
  <div class="card-body">
    
    <p class="card-text">
      <form action="#">
        <label for="">Escola</label>
        <input type="text" name="Id_School" class="form-control" required>
        <label for="">Nome</label>
        <input type="text" name="Nome" class="form-control" required>
        <label for="">Localização</label>
        <input type="text" name="Localização" class="form-control" required>
        <br>
        <button class="btn btn-primary">
          <span class="fa-thin fa-plus">Adicionar</span>
        </button>
        <a href="{{ route('escolas.index')}}" class="btn btn-info">
          <span class="fa-thin fa-arrow-turn-down-left"> Voltar</span>
        </a>
      </form>
    </p>
    
  </div>
</div>
@endsection