<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<form>
  <div class="mb-3">
    <label  class="form-label">Login</label>
    <input type="text" class="form-control" id="login">
  </div>
  <div class="mb-3">
    <label  class="form-label">Senha</label>
    <input type="password" class="form-control" id="senha">
  </div>
  
  <button class="btn btn-primary" onclick="log()" >Sobmit</button>
</form>

<script>
    function log() {
        let login = document.getElementById('login').value;
        let senha = document.getElementById('senha').value;

        window.open(`loginback.php?login1=${login}&login2=${senha}`)
        
    }
</script>

    
</body>
</html>