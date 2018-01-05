<?php require('../includes/db.php');?>
<?php require('../includes/sess_check.php');?>
<?php include('../includes/authen.php');?>
<?php include('../includes/navi.php');?>

<?php

$sql = "SELECT * FROM user where nickname = '$nickname'";
$result = mysqli_query($dataBase,$sql) or die(mysqli_error($dataBase));
$rws = mysqli_fetch_array($result);

?>

<!--DDELETE PROFILE IMAGE-->
<?php include('../includes/delete.php');?>
<!--FOR NON-PHOTO EDITS-->
<?php include('../includes/edit-profile-script.php');?>
<!--FOR PHOTO EDITS-->
<?php include('../includes/upload.php');?>
<!--FOR DEFAULT PHOTO ASSIGNMENT-->
<?php include('../includes/default_photo.php');?>



<!--photo upload include script here-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Plantr</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
   <!--header jumbotron-->
   <div class="jumbotron text-center" style="background-color:#460D4D;border:2px solid black;border-right-color:#460D4D;border-left-color:#460D4D;cursor:default;margin-top: -19.6px; height: 200px;">
      <!----------------------------For larger devices---------------------->
       <div class="well" style="" id="well1">
           <h3 style="color:#143A58;">Need A Change?</h3>
           <h4 style="color:aliceblue;">That's Quite Alright</h4> <span class="glyphicon glyphicon-heart" style="color:#D6165F;"></span>
       </div>
       <!---------------------------for smaller devices----------------->
       <h2>Edit Your Details</h2>
   </div>
   <!--jumbotron ends-->
   
   <div class="container">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#menu1" id="tab1">Basic Stuff</a></li>
    <li><a data-toggle="tab" href="#menu2" id="tab2">Personal Stuff</a></li>
  </ul>

  <div class="tab-content text-center">
    <div id="menu1" class="tab-pane fade in active">
      <h3>Basic Stuff</h3>
      <form method="POST" style="margin-bottom:2%;">
           <div class="form-group basic">
                   <input type="text" class="form-control text-center" name="nickname" placeholder="<?php  echo $rws['nickname'];?>" value="<?php  echo $rws['nickname'];?>" disabled/>
               </div>
               
                <div class="form-group basic">
                   <input type="email" class="form-control text-center" name="email" placeholder="<?php echo $rws['email'];?>" value="<?php echo $rws['email'];?>"/>
                   
               </div>
              
               <div class="form-group basic">
                   <input type="text" class="form-control text-center" name="firstname" placeholder="<?php echo $rws['firstname'];?>" value="<?php echo $rws['firstname'];?>"/>
               </div>
               
               <div class="form-group basic">
                   <input type="text" class="form-control text-center" name="lastname" placeholder="<?php echo $rws['lastname'];?>" value="<?php echo $rws['lastname'];?>"/>
               </div>
              
               <button class="btn btn-success" type="submit" id="btn1" name="submit1">Save</button>
      </form>
      
     Want To Change Your Password? Click <button type="button" class="btn btn-success" data-toggle="modal" data-target="#password">Here</button>

  <!-- Modal -->
              <div class="modal fade" id="password" role="dialog">
                <div class="modal-dialog">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title" style="font-family: 'Amatic SC', cursive; font-size:3em;">Change Your Password</h4>
                  
                   
                    <br>
                    <!------------------------FORM------------------------>
                     
                     <form method="POST" style="width:80%;margin-left:9%;">
                        <div class="form-group basic">
                           <input type="password" class="form-control text-center" name="cpassword" placeholder="Current Password" value=""/>
                       </div>
                        
                         <div class="form-group basic">
                             <input type="password" class="form-control text-center" name="npassword" placeholder="New Password (Case Sensitive!)" value=""/>
                         </div>
                         
                         <div class="form-group basic">
                           <input type="password" class="form-control text-center" name="rpassword" placeholder="Confirm New Password" value=""/>
                       </div>
                         <button type="submit" class="btn btn-success" name="pchange">Update Password</button>
                     </form>
                     <!------------------------FORM END------------------------>
                      </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    </div>
                  </div>

                </div>
              </div>
              
   
    </div>
    <!----------------------------------------TAB 2----------------------------------------------------->
    <div id="menu2" class="tab-pane fade">
      <h3>Personal Stuff</h3>
      
      <form method="POST" enctype="multipart/form-data" id="formphoto">
          <div class="form-group"> 
          <span class="glyphicon glyphicon-camera"></span> <label for="" id="heading">Profile Image</label>
          <input name="profileimg" type="file" id="upload" onchange="readURJ(this);"/>
             <br>
              <div class="col-md-6" id="col6">
                  <label for="" style="color:#CF0067;" id="curimg">Current Image</label>
                  <img src="../photos/<?php echo $imageMain; ?>" class="img-circle" id="mainImage"/>
                  
                 <button class="btn btn-success" type="submit" id="btn2" name="upload" style="margin-bottom: 10%;">Upload & Save</button>
                    <button class="btn btn-danger" type="submit" id="delete" name="delete" style="margin-bottom: 30%;">Delete This Photo</button>
              </div>
          </div>
      </form>
      
      <hr style="border: 1px solid gray;height: 2px; background-color:gray;">
      
      <form method="POST" style="margin-bottom: 2%;">
          <div class="well">
              <h5>Choose Three Words That Describe You Best!</h5>
              <div class="form-group">
                  <input id="first" type="text" class="form-control" name="first" value="<?php echo $rws['first'];?>" maxlength="20">
              </div>
              
              <div class="form-group">
                  <input id="second" type="text" class="form-control" name="second" value="<?php echo $rws['second'];?>" maxlength="20">
              </div>
              
              <div class="form-group">
                  <input id="third" type="text" class="form-control" name="third" value="<?php echo $rws['third'];?>" maxlength="20">
              </div>
          </div>
           <button class="btn btn-success" type="submit" id="words" name="submit3">Save</button>
      </form>
      
      
      <hr style="border: 1px solid gray;height: 2px; background-color:gray;">
      
      <form method="POST" style="margin-bottom: 5%;">
          <div class="form-group" id="formg2" style="width:50%;">
             <span class="glyphicon glyphicon-user"></span> <label for="">Gender</label>
               <select class="form-control" id="sel1" name="sex" required>
               <option value="<?php echo $rws['sex'];?>"><?php echo $rws['sex'];?></option>
               <option value="Male">Male</option>
               <option value="Female">Female</option>
               <option value="Trans">Trans</option>
               </select>
          </div>
          
          <div class="form-group" id="formg3" style="width:50%;"> <!--select-->
             <span class="glyphicon glyphicon-heart"></span> <label for="">Status</label>
               <select class="form-control" id="sel1" name="status">
               <option value="<?php echo $rws['status'];?>"><?php echo $rws['status'];?></option>
               <option value="Single">Single</option>
               <option value="Taken">Taken</option>
               <option value="Open">Open</option>
               </select>
          </div>
          
          <div class="form-group" id="formg4"> <!--text-->
            <span class="glyphicon glyphicon-education"></span> <label for="">Education</label>
               <div class="input-group">
             <span class="input-group-addon"  style="cursor:default;">Text</span>
            <input id="msg" type="text" class="form-control" name="education" value="<?php echo $rws['education'];?>" maxlength="100">
            </div>
          </div>
          
          
          <div class="form-group" id="formg5"> <!--text-->
            <span class="glyphicon glyphicon-briefcase"></span> <label for="">Profession</label>
               <div class="input-group">
             <span class="input-group-addon"  style="cursor:default;">Text</span>
            <input id="msg" type="text" class="form-control" name="profession" value="<?php echo $rws['profession'];?>" maxlength="100">
            </div>
          </div>
          
          <div class="form-group" id="formg6"> <!--text-->
             <span class="glyphicon glyphicon-globe"></span> <label for="">Location</label>
              <div class="input-group">
             <span class="input-group-addon" style="cursor:default;">Text</span>
            <input id="msg" type="text" class="form-control" name="location" value="<?php echo $rws['location'];?>" maxlength="100">
            </div>
          </div>
          
          <div class="form-group">
              <label for="usr">In My Own Words</label>
              <input type="text" class="form-control" id="bio" name="bio" placeholder="In 300 Characters or Less..."  value="<?php echo $rws['bio'];?>" maxlength="300">
          </div>
          
          <!--- Add REAL ESCAPE STRING to the bio script.--->
          <!--- Fix the styling of the bio box dependent about media query view--->
          
           <div class="form-group" id="formg7" style="width:18%;">
          <span class="glyphicon glyphicon-calendar"></span> <label for="">Age</label>
        <input class="form-control" id="disabledInput" type="text" placeholder="<?php echo $rws['ageTwo'];?>" disabled>
            </div>
         
          
    <button class="btn btn-success" type="submit" id="btn2" name="submit2">Save</button>

      </form>
      
    </div>
  </div>
</div>

  
   
   
   <!--FOOTER-->
   
    <?php echo $output;?>
</body>
</html>

<!--STYLE SECTION-->

<style>
    
@import url('https://fonts.googleapis.com/css?family=Amatic+SC');
    
.nav-tabs > li, .nav-pills > li {
float:none;
display:inline-block;
*display:inline; /* ie7 fix */
zoom:1; /* hasLayout ie7 trigger */
}

.nav-tabs, .nav-pills {text-align:center;}
 
#tab1 {
background-color:#FF9E00;
color:aliceblue;

} 

#tab2 {
background-color:#DA0088;
color:aliceblue;
}

form {
width: 30%;
float:right;
margin-right: 35%;

}

#upload {
margin-left: 90px;
}    

.jumbotron h2 {
color:aliceblue;
margin-top:12%;
font-family: 'Amatic SC', cursive;
font-size:3.4em;
}
    
/******************************MEDIA QUERIES***************************/

@media screen and (min-width: 320px) and (max-width:359px) {
    
#well1 {display: none;}

form  {float: left;margin-left: 30px;margin-bottom: 10px;width: 80%;}

#btn1,#btn2,#words {width: 100%;}

#formg2, #formg3 {margin-left: 55px;}
    
#formg7 {margin-left: 95px;}
    
#upload {margin-left:9px; width: 90%;}

form img {max-width: 100%;}
    
.jumbotron {width: 100%;}
    
#col6 {float:left;margin-left:-2px;}   
    
.input-group-addon {font-size: 0.9em;background-color:black;color:aliceblue;}

}
    
@media screen and (min-width:360px) and (max-width:374px) {
    
#well1 {display: none;}

form  {float: left;margin-left: 30px;margin-bottom: 10px;width: 80%;}
    
#btn1,#btn2,#words {width: 100%;}
    
#formg2, #formg3 {margin-left: 65px;}

#formg7 {margin-left: 110px;}
    
form img {max-width: 100%;}
    
.jumbotron {width: 100%;}

#col6 {float:left;margin-left:-2px;} 
    
#upload {margin-left:28px; width: 90%;}
    
.input-group-addon {font-size: 0.9em;background-color:black;color:aliceblue;}

}
    
@media screen and (min-width:375px) and (max-width:413px) {

#well1 {display: none;}

form  {float: left;margin-left: 35px;margin-bottom: 10px;width: 80%;}

#btn1,#btn2,#words {width: 100%;}

#formg2, #formg3 {margin-left: 65px;}

#formg7 {margin-left: 110px;}

#col6 {float:left;margin-left:90px;}
    
form img {max-width: 100%;}
    
.jumbotron {width: 100%;}

#col6 {float:left;margin-left:-22px;} 
    
#upload {margin-left:28px; width: 90%;}
    
.input-group-addon {font-size: 0.9em;background-color:black;color:aliceblue;}

}



@media screen and (min-width:414px) and (max-width:767px) {

#well1 {display: none;}

form  {float: left;margin-left: 35px;margin-bottom: 10px;width: 80%;}

#btn1,#btn2,#words {width: 100%;}

#formg2, #formg3 {margin-left: 80px;}

#formg7 {margin-left: 130px;}

#col6 {float:left;margin-left:90px;}
    
form img {max-width: 100%;}
    
.jumbotron {width: 100%;}

#col6 {float:left;margin-left:-22px;} 
    
#upload {margin-left:45px; width: 90%;}
    
.input-group-addon {font-size: 0.9em;background-color:black;color:aliceblue;}


}

@media screen and (min-width:768px) and (max-width:1023px) {

#well1 {display: none;}
    
.jumbotron {width:100%;}

.jumbotron h2 {margin-top: -20px;font-size: 8em;}

form  {float: left;margin-left: 70px;margin-bottom: 80px;width: 80%;}

#btn1,#btn2,#words {width: 70%;font-size: 2em;}

#formg2, #formg3 {margin-left: 134px;height:;font-size: 2em;}

#formg7 {margin-left: 240px;height: 50px;font-size: 2em;margin-bottom:12%;}

#formg7 input {width: 100%;}

form img {max-width: 50%;margin-bottom: 8%;}

.basic input {height: 50px;font-size: 2em;}
    
#formg4, #formg5, #formg6 {font-size: 2em;}

#formg6 {margin-bottom: 1%;}
    
#heading {font-size: 1.2em;margin-left: 14px;}
    
#curimg {font-size: 3em;}

#formg2 select {height:50px;} 
    
#formg3 select {height:50px;}
    
#formg4 input {height: 50px;}
    
#formg5 input {height: 50px;}
    
#formg6 input {height: 50px;}
    
.input-group-addon {font-size: 0.9em;background-color:black;color:aliceblue;}
    
#col6 {float:left;margin-left:-22px;} 
    
#upload {margin-left:195px; width: 90%;}

#formphoto{margin-bottom:-19%;}
    
}

@media screen and (min-width:1024px) and (max-width:1279px) {
    
#well1 {
display: block;
background-color:#2DDB9C;
width:50%;
margin-left: 25%;
margin-top:-27px;
}

.jumbotron h2 {display:none;}
    
form  {float: left;margin-left: 35%;width: 30%;}
    
#btn1,#btn2,#words {width: 100%;font-size: 1.0em;}
    
.basic input {height: 30px;font-size: 1.2em;}

#tab1, #tab2 {font-size: 1.2em;}
    
form img {max-width: 100%; margin-bottom: 20px;}
    
#formg2, #formg3 {margin-left: 90px;height:;font-size: 1.2em;}

#formg4, #formg5, #formg6 {font-size: 1.2em;width:100%;margin-left:1.2px;}
    
#formg7 {float:right; margin-right:40%; height: 50px;font-size: 1.2em;margin-bottom:14%;}

#formg7 input {width: 100%;}
    
.input-group-addon {font-size: 0.9em;background-color:black;color:aliceblue;}
    
#formg2 select {height:40px;} 
    
#formg3 select {height:40px;}
    
#formg4 input {height: 40px;}
    
#formg5 input {height: 40px;}
    
#formg6 input {height: 40px;}
    
#heading {font-size: 1.2em;margin-left: 14px;}

#upload {margin-left:25%; width: 90%;}
    
#curimg {font-size: 1.2em;}

#col6 {float:left;margin-left:90px;}
    
    
    
}

@media screen and (min-width: 1280px) and (max-width: 1439px) {
    
#well1 {
width: 50%;
margin-left:300px;
background-color:#2DDB9C;
margin-top:-27px;
}

.jumbotron h2 {display: none;}
 
form img {max-width: 100%; margin-bottom: 10px;}
    
#formg7 {float:right; margin-right:320px; height: 50px;font-size: 1.2em;margin-bottom:12%;}

#formg7 input {width: 100%;}
    
#formg2, #formg3 {margin-left: 87px;height:;font-size: 1.2em;}
    
#formg2 select {width:100%;} 
    
#formg3 select {width:100%;}
    
#formg4, #formg5, #formg6 {font-size: 1.2em;}
    
#formg7 {margin-right:140px; font-size: 1.2em;margin-bottom:10%;}

#formg7 input {width: 100%;}
    
#btn1, #btn2, #words {
padding: 10px 50px 10px 50px;
font-size: 15px;
width: 90%;
}

#btn2 {
margin-top: 20px;
margin-left: 10px;

}

.input-group-addon {font-size: 0.9em;background-color:black;color:aliceblue;}

#heading {font-size: 1.2em;margin-left: 14px;}

#col6 {float:left;margin-left:90px;}
    
    
}    
/*****EXCEPTIONALLY LARGER DISPLAYS*******/    
    

@media screen and (min-width: 1440px) {
.jumbotron h2 {display: none;}

#well1 {
width: 50%;
margin-left:370px;
background-color:#2DDB9C;
margin-top:-27px;
}

form img {max-width: 100%; margin-bottom: 10px;}
    
#formg2, #formg3 {margin-left: 87px;height:;font-size: 1.6em;}
    
#formg2 select {width:100%;} 
    
#formg3 select {width:100%;}
    
#formg7 {margin-left:140px; font-size: 1.2em;margin-bottom:10%;}

#formg4, #formg5, #formg6 {font-size: 1.2em;}

#col6 {float:left;margin-left:90px;}
    
.input-group-addon {font-size: 0.9em;background-color:black;color:aliceblue;}
    
#btn1, #btn2,#words {
padding: 10px 50px 10px 50px;
font-size: 15px;
width: 90%;
}

}

</style>

<script type="text/javascript">
//personal
$(document).ready(function(){
    $("#tab2").focusin(function(){
        $(this).css("background-color", "#55236C");
        $(this).css("color", "aliceblue");
    });
    $("#tab2").focusout(function(){
        $(this).css("background-color", "#DA0088");
        $(this).css("color", "aliceblue");
    });
});
    

function readURJ(input) {
    if (input.files && input.files[0]) {
            var reader = new FileReader();
                reader.onload = function (e) {
                    $('#mainImage').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>

