<?php

function confirmarLogin($login, $senha)
{

    global $usuarios;

    foreach ($usuarios as $u) {
        if ($u->login == $login && $u->senha == $senha) {
            return $u;
        }
    }
    return NULL;
}


function confirmarSessao()
{
    session_start();

    if (empty($_SESSION["usuario"])) {
        header("Location: index.php");
        exit();
    }
}

function depoisLogado()
{

    session_start();

    if (!empty($_SESSION["usuario"])) {
        header("Location: home_usuario.php");
        exit();
    }
}

?>