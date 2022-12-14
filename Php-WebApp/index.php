<?php

    require './config.php';
    include './src/Artigos.php';
    $artigo = new Artigo($mysql);
    $artigos = $artigo->exibirTodos();

?>

<html lang="pt-br">

<head>
    <title>Meu Blog</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div id="container">
        <h1>Meu Blog</h1>
        <?php foreach ($artigos as $artigo) :?>
        <h2>
            <a href="./Artigo.php?id=<?php echo $artigo['id']?>">
                <?php echo $artigo['titulo']; ?>
            </a>
        </h2>
        <p>
            <?php echo nl2br($artigo['conteudo']); ?>
        </p>
        <?php endforeach ?>
    </div>
</body>

</html>