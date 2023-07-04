<?php   
    include_once $_SERVER['DOCUMENT_ROOT']."/model/DAO/login.action.php";
    
    $acao = isset($_GET['acao']) ? $_GET['acao'] : "";
    if ($acao == "login"){
        if( !isset($_POST['credential']) ){
            header('location: ../login.php');
            exit;
        }
        $user = isset($_POST['credential']) ? $_POST['credential'] : "";
        login($user);
    } elseif ($acao == "logoff"){
		session_start();
		session_destroy();
		header("location:../index.php");	
	}

    function buildPessoa() {
        $redis = Conexao::RedisCon();
        $user = unserialize($redis->get('usuario'));
        return $user;
    }
?>