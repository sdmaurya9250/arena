<?php

session_start();

session_unset();

session_destroy();   

session_write_close();

include("../config.php");
          
if(isset($_POST['submit']))

{       

    if ($_POST['name'] === 'Skycode' && $_POST['password'] === '12345'){

        $_SESSION["adminlogin"]=session_start();

        header('Location:index.php');die();

    }

    else{

        echo "<script>alert('Invalid Password')</script>";

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



    <!-- Custom Fonts -->

    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

   

    <style type="text/css">

    body {

        background-color: #2B3252;

    }



.login-box {

    margin-top: 75px;

    height: auto;

    background: #1A2226;

    text-align: center;

    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);

}



.login-key {

    height: 100px;

    font-size: 80px;

    line-height: 100px;

    background: -webkit-linear-gradient(#27EF9F, #0DB8DE);

    -webkit-background-clip: text;

    -webkit-text-fill-color: transparent;

}



.login-title {

    margin-top: 15px;

    text-align: center;

    font-size: 30px;

    letter-spacing: 2px;

    margin-top: 15px;

    font-weight: bold;

    color: #ECF0F5;

}



.login-form {

    margin-top: 25px;

    text-align: left;

}



input[type=text] {

    background-color: #1A2226;

    border: none;

    border-bottom: 2px solid #0DB8DE;

    border-top: 0px;

    border-radius: 0px;

    font-weight: bold;

    outline: 0;

    margin-bottom: 20px;

    padding-left: 0px;

    color: #ECF0F5;

}



input[type=password] {

    background-color: #1A2226;

    border: none;

    border-bottom: 2px solid #0DB8DE;

    border-top: 0px;

    border-radius: 0px;

    font-weight: bold;

    outline: 0;

    padding-left: 0px;

    margin-bottom: 20px;

    color: #ECF0F5;

}



.form-group {

    margin-bottom: 40px;

    outline: 0px;

}



.form-control:focus {

    border-color: inherit;

    -webkit-box-shadow: none;

    box-shadow: none;

    border-bottom: 2px solid #0DB8DE;

    outline: 0;

    background-color: #1A2226;

    color: #ECF0F5;

}



input:focus {

    outline: none;

    box-shadow: 0 0 0;

}



label {

    margin-bottom: 0px;

}



.form-control-label {

    font-size: 10px;

    color: #6C6C6C;

    font-weight: bold;

    letter-spacing: 1px;

}



.btn-outline-primary {

    border-color: white;

    color: #2B3252;

    border-radius: 0px;

    font-weight: bold;

    letter-spacing: 1px;

    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);

}



.btn-outline-primary:hover {

    background-color: #2B3252;

    color: white;

    right: 0px;

}



.login-btm {

    float: left;

}



.login-button {

    padding-right: 0px;

    text-align: right;

    margin-bottom: 25px;

}



.login-text {

    text-align: left;

    padding-left: 0px;

    color: #A2A4A4;

}



.loginbttm {

    padding: 0px;

}



    </style>



</head>



<body>



                    



    <div class="container">

        <div class="row">

            <div class="col-lg-3 col-md-2"></div>

            <div class="col-lg-6 col-md-8 login-box">

                <div class="col-lg-12 login-key">

                    <!-- <img src="../assets/image/brand-new.jpg" style="color:white;float:right;" >                 -->
                </div>

                <div class="col-lg-12 login-title">

                    ADMIN PANEL

                </div>



                <div class="col-lg-12 login-form">

                    <div class="col-lg-12 login-form">

                        <form method="post">

                            <div class="form-group">

                                <label class="form-control-label">USERNAME</label>

                                <input type="text" class="form-control" name="name" >

                            </div>

                            <div class="form-group">

                                <label class="form-control-label">PASSWORD</label>

                                <input type="password" class="form-control" name="password" i>

                            </div>



                            <div class="col-lg-12 loginbttm">

                                <div class="col-lg-6 login-btm login-text">

                                    <!-- Error Message -->

                                </div>

                                <div class="col-lg-6 login-btm login-button">

                                    <button type="submit" name="submit" class="btn btn-outline-primary">LOGIN</button>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

                <div class="col-lg-3 col-md-2"></div>

            </div>

        </div>











    <!-- jQuery -->

    <script src="vendor/jquery/jquery.min.js"></script>



    <!-- Bootstrap Core JavaScript -->

    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>



    <!-- Metis Menu Plugin JavaScript -->

    <script src="vendor/metisMenu/metisMenu.min.js"></script>



    <!-- Custom Theme JavaScript -->

    <script src="dist/js/sb-admin-2.js"></script>



</body>



</html>

