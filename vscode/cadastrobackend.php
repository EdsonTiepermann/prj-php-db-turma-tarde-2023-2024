<?php
$nome = $_GET['nome'];
$cpf = $_GET['cpf'];
$dataNascimento = $_GET['data_nascimento'];
$telefone = $_GET['telefone'];
$endereco = $_GET['endereco'];
$numCasa = $_GET['num_casa'];
$bairro = $_GET['bairro'];
$login = $_GET['login'];
$senha = $_GET['senha'];

include("conexao_bd.php");

$consulta_cidade = "SELECT tb_cidades.id FROM tb_cidades INNER JOIN tb_estados ON tb_cidades.fk_id_tb_estados = tb_estados.id WHERE tb_cidades.nome_cidade = '$cidade' AND tb_estados.nome_estado = '$estado'";
$result_cidade = $mysqli->query($consulta_cidade);
$row_cidade = $result_cidade->fetch_array();
$id_cidade = $row_cidade['id'];

$consulta = "INSERT INTO tb_usuarios (nome_usuario, cpf, data_nascimento, telefone, endereço, num_casa, bairro, fk_id_tb_cidades, login, senha) VALUES ('$nome', '$cpf', '$dataNascimento', '$telefone', '$endereco', '$numCasa', '$bairro', '$id_cidade', '$login', '$senha')";

if ($mysqli->query($consulta) == TRUE) {
    header('Location: paginaprinc.php'); 
    exit;
} else {
    echo "Erro ao cadastrar: " . $mysqli->error;
}
?>
