<?php
    include_once $_SERVER['DOCUMENT_ROOT']."/model/DAO/livro.action.php";
    include_once $_SERVER['DOCUMENT_ROOT']."/model/BO/livro.rnegocio.php";
    $acao = "";
    switch($_SERVER['REQUEST_METHOD']) {
        case 'GET': $acao = isset($_GET['acao']) ? $_GET['acao'] : ""; break;
        case 'POST': $acao = isset($_POST['acao']) ? $_POST['acao'] : ""; break;
    }

    if ($acao == 'salvar'){
        if ($_POST['idPessoa'] == 0)
            salvar();
        else
            editar();
    }elseif ($acao == 'excluir'){
        excluir($_GET['codigo']);
    }elseif($acao == 'buscar'){
       $livro = buscarID($_GET['livro']);
    }

    
?>