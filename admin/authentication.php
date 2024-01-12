<?php
      session_start();
      error_reporting(0);
      include('./config/dbcon.php');

      if(!isset($_SESSION['auth'])){
            $_SESSION['message'] = " Login first to access dashboard";
            header("Location: ../accountLogin.php");
            exit(0); 

      }

?>