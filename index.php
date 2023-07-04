<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php
        include_once 'valida.php';
        require_once '.\controller\livro.controller.php';
        require_once 'vendor/autoload.php';
        // todolist
        // 1 - Criar CRUD completo do livro
        // 2 - Possibilidade de adicionar livros pelo redis também
        // 3 - logout completo
    ?>
    <meta charset="UTF-8">
    <title><?= NOME_DO_PROJETO ?></title>
</head>
<body>
    <?php  include 'view\bINav.php'; ?>
    <h2><?= NOME_DO_PROJETO ?></h2>
    <?php 
       
        foreach (modeloLink() as $elemento) {
            echo $elemento;
        }
    ?>

</body>
</html>