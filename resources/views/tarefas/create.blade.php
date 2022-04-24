@extends('adminlte::page')

@section('content')

<div class="card">
    <div class="card-header">
        Cadastrar Tarefa
    </div>
    <div class="card-body">
        <form action="{{url('tarefa')}}" method="post">
            {!! csrf_field() !!}
            <label for="nome">Nome</label><br>
            <input type="text" name="nome" id="nome" class="form-control"><br>
            <label for="email">Email</label><br>
            <input type="text" name="email" id="email" class="form-control"><br>
            <label for="telefone">Telefone</label><br>
            <input type="text" name="telefone" id="telefone" class="form-control"><br>
            <label for="endereco">Endereço</label><br>
            <input type="text" name="endereco" id="endereco" class="form-control"><br>
            <input type="submit" value="Salvar" class="btn btn-success btn-md">
        </form>
    </div>
</div>
@endsection

