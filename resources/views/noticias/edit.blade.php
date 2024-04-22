@extends('layouts.app')

@section('title','Edição')
@section('content')
    <div class="container mt-5">
        <h1>Editar tarefa</h1>
        
        <form action="{{ route('home.uptade',['id'=>$noticias->id]) }}" method="POST">
        @csrf
        @method('PUT')
            <div class="form-group">
                <br>
                <div class="form-group">
                    <label for="name">Nome: </label>
                    <input type="text" class="form-control" name="name" value="{{ $noticias->name }}" placeholder="Digite um Nome...">
                </div>
                <br>
                <div class="form-group">
                    <label for="number">Número da solicitação: </label>
                    <input type="number" class="form-control" name="number" value="{{ $noticias->number }}" placeholder="Digite o numero do serviço...">
                </div>
                <br>
                <div class="form-group">
                    <label for="obs">Observações: </label>
                    <input type="text" class="form-control" name="obs" value="{{ $noticias->obs }}"placeholder="Digite as observações ...">
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-success" value="Atualizar" >
                </div>
                
                <br>
            </div>
    
    
        </form>

    </div>

@endsection