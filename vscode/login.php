<?php 
include('conexao_bd.php');
$sql = 'select * from tb_usuarios';
$result = $mysqli->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página de Login</title>
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f5f5f5;
    }
    .login-container {
      margin-top: 100px;
    }
    .card {
      border: 0;
      border-radius: 10px;
      box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
    }
    .card-header {
      background-color: #dc3545; 
      color: #fff;
      border-bottom: none;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }
    .card-body {
      padding: 30px;
    }
    .form-group {
      margin-bottom: 20px;
    }
    .form-control {
      border-radius: 10px;
      border: 1px solid #000000;
    }
    .btn-primary {
      border-radius: 10px;
      background-color: #007bff; 
      border: none;
    }
    .btn-primary:hover {
      background-color: #0056b3; 
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center login-container">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4 class="text-center m-0">Página de Login</h4>
          </div>
          <div class="card-body">
            <form>
              <div class="form-group">
                <label for="username">Usuário</label>
                <input type="text" class="form-control" id="login" placeholder="Digite seu nome de usuário">
              </div>
              <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" class="form-control" id="senha" placeholder="Digite sua senha">
              </div>
              <button onclick="logar()" class="btn btn-primary btn-block">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    function logar() {
        let login = document.getElementById('login').value;
        let senha = document.getElementById('senha').value;

        window.open(`loginback.php?login=${login}&senha=${senha}`)
        
    };
</script>

</body>
</html>
