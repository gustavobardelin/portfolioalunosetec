@extends('layouts.main')

@section('title-page', 'Portfólio Acadêmico - Alunos')

@section('content')

    <section id="inicio" class="home-screen">

        <div class="container">

            <div class="section-title d-flex flex-column align-items-center">
                <h2>Portfólio Acadêmico</h2>
                <span></span>
                <h6>Práticas de Empreendedorismo</h6>
            </div>

            <div class="content">

                <p>
                    Para complementar as atividades desenvolvidas no componente curricular, Práticas de
                    Empreendedorismo, os alunos foram orientados a criar um portfólio educacional onde irão
                    apresentar suas atividades pessoais ou acadêmicas realizadas nas disciplinas de seu curso, que
                    estão envolvidos 1° MTEC Administração, 1° MTEC Contabilidade, 1° MTEC Informática para Internet, 1° MTEC Mecânica, 1° MTEC Química e 3° ETIM Informática para Internet.
                </p>
                <p>
                    O portfólio é usado como ferramenta de acompanhamento, desenvolvimento e qualidade do
                    ensino/aprendizagem. Os conhecimentos são registrados, enfatizando a finalidade, as competências
                    e práticas adquiridas no processo de ensino e possibilitando um maior reconhecimento ao procurar
                    uma vaga no mercado de trabalho.
                </p>

            </div>

        </div>

        </section>

        <section id="portfolio" class="portfolio-screen">

        <div class="container">

            <div class="section-title d-flex flex-column align-items-center">
                <h2>Portfólio de Alunos</h2>
                <span></span>
                <h6>Confira o Portfólio de cada aluno de acordo com a turma</h6>
            </div>

            <div class="content">

                <div class="cards-wrapper row d-flex justify-content-center">

                    <div class="card-wrapper col-sm-8 col-md-6 col-lg-4">
                        <div class="card d-flex flex-column align-items-center justify-content-center">
                            <img class="img-fluid" src="/img/administracao.png" alt="">
                            <p>1° MTEC Administração</p>
                        </div>
                        <a href="/cursos/1administracao">Ver Alunos</a>
                    </div>

                    <div class="card-wrapper col-sm-8 col-md-6 col-lg-4">
                        <div class="card d-flex flex-column align-items-center justify-content-center">
                            <img class="img-fluid" src="/img/contabilidade.png" alt="">
                            <p>1° MTEC Contabilidade</p>
                        </div>
                        <a href="/cursos/1contabilidade">Ver Alunos</a>
                    </div>

                    <div class="card-wrapper col-sm-8 col-md-6 col-lg-4">
                        <div class="card d-flex flex-column align-items-center justify-content-center">
                            <img class="img-fluid" src="/img/informatica.png" alt="">
                            <p>1° MTEC Informática para Internet</p>
                        </div>
                        <a href="/cursos/1informatica">Ver Alunos</a>
                    </div>

                    <div class="card-wrapper col-sm-8 col-md-6 col-lg-4">
                        <div class="card d-flex flex-column align-items-center justify-content-center"">
                            <img class=" img-fluid" src="/img/mecanica.png" alt="">
                            <p>1° MTEC Mecânica</p>
                        </div>
                        <a href="/cursos/1mecanica">Ver Alunos</a>
                    </div>

                    <div class="card-wrapper col-sm-8 col-md-6 col-lg-4">
                        <div class="card d-flex flex-column align-items-center justify-content-center"">
                            <img class=" img-fluid" src="/img/quimica.png" alt="">
                            <p>1° MTEC Química</p>
                        </div>
                        <a href="/cursos/1quimica">Ver Alunos</a>
                    </div>

                    <div class="card-wrapper col-sm-8 col-md-6 col-lg-4">
                        <div class="card d-flex flex-column align-items-center justify-content-center"">
                            <img class=" img-fluid" src="/img/informatica.png" alt="">
                            <p>3° ETIM Informática para Internet</p>
                        </div>
                        <a href="/cursos/3informatica">Ver Alunos</a>
                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection
