<!doctype HTML>
<html>
<head>
<title>Tasty Cake Shopee</title>
<meta name="viewport" content="width=device-width,initial-scale=1" />
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="style.css">

<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>

<style>
.jumbotron
{
background-image:url("Images/title1.jpg");
background-repeat: no-repeat;
background-position:center;
}
body
{
background-image:url("Images/membg.jpg");
background-repeat: no-repeat;
background-attachment: fixed;
background-position: center;
}
h1
{
font-family:Comic Sans MS;
font-size:50px;
color:maroon;
}

</style>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3">
<img src="Images/logo1.jpg" height="350" width="350" class="img-responsive img-thumbnail" />
</div>
<div class="col-lg-9 col-md-9 col-sm-9 jumbotron">
<h1 class="page-header" align="center">Tasty Cake Shopee</h1>
<h6 class="page header" align="right">A Little Bliss In Every Bite</h6>
</div>
</div>
<marquee style="background-color:red;color:white;">We only accept orders between 9.30 am to 9.00 pm. Contact for more details Mob.no.-+919876543210.</marquee>
<ul class="navi"> 
             <li><a href="home.php">Home</a></li>
             <li><a href="typesofcake.html">Types Of Cakes</a></li>	
             <li><a href="aboutus.html">About Me</a></li>
			 <li><a href="mem.php">Get Membership</a></li>
	 </ul>
<br><br><br>

<div class="row">
<h1 align="center">Membership Form for Tasty Cake Shopee</h1><br><br><br> 
<form class="form-horizontal" method="POST" action="">
<label>First Name:</label>
<input type="text" name="fname" placeholder="Enter First Name" required class="form-control" />
<label>Email:</label>
<input type="email" name="mail" placeholder="Enter Email" class="form-control" />
<label>DOB:</label>
<input type="date" name="dob" class="form-control" />
<label>Login Id</label>
<input type="text" name="lid" placeholder="Enter Login ID" class="form-control" />
<label>Password</label>
<input type="password" name="pass" class="form-control"/><br>
<input type="submit" name="submit" class="btn btn-success" />
<input type="reset" class="btn btn-danger" />

</div>
</div>
</body>
</html>

<?php
include "dbconnect.php";
if (isset($_POST['submit'])) 
{
		$name=$_POST['fname'];
		$emailforsignup=$_POST['mail'];
		$password=$_POST['pass'];
		$loginid=$_POST['lid'];
		$dob=$_POST['dob'];

		$sql2="INSERT INTO `users2` (`Name`, `emailid`,`dob`,`loginid`,`password`) VALUES ('$name','$emailforsignup','dob','$loginid','$password')";	

		$result=mysqli_query($conn,$sql2);
		if (!$result) 
		{
			die(mysqli_error($conn));
		}
		else
		{
			echo "Successful";
		}
}

?>
