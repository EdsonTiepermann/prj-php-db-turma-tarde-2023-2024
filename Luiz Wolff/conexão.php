<?php 
    $hostname = "localhost";
    $username ="root";
    $password = "";
    $database = "db_prj";

$mysqli= new mysqli($hostname, $username, $password, $database);
if ($mysqli -> connect_errno) {
    echo "falha no navegador: (". $mysqli -> connect_errno.") ". $mysqli -> connect_errno;
}

?>