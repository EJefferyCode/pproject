<?php
session_start();
$output = NULL;

$_SESSION['nickname'] = $nickname;

$photonick = $nickname . "01245688923";

//$randomNum = rand(0, 100) . rand(100, 210);
$photoRand1 = $nickname . "1";
$photoRand2 = $nickname . "2";
$photoRand3 = $nickname . "3";
$photoRand4 = $nickname . "4";
$photoRand5 = $nickname . "5";
$photoRand6 = $nickname . "6";
$photoRand7 = $nickname . "7";
$photoRand8 = $nickname . "8";
$photoRand9 = $nickname . "9";
$photoRand10 = $nickname . "10";



if (isset($_POST['upload'])) {
    //if upload button clicked, run following code
    
    $mysqimg = new mysqli('localhost', 'root', 'root', 'plantr');

    $file = $_FILES['profileimg'];
    
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];
    
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    
    //array
    
    $allowed = array('jpg', 'jpeg', 'png', 'gif');
    
    if (in_array($fileActualExt, $allowed) ) {
        if($fileError === 0) {
            if($fileSize < 1000000) {
                 //upload file here
                $fileNameNew = $photonick.".".$fileActualExt;
                $fileDestination = '../photos/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                
                 $update = "UPDATE user SET image = '$fileNameNew' WHERE nickname = '$nickname'";
                 mysqli_query($dataBase,$update) or die(mysqli_error($dataBase));
                 $output = "<p style='color:red; font-size:1.7em; margin-left:25%;'>Your photo has been updated. <a href='home.php' style='color:black;'>Click Here To Refresh</a></p><br>";
                    
            } else {
                $output = "<br> <p style='color:black; font-size:1.7em;margin-left: -25%;'>Your file is too big!</p>";
            }
        } else {
            $output = "<br> <p style='color:black; font-size:1.7em;margin-left: -25%;'>Something went wrong with uploading your image!</p>";
        }
    
    } else {
        $output = "<br> <p style='color:black; font-size:1.7em;margin-left: 25%;'>Sorry, you can only upload, jpg, jpeg, png, or gif images only.</p>";
    }
    
}


//FIRST FORM IN THE GALLERY

if(isset($_POST['save1'])) {
    $mysqimg = new mysqli('localhost', 'root', 'root', 'plantr');

    $file = $_FILES['imgOne'];
    
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];
    
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    
    //array
    
    $allowed = array('jpg', 'jpeg', 'png', 'gif');
    
    
     if (in_array($fileActualExt, $allowed)) {
        if($fileError === 0) {
            if($fileSize < 1000000) {
                 //upload file here
                $picture_to_show = $photoRand1.".".$fileActualExt;
                $fileDestination = '../gallery/'.$picture_to_show;
                move_uploaded_file($fileTmpName, $fileDestination);
                
                 $update = "UPDATE gallery SET imageOne = '$picture_to_show' WHERE nickname = '$nickname'";
                 mysqli_query($dataBase,$update) or die(mysqli_error($dataBase));
                 $output = "<p style='color:red; font-size:1.7em; margin-left:25%;'>Your photo has been updated. <a href='home.php' style='color:black;'>Click Here To Refresh</a></p><br>";
                    
            } else {
                $output = "<br> <p style='color:black; font-size:1.7em;margin-left: -25%;'>Your file is too big!</p>";
            }
        } else {
            $output = "<br> <p style='color:black; font-size:1.7em;margin-left: -25%;'>Something went wrong with uploading your image!</p>";
        }
    
    } else {
         
        $output = "<br> <p style='color:black; font-size:1.7em;margin-left: 25%;'>Sorry, you can only upload, jpg, jpeg, png, or gif images only.</p>";
    }
    
    
}




//**********************************************************************************************************//

//SECOND FORM

if(isset($_POST['save2'])) {
    $mysqimg = new mysqli('localhost', 'root', 'root', 'plantr');

    $file = $_FILES['imgTwo'];
    
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];
    
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    
    //array
    
    $allowed = array('jpg', 'jpeg', 'png', 'gif');
    
    
     if (in_array($fileActualExt, $allowed)) {
        if($fileError === 0) {
            if($fileSize < 1000000) {
                 //upload file here
                $picture_to_show = $photoRand2.".".$fileActualExt;
                $fileDestination = '../gallery/'.$picture_to_show;
                move_uploaded_file($fileTmpName, $fileDestination);
                
                 $update = "UPDATE gallery SET imageTwo = '$picture_to_show' WHERE nickname = '$nickname'";
                 mysqli_query($dataBase,$update) or die(mysqli_error($dataBase));
                 $output = "<p style='color:red; font-size:1.7em; margin-left:25%;'>Your photo has been updated. <a href='home.php' style='color:black;'>Click Here To Refresh</a></p><br>";
                    
            } else {
                $output = "<br> <p style='color:black; font-size:1.7em;margin-left: -25%;'>Your file is too big!</p>";
            }
        } else {
            $output = "<br> <p style='color:black; font-size:1.7em;margin-left: -25%;'>Something went wrong with uploading your image!</p>";
        }
    
    } else {
         
        $output = "<br> <p style='color:black; font-size:1.7em;margin-left: 25%;'>Sorry, you can only upload, jpg, jpeg, png, or gif images only.</p>";
    }
    
    
}


//THIRD FORM

if(isset($_POST['save3'])) {
    $mysqimg = new mysqli('localhost', 'root', 'root', 'plantr');

    $file = $_FILES['imgThree'];
    
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];
    
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    
    //array
    
    $allowed = array('jpg', 'jpeg', 'png', 'gif');
    
    
     if (in_array($fileActualExt, $allowed)) {
        if($fileError === 0) {
            if($fileSize < 1000000) {
                 //upload file here
                $picture_to_show = $photoRand3.".".$fileActualExt;
                $fileDestination = '../gallery/'.$picture_to_show;
                move_uploaded_file($fileTmpName, $fileDestination);
                
                 $update = "UPDATE gallery SET imageThree = '$picture_to_show' WHERE nickname = '$nickname'";
                 mysqli_query($dataBase,$update) or die(mysqli_error($dataBase));
                 $output = "<p style='color:red; font-size:1.7em; margin-left:25%;'>Your photo has been updated. <a href='home.php' style='color:black;'>Click Here To Refresh</a></p><br>";
                    
            } else {
                $output = "<br> <p style='color:black; font-size:1.7em;margin-left: -25%;'>Your file is too big!</p>";
            }
        } else {
            $output = "<br> <p style='color:black; font-size:1.7em;margin-left: -25%;'>Something went wrong with uploading your image!</p>";
        }
    
    } else {
         
        $output = "<br> <p style='color:black; font-size:1.7em;margin-left: 25%;'>Sorry, you can only upload, jpg, jpeg, png, or gif images only.</p>";
    }
    
    
}

//FOURTH FORM

if(isset($_POST['save4'])) {
    $mysqimg = new mysqli('localhost', 'root', 'root', 'plantr');

    $file = $_FILES['imgFour'];
    
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];
    
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    
    //array
    
    $allowed = array('jpg', 'jpeg', 'png', 'gif');
    
    
     if (in_array($fileActualExt, $allowed)) {
        if($fileError === 0) {
            if($fileSize < 1000000) {
                 //upload file here
                $picture_to_show = $photoRand4.".".$fileActualExt;
                $fileDestination = '../gallery/'.$picture_to_show;
                move_uploaded_file($fileTmpName, $fileDestination);
                
                 $update = "UPDATE gallery SET imageFour = '$picture_to_show' WHERE nickname = '$nickname'";
                 mysqli_query($dataBase,$update) or die(mysqli_error($dataBase));
                 $output = "<p style='color:red; font-size:1.7em; margin-left:25%;'>Your photo has been updated. <a href='home.php' style='color:black;'>Click Here To Refresh</a></p><br>";
                    
            } else {
                $output = "<br> <p style='color:black; font-size:1.7em;margin-left: -25%;'>Your file is too big!</p>";
            }
        } else {
            $output = "<br> <p style='color:black; font-size:1.7em;margin-left: -25%;'>Something went wrong with uploading your image!</p>";
        }
    
    } else {
         
        $output = "<br> <p style='color:black; font-size:1.7em;margin-left: 25%;'>Sorry, you can only upload, jpg, jpeg, png, or gif images only.</p>";
    }
    
    
}


//FIFTH FORM

if(isset($_POST['save5'])) {
    $mysqimg = new mysqli('localhost', 'root', 'root', 'plantr');

    $file = $_FILES['imgFive'];
    
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];
    
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    
    //array
    
    $allowed = array('jpg', 'jpeg', 'png', 'gif');
    
    
     if (in_array($fileActualExt, $allowed)) {
        if($fileError === 0) {
            if($fileSize < 1000000) {
                 //upload file here
                $picture_to_show = $photoRand5.".".$fileActualExt;
                $fileDestination = '../gallery/'.$picture_to_show;
                move_uploaded_file($fileTmpName, $fileDestination);
                
                 $update = "UPDATE gallery SET imageFive = '$picture_to_show' WHERE nickname = '$nickname'";
                 mysqli_query($dataBase,$update) or die(mysqli_error($dataBase));
                 $output = "<p style='color:red; font-size:1.7em; margin-left:25%;'>Your photo has been updated. <a href='home.php' style='color:black;'>Click Here To Refresh</a></p><br>";
                    
            } else {
                $output = "<br> <p style='color:black; font-size:1.7em;margin-left: -25%;'>Your file is too big!</p>";
            }
        } else {
            $output = "<br> <p style='color:black; font-size:1.7em;margin-left: -25%;'>Something went wrong with uploading your image!</p>";
        }
    
    } else {
         
        $output = "<br> <p style='color:black; font-size:1.7em;margin-left: 25%;'>Sorry, you can only upload, jpg, jpeg, png, or gif images only.</p>";
    }
    
    
}


//SIXTH FORM

if(isset($_POST['save6'])) {
    $mysqimg = new mysqli('localhost', 'root', 'root', 'plantr');

    $file = $_FILES['imgSix'];
    
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];
    
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    
    //array
    
    $allowed = array('jpg', 'jpeg', 'png', 'gif');
    
    
     if (in_array($fileActualExt, $allowed)) {
        if($fileError === 0) {
            if($fileSize < 1000000) {
                 //upload file here
                $picture_to_show = $photoRand6.".".$fileActualExt;
                $fileDestination = '../gallery/'.$picture_to_show;
                move_uploaded_file($fileTmpName, $fileDestination);
                
                 $update = "UPDATE gallery SET imageSix = '$picture_to_show' WHERE nickname = '$nickname'";
                 mysqli_query($dataBase,$update) or die(mysqli_error($dataBase));
                 $output = "<p style='color:red; font-size:1.7em; margin-left:25%;'>Your photo has been updated. <a href='home.php' style='color:black;'>Click Here To Refresh</a></p><br>";
                    
            } else {
                $output = "<br> <p style='color:black; font-size:1.7em;margin-left: -25%;'>Your file is too big!</p>";
            }
        } else {
            $output = "<br> <p style='color:black; font-size:1.7em;margin-left: -25%;'>Something went wrong with uploading your image!</p>";
        }
    
    } else {
         
        $output = "<br> <p style='color:black; font-size:1.7em;margin-left: 25%;'>Sorry, you can only upload, jpg, jpeg, png, or gif images only.</p>";
    }
    
    
}

//SEVENTH FORM

if(isset($_POST['save7'])) {
    $mysqimg = new mysqli('localhost', 'root', 'root', 'plantr');

    $file = $_FILES['imgSeven'];
    
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];
    
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    
    //array
    
    $allowed = array('jpg', 'jpeg', 'png', 'gif');
    
    
     if (in_array($fileActualExt, $allowed)) {
        if($fileError === 0) {
            if($fileSize < 1000000) {
                 //upload file here
                $picture_to_show = $photoRand7.".".$fileActualExt;
                $fileDestination = '../gallery/'.$picture_to_show;
                move_uploaded_file($fileTmpName, $fileDestination);
                
                 $update = "UPDATE gallery SET imageSeven = '$picture_to_show' WHERE nickname = '$nickname'";
                 mysqli_query($dataBase,$update) or die(mysqli_error($dataBase));
                 $output = "<p style='color:red; font-size:1.7em; margin-left:25%;'>Your photo has been updated. <a href='home.php' style='color:black;'>Click Here To Refresh</a></p><br>";
                    
            } else {
                $output = "<br> <p style='color:black; font-size:1.7em;margin-left: -25%;'>Your file is too big!</p>";
            }
        } else {
            $output = "<br> <p style='color:black; font-size:1.7em;margin-left: -25%;'>Something went wrong with uploading your image!</p>";
        }
    
    } else {
         
        $output = "<br> <p style='color:black; font-size:1.7em;margin-left: 25%;'>Sorry, you can only upload, jpg, jpeg, png, or gif images only.</p>";
    }
    
    
}


//EIGHT FORM

if(isset($_POST['save8'])) {
    $mysqimg = new mysqli('localhost', 'root', 'root', 'plantr');

    $file = $_FILES['imgEight'];
    
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];
    
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    
    //array
    
    $allowed = array('jpg', 'jpeg', 'png', 'gif');
    
    
     if (in_array($fileActualExt, $allowed)) {
        if($fileError === 0) {
            if($fileSize < 1000000) {
                 //upload file here
                $picture_to_show = $photoRand8.".".$fileActualExt;
                $fileDestination = '../gallery/'.$picture_to_show;
                move_uploaded_file($fileTmpName, $fileDestination);
                
                 $update = "UPDATE gallery SET imageEight = '$picture_to_show' WHERE nickname = '$nickname'";
                 mysqli_query($dataBase,$update) or die(mysqli_error($dataBase));
                 $output = "<p style='color:red; font-size:1.7em; margin-left:25%;'>Your photo has been updated. <a href='home.php' style='color:black;'>Click Here To Refresh</a></p><br>";
                    
            } else {
                $output = "<br> <p style='color:black; font-size:1.7em;margin-left: -25%;'>Your file is too big!</p>";
            }
        } else {
            $output = "<br> <p style='color:black; font-size:1.7em;margin-left: -25%;'>Something went wrong with uploading your image!</p>";
        }
    
    } else {
         
        $output = "<br> <p style='color:black; font-size:1.7em;margin-left: 25%;'>Sorry, you can only upload, jpg, jpeg, png, or gif images only.</p>";
    }
    
    
}

//NINTH FORM
if(isset($_POST['save9'])) {
    $mysqimg = new mysqli('localhost', 'root', 'root', 'plantr');

    $file = $_FILES['imgNine'];
    
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];
    
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    
    //array
    
    $allowed = array('jpg', 'jpeg', 'png', 'gif');
    
    
     if (in_array($fileActualExt, $allowed)) {
        if($fileError === 0) {
            if($fileSize < 1000000) {
                 //upload file here
                $picture_to_show = $photoRand9.".".$fileActualExt;
                $fileDestination = '../gallery/'.$picture_to_show;
                move_uploaded_file($fileTmpName, $fileDestination);
                
                 $update = "UPDATE gallery SET imageNine = '$picture_to_show' WHERE nickname = '$nickname'";
                 mysqli_query($dataBase,$update) or die(mysqli_error($dataBase));
                 $output = "<p style='color:red; font-size:1.7em; margin-left:25%;'>Your photo has been updated. <a href='home.php' style='color:black;'>Click Here To Refresh</a></p><br>";
                    
            } else {
                $output = "<br> <p style='color:black; font-size:1.7em;margin-left: -25%;'>Your file is too big!</p>";
            }
        } else {
            $output = "<br> <p style='color:black; font-size:1.7em;margin-left: -25%;'>Something went wrong with uploading your image!</p>";
        }
    
    } else {
         
        $output = "<br> <p style='color:black; font-size:1.7em;margin-left: 25%;'>Sorry, you can only upload, jpg, jpeg, png, or gif images only.</p>";
    }
    
    
}

//TENTH 

if(isset($_POST['save10'])) {
    $mysqimg = new mysqli('localhost', 'root', 'root', 'plantr');

    $file = $_FILES['imgTen'];
    
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];
    
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    
    //array
    
    $allowed = array('jpg', 'jpeg', 'png', 'gif');
    
    
     if (in_array($fileActualExt, $allowed)) {
        if($fileError === 0) {
            if($fileSize < 1000000) {
                 //upload file here
                $picture_to_show = $photoRand10.".".$fileActualExt;
                $fileDestination = '../gallery/'.$picture_to_show;
                move_uploaded_file($fileTmpName, $fileDestination);
                
                 $update = "UPDATE gallery SET imageTen = '$picture_to_show' WHERE nickname = '$nickname'";
                 mysqli_query($dataBase,$update) or die(mysqli_error($dataBase));
                 $output = "<p style='color:red; font-size:1.7em; margin-left:25%;'>Your photo has been updated. <a href='home.php' style='color:black;'>Click Here To Refresh</a></p><br>";
                    
            } else {
                $output = "<br> <p style='color:black; font-size:1.7em;margin-left: -25%;'>Your file is too big!</p>";
            }
        } else {
            $output = "<br> <p style='color:black; font-size:1.7em;margin-left: -25%;'>Something went wrong with uploading your image!</p>";
        }
    
    } else {
         
        $output = "<br> <p style='color:black; font-size:1.7em;margin-left: 25%;'>Sorry, you can only upload, jpg, jpeg, png, or gif images only.</p>";
    }
    
    
}


echo $output;


?>