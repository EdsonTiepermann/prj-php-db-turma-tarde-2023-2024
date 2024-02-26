<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    .container{
            background:radial-gradient(rgb(4, 4, 70), rgb(0, 250, 250));
            color: white;
            position: absolute;
            text-align: left;
            bottom: 0;
            width: 100%;
            height: 200px;
            font-family:Verdana, Geneva, Tahoma, sans-serif;  
            font-size: 20px;  
            align-items: left;  
}
   .container > img{
    display:grid;
     grid-template-areas:
     'grid1 grid2 grid2';
     grid-gap :10px;
     margin:0;
    width:300px;
    height:200px;
    border-radius:40px;
        ;
}
.grid2{
    color: red;
    grid-area: 'grid2';
    text-align: center;
}

</style>
</head>
<body>
    <div class="container">
        
    <img src="logo.jpg" class="grid1">
    <div class="grid2">© 2024 Company, Inc</div>
    </div>
            
    
    </footer>
    
</body>
</html>