<?php
    session_start(); 
    include '../inc/config.php';

    if(empty(@$_SESSION['login'] || @$_SESSION['username']  ))
    {
        echo "<script>alert('Anda harus login')</script>";
        echo "<script>window.location='login.php'</script>";
    }
 ?>
<!DOCTYPE html>
<html>
<head>
        <title>
            Halaman | Administrator
       </title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
        Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Asus, SonyEricsson, Motorola web design">
    <link media="all" type="text/css" rel="stylesheet" href="../aktiva/css/bootstrap.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="../aktiva/css/agency.css">
    <link media="all" type="text/css" rel="stylesheet" href="../aktiva/font-awesome/css/font-awesome.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="../aktiva/css/sb-admin.css">
    <link media="all" type="text/css" rel="stylesheet" href="../aktiva/css/plugin/morris.css">
    <link media="all" type="text/css" rel="stylesheet" href="../aktiva/css/costume.dashboard.css">
    <link rel="shortcut icon" href="../aktiva/img/logo-canting.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

</head>
<body>
<div id="wrapper">
<!-- Header -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <?php 
                include('includes/header.php');
             ?>
             <?php 
                include('includes/sidebar.php');
              ?>
        </nav>
<!-- Akhir Naff -->
        <div id="page-wrapper">
                <?php 
                    include('content.php');
                 ?>
        </div>
				
</div>     
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="../aktiva/js/jquery.js"></script>
<script src="../aktiva/js/bootstrap.min.js"></script>
<script src="../aktiva/js/jquery.easing.min.js"></script>
<script src="../aktiva/js/jquery.fittext.js"></script>
<script src="../aktiva/js/wow.min.js"></script>
<script src="../aktiva/js/modalku.js"></script>
<script src="..aktiva/js/creative.js"></script>

</body>
</html>
