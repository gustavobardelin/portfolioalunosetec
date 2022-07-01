@extends('layouts.main')

@section('title-page', 'Login')

@section('content')

    <div class="container pt-5 d-flex justify-content-center align-items-center">

        <div class="form-wrapper">

            <h2>Login</h2>

            <form action="{{ route('auth.check') }}" method="post">

                @if (Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div> 
                @endif

                @csrf

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
