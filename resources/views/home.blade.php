@extends('layouts.master')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="jumbotron">
                    <h1>Home</h1>
                    <p>Aplicativo desenvolvido com <i>Laravel framework</i> para disciplina de Tópicos Especiais II.</p>
                    <p>
                        <a class="btn btn-success" href="{{ url('/auth/login') }}" role="button">Acessar</a>
                        <a class="btn btn-primary" href="#" role="button">Sobre</a>
                    </p>
                </div>
            </div>
        </div>
@endsection