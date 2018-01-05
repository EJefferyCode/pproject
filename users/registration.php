<?php include('../includes/registration-script.php');?>


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
   <?php include('../includes/header.php');?>
   
    <div class="container text-center">
        <h2 style="cursor:default;">Join The  <z>P</z><la id="la">LA</la><v>N</v><w>T</w><u>r</u> Community!</h2>
            <form method="POST">
              
              <div class="form-group">
                   <input type="text" class="form-control text-center" name="nickname" placeholder="Choose A Username! (Case Sensitive!)" required/>
               </div>
               
              
               <div class="form-group">
                   <input type="text" class="form-control text-center" name="firstname" placeholder="First Name" required/>
               </div>
               
               <div class="form-group">
                   <input type="text" class="form-control text-center" name="lastname" placeholder="Last Name" required/>
               </div>
               
               <div class="form-group">
                   <input type="password" class="form-control text-center" name="password" placeholder="Password (Case Sensitive!)" required/>
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
                  <input type="radio" name="sex" value="Male">Male
                </label>
                <label class="radio-inline">
                  <input type="radio" name="sex" value="Female">Female
                </label>
                <label class="radio-inline">
                  <input type="radio" name="sex" value="Trans">Trans
                </label><br>
                <hr>
                
                <!--select--> 
                
                <h2 style="cursor:default;">I was born on: </h2>
              
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