<?php
include("conexao_bd.php");
include("classe.php");

$login = $_GET["login"];
$senha = $_GET["senha"];

$dadosUsuario = classeDados::verificarlogin($login, $senha, $mysqli);

if ($dadosUsuario) {
    
    session_start();
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    header('Location: paginaprinc.php');
    exit;
} else {
    echo "Login ou senha incorretos.";
}

?>  
