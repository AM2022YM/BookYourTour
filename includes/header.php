<?php if($_SESSION['login'])
{?>
<div class="top-header" style="background-color:darkblue;">
	<div class="container" >
		<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s" style="color:white;">
			<li class="hm"><i class="fa fa-home"></i></li>
			<!-- <li class="prnt"><a href="profile.php">My Profile</a></li> -->
            <li class="tol" >Welcome :</li>				
			<li class="sig"><?php echo htmlentities($_SESSION['login']);?></li> 
		</ul>
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
            <li class="prnt"><a href="change-password.php">Change Password</a></li>
			<li class="sigi"><a href="logout.php" >/ Logout</a></li>
        </ul>
		<div class="clearfix"></div>
	</div>
</div><?php } else {?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>BYD| Book Your Destination</title>
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
        a{
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
            <a href="#" data-toggle="modal" data-target="#myModal4">User Login</a>
            <a href="admin/index.php">Admin Login</a>
        </div>
    </div>
    <div style="height:1000vh;"></div>
    <?php include('includes/signin.php');?>			
</body>
</html>
<?php }?>
<!--- /top-header ---->
<!--- header ---->

<!--- /header ---->
<!--- footer-btm ---->
<div class="footer-btm wow fadeInLeft animated" style="background-color:darkblue;">
	<div class="container">
	<div class="navigation" >
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1" style="background-color:darkblue;">
					<nav class="cl-effect-1" >
						<ul class="nav navbar-nav">
							<li><a href="package-list.php">Home</a></li>
			                <li class="prnt"><a href="tour-history.php">My Tour History</a></li>
			                <!-- <li class="prnt"><a href="issuetickets.php">Issue Tickets</a></li> -->
								<?php if($_SESSION['login'])
{?>
								<li>Need Help?<a href="#" data-toggle="modal" data-target="#myModal3"> / Write Us </a>  </li>
								<?php } else { ?>
								<li><a href="enquiry.php"> Enquiry </a>  </li>
								<?php } ?>
								<div class="clearfix"></div>

						</ul>
					</nav>
				</div><!-- /.navbar-collapse -->	
			</nav>
		</div>
		
		<div class="clearfix"></div>
	</div>
</div>