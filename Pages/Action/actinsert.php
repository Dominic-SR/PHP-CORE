<?php
include("../../connection/dbconnection.php");
$name = mysqli_real_escape_string($con,$_POST['name']);
$count = mysqli_real_escape_string($con,$_POST['count']);

$target="../../upload/";
$image=$_FILES["image"]["name"];

$lcoation=$target.$image;
move_uploaded_file($_FILES['image']['tmp_name'],$lcoation);

$sql = "insert into CRUD (name,count,img) values ('$name','$count','$image')";

$result = mysqli_query($con,$sql);
?>
<script>window.location.href="../index.php";</script>