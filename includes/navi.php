<?php require('../includes/db.php'); ?>
<?php include('../includes/sess_check.php'); ?>
<?php include('../includes/authen.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Plantr</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</head>
<body>
  
  <!--NAVBAR included in every page after login/register-->
   
   <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="home.php" id="logo"><z>P</z><la>LA</la><v>N</v><w>T</w><u>r</u></a> 
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="my-profile.php?user=<?php echo $_SESSION['nickname'] = $nickname;?>">My Profile</a></li>
        <li><a href="forum.php">Forums</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-comment" style="font-size:1.4em;"></span></a></li>
        <!--consider using php to place users first name inside of the navbar-->
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-erase"></span> Settings  <!--dynamicaly add nickname--><span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="edit-profile.php">Edit Profile</a></li>
          <li><a href="privacy.php" >Privacy Settings</a></li>
          <li><a href="support.php">Support</a></li>
          <hr>
          <li><a href="terms.php">Terms</a></li>
          <li><a href="#">Careers</a></li>
          <li><a href="/users/logout.php" style="color:red;">Logout</a></li>
        </ul>
      </li>
      </ul>
          <!--search-->
         
      <form class="navbar-form navbar-right" role="search" method="POST" action="">
        <div class="form-group input-group" id="search">
          <input type="text" class="form-control search" placeholder="Search For Users, Friends, Buds, etc..." name="search">
          <div id="results"></div> 
        </div>
        <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-search"></span></button>
      </form>
      <!--search ends-->
    </div>
  </div>
</nav>
  
  
<style>

   

#search {margin-left: -20em;width: 300px;}
    
.navbar {font-size: 1.2em;background-color:#25023C;border-radius: 0px;}
    
#myNavbar li a {color:#B7C8FF;}
    
#myNavbar li a:hover {color:#D1A2F0;}
    
#logo z {color:#0453af;}
    
#logo la {color: #04af4a;}
    
#logo v {color: #f8255b;}
    
#logo w {color: #f8ab25;}

#logo u {color: aliceblue;}

#logo u:hover {color: red;}

   

    
/**MEDIA QUERIES**/
    
    @media screen and (min-width: 768px) and (max-width: 1023px) {
        #search {
            width: 200px;
            margin-left: -170px;
        }
     
        
        
    }
    
    @media screen and (min-width: 1024px) and (max-width: 1279px) {
        #search {
            width: 420px;
            margin-left: -170px;
        }
    }
    
    @media screen and (min-width: 1280px) and (max-width: 1439px) {
        #search {
            width: 720px;
            margin-right: -40px;
        }
    }
    
    @media screen and (min-width: 1440px) {
        #search {
            width: 720px;
            margin-right: 9px;
        }
    }
</style>
  

</body>
</html>





