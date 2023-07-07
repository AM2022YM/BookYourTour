<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>BYD | Book Your Destination</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Custom Theme files -->
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--animate-->
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
    <!--//end-animate-->
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        .container1{
            background: rgba(0, 0, 0, 0.2) url('images/3.jpg') center/cover;
            background-blend-mode: darken;
            height: 100vh;
            width: 100%;
            background-blend-mode: darken;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
        }
        .box{
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            width: 100%;
            margin-bottom: 20vh;
        }
        .a1{
            text-decoration: none;
            border: 2px solid black;
            font-size: 1.5rem;
            background-color: white;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            padding: 10px;
            border-radius: 4px;
            font-weight: bold;
            color: blue;
        }
        .head1{
            color: rgb(230, 207, 79);
            font-size: 4rem;
            font-family: 'Courier New', Courier, monospace;
            text-align: center;
            text-shadow: 4px 4px 4px white;
            margin-top: auto;
        }
        .container1 p{
            color: white;
            font-size: 2rem;
            width: 80%;
            margin: auto;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <div class="container1">
        <h1 class="head1">WELCOME TO BOOK YOUR TOUR</h1>
        <p>Here you can choose your destination and book your destination at lower price and high facility, 
           Before that you need to register yourself and then login to view our website!
        </p>
        <div class="box">
            <a href="#" data-toggle="modal" data-target="#myModal4" class="a1" style="background-color:white;">User Login</a>
            <a href="admin/index.php" class="a1">Admin Login</a>
        </div>
    </div>
    <?php include('includes/signin.php');?>			
</body>
</html>