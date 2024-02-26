<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
        .footer {
            background-color: #6b4423;
            color: #ffffff; 
            padding: 30px 0;
            margin-top: 30px; 
        }

        .footer h3 {
            color: #f8f9fa; 
        }

        .footer p {
            color: #f8f9fa;
        }

        .footer-bottom {
            background-color: #343a40; 
            padding: 10px 0;
        }

        .footer-bottom p {
            color: #f8f9fa;
            margin: 0; /
        }

    </style>
</head>
<body>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3>Sobre Nós</h3>
                <p>Somos uma loja especializada em batatas frescas e saborosas. Oferecemos uma variedade de produtos de alta qualidade.</p>
            </div>

            <div class="col-md-4">
                <h3>Contato</h3>
                <p><i class="fa fa-phone"></i> (XX) XXXX-XXXX</p>
                <p><i class="fa fa-envelope"></i> contato@lojadebatatas.com</p>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <p class="text-center">&copy; <?php echo date("Y"); ?> Loja de Batatas. Todos os direitos reservados.</p>
        </div>
    </div>
</footer>

</body>
</html>
