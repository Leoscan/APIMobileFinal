<html>
  <head>
    <?php
        require_once '.\conf\conf.inc.php';
        $msg = isset($_GET['msg']) ? $_GET['msg'] : '';
    ?>
  </head>
  <body>
    <?php 
        if ($msg == 1) echo '
        <div class="row alert alert-warning" role="alert">
            Necessario fazer login.
        </div>
        '    
    ?>
      <script src="https://accounts.google.com/gsi/client" async defer></script>
      <div id="g_id_onload"
         data-client_id=<?= CLIENT_ID ?>
         data-login_uri="http://localhost/controller/login.controller.php?acao=login"
         data-auto_prompt="false">
      </div>
      <div class="g_id_signin"
         data-type="standard"
         data-size="large"
         data-theme="outline"
         data-text="sign_in_with"
         data-shape="rectangular"
         data-logo_alignment="left">
      </div>
  </body>
</html>