@extends('adminlte::page')

@section('content')

<div class="card">
    <div class="card-header">
        <h2>Cadastrar Tarefa</h2>
    </div>
    <div class="card-body">
        <form action="{{ url('tarefa') }}" method="post">
            {!! csrf_field() !!}
            <label for="titulo">Título</label><br>
            <input type="text" name="titulo" id="titulo" class="form-control"><br>
            <label for="descricao">Descrição</label><br>
            <textarea name="descricao" rows="4" cols="80" class="form-control"></textarea><br>
            <label for="prioridade">Prioridade</label><br>
            <select name="prioridade" id="prioridade" class="form-control">
                <option value="1">Opção 1</option>
                <option value="2">Opção 2</option>
                <option value="3">Opção 3</option>
            </select><br>
            <label for="data_entrega">Data de Entrega</label><br>
            <input type="date" name="data_entrega" id="data_entrega"><br/>
            <input type="submit" value="Salvar" class="btn btn-success btn-md mt-5">
        </form>
    </div>
</div>
@endsection

