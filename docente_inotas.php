<?php session_start();
    require 'config.php';
    require 'controllers/database.php';

    if(!isset($_SESSION['id'])){
        header('Location: login.php');
    }
    $matricula = $_GET['matricula'];
    $curso = $_GET['curso'];

    if(isset($_POST['Registrar'])){
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];
        $exmen = $_POST['exfinal'];
       
        $query = "UPDATE detalle_matricula SET nota1 = '$nota1', nota2 = '$nota2', nota3 = '$nota3', exmen = '$exmen' WHERE matricula_id = '$matricula' AND curso_id = '$curso'";

        $result = mysqli_query($mysqli, $query);
        if(!$result){
            // alerta
            echo '<script>alert("Error al actualizar")</script>';
        }else{
            // alerta
            echo '<script>alert("Actualizado")</script>';
        }


    }


    $query = "SELECT DM.nota1, DM.nota2, DM.nota3, DM.exmen FROM detalle_matricula AS DM
    INNER JOIN matricula AS M ON DM.matricula_id = M.id
    WHERE M.id = '$matricula' AND DM.curso_id = '$curso'";

    $result = mysqli_query($mysqli, $query);
    $detalle = mysqli_fetch_assoc($result);

    

    require 'views/docente_inotas.view.php';