<?php  session_start();
    require 'config.php';
    require 'controllers/database.php';

    if(!isset($_SESSION['id'])){
        header('Location: login.php');
    }

    $id = $_SESSION['id'];

    $query = "SELECT D.id, D.nombre, D.apellidoPaterno, D.apellidoMaterno, D.correoElectronico, D.contacto,C.nombre AS 'curso', C.id AS 'curso_id'FROM alumno AS A
    INNER JOIN matricula AS M ON A.id = M.alumno_id
    INNER JOIN detalle_matricula AS DM ON M.id = DM.matricula_id
    INNER JOIN curso AS C ON DM.curso_id = C.id
    INNER JOIN docente AS D ON C.docente_id = D.id
    WHERE A.id = $id";

    $result = mysqli_query($mysqli, $query);
    $cursos = mysqli_fetch_all($result, MYSQLI_ASSOC);

    $docentes = array();
    $idCursos = array();
    foreach ($cursos as $curso){
        if(!in_array($curso['id'], $idCursos)){
            
            array_push($docentes,
                [
                'id' => $curso['id'],
                'nombre' => $curso['nombre'],
                'apellidoPaterno' => $curso['apellidoPaterno'],
                'apellidoMaterno' => $curso['apellidoMaterno'],
                'correoElectronico' => $curso['correoElectronico'],
                'contacto' => $curso['contacto'],
                'curso' => $curso['curso'],
                'curso_id' => $curso['curso_id']
                ]
            );
        }
        array_push($idCursos, $curso['curso_id']);
    }

    // print_r($docentes);

    require 'views/docente_lista.view.php';