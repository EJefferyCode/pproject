<?php 
session_start();

$output = NULL;

//grabbing the users age. 
$dateOfBirth = $_POST['ageTwo'];
$today = date("Y-m-d");

//create a difference betweem the date_create dateofbirth of person and datecreate todays date
$diff = date_diff(date_create($dateOfBirth), date_create($today));

//putting the diff format into a variable
$age = $diff->format('%y');

//sex
$sex = $_POST['sex'];


//checking if form has been submitted

if(isset($_POST['submit'])) {
    //if submit button has been clicked do following code
    //connect to db
    $mysqli = new mysqli('localhost', 'root', 'root', 'plantr');
    
    $firstname = $mysqli->real_escape_string($_POST['firstname']);
    $lastname  = $mysqli->real_escape_string($_POST['lastname']);
    $password  = $mysqli->real_escape_string($_POST['password']);
    $rpassword = $mysqli->real_escape_string($_POST['rpassword']);
    $email     = $mysqli->real_escape_string($_POST['email']);
    $ageTwo    = $mysqli->real_escape_string($_POST['ageTwo']);
    $nickname  = $mysqli->real_escape_string($_POST['nickname']);
    $sex       = $mysqli->real_escape_string($_POST['sex']);
    
    //create a query
    
    $query = $mysqli->query("SELECT * FROM user WHERE BINARY nickname = '$nickname'");
    $quer2 = $mysqli->query("SELECT * FROM user WHERE email = '$email'");
    
    
    
    //make sure all fields are filled out
    //check if email is in use. if it's in use, do not create new account
    //make sure passwords match
    //make sure pword is long enough
    
    if (empty($firstname) || empty($lastname) || empty($password) || empty($rpassword) || empty($email) || empty($ageTwo) || empty($nickname) || empty($sex)){
        $output = "<p style='color:red; font-size:1.7em; margin-left:36.5%;'>Please fill in all fields.</p>";
    } elseif($query->num_rows != 0) {
        $output = "<p style='color:red; font-size:1.7em; margin-left:42.3%;'>Username already in use.</p>";
    } elseif ($quer2->num_rows != 0) {
        $output = "<p style='color:red; font-size:1.7em; margin-left:42.3%;'>Email already in use.</p>";
    }elseif($rpassword != $password) {
        $output = "<p style='color:red; font-size:1.7em; margin-left:36.9%;'>Passwords do not match. Try again.</p>";
    } elseif(strlen($password) < 7) {
        $output = "<p style='color:red; font-size:1.7em; margin-left:32.5%;'>Your password must be at least 7 characters!</p>";
    } elseif($age < 13) {
          $output = "<p style='color:red; font-size:1.7em; margin-left:36%;'>Sorry, you can't use Plantr just yet!</p>";
    } else {
        //insert record
        //encrypt passwords
        $password = md5($password);
        
        $insert = $mysqli->query("INSERT INTO user(firstname,lastname,password,email,ageTwo,nickname,sex) VALUES ('$firstname', '$lastname', '$password', '$email', '$age', '$nickname', '$sex')");
        
        $gala   = $mysqli->query("INSERT INTO gallery(nickname, imageOne,imageTwo,imageThree,imageFour,imageFive,imageSix,imageSeven,imageEight,imageNine,imageTen) VALUES ('$nickname', '', '', '', '', '', '', '', '', '', '')");
        
            if ($insert && $gala != TRUE) {
                $output = "<p>Oops! Something went wrong!</p><br>";
                $output .= $mysqli->error;
            } else {
            header('Location:welcome.php?user=' .$nickname);  
            
           }
    }
   
}

echo $output;

?>