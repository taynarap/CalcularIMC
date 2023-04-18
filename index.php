<?php

require_once("php/funcoes.php");

$form = isset($_GET["login"]);

depoisLogado();

?>

<!DOCTYPE html>
<html lang="pt">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Site de Nutrição</title>

        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
            crossorigin="anonymous"></script>

        <!-- LOCAL -->
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>

        <!-- LOGIN USUARIO -->

        <div class="container-fluid">
            <div class="row d-flex justify-content-center text-center mt-3">
                <div id="caixa-bemvindo" class="col-4">

                    <h1 id="titulo">Bem-vindo</h1>

                    <form action="php/login.php" method="POST">
                        <input id="input-bemvindo" type="text" name="login" placeholder="Usuário" required="required">
                        <br>
                        <input id="input-bemvindo" type="password" name="senha" placeholder="Senha" required="required">
                        <br><br><br>
                        <input id="botao-bemvindo" class="rounded-5" type="submit" value="Entrar">
                        <br>
                    </form>
                </div>

            </div>
        </div>

        <!-- LOGIN VISITANTE -->

        <div class="container-fluid">
            <div class="row d-flex justify-content-center text-center mt-5">
                <div id="caixa-visitante" class="col-4">

                    <h1 id="titulo">Visitante</h1>

                    <form action="home_visitante.php" method="GET">
                        <input id="input-visitante" type="number" name="idade" placeholder="Idade">
                        <br>
                        <input id="input-visitante" type="number" name="peso" step="0.01" placeholder="Peso">
                        <br>
                        <input id="input-visitante" type="number" name="altura" step="0.01" placeholder="Altura">
                        <br><br><br>
                        <input id="botao-bemvindo" class="rounded-5" type="submit" value="Entrar como Visitante">
                        <br>
                    </form>
                </div>

            </div>
        </div>
    </body>

</html>