
@extends('layouts.main')

@section('title-page', 'Dashboard - Admin')

@section('content')

    <div class="container">

        <div class="upload-alunos py-5">

            <h4 class="mb-5">Adicionar Aluno(s)</h4>


            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            @if (isset($errors) && $errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                </div>
            @endif

            @if (session()->has('failures'))

                <h5 class="mb-4">O(s) Email(s) abaixo já está(ão) cadastrado(s) no banco.</h5>

                <table class="table table-danger">
                    <tr>
                        <th>Linha</th>
                        <th>Campo</th>
                        <th>Erro</th>
                        <th>Email</th>
                    </tr>

                    @foreach (session()->get('failures') as $validation)
                        <tr>
                            <td>{{ $validation->row() }}</td>
                            <td>{{ $validation->attribute() }}</td>
                            <td>
                                <ul>
                                    @foreach ($validation->errors() as $e)
                                        {{-- <li>O Email já existe no banco.</li> --}}
                                        <li>{{$e}}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>
                                {{ $validation->values()[$validation->attribute()] }}
                            </td>
                        </tr>
                    @endforeach
                </table>

            @endif


            <form action="/admin/dashboard/import/alunos" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control" id="formFileMultiple" multiple>

                <button type="submit" class="btn btn-info mt-2">Importar Alunos</button>

            </form>


            <a class="btn btn-success mt-5" href="{{route('auth.register')}}">Adicionar Novo Aluno</a>

            <a class="btn btn-warning mt-5" href="{{route('admin.import')}}">Exportar Alunos</a>

        </div>

        <div class="row py-2">

            <div class="col-sm-12">

                <ul class="nav nav-tabs">

                    <li class="nav-item">
                        <a data-bs-toggle="tab" href="#administracao" class="nav-link active">1° Administração</a>
                    </li>

                    <li class="nav-item">
                        <a data-bs-toggle="tab" href="#contabilidade" class="nav-link">1° Contabilidade</a>
                    </li>

                    <li class="nav-item">
                        <a data-bs-toggle="tab" href="#informatica" class="nav-link">1° Informática</a>
                    </li>

                    <li class="nav-item">
                        <a data-bs-toggle="tab" href="#mecanica" class="nav-link">1° Mecânica</a>
                    </li>

                    <li class="nav-item">
                        <a data-bs-toggle="tab" href="#quimica" class="nav-link">1° Química</a>
                    </li>

                    <li class="nav-item">
                        <a data-bs-toggle="tab" href="#informatica3" class="nav-link">3° Informática</a>
                    </li>

                    <li class="nav-item">
                        <a data-bs-toggle="tab" href="#administradores" class="nav-link">Administradores</a>
                    </li>

                </ul>


                <div class="tab-content mt-5">

                    <div class="tab-pane active" id="administracao">

                        <h3>Alunos 1° Administração</h3>

                        <?php
                            $field = "curso_id";
                            $field_conditional = 1;
                        ?>
                        @include('admin.show-aluno-table')

                    </div>

                    <div class="tab-pane " id="contabilidade">

                        <h3>Alunos 1° Contabilidade</h3>

                        <?php
                            $field = "curso_id";
                            $field_conditional = 2;
                        ?>
                        @include('admin.show-aluno-table')

                    </div>

                    <div class="tab-pane " id="informatica">

                        <h3>Alunos 1° Informática</h3>

                        <?php
                            $field = "curso_id";
                            $field_conditional = 3;
                        ?>
                        @include('admin.show-aluno-table')

                    </div>

                    <div class="tab-pane " id="mecanica">

                        <h3>Alunos 1° Mecânica</h3>

                        <?php
                            $field = "curso_id";
                            $field_conditional = 4;
                        ?>
                        @include('admin.show-aluno-table')

                    </div>

                    <div class="tab-pane" id="quimica">

                        <h3>Alunos 1° Química</h3>

                        <?php
                            $field = "curso_id";
                            $field_conditional = 5;
                        ?>
                        @include('admin.show-aluno-table')

                    </div>

                    <div class="tab-pane" id="informatica3">

                        <h3>Alunos 3° Informática</h3>

                        <?php
                            $field = "curso_id";
                            $field_conditional = 6;
                        ?>
                        @include('admin.show-aluno-table')

                    </div>

                    <div class="tab-pane" id="administradores">

                        <h3>Usúarios administradores</h3>

                        <?php
                            $field = "admin";
                            $field_conditional = 1;
                        ?>
                        @include('admin.show-aluno-table')

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection
