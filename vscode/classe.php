<?php
include("conexao_bd.php");

class classeDados {
    public static function verificarlogin($login, $senha, $mysqli) {
        $consulta = "SELECT * FROM tb_usuarios WHERE login = '$login' AND senha = '$senha'";
        $resultusuarios = $mysqli->query($consulta);
        return $resultusuarios->num_rows == 1;
    }
}
?>  

?>