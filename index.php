<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Logos - A sua escola de profissões!</title>

    <!--PACOTE DE FAVICON - ÍCONE DO SITE NAS ABAS DOS NAVEGADORES-->
    <link rel="apple-touch-icon" sizes="180x180" href="imagens/logosimples-logos-informatica.png">
    <link rel="icon" type="image/png" sizes="32x32" href="imagens/logosimples-logos-informatica.png">
    <link rel="icon" type="image/png" sizes="16x16" href="imagens/logosimples-logos-informatica.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="imagens/logosimples-logos-informatica.png" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!--LINK ASSOCIANDO O CÓDIGO À BIBLIOTECA BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
        crossorigin="anonymous">
</head>

<body>


    <!--MENU-->

    <!--CARD INICIAL COM IMAGEM - ABERTURA DE CONTEÚDO COM CONVITE PARA MATRÍCULA-->
    <div class="card bg-light text-dark w-100 p-1">
        <header class="bg-dark text-light bottom-0 end-0">
            <br>
            <table class="text-center text-light fs-4 p-4 w-100 align-items-center">

                <tr>
                    <td>
                        <a class="navbar-brand" href="#">
                            <img src="imagens/logos-informatica-logo.png" alt="" width="140" height="50">
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>

                        <p>
                            <strong>SGE</strong> - Sistema de Gestão Escolar
                        </p>

                    </td>

                </tr>

            </table>
        </header>

        <!--MENU DE NAVEGAÇÃO DO SITE-->
        <nav class="navbar navbar-expand-lg fw-bold align-items-center" style="background-color: #d7edfc;">

            <!--ÍCONE DA ESCOLA COM LINK DE REDIRECIONAMENTO PARA O INÍCIO-->
            <div class="container-fluid align-items-center">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!--OPÇÕES DO MENU-->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <div class="card-body container-fluid text-center">
                        <a class="btn btn-outline-secondary btn-lg fw-bold" href="https://www.juninhoweb.com.br/logosescola" target="_blank">Site Comercial</a>
                        <a href="aluno/login_aluno.php" class="btn btn-outline-success btn-lg fw-bold">Painel do Aluno</a>
                        <a href="professor/login_prof.php" class="btn btn-outline-info btn-lg fw-bold">Painel do Professor</a>
                        <a href="diretor/login_diretor.php" class="btn btn-outline-primary btn-lg fw-bold">Painel do Diretor</a>
                    </div>

                </div>
            </div>



        </nav>

    </div>

    <!--FORMULÁRIO DE DADOS-->

    <!--PAINEL - ALUNO 
    <div class="card-group container-fluid w-25 text-center p-2">


        <div class="card p-2" style="width: 18rem;">


            <div class="text-center">
                <h3>Boletim
                    <span class="badge bg-success">Online</span>
                </h3>
                <p>Confira as suas notas semestrais!</p>
            </div>

            <div class="card-body">
                <a href="login_aluno.php" class="btn btn-outline-success fw-bold">Acesse aqui</a>
            </div>
        </div>

    </div>-->

    <!--PAINEL - ALUNO 
    <div class="card-group container-fluid w-25 text-center p-2">


        <div class="card p-2" style="width: 18rem;">


            <div class="text-center">
                <h3>
                    Fale Conosco
                </h3>
                <p>Clique no botão abaixo e mande-nos uma mensagem para que possamos sanar todas as dúvidas pendentes!</p>
            </div>

            <div class="card-body">
                <a href="Fale.html" class="btn btn-outline-info fw-bold">Quero entrar em contato!</a>
            </div>
        </div>

    </div>-->

    <hr>

    <!--DEMAIS CONTEÚDOS DO SITE-->
    <div class="container-corpo">



        <!--CARD INICIAL COM IMAGEM - ABERTURA DE CONTEÚDO COM SLOGAN DA INSTITUIÇÃO-->
        <div class="card bg-white text-dark w-100 p-4">
            <img src="imagens/sucess-do-seu-futuro.png" class="card-img" alt="...">
        </div>

        <hr>




        <!--CARD INTERMEDIÁRIO COM IMAGEM - SEPARAÇÃO ENTRE DUAS SEÇÕES DE CARDS TEXTUAIS
        <div class="card bg-primary text-dark w-100 p-1">
            <img src="imagens/aula1.jpg" class="card-img" alt="...">
        </div>

        <hr>-->

        <!--RODAPÉ-->

        <?php
        include('rodape.php');
        ?>

        <!--JAVASCRIPT DO BOOTSTRAP-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js " integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2 "
            crossorigin="anonymous "></script>


</body>

</html>