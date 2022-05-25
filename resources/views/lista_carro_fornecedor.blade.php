@extends('template')
@section('conteudo')


<table class="table table-dark table-borderless">
                <thead>
                    <tr>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($carros as $c)
                    <tr>
                            <td>{{$c ->marca}}</td>
                            <td>{{$c ->modelo}}</td>

                        @foreach($carros as $f)
                            {{$f ->marca}} <br>
                        @endforeach 
                    </tr>
                @endforeach    
                </tbody>
</table>

<a href="{{route('fornecedores_listar')}}"><button class="btn btn-primary">Voltar</button></a>
@endsection
 