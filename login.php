<?php 
    session_start();
    require 'config.php';
    require 'controllers/database.php';
   
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $correo = $_POST['correo'];
        $contraseña = $_POST['contraseña'];
        $query = "SELECT * FROM usuario WHERE correoElectronico = '$correo' AND contraseña = '$contraseña'";
        $result = mysqli_query($mysqli, $query);
        $tipo="aaa";
        $usuario_id;
        if(mysqli_num_rows($result) == 1){
            // obtener tipo de usuario
            $row = mysqli_fetch_array($result);
            $tipo = $row['tipo'];
            $usuario_id = $row['id'];
        }
        echo 'Tipo ' . $tipo;
        if($tipo == 'administrador'){
            // crear sesions
            $_SESSION['id'] = $usuario_id;
            $_SESSION['tipo'] = $tipo;
            header('Location: admin_home.php');
        }else if( $tipo == 'alumno'){
            // crear sesions
            $query = "SELECT * FROM alumno WHERE usuario_id = '$usuario_id'";
            $result = mysqli_query($mysqli, $query);
            $row = mysqli_fetch_array($result);
            $_SESSION['id'] = $row['id'];
            $_SESSION['tipo'] = $tipo;
            header('Location: alumno_home.php');
        }else if( $tipo == 'docente'){
            // crear sesions
            $query = "SELECT * FROM docente WHERE usuario_id = '$usuario_id'";
            $result = mysqli_query($mysqli, $query);
            $row = mysqli_fetch_array($result);
            $_SESSION['id'] = $row['id'];
            $_SESSION['tipo'] = $tipo;
            header('Location: docente_home.php');
        }else {
            echo '<script>alert("Usuario o contraseña incorrectos")</script>';
        }
    }
    
    require 'views/login.view.php';
?>

    