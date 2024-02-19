<?php include('conexao.php')

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

  


    <form>   
        
        <h1>cadastre se aqui</h1>
        <p>
          nome de Usuario      
           <input type="text" name="nomeUsuario" id="nomeUsuario" > 
        </p>
        
        <p>
            endereço completo
            <input type="text" name="endereço" id="Endereco">
        </p>

            <button onclick="verificarLogin()"> logar </button>
        
    </form>

    

</body>

<script>
    function ()verificarLogin

    let nomeUsuario = Document.GetElementById("nomeUsuario");
    let Endereco = Document.GetElementById("Endereco");

    window.open(`pgInicial.php?nomeUsuario{nomeUsuario}`)
</script>
</html>