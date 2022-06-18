<?php session_start();
    require 'config.php';
    require 'controllers/database.php';

    if(!isset($_SESSION['id'])){
        header('Location: login.php');
    }
    require 'views/admin_home.view.php';