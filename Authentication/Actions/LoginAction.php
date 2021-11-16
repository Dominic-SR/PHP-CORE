<?php
include('../../connection/dbconnection.php');
session_start();

$email = mysqli_real_escape_string($con,$_POST['email']);
$password = mysqli_real_escape_string($con,$_POST['password']);

$sql="select * from user where email = '$email' and password = '$password'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);

if($count !== 0){
    $getdata=mysqli_fetch_array($result);
    $_SESSION['id']=$getdata['id'];
    $_SESSION['email']=$email;
    
    header("location:../../Pages/index.php");
 }
 else{
     header("location:../Login.php");
 }
?>
<script>window.location.href="../Login.php";</script>