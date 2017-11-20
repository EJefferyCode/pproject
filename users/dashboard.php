<?php
session_start();
if (!isset($_SESSION['email'])){
    header('Location: index.php');
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <p>You are logged in</p> <br>
    
    
    
    
</body>
</html>