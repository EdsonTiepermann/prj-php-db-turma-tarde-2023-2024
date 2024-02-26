<?php
// Conexão com o banco de dados
$mysqli = new mysqli('localhost', 'usuario', 'senha', 'banco_de_dados');

if ($mysqli->connect_error) {
    die('Erro na conexão (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}
$filtro = 'ativo';

$sql = "SELECT * FROM tb_usuarios WHERE status = ?";
$result = $mysqli->query($sql);

if($stmt === false) {
  trigger_error($this->mysqli->error, E_USER_ERROR);
  return;
}

$stmt->bind_param('s', $filtro);
$stmt->execute();

$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
    // Imprime os dados do relatório aqui.
    echo $row['nome'] . ', ' . $row['email'] . ', ' . $row['status'] . "<br>";
}

$stmt->close();
?>
