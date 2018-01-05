<?php
    session_start();
    require 'db.php';
    if(!$_SESSION['nickname']) {
        header("Location:index.php?session=notset");
        
    }

   
?>




<!--for pages other than the registration and login page, this page must be included in all page that can only be accessed
by logged in users-->