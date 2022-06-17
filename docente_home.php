 <?php  session_start();
   require 'config.php';

  // verificar si existe session
   if(!isset($_SESSION['id'])){
      header('Location: login.php');
   }

   require 'views/docente_home.view.php';

   
