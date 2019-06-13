<?php

@session_start();

if(isset($_SESSION['user']))
{
	echo "session destroyed";
	session_destroy();
	session_unset($_SESSION['user']);
	header('location:home.php');

}

else
{
	echo "Not Set";
	//header('location:merge.php');
}