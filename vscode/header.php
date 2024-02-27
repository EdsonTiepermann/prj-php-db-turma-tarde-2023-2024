<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batata's Store</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .custom-header {
            background-color: #6b4423;
            color: #ffffff;
            padding: 15px 0;
            border-bottom: 3px solid #f8f9fa;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .custom-header h1 {
            margin: 0;
            font-size: 28px;
            text-transform: uppercase;
        }

        .custom-header nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .custom-header nav ul li {
            display: inline;
            margin-right: 20px;
        }

        .custom-header nav ul li a {
            color: #ffffff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .custom-header nav ul li a:hover {
            color: #f8f9fa;
        }

        .potato-icon {
            font-size: 24px;
            margin-right: 10px;
        }

        .potato-text {
            font-weight: bold;
        }

        .store-description {
            font-size: 16px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <header class="custom-header">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <span class="potato-icon">&#129364;</span>
                    <h1 class="potato-text">Batata's Store</h1>
                    <p class="store-description">Sua loja especializada em todas as variedades de batatas!</p>
                </div>
                <div class="col-auto">
                    <nav>
                        <ul>
                            <li><a href="paginaprinc.php">Página Inicial</a></li>
                            <li><a href="cadastro.php">Cadastrar-se</a></li>
                            <li><a href="relatorio.php">relatorio</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
</body>
</html>
