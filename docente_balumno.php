<?php  session_start();
    require 'config.php';
    require 'controllers/database.php';

    if(!isset($_SESSION['id'])){
        header('Location: login.php');
    }

    if(isset($_GET['grado']) && isset($_GET['seccion'])){
        $grado = $_GET['grado'];
        $seccion = $_GET['seccion'];
        $curso = $_GET['curso'];
        

        
        $query = "SELECT  A.id, A.apellidoPaterno, A.apellidoMaterno, A.nombre, M.id AS 'matricula_id' FROM alumno AS A 
        INNER JOIN matricula AS M ON A.id = M.alumno_id
        INNER JOIN seccion AS SC ON M.seccion_id = SC.id
        WHERE SC.id = '$seccion'";

        $result = mysqli_query($mysqli, $query);
        $alumnos = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }



    require 'views/docente_balumno.view.php';