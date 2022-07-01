<div class="nomes-alunos container-fluid">

<table class="table table-hover">

    <th>Nome</th>
    <th>Link Portfólio</th>
    <th>Ações</th>

    @foreach($alunos as $aluno)
        @if($aluno->$field == $field_conditional)
            <tr>
                <td><p>{{$aluno->name}}</p></td>

                <td>
                    @if(strlen($aluno->link) > 6)
                        <a class="btn btn-warning" target="_blank" href="{{$aluno->link}}" >Portfólio</a>
                    @else
                        <P><strong>Sem Link</strong></P>
                    @endif
                </td>

                <td class="d-flex">
                    <a class="btn btn-info mx-2" href="/admin/dashboard/{{$aluno->id}}/edit">Editar</a>
                    <form action="/admin/dashboard/{{$aluno->id}}/delete" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
        @endif
    @endforeach

</table>

</div>
