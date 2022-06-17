<?php  session_start(); 
    require 'config.php';
    require 'controllers/database.php';

    // verificar si existe session
    if(!isset($_SESSION['id'])){
        header('Location: login.php');
    }

    $docente_id = $_SESSION['id'];

   $query = "SELECT GR.descripcion AS 'grado', SC.descripcion AS 'seccion', C.nombre AS 'curso', C.id AS 'curso_id', SC.id AS 'seccion_id', GR.id AS 'grado_id' FROM seccion AS SC
   INNER JOIN grado AS GR ON SC.grado_id = GR.id
   INNER JOIN curso AS C ON SC.grado_id = C.grado_id
   INNER JOIN docente AS D ON C.docente_id = D.id
   WHERE D.id = '$docente_id'";
    $result = mysqli_query($mysqli, $query);
    // recorrer resultado
    $secciones = array();
    while($row = mysqli_fetch_array($result)){
        array_push($secciones, [ 
            'grado' => $row['grado'],
            'grado_id' => $row['grado_id'],
            'seccion' => $row['seccion'],
            'seccion_id' => $row['seccion_id'],
            'curso_id' => $row['curso_id'],
            'curso' => $row['curso']
        ]);
    }
    require 'views/docente_alumno.view.php';
    
?>