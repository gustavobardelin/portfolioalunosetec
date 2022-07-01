@extends('layouts.main')

@section('title-page', 'Update Aluno')

@section('content')

    <div class="container d-flex justify-content-center">

        <div class="form-wrapper">

            <h2>Atualizar Dados Aluno</h2>

            <form action="/admin/dashboard/{{ $aluno->id }}/update" method="POST">

                @method('PUT')
                @csrf

                <div class="input-wrapper">
                    <label for="name">Nome</label>
                    <input type="text" name="name" id="name" placeholder="Nome" value="{{ $aluno->name }}">
                </div>

                <div class="input-wrapper">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" placeholder="Email" value="{{ $aluno->email }}">

                    <span class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>

                </div>

                <div class="input-wrapper">
                    <label for="link">Link</label>
                    <input type="text" name="link" id="link" placeholder="Link Portfólio"
                        value="{{ $aluno->link }}">

                </div>

                <div class="input-wrapper">
                    <label for="admin">Permissão Admin: </label>
                    <select name="admin" id="admin">
                        <option value="0" {{ $aluno->admin != 1 ? "selected='selected'" : '' }}>NÃO</option>
                        <option value="1" {{ $aluno->admin == 1 ? "selected='selected'" : '' }}>SIM</option>
                    </select>

                </div>

                <div class="input-wrapper">
                    <label for="curso">Curso </label>
                    <select name="curso_id" class="form-select">
                        <option value="1" {{ $aluno->curso_id == 1 ? "selected='selected'" : '' }}>1° Administração
                        </option>
                        <option value="2" {{ $aluno->curso_id == 2 ? "selected='selected'" : '' }}>1° Contabilidade
                        </option>
                        <option value="3" {{ $aluno->curso_id == 3 ? "selected='selected'" : '' }}>1° Informática
                        </option>
                        <option value="4" {{ $aluno->curso_id == 4 ? "selected='selected'" : '' }}>1° Mecânica
                        </option>
                        <option value="5" {{ $aluno->curso_id == 5 ? "selected='selected'" : '' }}>1° Química</option>
                        <option value="6" {{ $aluno->curso_id == 6 ? "selected='selected'" : '' }}>3° Informática
                        </option>
                    </select>
                </div>

                <div class="input-wrapper">
                    <label for="password">Senha</label>
                    <input type="password" name="password" id="password" placeholder="Digite Apenas se for Atualizar">
                </div>

                <div class="input-check mb-5">
                    Deseja Realmente Alterar a Senha?
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="confirm_password" id="radio1" value="0"
                            checked>
                        <label class="form-check-label" for="radio1">
                            NÃO
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="confirm_password" id="radio2"
                            value="1">
                        <label class="form-check-label" for="radio2">
                            SIM
                        </label>
                    </div>
                </div>

                <button type="submit">Atualizar</button>

            </form>

        </div>

    </div>

@endsection
