<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/conf/conf.inc.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/model/DTO/user.class.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/conf/Conexao.php';
    use Google\Client as GoogleClient;

    function login($user){
        session_start();
        $_SESSION['credential'] = $user;
        RedisCache($user);
        header("location:../../index.php");	
    }

    function RedisCache($token){
        $redis = Conexao::RedisCon();
        $client = new Google_Client(['client_id' => CLIENT_ID]);
        $payload = $client->verifyIdToken($token);
        if($payload) {
            $user = new User($payload['name'], $payload['email'], $payload['picture']); 
            $redis->set('usuario', serialize($user));
        } else echo 'erro';
        
    }

?>