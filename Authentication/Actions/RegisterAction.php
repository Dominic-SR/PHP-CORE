<?php
include('../../connection/dbconnection.php');

$name = mysqli_real_escape_string($con,$_POST['name']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$password = mysqli_real_escape_string($con,$_POST['password']);
$age = mysqli_real_escape_string($con,$_POST['age']);

$sql="insert into user (name,email,password,age)values('$name','$email','$password','$age')";
mysqli_query($con,$sql);

?>
<script>window.location.href="../login.php";</script>