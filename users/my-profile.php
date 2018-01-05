<?php require('../includes/db.php');?>
<?php require('../includes/sess_check.php');?>
<?php include('../includes/authen.php');?>
<?php include('../includes/navi.php');?>   <!--bootstrap included via navi-->


<?php

$sql = "SELECT * FROM user where nickname = '$nickname'";
$result = mysqli_query($dataBase,$sql) or die(mysqli_error($dataBase));
$rws = mysqli_fetch_array($result);

$sqli = "SELECT * FROM gallery where nickname = '$nickname'";
$resulti =  mysqli_query($dataBase,$sqli) or die(mysqli_error($dataBase));
$rwsi =   mysqli_fetch_array($resulti);

?>



<?php include('../includes/default_photo.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><!--consider dynamically adding username--></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
   <div class="container-fluid text-center" id="fluid-pro">
       <div class="col-lg-10 text-center" id="fluid-pro-fluid">
<!--
               <div class="row" style="width:30%;margin-left:34.6%;cursor:default;">
                  <b><?php echo $_SESSION['nickname'] = $nickname;?></b> Has <b>200</b> Fans!<br>
                   Become A Fan Of  <?php echo $_SESSION['nickname'] = $nickname;?><br>
                   <button type="submit" class="glyphicon glyphicon-thumbs-up"></button>
               </div>
-->
                <br>
               <img src="../photos/<?php echo $imageMain;?>" class="img-circle"/>

               <br>
            <div class="well">
                <h4><?php echo $nickname;?></h4> <!--dynamically add nickname, photo here via php and pop up to message user-->
                <!--everything below this lined should be added dymanically via "edit my profile-->
               <span class="label label-success" style="font-size:0.9em;"><?php echo $rws['first'];?></span>
               <span style="color:white;">|</span>
               <span class="label label-info" style="font-size:0.9em;"><?php echo $rws['second'];?></span>
               <span style="color:white;">|</span>
               <span class="label label-warning" style="font-size:0.9em; color:white;"><?php echo $rws['third'];?> </span>
            </div>
           <hr id="hr1">
           <h1 class="fp">About Me</h1>
           <span class="glyphicon glyphicon-calendar"></span> <k> <?php echo $rws['ageTwo'];?> Years Old</k><br>
           <span class="glyphicon glyphicon-user"></span> <k> <?php echo $rws['sex'];?></k><br>
           <span class="glyphicon glyphicon-heart"></span> <k> <?php echo $rws['status'];?></k> <br>
           <span class="glyphicon glyphicon-globe"></span> <k>  <?php echo $rws['location'];?></k><br>
           <span class="glyphicon glyphicon-briefcase"></span> <k> <?php echo $rws['profession'];?></k><br>
           <span class="glyphicon glyphicon-education"></span> <k> <?php echo $rws['education'];?></k><br>
            <br>

            <div class="well" style="border: 1px solid black;font-family: 'Montserrat', sans-serif;">
<!--               Dynamically add bio here-->
           <?php echo $rws['bio'];?>
            </div>
           
           <button type="submit" class="btn btn-warning" id="btn2"><span class="glyphicon glyphicon-eye-open"></span> Follow</button><br><br>
           <button type="button" class="btn btn-success" id="btn1"><span class="glyphicon glyphicon-comment"></span> Message</button><br><br>
           
           
           <button type="button" class="btn btn-primary" id="btn3" data-toggle="modal" data-target="#gallery"><span class="glyphicon glyphicon-camera"></span> See My Photos</button>
           
           
           <hr id="hr2">
           <h1 class="fp">My Forum Posts</h1>
           <button type="button" class="btn btn-success" id="posts"><a href="forum.php"><strong>See My Forum Posts</strong></a></button>
       </div>
   </div>
   
   
   <div class="panel panel-default text-center">
  <div class="panel-body"><p>&copy; <z>P</z><la>LA</la><v>N</v><w>T</w><u>r</u> <?php echo date('Y'); ?></p></div>
</div>

<!-----GALLERY MODAL------>
<div class="modal fade" id="gallery" role="dialog">
    <div class="modal-content text-center">
        <div class="modal-header text-center" style="background-color:#741878;">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 style="color:aliceblue;cursor:default;"> <?php echo $rws['nickname'];?> Images</h2>
        </div>
        <div class="modal-body">
             <div class="well" style="background-color:white;" id="welly">
                     
                     <img src="../gallery/<?php echo $imageOne;?>" class="img-rounded" style="max-width:20%;">
                     
                     <img src="../gallery/<?php  echo $imageTwo;?>" class="img-rounded" style="max-width:20%;">
                     
                     <img src="../gallery/<?php  echo $imageThree;?>" class="img-rounded" style="max-width:20%;">
                     
                     
                     <img src="../gallery/<?php echo $imageFour;?>" class="img-rounded" style="max-width:20%;">
                     
                     <img src="../gallery/<?php echo $imageFive;?>" class="img-rounded" style="max-width:20%;">
                     
                     <img src="../gallery/<?php echo $imageSix;?>" class="img-rounded" style="max-width:20%;">
                     
               
                     <img src="../gallery/<?php echo $imageSeven;?>" class="img-rounded" style="max-width:20%;">
                     
                     <img src="../gallery/<?php echo $imageEight; ?>" class="img-rounded" style="max-width:20%;">
                     
                     <img src="../gallery/<?php echo $imageNine; ?>" class="img-rounded" style="max-width:20%;">
                     
                     <img src="../gallery/<?php echo $imageTen;?>" class="img-rounded" style="max-width:20%;">
                     
                 </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
<!-----GALLERY MODAL ENDS------>





</body>
</html>

<style>
    /*****MEDIA QUERIES BELOW***/
    
@import url('https://fonts.googleapis.com/css?family=Montserrat');
    
    .glyphicon-thumbs-up {
        width:40%;
    }
    
    .glyphicon-thumbs-up:hover {
        color:#61CF00;
    }

k {cursor:default;}
    
#fluid-pro {
width: 90%;
}

#fluid-pro-fluid {
margin-left: 90px;
margin-bottom: 100px;
}

#fluid-pro-fluid img {
max-width:250px;
}

#fluid-pro-fluid img:hover {
border:2px solid white;
cursor:pointer;
opacity: 0.9;
}

#fluid-pro-fluid .well {
max-width: 300px;
margin-left: 325px;
}

#fluid-pro-fluid .jumbotron {
background-color: maroon;
max-width: 50%;
height: 200px;
margin-left: 240px;
margin-bottom: -12px;
}

#fluid-pro-fluid k {
font-family: 'Montserrat', sans-serif;
}

#hr1 {
border: 0;
width:90%;
color:black;
height: 2px;
background-color:black;
margin-top: -25px;
}

#hr2 {
border:0;
width:90%;
color:black;
height: 2px;
background-color:black;
}

.well {
border-color:white;
background-color:white;
cursor:default;
}

.panel {
background-color:#25023C;
cursor:default;
}

.panel p {
color:aliceblue;
}

.panel-body z {
color:#0453af;
}

.panel-body la {
color: #04af4a;
}

.panel-body v {
color: #f8255b;
}


.panel-body w {
color: #f8ab25;
}

.panel-body u {
color: aliceblue;
}

.panel-body u:hover {
color: red;
}
    
#welly img {
cursor:pointer;
}
#btn1:hover{color:orange;}
   
#btn2:hover {color:green;}
    
#btn3:hover {color:#A4C2FF;}

    
    /***MEDIA QUERIES***/
@media screen and (min-width: 320px) and (max-width:414px) {
        
#fluid-pro-fluid {margin-left:-1px;}
        
#fluid-pro-fluid .well {margin-left: 3%; width: 10%;}
        
#fluid-pro-fluid img {max-width: 150px;}

#posts {margin-bottom: 2px; padding: 72px 22px 72px 22px; margin-left: 2px; border: 2px solid #AED3FF;}
        
#posts a {color:aliceblue;}
        
.fp {font-size: 1.4em;}
}
    
@media screen and (min-width:415px) and (max-width:768px) {
    
#fluid-pro-fluid {margin-left: -1px;}
        
#fluid-pro-fluid .well {margin-left: 35%; width: 30%;}
    
#posts {margin-bottom: 2px; padding: 72px 52px 72px 52px;margin-left: 2px; border: 2px solid #AED3FF;}
    
#posts a {color:black;font-size:1.3em;}
    
.fp {font-size: 1.4em;}
}

@media screen and (min-width: 769px) and (max-width:1024px) {
    
#fluid-pro-fluid {margin-left: -1px;}
    
#fluid-pro-fluid .well {margin-left: 35%; width: 30%;}
    
#posts {margin-bottom: 2px; padding: 72px 52px 72px 52px;margin-left: 2px; border: 2px solid #AED3FF;}
    
#posts a {color:black;font-size:1.3em;}
    
.fp {font-size: 1.4em;}
}
    
@media screen and (min-width:1025px) and (max-width:1280px) {
#posts {display: none;}    
    
#fluid-pro-fluid .well {margin-left: 35%; width: 30%;}

.fp {font-size: 1.9em; cursor: default;}
}

@media screen and (min-width:1026px) and (max-width:1440px) {
#posts {display: none;}
 
#fluid-pro-fluid .well {margin-left: 35%; width: 30%;}    

.fp {font-size: 1.9em; cursor: default;}
}    

</style>


    
    
    
 
    
    
    
    
   

