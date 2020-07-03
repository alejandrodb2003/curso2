<?php
    session_start();
    unset($_SESSION['datos_usuario']);
    echo "se ha eliminado esta session: ". session_id();
    session_destroy();
    
    
?>