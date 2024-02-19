<?php
include ("cabeçalho.php")
?>
<style>
    label{
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-style: normal;
        padding-left: 100px;
        color: white;
    }

    #container{
     display:grid;
     grid-template-areas:
     'grid1  grid1'
      'grid2 grid3';
     border: 5px solid red;
     grid-gap :10px;

    }
    .grid1{
        grid-area: grid1;
        
    }
    .grid2{
        grid-area: grid2;

        
    }
    .grid3{
        grid-area: grid3;
        
    }
</style>

<div id="container" >
    <div class="grid1">
        <label for="">Nome usuario:</label>
        <input type="text" placeholder="usuario"  id="">
    </div>
<br>
    <div class="grid2">
        <label for="">Endereço completo:</label>
        <input type="text" placeholder="endereço">
    </div>
<br>
<div class="grid3">
<label for="">Tipo de usuario:</label>
<input type="text" placeholder="tipousuario">
</div>