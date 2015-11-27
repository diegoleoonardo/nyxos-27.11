@extends('layouts.master')

@section('content')
    <h1>Atualizar contato #{{ $contato->id }}</h1>

    <a href="/contato" class="btn btn-sm btn-warning">
        <span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar
    </a>
    <hr>

    <form method="POST" accept-charset="UTF-8" action="/contato/{{ $contato->id }}">
        <div class="form-group">
            <label for="Nome">Nome</label>
            <input type="text" class="form-control" name="nome" placeholder="Digite o nome" value="{{ $contato->nome }}">
        </div>
        <div class="form-group">
            <label for="Telefone">Telefone</label>
            <input type="text" class="form-control" name="telefone" placeholder="Ex.: 69 3421-0001" value="{{ $contato->telefone }}">
        </div>

        <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Digite um email válido" value="{{ $contato->email }}">
        </div>
        <div class="form-group">
            <label for="Email">Técnico</label>
            <input type="tecnico" class="form-control" name="tecnico" placeholder="Digite o nome do técnico">
        </div>
        <div class="form-group">
            <label for="Email">Defeito</label>
            <input type="defeito" class="form-control" name="defeito" placeholder="Insira o defeito relatado">
        </div>
        <div class="form-group">
            <label for="Email">Observações</label>
            <input type="observacao" class="form-control" name="observacao" placeholder="Observações adicionais">
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        {{ csrf_field() }}
        {{ method_field('PUT') }}
    </form>
@endsection
