<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Batata's Store</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 60px;
            padding-bottom: 60px;
            background-color: #f8f9fa;
        }
        .footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
        }
        .register-form {
            background-color: #ffffff;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <?php include("header.php"); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="register-form">
                    <h2 class="text-center mb-4">Cadastro</h2>
                    <form id="cadastroForm" method="POST" action="cadastrobackend.php">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nome">Nome:</label>
                                <input type="text" class="form-control" id="nome" name="nome" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="cpf">CPF:</label>
                                <input type="text" class="form-control" id="cpf" name="cpf" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="data_nascimento">Data de Nascimento:</label>
                                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="telefone">Telefone:</label>
                                <input type="text" class="form-control" id="telefone" name="telefone" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="endereco">Endereço:</label>
                            <input type="text" class="form-control" id="endereco" name="endereco" required>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="num_casa">Número:</label>
                                <input type="text" class="form-control" id="num_casa" name="num_casa" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="bairro">Bairro:</label>
                                <input type="text" class="form-control" id="bairro" name="bairro" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="cidade">Cidade:</label>
                                <select class="form-control" id="cidade" name="cidade" required>
                                    <option value="">Selecione...</option>
                                    <?php
                                    include("conexao_bd.php");
                                    $query = "SELECT * FROM tb_cidades";
                                    $result = $mysqli->query($query);
                                    while ($row = $result->fetch_array()) {
                                        echo "<option value='" . $row['id'] . "'>" . $row['nome_cidade'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="estado">Estado:</label>
                                <select class="form-control" id="estado" name="estado" required>
                                    <option value="">Selecione...</option>
                                    <?php
                                    $query = "SELECT * FROM tb_estados";
                                    $result = $mysqli->query($query);
                                    while ($row = $result->fetch_array()) {
                                        echo "<option value='" . $row['id'] . "'>" . $row['nome_estado'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
        
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="login">Login:</label>
                                <input type="text" class="form-control" id="login" name="login" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="senha">Senha:</label>
                                <input type="password" class="form-control" id="senha" name="senha" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block" onclick="cadastrar()">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php') ?>
    <script>
    function cadastrar() {
        
        var nome = document.getElementById('nome').value;
        var cpf = document.getElementById('cpf').value;
        var dataNascimento = document.getElementById('data_nascimento').value;
        var telefone = document.getElementById('telefone').value;
        var endereco = document.getElementById('endereco').value;
        var numCasa = document.getElementById('num_casa').value;
        var bairro = document.getElementById('bairro').value;
        var cidade = document.getElementById('cidade').value;
        var estado = document.getElementById('estado').value;
        var login = document.getElementById('login').value; 
        var senha = document.getElementById('senha').value; 
        window.open(`cadastrobackend.php?nome=${nome}&cpf=${cpf}&data_nascimento=${dataNascimento}&telefone=${telefone}&endereco=${endereco}&num_casa=${numCasa}&bairro=${bairro}&cidade=${cidade}&estado=${estado}&login=${login}&senha=${senha}`, "_blank");
    }
</script>

</body>
</html>
