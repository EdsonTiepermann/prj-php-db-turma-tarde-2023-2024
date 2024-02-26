<?php
include('conexão.php');
require ("functionclasse.php");


$usuario = $_GET['usuario'];
$cpf = $_GET['cpf'];
$nascimento = $_GET['nasci'];
$telefone = $_GET['telefone'];
$casa = $_GET['casa'];
$idcidade = $_GET['idcidade'];
$tipo = $_GET['tipo'];
// $login = $_GET['login'];
// $senha = $_GET['senha'];
$ativo = $_GET['ativo'];
$bairro = $_GET['bairro'];

$usuarios = classeDados::inserirclientes( $mysqli, $usuario , $cpf, $nascimento, $telefone, $casa, $idcidade, $tipo, $ativo, $bairro );


$inserircliente = "INSERT INTO tb_usuarios
      
      (nome_usuario, cpf, data_nascimento, telefone, num_casa, bairro, fk_id_tb_cidades, tipo_usuario, ativo )
      VALUES
      ('$usuario' ,'$cpf', '$nascimento',' $telefone','$casa', '$bairro','$idcidade', '$tipo', '$ativo' )";

      $sqlinserir = $mysqli->query($inserircliente) ;

      echo  $sqlinserir ;

























?>
    <title>Relatório de Usuários</title>



<!-- <table border="1">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Endereço</th>
            <th>tipo de Usuário</th>
        </tr>
    </thead>
        <tbody>
           
            <td><?php echo  "id"?></td>
            <td><?php echo  "nome_usuario"?></td>
            <td><?php echo  "tipo_usuario"?></td>
             <td><button onclick="inativo()">Inativ</button></td>
            <td><button onclick="atualizar()">Atualizar</button></td> -->

            

        </tbody>
                
        </tr>
    </table>
</body>
</html>
<script> 
</script>
