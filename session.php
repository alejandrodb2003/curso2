<?php
    session_start();
    $_SESSION['datos_usuario']=$_POST['usuario'];
var_dump($_SESSION);
?>