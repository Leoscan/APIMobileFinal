<?php
    session_start();
  	if (!isset($_SESSION['credential']))
  		header("location:login.php?msg=1");
?>