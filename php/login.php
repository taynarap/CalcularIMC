<?php

require_once("../classes/Usuario.php");
require_once("GLOBAIS.php");
require_once("funcoes.php");

$form = isset($_POST["login"]) && isset($_POST["senha"]);

if ($form) {
    $login_atual = confirmarLogin($_POST["login"], $_POST["senha"]);

    if (!empty($login_atual)) {

        session_start();

        $_SESSION["usuario"] = $login_atual;

        unset($_SESSION["usuario"]->senha);

        header("Location: ../home_usuario.php");
        exit();

    } else {
        header("Location: ../erro_login.php");
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}

?>