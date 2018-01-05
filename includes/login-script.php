<?php
session_start();
$output = NULL;

//check form
if(isset($_POST['SUBMIT'])) {
    $password = $_POST['password'];
    $nickname = $_POST['nickname'];
   
    if(empty($password) || empty($nickname)) {
        $output = "<p style='color:#660E4B;margin-left:42%;font-size:1.7em;'>Please Fill In All Fields</p>";
    } else {
        //connect to db server
        $connect = new mysqli('localhost', 'root', 'root', 'plantr');
        
        $password = $connect->real_escape_string($password);
        $nickname = $connect->real_escape_string($nickname);
        
        
    
        $query = $connect->query("SELECT id FROM user WHERE BINARY nickname = '$nickname' AND password = md5('$password')"); 
        
       
        if($query->num_rows === 0) {
            $output = "<p style='color:#660E4B; font-size:1.7em; margin-left:33%;'>Invalid Username Or Password. Please Try Again!</p>";
            
        } else {
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['nickname'] = $nickname;
            $_SESSION['password'] = $password;
            header("Location: home.php?user=" .$nickname); 
            
        }
    }
}
echo $output;

?>