@extends('layouts.main')

@section('content')
    <section class="pt-5">

        <div class="container">

            <div class="section-title mt-5 mb-5 d-flex flex-column align-items-center">
                <h2> @yield('title-page') </h2>
                <span></span>
                <h6>Confira abaixo a lista de alunos para visualização de seu portfólio</h6>
            </div>


            <div class="content">

                <h3 class="mb-4">Lista de Alunos</h3>

                <div class="nomes-alunos">

                    <table class="table table-borderless table-hover ">

                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Link Portfólio</th>

                        @foreach ($alunos as $aluno)
                            <tr>

                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>{{ $aluno->name }}</td>

                                @if (strlen($aluno->link) > 6)
                                    <td>
                                        <a class="btn btn-warning" target="_blank"
                                            href="{{ $aluno->link }}">Visualizar</a>
                                    </td>
                                @else
                                    <td>
                                        <p><strong><i>Sem Link</i></strong></p>
                                    </td>
                                @endif

                            </tr>
                        @endforeach

                    </table>

                </div>

            </div>

        </div>

    </section>
@endsection
