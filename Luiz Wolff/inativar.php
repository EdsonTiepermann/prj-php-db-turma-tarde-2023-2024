<?php
include 'conexão.php';
include("cabeçalho.php");

// Verifica a conexão

    $sql = "UPDATE usuarios SET status='inativo' WHERE id=$id_usuario";

    if ($conn->query($sql) === TRUE) {
      echo "Usuário inativado com sucesso";
    } else {
      echo "Erro ao inativar usuário: " . $conn->error;
    }
?>
