<?php session_start(); 
    require 'config.php';
    require 'controllers/database.php';

    // verificar si existe session
    if(!isset($_SESSION['id'])){
        header('Location: login.php');
    }

    $id = $_SESSION['id'];

    $query = "SELECT C.id, C.nombre, C.grado_id, C.docente_id , DM.nota1, DM.nota2, DM.nota3, DM.exmen FROM alumno AS A
    INNER JOIN matricula AS M ON A.id = M.alumno_id
    INNER JOIN detalle_matricula AS DM ON M.id = DM.matricula_id
    INNER JOIN curso AS C ON DM.curso_id = C.id
    WHERE A.id = '$id'";

    $result = mysqli_query($mysqli, $query);
    $cursos = mysqli_fetch_all($result, MYSQLI_ASSOC);



    require 'views/alumno_notas.view.php';