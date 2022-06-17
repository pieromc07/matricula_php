<?php  session_start();
    require 'config.php';
    require 'controllers/database.php';

    if(!isset($_SESSION['id'])){
        header('Location: login.php');
    }

    $id = $_SESSION['id'];

    if(isset($_POST['matricula'])){
        $seccion = $_POST['seccion'];
        $fecha = date('Y-m-d');

        $query = "INSERT INTO matricula (alumno_id, seccion_id, fecMatricula) VALUES ('$id', '$seccion', '$fecha')";
        $result = mysqli_query($mysqli, $query);

        if($result){
            echo "<script>alert('Matricula realizada con exito');</script>";

            // ir a la pagina de inicio
            header('Location: alumno_home.php');

        }else{
            echo "<script>alert('Error al realizar la matricula');</script>";
        }

    }

    $query = "SELECT SC.id AS 'seccion_id', SC.descripcion AS 'seccion', GR.descripcion AS 'grado', GR.id AS 'grado_id' FROM seccion AS SC INNER JOIN grado AS GR ON SC.grado_id = GR.id";

    $result = mysqli_query($mysqli, $query);
    $secciones = mysqli_fetch_all($result, MYSQLI_ASSOC);






    require 'views/alumno_matricula.view.php';