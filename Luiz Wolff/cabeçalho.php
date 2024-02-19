<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <style>
    body{
            margin: 0;
            box-sizing:border-box ;
            padding: 0;
            background:radial-gradient(rgb(44, 42, 42),black);
    }
    header{
            background:radial-gradient(rgb(4, 4, 70), rgb(0, 250, 250));
            width: 100%;
            transition: 0.4s;
        
    }
    .container{
        max-width: 1000px;
        display:flex;
        align-items: center;
        justify-content: center; 
    }
    img{
            
            justify-content:center;
            margin:0;
            width:200px;
            height:130px;
            border-radius:40px;
            text-align:center;
    }
    .menu{
        width: 50%;
    }
    .menu nav a{
        color: white;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        text-decoration: none;
        padding-right: 30px;
        font-size: 20px;
        /* box-shadow:rgb(4, 4, 70)  10px 10px 10px 5px; */
        
        padding-left: 25px;
       
    }
    /* .menu nav a::after{
        cursor: pointer;
        content:"" ;
        width: 30px;
        height: 4px;
        background-image:red; 
        position: absolute;
       
    } */
     header:hover{
        transform: translateY(-5px) ;
        cursor: pointer;
        
    }
    .logo img{
        width: 100%;
    }
    
    select{
            color:red;
            text-decoration:transparent;

    }
    h1{
        color:rgb(4, 4, 137);
        
    }
    </style>

</head>
<body>

<header>
     
    <div class="container"> 
    <div class="logo"><img src="logo.jpg"></div>
    <div class="menu">
        <nav>
            <a href="cabeçalho.php">inicial</a>
            <a href="cadastro.php">cadastro</a>
        </nav>
    </div>
    </div>
</header>

       
    
    
</body>
</html>