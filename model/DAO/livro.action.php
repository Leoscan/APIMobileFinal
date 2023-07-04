<?php

    include_once $_SERVER['DOCUMENT_ROOT']."/conf/default.inc.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/conf/Conexao.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/model/DTO/Livro.class.php";


    function salvar(){
    }

    function excluir($codigo){
    }

    function buscarID($codigo){
        $pdo = Conexao::getInstance();
        $stmt = $pdo->prepare(
            "SELECT
                l.id as id,
                l.nome as nome,
                l.descricao as descricao,
                a.nome as autor,
                l.caminho as caminho  
            FROM livros l 
            LEFT JOIN autores a 
                on l.fk_autor = a.id
            WHERE l.id = :codigo"
            );
        $stmt->bindParam(':codigo', $codigo, PDO::PARAM_INT);
        $consulta = $stmt->execute();
        foreach ($stmt->fetchAll() as $linha)
            $Livro = new Livro($linha['id'], $linha['nome'], $linha['descricao'], $linha['autor'], $linha['caminho']); 
        return $Livro;
    }

    function editar(){
    }

    function listar(){
        $pdo = Conexao::getInstance();
        $consulta = $pdo->query(
            "SELECT
                l.id as id,
                l.nome as nome,
                l.descricao as descricao,
                a.nome as autor,
                l.caminho as caminho  
            FROM livros l 
            LEFT JOIN autores a 
                on l.fk_autor = a.id");
        $livros = [];
        while ($linha = $consulta->fetch(PDO::FETCH_BOTH)){
            $Livro = new Livro($linha['id'], $linha['nome'], $linha['descricao'], $linha['autor'], $linha['caminho']);
            array_push($livros, $Livro);
        }
        return $livros;
    }

    function buscarLivroVetor($vetor){
        $pdo = Conexao::getInstance();
        $string = '';
        foreach ($vetor as $id) {
            $string .= ', ' . $id;
        }
        
        $string = substr($string, 2); 
        $consulta = $pdo->query(
            "SELECT
                l.id as id,
                l.nome as nome,
                l.descricao as descricao,
                a.nome as autor,
                l.caminho as caminho  
            FROM livros l 
            LEFT JOIN autores a 
                on l.fk_autor = a.id
            where l.id in ($string)");
        $livros = [];
        while ($linha = $consulta->fetch(PDO::FETCH_BOTH)){
            $Livro = new Livro($linha['id'], $linha['nome'], $linha['descricao'], $linha['autor'], $linha['caminho']);
            array_push($livros, $Livro);
        }
        return $livros;
    }

?>