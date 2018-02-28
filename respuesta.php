<?php
    echo "Hola ".$_GET["nombre"]." ".$_GET["apellido"];
    echo "<br/>";

    
    if (isset($_GET["OK1"])){
        echo "Boton 1".$_GET["OK1"];
    }
    else{
        echo "Boton 2".$_GET["OK2"];
    } 
    
?>