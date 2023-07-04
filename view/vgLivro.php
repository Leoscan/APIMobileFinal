<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <?php
        include_once $_SERVER['DOCUMENT_ROOT'].'\valida.php';
        require_once $_SERVER['DOCUMENT_ROOT'].'.\controller\livro.controller.php';
        require_once $_SERVER['DOCUMENT_ROOT'].'.\controller\login.controller.php';
        $pessoa = buildPessoa();
        cadastrarLeitura($pessoa->getEmail(), $livro);
    ?>
    <title><?= NOME_DO_PROJETO ?></title>
</head>
<body>
<?php  include $_SERVER['DOCUMENT_ROOT'].'/view/bINav.php'; ?>
    <h1>Informações do Livro</h1>
    
    <h2>Nome do Livro</h2>
    <p><?= $livro->getNome() ?></p>

    <h2>Descrição</h2>
    <p><?= $livro->getDescricao() ?></p>

    <h2>Autor</h2>
    <p><?= $livro->getAutor() ?></p>

    <a href="/<?= $livro->getCaminho() ?>"><button>Ler</button></a>
    <a href="/<?= $livro->getCaminho() ?>" download><button>Baixar</button></a>
</body>
</html>