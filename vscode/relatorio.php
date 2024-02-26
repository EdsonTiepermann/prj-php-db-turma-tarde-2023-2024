<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Usuários - Batata's Store</title>
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
        <h2 class="my-4">Relatório de Usuários</h2>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome do Usuário</th>
                    <th>CPF</th>
                    <th>Data de Nascimento</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th>Número</th>
                    <th>Bairro</th>
                    <th>ID da Cidade</th>
                    <th>Tipo de Usuário</th>
                    <th>Login</th>
                    <th>Senha</th>
                    <th>Ativo</th>
                    <th>Data de Criação</th>
                    <th>Data de Desativação</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("conexao_bd.php");
                $query = "SELECT * FROM tb_usuarios";
                $result = $mysqli->query($query);
                foreach ($result as $row) {
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['nome_usuario']."</td>";
                    echo "<td>".$row['cpf']."</td>";
                    echo "<td>".$row['data_nascimento']."</td>";
                    echo "<td>".$row['telefone']."</td>";
                    echo "<td>".$row['endereço']."</td>";
                    echo "<td>".$row['num_casa']."</td>";
                    echo "<td>".$row['bairro']."</td>";
                    echo "<td>".$row['fk_id_tb_cidades']."</td>";
                    echo "<td>".$row['tipo_usuario']."</td>";
                    echo "<td>".$row['login']."</td>";
                    echo "<td>".$row['senha']."</td>";
                    echo "<td>".$row['ativo']."</td>";
                    echo "<td>".$row['created_at']."</td>";
                    echo "<td>".$row['disabled_at']."</td>";
                    echo "<td>";
                    echo "<a href='inativar_usuario.php?id=".$row['id']."' class='btn btn-danger'>Inativar</a>";
                    echo "<a href='atualizar_usuario.php?id=".$row['id']."' class='btn btn-primary'>Atualizar</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <?php include('footer.php') ?>
</body>
</html>
