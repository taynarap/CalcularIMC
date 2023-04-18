<?php

$form = isset($_GET["idade"]) && isset($_GET["peso"]) && isset($_GET["altura"]);

$idade = 0;
$peso = 0.0;
$altura = 0.0;
$peso_min = 0.0;
$peso_max = 0.0;
$imc = 0;
$classe = 0;

if ($form) {

    $idade = $_GET["idade"];
    $peso = floatval($_GET["peso"]);
    $altura = floatval($_GET["altura"]);
    $peso_min = 18.5 * pow($altura, 2);
    $peso_max = 24.9 * pow($altura, 2);
    $imc = ($peso) / pow($altura, 2);

    if ($imc < 18.5) {
        $classe = "Abaixo do Peso";
    } elseif ($imc < 24.9) {
        $classe = "Peso Normal";
    } elseif ($imc < 29.9) {
        $classe = "Sobrepeso";
    } elseif ($imc < 34.9) {
        $classe = "Obesidade Grau 1";
    } elseif ($imc < 39.9) {
        $classe = "Obesidade Grau 2";
    } else {
        $classe = "Obesidade Grau 3 ou Mórbida";
    }
} else {
    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="pt">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IMC</title>

        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
            crossorigin="anonymous"></script>

        <!-- LOCAL -->
        <link rel="stylesheet" href="css/home_style.css">
    </head>

    <body>

        <?php if ($idade > 18): ?>

            <div class="container-fluid">
                <div class="row d-flex justify-content-center text-center mt-3">
                    <div id="caixa" class="col-4">

                        <h3 id="titulo">Olá Visitante! </h3>

                        <p>
                            Como você possui <span class="v">(
                                <?= number_format($altura, 2); ?> m )
                            </span> de altura, seu peso ideal está entre <span class="g">(
                                <?= number_format($peso_min, 1); ?> kg )
                            </span>
                            e <span class="g">(
                                <?= number_format($peso_max, 1); ?> kg )
                            </span>.
                        </p>

                        <br>

                        <p>
                            Neste momento, com o seu peso de <span class="v">(
                                <?= number_format($peso, 1); ?> kg )
                            </span>, seu IMC é de <span class="g">(
                                <?= number_format($imc, 1); ?> )
                            </span>, sendo assim classificado
                            como... <span class="v">(
                                <?= $classe; ?> )
                            </span>
                        </p>

                        <img class="imagem mt-2" src="imgs/6.png" alt="Quadro de IMC">

                        <br> <br>

                        <a href="logout.php">
                            <button>Sair</button>
                        </a>
                    </div>

                </div>
            </div>

        <?php else: ?>

            <div class="container-fluid">
                <div class="row d-flex justify-content-center text-center mt-3">
                    <div id="caixa" class="col-4">

                        <h3 id="titulo">Olá Visitante!</h3>

                        <p>
                            Como você possui <span class="v">(
                                <?= number_format($altura, 2); ?> m )
                            </span> de altura, seu peso ideal está entre <span class="g">(
                                <?= number_format($peso_min, 1); ?> kg )
                            </span>
                            e <span class="g">(
                                <?= number_format($peso_max, 1); ?> kg )
                            </span>.
                        </p>

                        <br>

                        <p>
                            Neste momento, com o seu peso de <span class="v">(
                                <?= number_format($peso, 1); ?> kg )
                            </span>, seu IMC é de <span class="g">(
                                <?= number_format($imc, 1); ?> )
                            </span>, sendo assim classificado
                            como... <span class="v"> (
                                <?= $classe; ?> )
                            </span>
                        </p>

                        <br>

                        <p>
                            Entretanto, como você possui apenas <span class="v">(
                                <?= $idade; ?> anos )
                            </span>, estes resultados, como também a tabela abaixo, não estão
                            correctos para si. <br>
                            Deste modo, deves buscar a ajuda de um profissional.
                        </p>

                        <img class="imagem mt-2" src="imgs/6.png" alt="Quadro de IMC">

                        <br> <br>

                        <a href="logout.php">
                            <button>Sair</button>
                        </a>
                    </div>

                </div>
            </div>

        <?php endif; ?>



    </body>

</html>