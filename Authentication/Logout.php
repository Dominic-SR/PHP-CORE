<?php
session_start();
session_destroy();
header("location:Login.php?mes= You are Logout.");
?>