<?php
session_start();

include("connection/dbconnection.php");

if(!isset($_SESSION['email']))
{
	header("location:Authentication/Login.php");
}
else{
    header("location:Pages/index.php");
}
?>
