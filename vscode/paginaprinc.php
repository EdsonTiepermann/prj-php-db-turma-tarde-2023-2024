<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batata's Store - Página Principal</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 60px;
            padding-bottom: 60px;
        }

        .footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
        }

        .header {
            background-color: #f8f9fa;
            padding: 20px;
            margin-bottom: 20px;
        }

        .user-info {
            background-color: #e9ecef;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px; 
        }
    </style>
</head>

<body>

    <div class="header">
        <?php include('header.php') ?>

        <?php
        session_start();

        $login = isset($_SESSION['login']) ? $_SESSION['login'] : "";
        $senha = isset($_SESSION['senha']) ? $_SESSION['senha'] : "";

        if ($login && $senha) {
            echo '<div class="user-info">';
            echo "<p>Bem-vindo, $login!</p>";
            echo '</div>';
        }
        ?>
    </div>

  
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
            </div>
        </div>
    </div>

    <?php include('footer.php') ?>
</body>

</html>
