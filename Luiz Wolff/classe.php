<?php 
  class classeDados{

     public static 
     function dados($login, $senha, $mysqli) {
            $consulta = "SELECT * FROM tb_usuarios WHERE ";
            $resultusuarios = $mysqli -> query($consulta) or die ($mysqli->error);
            if ($resultusuarios == $consulta) {
                return$resultusuarios;
            }
            elseif($senha == $consulta){
                return $resultusuarios;

            }
     }

  }

?>