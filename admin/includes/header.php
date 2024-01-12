<?php
     if($_SESSION['auth']){
        if($_SESSION['auth_role'] != "1"){
              $_SESSION['message'] = " You are not authorised as admin";
              header("Location: ../index.php");
              exit(0);
        }
  }
?>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin_Panel</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>

<body class="sb-nav-fixed"> 

      <?php include("./includes/navbar-top.php"); ?>   

      <div id="layoutSidenav">

      <?php include("./includes/sidebar.php"); ?>

            <div id="layoutSidenav_content">
            <main>