<?php require('../includes/db.php');?>
<?php require('../includes/sess_check.php');?>
<?php include('../includes/authen.php');?>
   <!--bootstrap included via navi-->




<?php
session_start();
session_destroy();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Goodbye!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="/styles/style.css" rel="stylesheet"/>
</head>
<body>
    <?php include('../includes/header.php'); ?>
   
    <div class="container-fluid bg-2 text-center">
        <h1>Thanks For Stopping By!</h1>
    </div>
    
    <div class="container-fluid bg-1 text-center">
        <h1>Can't Wait To See You Come Back!</h1>
    </div>
    <div class="container-fluid bg-3 text-center">
        <a href="index.php" id="logged">Click Here To Login</a>
    </div>
    
    
    <?php include('../includes/footer.php'); ?>
</body>
</html>

<style>
body, .bg-3 {
background-color:yellow;
}

#logged:hover {
color:black;

}

    

</style>