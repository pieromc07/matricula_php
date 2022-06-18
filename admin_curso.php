<?php   session_start();
    require 'config.php';
    require 'controllers/database.php';

    if(!isset($_SESSION['id'])){
        header('Location: login.php');
    }
    // seleccionar grados
    $query = "SELECT * FROM grado";

    $result = mysqli_query($mysqli, $query);
    $grados = array();
    while($row = mysqli_fetch_array($result)){
        array_push($grados, $row);
    }

    // seleccionar docentes
    $query = "SELECT * FROM docente";
    $result = mysqli_query($mysqli, $query);
    $docentes = array();
    while($row = mysqli_fetch_array($result)){
        array_push($docentes, $row);
    }
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $curso = $_POST['curso'];
        $grado = $_POST['grado'];
        $docente = $_POST['docente'];
        $query = "INSERT INTO curso (nombre, grado_id, docente_id) VALUES ('$curso', '$grado', '$docente')";
        $result = mysqli_query($mysqli, $query);
        if($result){
            echo '<script>alert("Curso registrado con exito")</script>';
            header('Location: admin_curso.php');
        }else{
            echo '<script>alert("Error al registrar curso")</script>';
        }
    }

    

    require 'views/admin_curso.view.php';