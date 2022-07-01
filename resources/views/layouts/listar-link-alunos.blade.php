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

                    <table class="table table-hover ">

                        
                        <th>Nome</th>
                        <th>Link Portfólio</th>
                        
                        @yield('link-aluno')

                    </table>

                </div>

            </div>

        </div>

    </section>
@endsection
