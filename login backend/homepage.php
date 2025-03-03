<?php
session_start();
include("connect.php");

if (isset($_SESSION['email'])) {
    header("Location: therapy.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <div style="text-align:center; padding:15%;">
      <p style="font-size:50px; font-weight:bold;">
       Hello, please log in.
      </p>
      <a href="login.html">Login</a>
    </div>
</body>
</html>
