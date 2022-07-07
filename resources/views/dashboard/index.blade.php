@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h3 style="text-align: center">Bem vindos ao Taskmaster</h3>

    <div>
        Últimas tarefas adicionadas:
        <div>
            <ul>
                <li>
                    <a href="#">Título da Tarefa</a>
                </li>
            </ul>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
