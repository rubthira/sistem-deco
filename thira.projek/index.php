<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>User Dashboard</title>
</head>
<body>
    <div class="container" style="text-align:center ;">
    <br>
        <h1 style="text-align: center;">THANK YOU FOR ASSIGNED</h1>
        <br>
        <a href="logout.php" class="btn btn-warning" >LOGOUT</a><br>
        <br>
        <a href="login.php" class="btn btn-warning" >LOGIN FORM</a><br>
        <br>
        <a href="registration.php" class="btn btn-warning" >REGISTER FORM</a><br>
        <br>
        <a href="index2.php" class="btn btn-warning" >BOOKING FORM</a><br>
        <br>
        
    </div>
</body>
</html>