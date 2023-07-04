<?php
require_once $_SERVER['DOCUMENT_ROOT']."/model/DAO/livro.action.php";
require_once $_SERVER['DOCUMENT_ROOT'].'/conf/Conexao.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

function modeloLink() {
    $vetor = [];
    foreach (listar() as $elemento) {
        echo '<a href="/view/vgLivro.php?acao=buscar&livro='.$elemento->getId().'">'.$elemento.'</a><br>';
    }
    return $vetor;
}

function cadastrarLeitura($pessoa, $livro) {
    $redis = Conexao::RedisCon();
    $redis->rpush($pessoa, $livro->getId());
}

function listaLivrosLidos($pessoa){
    $redis = Conexao::RedisCon();
    $leituras = $redis->lrange($pessoa->getEmail(), 0, -1);
    $leituras = array_unique($leituras);
    if(isset($leituras) && !empty($leituras)){
        $livorsLidos = buscarLivroVetor($leituras);
        return $livorsLidos;
    } else echo 'Você não Leu nada ainda';
}


?>