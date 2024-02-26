<?php
include ("cabeçalho.php");
?>
<style>
    /* label{
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-style: normal;
        padding-left: 100px;
        color: white;
    }
    #i1{
        padding-right: 100px;

    }

    #container{
     display:grid;
     grid-template-areas:
     'grid1  grid1'
      'grid2 grid3';
     border: 5px solid blue;
     grid-gap :10px;

    }
    .grid1{
        grid-area: grid1;
        padding-right: 10px;
        
    }
    .grid2{
        grid-area: grid2;

        
    }
    .grid3{
        grid-area: grid3;
        
    } */
</style>

<div id="container" >
    <div class="grid1">
        <label for="">Nome</label>
        <input type="text" placeholder="usuario"  id="nome">
    </div>
<br>
    <div class="grid2">
        <label for="">cpf</label>
        <input type="text" placeholder="endereço" id="cpf">
    </div>
<br>
    <div class="grid3">
        <label for="">nascimento</label>
        <input type="text" placeholder="tipousuario" id="nasci">
    </div>
    <label for="">telefone</label>
        <input type="text" placeholder="tipousuario" id="telefone">
    <br>
    <label for="">Endereço</label>
        <input type="text" placeholder="tipousuario" id="endereço">
        <br>
    <label for="">Num casa</label>
        <input type="text" placeholder="tipousuario" id="num">
        <br>
    <label for="">IDcidades</label>
        <input type="text" placeholder="tipousuario" id="idcidade">
        <br>
    <label for="">tipousuario</label>
        <input type="text" placeholder="tipousuario" id="tipo">
        <br>
    <label for="">login</label>
        <input type="text" placeholder="tipousuario" id="login">
        <br>
    <label for="">senha</label>
        <input type="text" placeholder="tipousuario" id="senha">
        <br>
    <label for="">ativo</label>
        <input type="text" placeholder="tipousuario" id="ativo">
        <br>
    <label for="">bairro</label>
        <input type="text" placeholder="tipousuario" id="bairro">
        
        
    <button onclick="cadastro()">enviar</button>

<script>
    function cadastro() {
        let usuario = document.getElementById('nome').value
        let cpf = document.getElementById('cpf').value
        let nascimento = document.getElementById('nasci').value
        let telefone = document.getElementById('telefone').value
        let endereço = document.getElementById('endereço').value
        let casa = document.getElementById('num').value
        let idcidade= document.getElementById('idcidade').value
        let tipousuario = document.getElementById('tipo').value
        let login = document.getElementById('login').value
        let senha =  document.getElementById('senha').value
        let ativo = document.getElementById('ativo').value
        let bairro = document.getElementById('bairro').value


        window.open(`recebecadastroback.php?usuario=${usuario}&cpf=${cpf}&nasci=${nascimento}&telefone=${telefone}&endereço=${endereço}&casa=${casa}&idcidade=${idcidade}
        &tipo=${tipousuario}&login=${login}&senha=${senha}&ativo=${ativo}&bairro=${bairro}`)
        
    }
</script>