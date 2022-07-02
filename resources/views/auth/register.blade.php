@extends('layouts.main')

@section('title-page', 'Cadastrar Aluno')

@section('content')

    <div class="container d-flex justify-content-center align-items-center">

        <div class="form-wrapper">

            <h2>Register</h2>

            <form action="{{ route('auth.save') }}" method="post">


                @if (Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif

                @if (Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                @endif

                @csrf
                <div class="input-wrapper">
                    <label for="name">Nome</label>
                    <input type="text" name="name" id="name" placeholder="Nome" value="{{ old('name') }}">

                    <span class="text-danger">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </span>

                </div>


                <div class="input-wrapper">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" placeholder="Email" value="{{ old('email') }}">

                    <span class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>

                </div>

                <div class="input-wrapper">
                    <select name="curso" class="form-select">
                        <option value="1">1° Administração</option>
                        <option value="2">1° Contabilidade</option>
                        <option value="3">1° Informática</option>
                        <option value="4">1° Mecânica</option>
                        <option value="5">1° Química</option>
                        <option value="6">3° Informática</option>
                        <option value="7">Administrador</option>
                    </select>

                </div>

                <div class="input-wrapper">
                    <label for="Link">Link</label>
                    <input type="text" name="link" id="Link" placeholder="Link">
                </div>

                <div class="input-wrapper">
                    <label for="password">Senha</label>
                    <input type="password" name="password" id="password" placeholder="Senha">

                    <span class="text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </span>

                </div>

                <button type="submit">Entrar</button>

            </form>

        </div>

    </div>

@endsection
