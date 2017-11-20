<?php 

$output = NULL;

//grabbing the users age. 
$dateOfBirth = $_POST['ageTwo'];
$today = date("Y-m-d");

//create a difference betweem the date_create dateofbirth of person and datecreate todays date
$diff = date_diff(date_create($dateOfBirth), date_create($today));

//putting the diff format into a variable
$age = $diff->format('%y');

//optradio genders male, female, trans
$optradio = $_POST['optradio'];

 
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
    $optradio  = $mysqli->real_escape_string($_POST['optradio']);
    $ageTwo    = $mysqli->real_escape_string($_POST['ageTwo']);
    
    //create a query
    
    $query = $mysqli->query("SELECT * FROM user WHERE email = '$email'");
    
    //make sure all fields are filled out
    //check if email is in use. if it's in use, do not create new account
    //make sure passwords match
    //make sure pword is long enough
    
    if (empty($firstname) || empty($lastname) || empty($password) || empty($rpassword) || empty($email) || empty($optradio) || empty($ageTwo)){
        $output = "<p style='color:red; font-size:1.7em; margin-left:36.5%;'>Please fill in all fields.</p>";
    } elseif($query->num_rows != 0) {
        $output = "<p style='color:red; font-size:1.7em; margin-left:42.3%;'>Email already in use.</p>";
    } elseif($rpassword != $password) {
        $output = "<p style='color:red; font-size:1.7em; margin-left:36.9%;'>Passwords do not match. Try again.</p>";
    } elseif(strlen($password) < 7) {
        $output = "<p style='color:red; font-size:1.7em; margin-left:32.5%;'>Your password must be at least 6 characters!</p>";
    } elseif($age < 13) {
          $output = "<p style='color:red; font-size:1.7em; margin-left:36%;'>Sorry, you can't use Plantr just yet!</p>";
    } else {
        //insert record
        //encrypt passwords
        $password = md5($password);
        
        $insert = $mysqli->query("INSERT INTO user(firstname,lastname,password,email,optradio,ageTwo) VALUES ('$firstname', '$lastname', '$password', '$email', '$optradio', '$age')");
            if ($insert != TRUE) {
                $output = "<p>Oops! Something went wrong!</p><br>";
                $output .= $mysqli->error;
            } else {
            $output = "You have been registered!";  
               
           }
    }  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Join Plantr</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="age.js" type="text/javascript"></script>
    <link href="/styles/style2.css" rel="stylesheet"/>
</head>
<body>
  
   <!----jumbo header---->
   <?php include('../includes/header.php'); ?>
   
    <div class="container text-center">
        <h2 style="cursor:default;">Join The  <z>P</z><la id="la">LA</la><v>N</v><w>T</w><u>r</u> Community!</h2>
            <form action="" method="POST">
               <div class="form-group">
                   <input type="text" class="form-control text-center" name="firstname" placeholder="First Name" required/>
               </div>
               
               <div class="form-group">
                   <input type="text" class="form-control text-center" name="lastname" placeholder="Last Name" required/>
               </div>
               
               <div class="form-group">
                   <input type="password" class="form-control text-center" name="password" placeholder="Password" required/>
               </div>
               
                 <div class="form-group">
                   <input type="password" class="form-control text-center" name="rpassword" placeholder="Confirm Password" required/>
               </div>
               
                 <div class="form-group">
                   <input type="email" class="form-control text-center" name="email" placeholder="Email" required/>
               </div>
               <hr>
               
               <h2 style="cursor:default;">I am:</h2>
                <label class="radio-inline">
                  <input type="radio" name="optradio" value="male">Male
                </label>
                <label class="radio-inline">
                  <input type="radio" name="optradio" value="female">Female
                </label>
                <label class="radio-inline">
                  <input type="radio" name="optradio" value="trans">Trans
                </label><br>
                <hr>
                
                <h2 style="cursor:default;">I was born on: </h2>
              <!--include select here-->
              
                 
                <div class="form-group" style="margin-top: -2%;">
                  <label for="diff"></label>
                  <input type="text" class="form-control text-center" id="ageTwo" name="ageTwo" placeholder="YYYY/MM/DD" required/>
                </div>
                
                
              <!--end of select-->
                
                <br>

               <button type="submit" class="btn btn-success" name="submit" id="register">Go</button>
                   
                <div class="checkbox">
                  <label><input type="checkbox" value="terms" checked="true" required/>I agree to the Terms of <z>P</z><la>LA</la><v>N</v><w>T</w><u>r</u></label>
                </div>
          </form>
    </div>
    
  
      <br><br>
      
      
   <?php echo $output;?>
   <?php include('../includes/footer.php'); ?>
   <!------FOOTER--------> 
</body>
</html>