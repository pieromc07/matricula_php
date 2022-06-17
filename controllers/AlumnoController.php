<?php
    require 'config.php';
    require 'controllers/database.php';
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");

    echo 'dkgashgdhasgdgasd';

    if($_GET['select'] && $_GET['id']){

        // $id = $_GET['id'];

        // $query = "SELECT * FROM alumno WHERE id = '$id'";

        // $result = mysqli_query($mysqli, $query);

        // $alumno = mysqli_fetch_assoc($result);

        // echo json_encode($alumno);
    echo   json_encode(array('id' => '1', 'nombre' => 'Juan'));
        echo 'hola';
    }