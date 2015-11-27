@extends('layouts.master')

@section('content')
<h1>Listagem de OS</h1>
<a href="/contato/create" class="btn btn-sm btn-primary">
    <span class="glyphicon glyphicon-plus-sign"></span> Adicionar
</a>
<hr>

<table class="table table-striped">
    <thead>
    <tr>
        <th>#</th>
        <th>Cliente</th>
        <th>Telefone</th>
        <th>Email</th>
        <th>Técnico</th>
        <th>Defeito</th>
        <th>Observação</th>
        <th width="1" colspan="3">Opções</th>
    </tr>
    </thead>
    <tbody>
    <?php $count = 0 ?>
    @foreach($contatos as $contato)
    <tr>
        <th scope="row">{{ ++$count }}</th>
        <td>{{ $contato->nome }}</td>
        <td>{{ $contato->telefone }}</td>
        <td>{{ $contato->email }}</td>
        <td>{{ $contato->tecnico }}</td>
        <td>{{ $contato->defeito }}</td>
        <td>{{ $contato->observacao }}</td>

        <td width="1">
            <a href="{{ route('contato.show', $contato->id) }}" class="btn btn-sm btn-info">Detalhes</a>
        </td>
        <td width="1">
            <a href="{{ route('contato.edit', $contato->id) }}" class="btn btn-sm btn-warning">Atualizar</a>
        </td>
        <td width="1">
            <form method="POST" accept-charset="UTF-8" action="/contato/{{ $contato->id }}">
                <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
            </form>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection