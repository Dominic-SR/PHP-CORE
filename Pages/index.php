<?php
session_start();

if(!isset($_SESSION['email']))
{
	header("location:../Authentication/Login.php");
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Welcome <?php echo ($_SESSION['email']); ?></h1>
    <a href="../Authentication/Logout.php">Logout</a>
</body>
</html>