<?php
    //contador de visitas
    if(!isset($_COOKIE['visitas']))
    {
        $_COOKIE['visitas']=0;
    }
    //si la cookie existe
    $contador=$_COOKIE['visitas']+1;
    setcookie('visitas',$contador, time()+120);
    if($contador>1)
    {
        echo "Hola bienvenido de vuelta, tu has visitado este sitio ".$contador." veces.";
        echo "Hola bienvenido de vuelta, tu has visitado este sitio ".$contador." veces.";
    }
    else
    {
        echo "Hola esta es tu primera vez en la página web";
    }
?>