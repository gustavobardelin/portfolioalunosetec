<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title-page')</title>

    <!-- CSS only - Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper - Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="/css/dashboard.css">

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
                <li><a class="link_inicio" href="/">Início</a></li>
                <li class="submenu">
                    <a class="submenu link_cursos" href="">
                        Cursos
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M310.6 246.6l-127.1 128C176.4 380.9 168.2 384 160 384s-16.38-3.125-22.63-9.375l-127.1-128C.2244 237.5-2.516 223.7 2.438 211.8S19.07 192 32 192h255.1c12.94 0 24.62 7.781 29.58 19.75S319.8 237.5 310.6 246.6z"/></svg>
                    </a>

                    <a class="link_1admin dropdown-mobile" href="/cursos/1administracao">1° Administração</a>
                    <a class="link_1conta dropdown-mobile" href="/cursos/1contabilidade">1° Contabilidade</a>
                    <a class="link_1infor dropdown-mobile" href="/cursos/1informatica">1° Informática</a>
                    <a class="link_1mecan dropdown-mobile" href="/cursos/1mecanica">1° Mecânica</a>
                    <a class="link_1quimi dropdown-mobile" href="/cursos/1quimica">1° Química</a>
                    <a class="link_3infor dropdown-mobile" href="/cursos/3informatica">3° Informática</a>

                    <ul class="dropdown">
                        <li><a class="link_1admin" href="/cursos/1administracao">1° Administração</a></li>
                        <li><a class="link_1conta" href="/cursos/1contabilidade">1° Contabilidade</a></li>
                        <li><a class="link_1infor" href="/cursos/1informatica">1° Informática</a></li>
                        <li><a class="link_1mecan" href="/cursos/1mecanica">1° Mecânica</a></li>
                        <li><a class="link_1quimi" href="/cursos/1quimica">1° Química</a></li>
                        <li><a class="link_3infor" href="/cursos/3informatica">3° Informática</a></li>
                    </ul>
                </li>
                <li><a class="link_portf" href="/#portfolio">Portfólio</a></li>
                <li><a class="link_redes" href="#redes-sociais">Redes Socias</a></li>

                @auth

                    <li class="submenu">

                        <a class="submenu link_painel" href="">
                            Painel
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M310.6 246.6l-127.1 128C176.4 380.9 168.2 384 160 384s-16.38-3.125-22.63-9.375l-127.1-128C.2244 237.5-2.516 223.7 2.438 211.8S19.07 192 32 192h255.1c12.94 0 24.62 7.781 29.58 19.75S319.8 237.5 310.6 246.6z"/></svg>
                        </a>

                        @if(Auth::user()->admin==1)

                            <a class="link_dash dropdown-mobile" href="{{route('admin.dashboard')}}">Dashboard</a>

                        @endif

                        @if(Auth::user()->aluno==1 && Auth::user()->admin==0)

                            <a class="link_dash dropdown-mobile" href="{{route('aluno.dashboard')}}">Meus Dados</a>

                        @endif

                        <a class="dropdown-mobile" href="{{route('auth.logout')}}">Logout</a>


                        <ul class="dropdown">

                            @if(Auth::user()->admin==1)

                                <li><a class="link_dash" href="{{route('admin.dashboard')}}">Dashboard</a></li>

                            @endif

                            @if(Auth::user()->aluno==1 && Auth::user()->admin==0)

                                <li><a class="link_dash" href="{{route('aluno.dashboard')}}">Meus Dados</a></li>

                            @endif

                            <li><a href="{{route('auth.logout')}}">Logout</a></li>

                        </ul>

                    </li>

                @endauth

                @guest
                <li><a href="{{route('auth.login')}}">Login</a></li>
                @endguest

            </ul>

        </nav>

    </header>

    <main>

        @yield('content')

    </main>

    <footer id="redes-sociais">

        <div class="container py-2">

            <div class="row content d-flex justify-content-center align-items-between">

                <div class="row">

                    <div class="social-media col-lg-4 col-sm-6 my-3">

                        <a class="insta" href="https://www.instagram.com/etecfranciscogarcia/" target="_blank">
                            <div class="icon-wrapper">
                                <img src="/img/svg/icon-insta.svg" alt="">
                            </div>
                            <p>@etecfranciscogarcia</p>
                        </a>

                    </div>

                    <div class="social-media col-lg-4 col-sm-6 my-3">

                        <a class="insta" href="https://www.instagram.com/adm_industrial/" target="_blank">
                            <div class="icon-wrapper">
                                <img src="/img/svg/icon-insta.svg" alt="">
                            </div>
                            <p>@adm_industrial</p>
                        </a>

                    </div>

                    <div class="social-media col-lg-4 col-sm-6 my-3">

                        <a class="insta" href="https://www.instagram.com/informaticaetecfg/" target="_blank">
                            <div class="icon-wrapper">
                                <img src="/img/svg/icon-insta.svg" alt="">
                            </div>
                            <p>@informaticaetecfg</p>
                        </a>

                    </div>

                    <div class="social-media col-lg-6 col-sm-6 my-3">

                        <a class="insta" href="https://www.instagram.com/mecanicaetecfg/" target="_blank">
                            <div class="icon-wrapper">
                                <img src="/img/svg/icon-insta.svg" alt="">
                            </div>
                            <p>@mecanicaetecfg</p>
                        </a>

                    </div>

                    <div class="social-media col-lg-6 col-sm-12 my-3">

                        <a class="insta" href="https://www.instagram.com/etecfg.quimica/" target="_blank">
                            <div class="icon-wrapper">
                                <img src="/img/svg/icon-insta.svg" alt="">
                            </div>
                            <p>@etecfg.quimica</p>
                        </a>

                    </div>

                </div>

                <div class="copyright col-lg-12">
                    <p>© Copyright 2022. Etec Francisco Garcia</p>
                    <p>Desenvolvido por <a target="_blank" href="https://www.instagram.com/gustavobardelin/">Gustavo
                            Damacena Bardelin</a></p>
                </div>

            </div>

        </div>

    </footer>



    <script src="/js/script.js"></script>

</body>
</html>
