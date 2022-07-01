
@extends('layouts.listar-link-alunos')

@section('title-page', '1° MTEC Administração')

@section('link-aluno')

    @foreach($alunos as $aluno)
        @if($aluno->curso_id === 1)
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
