<?php 
session_start();
$output = NULL;

$nickname = $_SESSION['nickname'];

//basic form minus password 

if(isset($_POST['submit1'])) {
    $email = $_REQUEST['email'];
    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    
    $mysql = "UPDATE user SET email = '$email', firstname = '$firstname', lastname = '$lastname' WHERE nickname = '$nickname'";
    
    mysqli_query($dataBase,$mysql) or die(mysqli_error($dataBase));
    
   $output = "<p style='color:red; font-size:1.7em; margin-left:25%;'>Your profile has been updated. <a href='edit-profile.php' style='color:black;'>Click Here To Refresh</a></p><br>";
   

}

if(isset($_POST['submit2'])) {
    $sex = $_REQUEST['sex'];
    $status = $_REQUEST['status'];
    $education = $_REQUEST['education'];
    $profession = $_REQUEST['profession'];
    $location = $_REQUEST['location'];
    $bio = $_REQUEST['bio'];
    
    $bio = $dataBase->real_escape_string($_POST['bio']);
    
    $mysqldb = "UPDATE user SET sex = '$sex', status = '$status', education = '$education', profession = '$profession', location = '$location',  bio = '$bio' WHERE nickname = '$nickname'";
    
    mysqli_query($dataBase,$mysqldb) or die(mysqli_error($dataBase));
    
       $output = "<p style='color:red; font-size:1.7em; margin-left:25%;'>Your profile has been updated. <a href='edit-profile.php' style='color:black;'>Click Here To Refresh</a></p><br>";
       

     
    
    //if something is missing/empty, alert as in registration script. else successful
   
    
    
}

if(isset($_POST['submit3'])) {
    $first = $_REQUEST['first'];
    $second = $_REQUEST['second'];
    $third = $_REQUEST['third'];
    
    $words = "UPDATE user SET first = '$first', second = '$second', third = '$third' WHERE nickname = '$nickname'";
    
    mysqli_query($dataBase,$words) or die(mysqli_error($dataBase));
    
        $output = "<p style='color:red; font-size:1.7em; margin-left:25%;'>Your profile has been updated. <a href='edit-profile.php' style='color:black;'>Click Here To Refresh</a></p><br>";
       
      
    //if something is missing/empty, alert as in registration script. else successful
        

}


//password change.

if(isset($_POST['pchange'])) {
    
    
    $password = $_SESSION['password'];
    $cpassword = $_REQUEST['cpassword'];
    
    $npassword = $_REQUEST['npassword'];
    $rpassword = $_REQUEST['rpassword'];
    
    
        if(empty($cpassword) || empty($npassword) || empty($rpassword)) {
            $output = "<p style='color:red; font-size:1.7em; margin-left:40%;'>Please complete all fields.</p><br>";
        } elseif($cpassword != $password) {
            $output = "<p style='color:red; font-size:1.7em; margin-left:34%;'>Passwords do not match. Please try again.</p><br>";
        }elseif(strlen($npassword) < 7) {
            $output = "<p style='color:red; font-size:1.7em; margin-left:27%;'>Your password must be at least 7 characters long.</p><br>";
    
        }elseif($npassword != $rpassword)  {
            $output = "<p style='color:red; font-size:1.7em; margin-left:17%;'>New Password and Repeated Passwords aren't matching. Check your caps lock, typing, and please try again.</p><br>";
        }else {
            $npassword = md5($npassword);
            
            $update = "UPDATE user SET password = '$npassword' WHERE nickname = '$nickname'";
            
            mysqli_query($dataBase,$update) or die(mysqli_error($dataBase));
            $output = "<p style='color:red; font-size:1.7em; margin-left:25%;'>Your password has been updated. <a href='edit-profile.php' style='color:black;'>Click Here To Refresh</a></p><br>";
        }
}




echo $output;

?>
