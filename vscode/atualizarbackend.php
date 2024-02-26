<?php 
$nome_usuario = $_GET['nome_usuario'];
$cpf = $_GET['cpf'];
$data_nascimento = $_GET['data_nascimento'];
$telefone = $_GET['telefone'];
$endereco = $_GET['endereco'];
$num_casa = $_GET['num_casa'];
$bairro = $_GET['bairro'];
$fk_id_tb_cidades = $_GET['fk_id_tb_cidades'];
$tipo_usuario = $_GET['tipo_usuario'];
$login = $_GET['login'];
$senha = $_GET['senha'];

$query = "UPDATE tb_usuarios SET nome_usuario = '$nome_usuario', cpf = '$cpf', data_nascimento = '$data_nascimento', telefone = '$telefone', endereco = '$endereco', num_casa = '$num_casa', bairro = '$bairro', fk_id_tb_cidades = '$fk_id_tb_cidades', tipo_usuario = '$tipo_usuario', login = '$login', senha = '$senha' WHERE id = $id";

if ($mysqli->query($query)) {
    echo "Dados atualizados com sucesso!";
} else {
    echo "Erro ao atualizar os dados: " . $mysqli->error;
};
?>