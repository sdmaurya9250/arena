<?php

session_start();

 $page=basename($_SERVER["SCRIPT_NAME"]);

 

 if($page=='qc_clearance.php' || $page=='audit_planning_rework.php' || $page=='qc_clearance_login_page.php'){

    
 }



 else{
if(empty($_SESSION["adminlogin"])) {   
    echo "<script>window.location.href='login.php';</script>";
   
  }
 }

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">

    <meta name="author" content="">



    <title>Admin</title>



    <!-- Bootstrap Core CSS -->

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    





    <!-- MetisMenu CSS -->

    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">



    <!-- Custom CSS -->

    <link href="dist/css/sb-admin-2.css" rel="stylesheet">



    <!-- Morris Charts CSS -->

    <!-- <link href="vendor/morrisjs/morris.css" rel="stylesheet"> -->



    <!-- Custom Fonts -->

    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">



     <!-- DataTables CSS -->

    <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">



    <!-- DataTables Responsive CSS -->

    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

	<!----------------jquery alert plugin---------->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">

	<!-- select2 -->

	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

	<!--  -->

    <link href="custom/css/custom.css" rel="stylesheet">



</head>