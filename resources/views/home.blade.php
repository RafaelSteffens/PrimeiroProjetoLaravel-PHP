@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('---------') }}</div>
                <h1>Lista de Tarefas</h1>
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Data</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Number</th>
                    <th scope="col">OBS</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($noticias as $noticia)
                <tr>
                    <td>{{ $noticia->id }}</td>
                    <td>{{ $noticia->created_at }}</td> <!-- ou $noticia->updated_at para data de atualização -->
                    <td>{{ $noticia->name }}</td>
                    <td>{{ $noticia->number }}</td>
                    <td>{{ $noticia->obs }}</td>
                </tr>
                @endforeach   
                </tbody>
                </table>
                    
                <div class="card-body">
                    
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('DEV CONTRATADOOO') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
