<?php 
    $hostname = "localhost";
    $username ="root";
    $password = "";
    $database = "prj_php_db";

$mysqli= new mysqli($hostname, $username, $password, $database);
if ($mysqli -> connect_errno) {
    echo "falha no navegador: (". $mysqli -> connect_errno.") ". $mysqli -> connect_errno;
}

?>