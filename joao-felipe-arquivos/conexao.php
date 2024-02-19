<?php
$hostname = "localhost";
$username = "root";
$passaword = "";
$dbname = "prj_php_db";

$mysqli = new mysqli($hostname, $username, $passaword, $dbname );

if ($mysqli->connect_errno) {
    echo "Falha na conexão: (".$mysqli->connect_errno .") " .$mysqli->connect_error;
}



?>