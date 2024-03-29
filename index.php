<?php

$servicos = [];

$servicos[0] = ["imagem"=>"images/card-producao-sites01.png", "titulo"=>"Sites personalizados", "descricao"=>"Criamos o seu site do zero. Desconto de 10% no pagamento à vista."];
$servicos[1] = ["imagem"=>"images/card-loja-virtual01.jpg", "titulo"=>"Loja Virtual", "descricao"=>"A sua loja virtual no seu computador. Desconto de 30% no plano anual!"];
$servicos[2] = ["imagem"=>"images/card-blog01.png", "titulo"=>"Blog", "descricao"=>"Aprenda a fazer um Blog de forma fácil e simples."];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <!-- Just an image -->
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="images/logo.png" width="450" height="90" alt="">
            </a>

            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Serviços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sobre-nos.php">Sobre nós</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Contato</a>
                </li>
            </ul>

        </nav>
    </header>

    <section id="banner">
        <h2>Compre nossos produtos!</h2>
    </section>

    <?php foreach($servicos as $servico) { ?>

    <section id="servico" class="container mt-5">
        <div class="row">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src=<?php echo $servico["imagem"]; ?> class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $servico["titulo"]; ?>
                        </h5>
                        <p class="card-text">
                            <?php echo $servico["descricao"]; ?>
                        </p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php } ?>
</body>

</html>