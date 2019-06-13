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
background-image:url("Images/bg.jpg");
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
.carousel-item img {
  width: auto;
  height: 225px;
  max-height: 225px;
  border:solid lightgreen 8px;
  border-radius: 20px 0px 20px 0px;	
  }
</style>

<script>
function ad()
{
		var pass1=document.getElementById('passwd');
		var chk1=document.getElementById('chk');
		
		if(chk1.checked)
		{
			pass1.type="text"
		}
		else
		{
			pass1.type="password"
		}
}
</script>


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
             <li><a href="typesofcake.html">Types Of Cakes</a>
				
			 </li>	
             <li><a href="aboutus.html">About Me</a></li>
			 <li><a href="mem.php">Get Membership</a></li>
	 </ul>
	 
<br><br><br>
<div class="row">
<div class="col-md-4">
<p class="text-justify" style="font-family:Cooper Black;"><br><br>Tasty is a premium cake & pastry shop in Aurangabad. Mr. Sarjil Tikki, the Le Cordon Bleu trained chef has built the brand on two basic principles - quality and the customer.
Tasty aims to serve the most creative and mouth-watering cakes, to help make your celebration even more special!
Tasty specializes in customized wedding cakes, anniversary cakes, engagement cakes, kids birthday cakes, designer cakes, baby shower cakes, theme cakes, photo cakes & cupcakes, celebration cakes, bachelorette party cakes.</p>
</div>
<div class="col-md-4">
<br><br><br>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" >
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="Images/Cakes/1.jpeg">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="Images/Cakes/2.jpeg">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="Images/Cakes/3.jpeg">
    </div>
	<div class="carousel-item">
      <img class="d-block img-fluid" src="Images/Cakes/4.jpeg">
    </div>
	<div class="carousel-item">
      <img class="d-block img-fluid" src="Images/Cakes/5.jpeg">
    </div>
	<div class="carousel-item">
      <img class="d-block img-fluid" src="Images/Cakes/6.jpeg">
    </div>
	<div class="carousel-item">
      <img class="d-block img-fluid" src="Images/Cakes/7.jpeg">
    </div>
	<div class="carousel-item">
      <img class="d-block img-fluid" src="Images/Cakes/8.jpeg">
    </div>
  </div>
</div>


</div>

<div class="col-md-4">
<br>
<br><br>
<?php
@session_start();
if (isset($_SESSION['user'])) 
{
?>
<h1>Welcome <?php echo $_SESSION['user'];?></h1>
<a href="logout.php">Logout</a>
<?php
}
else
{
?>

<form class="form-horizontal" method="POST" action="" name="loginform" style="background-color:white;border:solid lightblue 10px;padding:10px 10px 10px 10px;border-radius:20px" >
<label>Login ID:</label>
<input type="text" class="form-control" name="username" />
<label>Password</label>
<input type="password" class="form-control" id="passwd" name="password" />
<input type="checkbox" id="chk" onchange="ad()" /> Show Password
<br>
<input type="submit" class="btn btn-success" name="submit" />
<input type="reset" class="btn btn-danger"/>
</form>
<?php
}
?>

</div>
</div>
</div>
<hr>
<h6 align="center">© Copyright Ssoftwares Pvt. Ltd. Aurangabad</h6>
</body>
</html>

<?php
include 'dbconnect.php';
if(isset($_POST['submit']))
{
  $email=$_POST['username'];
  $passwd=$_POST['password'];

  $sql="select * from users2 where  Loginid='$email' and password='$passwd'";

  $result=mysqli_query($conn,$sql);

  $count=mysqli_num_rows($result);

  if($count==1)
  {
    session_start();
     $_SESSION['user']=$email;
     echo "Successfully";
     //echo htmlspecialchars($_SERVER["PHP_SELF"]);
  }

  else
  {
    echo "Invalid Details";
  }
}

else
{
  echo "Enter Details";
}
?>