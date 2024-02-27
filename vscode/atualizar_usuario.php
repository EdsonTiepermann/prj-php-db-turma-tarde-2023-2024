<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Usuário - Batata's Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
    </style>
</head>
<body>
    <?php include("header.php"); ?>
    <div class="container">
        <h2 class="my-4">Atualizar Usuário</h2>
        <form action="processar_atualizacao.php" method="POST">
            <div class="mb-3">
                <label for="nome_usuario" class="form-label">Nome do Usuário</label>
                <input type="text" class="form-control" id="nome_usuario" name="nome_usuario">
            </div>
            <div class="mb-3">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf">
            </div>
            <div class="mb-3">
                <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento">
            </div>
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone">
            </div>
            <div class="mb-3">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco">
            </div>
            <div class="mb-3">
                <label for="num_casa" class="form-label">Número da Casa</label>
                <input type="text" class="form-control" id="num_casa" name="num_casa">
            </div>
            <div class="mb-3">
                <label for="bairro" class="form-label">Bairro</label>
                <input type="text" class="form-control" id="bairro" name="bairro">
            </div>
            <div class="mb-3">
                <label for="fk_id_tb_cidades" class="form-label">ID da Cidade</label>
                <input type="text" class="form-control" id="fk_id_tb_cidades" name="fk_id_tb_cidades">
            </div>
            <div class="mb-3">
                <label for="tipo_usuario" class="form-label">Tipo de Usuário</label>
                <input type="text" class="form-control" id="tipo_usuario" name="tipo_usuario">
            </div>
            <div class="mb-3">
                <label for="login" class="form-label">Login</label>
                <input type="text" class="form-control" id="login" name="login">
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha">
            </div>
            <button type="submit" class="btn btn-primary" onclick="enviarDados()">Atualizar</button>
        </form>
    </div>
    <?php include('footer.php') ?>
    <script>
    function enviarDados() {
       
        var nome_usuario = document.getElementById("nome_usuario").value;
        var cpf = document.getElementById("cpf").value;
        var data_nascimento = document.getElementById("data_nascimento").value;
        var telefone = document.getElementById("telefone").value;
        var endereco = document.getElementById("endereco").value;
        var num_casa = document.getElementById("num_casa").value;
        var bairro = document.getElementById("bairro").value;
        var fk_id_tb_cidades = document.getElementById("fk_id_tb_cidades").value;
        var tipo_usuario = document.getElementById("tipo_usuario").value;
        var login = document.getElementById("login").value;
        var senha = document.getElementById("senha").value;

        window.open(`atualizarbackend.php?nome_usuario=${nome_usuario}&cpf=${cpf}&data_nascimento=${data_nascimento}&telefone=${telefone}&endereco=${endereco}&num_casa=${num_casa}&bairro=${bairro}&fk_id_tb_cidades=${fk_id_tb_cidades}&tipo_usuario=${tipo_usuario}&login=${login}&senha=${senha}`, "_blank");
    }
</script>
</body>
</html>
