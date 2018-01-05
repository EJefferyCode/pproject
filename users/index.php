<?php include('../includes/login-script.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Plantr</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="/styles/style.css" rel="stylesheet"/>
</head>
<body>
   <!--Login-->
   
    <div class="container text-center" id="log">
        <h5>Already A Member? Login Here</h5>
        <form class="form-inline" method="POST">
<!--
            <div class="form-group" id="loginname">
                <input type="email" class="form-control" id="text" placeholder="Email" name="email">
            </div>
            <br>
            <i>OR</i>
-->
            
            <div class="form-group" id="loginname">
                <input type="text" class="form-control" id="text" placeholder="Username" name="nickname">
            </div>
            
            
            <div class="form-group" id="loginpwd">
               <input type="password" class="form-control" id="pwd" placeholder="Password" name="password">
            </div>
            
            <br>
            
            <div class="checkbox">
              <label><input type="checkbox" name="remember"> keep me logged in</label>
            </div>
            <br>
            <button type="submit" class="btn btn-default" id="go" name="SUBMIT">Go</button> 
        </form>
        <a href="#">Forgot Account?</a>
    </div>
       
     
   <!----jumbo header---->
   <?php include('../includes/header.php'); ?>

    <!--container 1-->
    
    <div class="container-fluid bg-1 text-center">
        <h3 class="margin"><b>What Is Plantr?</b></h3>
        <h3>A Good Space To Post Whatever You Want.</h3>
    </div>
    
    <!--container 2-->
    <div class="container-fluid bg-2 text-center">
        <h3 class="margin">A Special Place Where <span>(almost)</span> Anything Goes!</h3>
        <p>We value freedom of expression.</p>
        <p>That's why we allow you to post what you want, when you want <span>(with limited moderating)</span>.</p>
    </div>
    
    <!--container 3-->
    <div class="container-fluid bg-3 text-center">    
     <h3 class="margin">Check Out The Forums <a href="/users/forum.php">click here</a></h3>
  <h3 class="margin">Ready To Join? <a href="/users/registration.php">click here</a></h3><br>
  <div class="row">
    <div class="col-sm-4">
     A Community Of Freedom. <br>Post What You Want!      
      <img src="/images/free.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236" id="img1"> 
    </div>
    <div class="col-sm-4"> 
      100% Free To Join <br> 100% Free To Use
      <img src="/images/100.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236" id="img2"> 
    </div>
    <div class="col-sm-4"> 
      Join Forums<br>Find Something Interesting<br>Connect With Likeminded People
      <img src="/images/earth.jpg" class="img-rounded" alt="Cinque Terre" width="280" height="236" id="img3"> 
    </div>
  </div>
</div>

<?php include('../includes/footer.php'); ?>
</body>
</html>


