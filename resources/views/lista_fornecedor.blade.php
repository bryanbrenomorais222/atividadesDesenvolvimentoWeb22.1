@extends('template')

@section('conteudo')
@routes
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Endereço</th>
            <th>CEP</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Operações</th>
        </tr>
    </thead>
    <tbody>
    @foreach($fornecedores as $c)
    <tr>
        <td>{{ $c->id }}</td>
        <td>{{ $c->nome }}</td>
        <td>{{ $c->endereco }}</td>
        <td>{{ $c->CEP }}</td>
        <td>{{ $c->cidade }}</td>
        <td>{{ $c->estado }}</td>
        <td>
            <a href="{{ route('fornecedores_alterar', ['id' => $c->id]) }}" class="btn btn-warning">Alterar</a>
            <a href="{{ route('fornecedores_excluir', ['id' => $c->id]) }}" onclick="excluir({{ $c->id }})" class="btn btn-danger">Excluir</a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>

<div class="container fluid">
    <div>
        <a href="{{ route('fornecedores_novo')}}"><button class="btn btn-primary">Voltar</button> </a>
        <a href="{{ route('produtos_fornecedores_listar')}}"><button class="btn btn-primary">Produtos - Fornecedor</button> </a>
    </div>
</div>

<script>
    function excluir(id){
        if (confirm(`Deseja realmente excluir o fornecedor ${id}?`)){
            location.href = route('fornecedores_excluir', {'id':id});
        }
    }
</script>
@endsection
