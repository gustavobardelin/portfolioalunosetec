
@extends('layouts.listar-link-alunos')

@section('title-page', '3° ETIM Informática')

@section('link-aluno')

    @foreach($alunos as $aluno)
        @if($aluno->curso_id == 6)
            <tr>
                @if(strlen($aluno->link) > 6)
                    <td>{{$aluno->name}}</td>
                    <td>
                        <a class="btn btn-warning" target="_blank" href="{{$aluno->link}}" >Visualizar</a>
                    </td>
                @endif
            </tr>
        @endif
    @endforeach

@endsection
