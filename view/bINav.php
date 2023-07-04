<style>
        /* Estilos para a barra de navegação */
        ul.navbar {
            list-style-type: none;
            margin: 0;
            padding: 0;
            background-color: #f1f1f1;
            overflow: hidden;
        }

        ul.navbar li {
            float: left;
        }

        ul.navbar li a {
            display: block;
            color: #333;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        ul.navbar li a:hover {
            background-color: #ddd;
        }
    </style>
<nav>
    <ul class="navbar">
        <li><a href="/index.php">Home</a></li>
        <li><a href="/view/leituras.php">Minhas Leituras</a></li>
        <li><a href="/view/perfil.php">Meu Perfil</a></li>
        <li><a href="/controller/login.controller.php?acao=logoff">Logoff</a></li>
    </ul>
</nav>