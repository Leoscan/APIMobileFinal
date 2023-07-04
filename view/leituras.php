<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <?php
        require_once $_SERVER['DOCUMENT_ROOT']."/controller/login.controller.php";
        require_once $_SERVER['DOCUMENT_ROOT']."/controller/livro.controller.php";
        $pessoa = buildPessoa();
    ?>
    <title>Document</title>
</head>
<body>
<?php  include $_SERVER['DOCUMENT_ROOT'].'/view/bINav.php'; ?>
<h1>Suas Leituras</h1>
    <?php
        $livros = ListaLivrosLidos($pessoa);
        if(isset($livros) && !empty($livros)){
            foreach($livros as $livro){
                echo $livro.'<br>';
            }
        }
    ?>
</body>
</html>