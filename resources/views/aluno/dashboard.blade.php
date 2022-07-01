<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Update Aluno</title>


    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/login.css">

    <!-- CSS only - Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper - Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>


    <style>
        /* *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body, .container{
            width: 100%;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #1e1e1e;
        }

        .form-wrapper{
            width: 500px;
            padding: 50px 40px;
            background-color: white;
        }

        .form-wrapper h2{
            text-align: center;
            margin-bottom: 40px;
        }

        .form-wrapper .input-wrapper{
            margin-bottom: 30px;
        }

        .form-wrapper .input-wrapper input{
            width: 100%;
            padding: 10px 5px;
            border: 1px solid #d3d2d2;
            color: #868686;
        }

        .form-wrapper button{
            display: block;
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #1e1e1e;
            color: #d3d2d2;
        } */
    </style>


</head>

<body>


    <header>

        <nav class="container d-flex justify-content-between">

            <div class="logo-wrapper d-flex align-items-center">
                <a href="">
                    <img src="/img/logo-etec.png" alt="Logo ETEC Francisco Garcia">
                </a>
            </div>

            <div class="btn-menu align-self-center">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <ul class="nav-links">
                <li><a href="/">Início</a></li>
                <li id="submenu">
                    <a class="submenu" href="">
                        Cursos
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                            <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M310.6 246.6l-127.1 128C176.4 380.9 168.2 384 160 384s-16.38-3.125-22.63-9.375l-127.1-128C.2244 237.5-2.516 223.7 2.438 211.8S19.07 192 32 192h255.1c12.94 0 24.62 7.781 29.58 19.75S319.8 237.5 310.6 246.6z" />
                        </svg>
                    </a>

                    <a class="dropdown-mobile" href="/cursos/1informatica">1° Informática</a>
                    <a class="dropdown-mobile" href="/cursos/1mecanica">1° Mecânica</a>
                    <a class="dropdown-mobile" href="/cursos/1quimica">1° Química</a>
                    <a class="dropdown-mobile" href="/cursos/3informatica">3° Informática</a>

                    <ul class="dropdown">
                        <li><a href="/cursos/1informatica">1° Informática</a></li>
                        <li><a href="/cursos/1mecanica">1° Mecânica</a></li>
                        <li><a href="/cursos/1quimica">1° Química</a></li>
                        <li><a href="/cursos/3informatica">3° Informática</a></li>
                    </ul>
                </li>
                <li><a href="/index#portfolio">Portfólio Alunos</a></li>
                <li><a href="#redes-sociais">Redes Socias</a></li>

                @auth

                    @if (Auth::user()->admin == 1)
                        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    @endif

                    @if (Auth::user()->aluno == 1 && Auth::user()->admin == 0)
                        <li><a href="{{ route('aluno.dashboard') }}">Dashboard</a></li>
                    @endif

                    <li><a href="{{ route('auth.logout') }}">Logout</a></li>

                @endauth
                {{-- @if (Auth(''))
                    <li><a href="{{route('auth.logout')}}">Logout</a></li>
                @else
                    <li><a href="{{route('aluno.dashboard')}}">Dashboard</a></li>
                    <li><a href="{{route('auth.logout')}}">Logout</a></li>
                @endif --}}

                @guest
                    <li><a href="{{ route('auth.login') }}">Login</a></li>
                @endguest

            </ul>

        </nav>

    </header>

    <main class="p-5">
        <div class="container d-flex justify-content-center">

            <div class="form-wrapper">
    
                <h2>Atualizar Dados Aluno</h2>
    
                <form action="/aluno/dashboard/{{$aluno->id}}/update" method="POST">
                    
                    @method('PUT')
                    @csrf
    
                    <div class="input-wrapper">
                        <label for="name">Nome</label>
                        <input type="text" name="name" id="name" placeholder="Nome" value="{{$aluno->name}}">
                    </div>
    
                    <div class="input-wrapper">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" placeholder="Email" value="{{$aluno->email}}">
    
                        <span class="text-danger">@error('email')
                            {{$message}}
                        @enderror</span>
    
                    </div>
    
                    <div class="input-wrapper">
                        <label for="link">Link</label>
                        <input type="text" name="link" id="link" placeholder="Link Portfólio" value="{{$aluno->link}}">
    
                    </div>
    
                    <div class="input-wrapper">
                        <label for="password">Senha</label>
                        <input type="password" name="password" id="password" placeholder="Digite Apenas se for Atualizar">  
                    </div>
    
                    <div class="input-check mb-5">
                        Deseja Realmente Alterar a Senha?
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="confirm_password" id="radio1" value="0" checked >
                            <label class="form-check-label" for="radio1">
                                NÃO
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="confirm_password" id="radio2" value="1">
                            <label class="form-check-label" for="radio2">
                                SIM
                            </label>
                        </div>
                    </div>
    
                    <button type="submit">Atualizar</button>
    
                </form>
    
            </div>
    
        </div>

    
        <script src="/js/script.js"></script>

</body>

</html>
