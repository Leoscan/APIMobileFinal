<!DOCTYPE html>
<html>
<head>
    <title>Perfil</title>
    <?php
        require_once $_SERVER['DOCUMENT_ROOT']."/controller/login.controller.php";
        $pessoa = buildPessoa();
    ?>
    <style>
        .profile {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 20px;
            font-family: Arial, sans-serif;
        }

        .profile-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
        }

        .profile-name {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .profile-email {
            font-size: 16px;
            color: #888;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <?php  include $_SERVER['DOCUMENT_ROOT'].'/view/bINav.php'; ?>
    <div class="profile">
        <img class="profile-img" src="<?= $pessoa->getFoto() ?>" type="image/jpg"->
        <div class="profile-name"><?= $pessoa->getNome() ?></div>
        <div class="profile-email"><?= $pessoa->getEmail() ?></div>
    </div>
</body>
</html>
