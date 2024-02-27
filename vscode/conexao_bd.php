<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$db_name = 'prj_php_db';

$mysqli = new mysqli($hostname, $username, $password, $db_name);

if ($mysqli->connect_errno) {
    echo "falha na conexao:" ($mysqli->connect_errno);
}