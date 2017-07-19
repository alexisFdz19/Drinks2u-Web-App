<?php
    $mysqli=new mysqli("d2udb.c1il6epjzv07.us-west-2.rds.amazonaws.com","admin","vuelvejafet1","drinks2u");
    if(mysqli_connect_errno()){
        echo 'Conexion Fallida: ', mysqli_connect_errno();
        exit();
    }
?>