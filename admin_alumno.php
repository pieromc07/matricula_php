<?php session_start();
    require 'config.php';
    require 'controllers/database.php';

    if(!isset($_SESSION['id'])){
        header('Location: login.php');
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nombre = $_POST['nombre'];
        $apepaterno = $_POST['apepaterno'];
        $apematerno = $_POST['apematerno'];
        $fechanacimiento = $_POST['fechanacimiento'];
        $dni = $_POST['dni'];
        $genero = $_POST['genero'];
        $correo = $_POST['correo'];
        $distrito = $_POST['distrito'];
        $direccion = $_POST['direccion'];
        $contacto = $_POST['contacto'];

        $query = "INSERT INTO USUARIO(correoElectronico, contraseña, tipo) VALUES ('$correo', '$dni', 'docente')";

        $result = mysqli_query($mysqli, $query);

        $query = "SELECT id FROM USUARIO WHERE correoElectronico = '$correo' and contraseña = '$dni'";

        $result = mysqli_query($mysqli, $query);

        $row = mysqli_fetch_array($result);

        $id = $row['id'];

        $query = "INSERT INTO alumno(nombre, apellidoPaterno, apellidoMaterno, correoElectronico, contacto, genero, direccion, fechaNacimiento, dni, usuario_id) VALUES ('$nombre', '$apepaterno', '$apematerno', '$correo', '$contacto', '$genero', '$direccion', '$fechanacimiento', '$dni', '$id')";

        $result = mysqli_query($mysqli, $query);

        if($result){
            echo '<script>alert("Registro exitoso")</script>';
            header('Location: admin_alumno.php');

        }else{
            echo '<script>alert("Error al registrar")</script>';
        }
    }
    require 'views/admin_alumno.view.php';