<?php


    // Database connection
    $DB_HOST = 'localhost';
    $DB_USER = 'root';
    $DB_PASS = '123456';
    $DB_NAME = 'bd_matricula';
    $mysqli = new mysqli($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);
    if(mysqli_connect_errno()){
        echo 'Conexion Fallida : ', mysqli_connect_error();
        exit();
    }
?>