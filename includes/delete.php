<?php
session_start();
$output = NULL;


//deleting profile photo, user can choose to use default, or simply upload their own image to db. user can also upload a photo w/o deleting as well

$sql = "SELECT * FROM user where nickname = '$nickname'";
$result = mysqli_query($dataBase,$sql) or die(mysqli_error($dataBase));
$rws = mysqli_fetch_array($result);

if(isset($_POST['delete'])) {
    $img_dir = '../photos/';
    $img_name = $rws['image'];
    
    if(unlink($img_dir.$img_name)) {
        $update = "UPDATE user SET image = '' WHERE nickname = '$nickname'";
        mysqli_query($dataBase,$update) or die(mysqli_error($dataBase));
        
        $output = "<p style='color:red; font-size:1.7em; margin-left:25%;'>Your photo has been deleted. <a href='home.php' style='color:black;'>Click Here To Refresh</a></p><br>";
    }else {
         echo 'Error deleting the image';
    }
    
}


$sqli = "SELECT * FROM gallery where nickname = '$nickname'";
$resulti =  mysqli_query($dataBase,$sqli) or die(mysqli_error($dataBase));
$rwsi =   mysqli_fetch_array($resulti);

if(isset($_POST['delete1'])) {
    $img_dir = '../gallery/';
    $img_name = $rwsi['imageOne'];
    
    if(unlink($img_dir.$img_name)) {
        $update = "UPDATE gallery SET imageOne = '' WHERE nickname = '$nickname'";
         mysqli_query($dataBase,$update) or die(mysqli_error($dataBase));
        
        $output = "<p style='color:red; font-size:1.7em; margin-left:25%;'>Your photo has been deleted. <a href='home.php' style='color:black;'>Click Here To Refresh</a></p><br>";
    } else {
        echo 'Error deleting the image';
    }
}

if(isset($_POST['delete2'])) {
    $img_dir = '../gallery/';
    $img_name = $rwsi['imageTwo'];
    
    if(unlink($img_dir.$img_name)) {
        $update = "UPDATE gallery SET imageTwo = '' WHERE nickname = '$nickname'";
         mysqli_query($dataBase,$update) or die(mysqli_error($dataBase));
        
        $output = "<p style='color:red; font-size:1.7em; margin-left:25%;'>Your photo has been deleted. <a href='home.php' style='color:black;'>Click Here To Refresh</a></p><br>";
    }else {
        echo 'Error deleting the image';
    }
}

if(isset($_POST['delete3'])) {
    $img_dir = '../gallery/';
    $img_name = $rwsi['imageThree'];
    
    if(unlink($img_dir.$img_name)) {
        $update = "UPDATE gallery SET imageThree = '' WHERE nickname = '$nickname'";
         mysqli_query($dataBase,$update) or die(mysqli_error($dataBase));
        
        $output = "<p style='color:red; font-size:1.7em; margin-left:25%;'>Your photo has been deleted. <a href='home.php' style='color:black;'>Click Here To Refresh</a></p><br>";
    }else {
        echo 'Error deleting the image';
    }
}

if(isset($_POST['delete4'])) {
    $img_dir = '../gallery/';
    $img_name = $rwsi['imageFour'];
    
    if(unlink($img_dir.$img_name)) {
        $update = "UPDATE gallery SET imageFour = '' WHERE nickname = '$nickname'";
         mysqli_query($dataBase,$update) or die(mysqli_error($dataBase));
        
        $output = "<p style='color:red; font-size:1.7em; margin-left:25%;'>Your photo has been deleted. <a href='home.php' style='color:black;'>Click Here To Refresh</a></p><br>";
    }else {
        echo 'Error deleting the image';
    }
}

if(isset($_POST['delete5'])) {
    $img_dir = '../gallery/';
    $img_name = $rwsi['imageFive'];
    
    if(unlink($img_dir.$img_name)) {
        $update = "UPDATE gallery SET imageFive = '' WHERE nickname = '$nickname'";
         mysqli_query($dataBase,$update) or die(mysqli_error($dataBase));
        
        $output = "<p style='color:red; font-size:1.7em; margin-left:25%;'>Your photo has been deleted. <a href='home.php' style='color:black;'>Click Here To Refresh</a></p><br>";
    }else {
        echo 'Error deleting the image';
    }
}

if(isset($_POST['delete6'])) {
    $img_dir = '../gallery/';
    $img_name = $rwsi['imageSix'];
    
    if(unlink($img_dir.$img_name)) {
        $update = "UPDATE gallery SET imageSix = '' WHERE nickname = '$nickname'";
         mysqli_query($dataBase,$update) or die(mysqli_error($dataBase));
        
        $output = "<p style='color:red; font-size:1.7em; margin-left:25%;'>Your photo has been deleted. <a href='home.php' style='color:black;'>Click Here To Refresh</a></p><br>";
    }else {
        echo 'Error deleting the image';
    }
}

if(isset($_POST['delete7'])) {
    $img_dir = '../gallery/';
    $img_name = $rwsi['imageSeven'];
    
    if(unlink($img_dir.$img_name)) {
        $update = "UPDATE gallery SET imageSeven = '' WHERE nickname = '$nickname'";
         mysqli_query($dataBase,$update) or die(mysqli_error($dataBase));
        
        $output = "<p style='color:red; font-size:1.7em; margin-left:25%;'>Your photo has been deleted. <a href='home.php' style='color:black;'>Click Here To Refresh</a></p><br>";
    }else {
        echo 'Error deleting the image';
    }
}

if(isset($_POST['delete8'])) {
    $img_dir = '../gallery/';
    $img_name = $rwsi['imageEight'];
    
    if(unlink($img_dir.$img_name)) {
        $update = "UPDATE gallery SET imageEight = '' WHERE nickname = '$nickname'";
         mysqli_query($dataBase,$update) or die(mysqli_error($dataBase));
        
        $output = "<p style='color:red; font-size:1.7em; margin-left:25%;'>Your photo has been deleted. <a href='home.php' style='color:black;'>Click Here To Refresh</a></p><br>";
    }else {
        echo 'Error deleting the image';
    }
}

if(isset($_POST['delete9'])) {
    $img_dir = '../gallery/';
    $img_name = $rwsi['imageNine'];
    
    if(unlink($img_dir.$img_name)) {
        $update = "UPDATE gallery SET imageNine = '' WHERE nickname = '$nickname'";
         mysqli_query($dataBase,$update) or die(mysqli_error($dataBase));
        
        $output = "<p style='color:red; font-size:1.7em; margin-left:25%;'>Your photo has been deleted. <a href='home.php' style='color:black;'>Click Here To Refresh</a></p><br>";
    }else {
        echo 'Error deleting the image';
    }
}

if(isset($_POST['delete10'])) {
    $img_dir = '../gallery/';
    $img_name = $rwsi['imageTen'];
    
    if(unlink($img_dir.$img_name)) {
        $update = "UPDATE gallery SET imageTen = '' WHERE nickname = '$nickname'";
         mysqli_query($dataBase,$update) or die(mysqli_error($dataBase));
        
        $output = "<p style='color:red; font-size:1.7em; margin-left:25%;'>Your photo has been deleted. <a href='home.php' style='color:black;'>Click Here To Refresh</a></p><br>";
    }else {
        echo 'Error deleting the image';
    }
}



echo $output;

?>