<?php require('../includes/db.php');?>
<?php require('../includes/sess_check.php');?>
<?php include('../includes/authen.php');?>
<?php include('../includes/navi.php');?>

<?php

$sql = "SELECT * FROM user where nickname = '$nickname'";
$result = mysqli_query($dataBase,$sql) or die(mysqli_error($dataBase));
$rws = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Privacy</title>
</head>
<body>
 <div class="jumbotron text-center" style="cursor:default;">
     <div class="well" id="well1">
         <h1>Privacy</h1>
         <span class="glyphicon glyphicon-eye-open" style="font-size:2em;"></span>
         <span class="glyphicon glyphicon-eye-close" style="font-size:2em;"></span>
     </div>
     <h4 style="color:aliceblue;font-size:3em;"><?php echo $_SESSION['nickname'] = $nickname;?></h4>
      <img src="../photos/<?php echo $rws['image'];?>" class="img-circle" style="width:10%;"/>

 </div>   
 
 <div class="container text-center">
     <h2 style="cursor:default;">Decide <z>Who</z> <y>Sees</y> <x>What</x></h2>
     <hr style="border: 1px solid gray;height: 2px; background-color:white;">
       <form method="POST">
        <div class="well">
           <!---GENDER-->
            <h4 style="cursor:default;">Who Can See Your Gender?</h4> 
            <div class="form-group" style="width:15%;margin-left:43%;">
                <input class="form-control" type="text"  placeholder="<?php echo $rws['sex'];?>" disabled />
            </div>
            
            <!--SELECT-->
            <div class="form-group" style="width:15%;margin-left:43%;">
                <select class="form-control">
                    <option>Everyone On Plantr</option>
                    <option>Only My Buds</option>
                    <option>No One</option>
                </select>
                
            </div>
            
            <!---STATUS--->
             <h4 style="cursor:default;">Who Can See Your Status?</h4> 
            <div class="form-group" style="width:15%;margin-left:43%;">
                <input class="form-control" type="text"  placeholder="<?php echo $rws['status'];?>" disabled />
            </div>
             <!--SELECT-->
            <div class="form-group" style="width:15%;margin-left:43%;">
                <select class="form-control">
                    <option>Everyone On Plantr</option>
                    <option>Only My Buds</option>
                    <option>No One</option>
                </select>
                
            </div>
            
            <!---EDUCATION-->
             <h4 style="cursor:default;">Who Can See Your Education?</h4> 
            <div class="form-group" style="width:15%;margin-left:43%;">
                <input class="form-control" type="text"  placeholder="<?php echo $rws['education'];?>" disabled />
            </div>
             <!--SELECT-->
            <div class="form-group" style="width:15%;margin-left:43%;">
                <select class="form-control">
                    <option>Everyone On Plantr</option>
                    <option>Only My Buds</option>
                    <option>No One</option>
                </select>
                
            </div>
            <!---PROFESSION-->
            
             <h4 style="cursor:default;">Who Can See Your Profession?</h4> 
            <div class="form-group" style="width:15%;margin-left:43%;">
                <input class="form-control" type="text"  placeholder="<?php echo $rws['profession'];?>" disabled />
            </div>
             <!--SELECT-->
            <div class="form-group" style="width:15%;margin-left:43%;">
                <select class="form-control">
                    <option>Everyone On Plantr</option>
                    <option>Only My Buds</option>
                    <option>No One</option>
                </select>
                
            </div>
            <!---LOCATION-->
             <h4 style="cursor:default;">Who Can See Your Location?</h4> 
            <div class="form-group" style="width:15%;margin-left:43%;">
                <input class="form-control" type="text"  placeholder="<?php echo $rws['location'];?>" disabled />
            </div>
             <!--SELECT-->
            <div class="form-group" style="width:15%;margin-left:43%;">
                <select class="form-control">
                    <option>Everyone On Plantr</option>
                    <option>Only My Buds</option>
                    <option>No One</option>
                </select>
                
            </div>
            <!---BIO--->
             <h4 style="cursor:default;">Who Can See Your Bio?</h4> 
            <div class="form-group" style="width:15%;margin-left:43%;">
                <input class="form-control" type="text"  placeholder="<?php echo $rws['bio'];?>" disabled />
            </div>
             <!--SELECT-->
            <div class="form-group" style="width:15%;margin-left:43%;">
                <select class="form-control">
                    <option>Everyone On Plantr</option>
                    <option>Only My Buds</option>
                    <option>No One</option>
                </select>
                
            </div>
            <!--AGE--->
             <h4>Who Can See Your Age?</h4> 
            <div class="form-group" style="width:15%;margin-left:43%;">
                <input class="form-control" type="text"  placeholder="<?php echo $rws['ageTwo'];?>" disabled />
            </div>
             <!--SELECT-->
            <div class="form-group" style="width:15%;margin-left:43%;">
                <select class="form-control">
                    <option>Everyone On Plantr</option>
                    <option>Only My Buds</option>
                    <option>No One</option>
                </select>
                
            </div>
            <button type="submit" class="btn btn-success" style="width:15%;margin-left:10px;">Save</button>
            <br><br>
            <button type="button" class="btn btn-danger btn-primary" data-toggle="modal" data-target="#blocked">Click To View Blocked Users</button>
        </div>
     </form>
     
     
     
     <!--modal for blocked users-->
     <div class="modal fade" id="blocked" role="dialog">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-title">
                     <h4>Blocked Users</h4>
                 </div>
                 <div class="modal-body">
                 
                <div class="form-group" style="width:50%;margin-left:26%;">
                <select class="form-control">
                   <option>Click To View Users You've Blocked</option>
                    <option>James101</option>
                    <option>ODavis</option>
                    <option>KillerSally21</option>
                    <option>KTrollStyle</option>
                </select>
                </div>
                <hr>
                
                <form method="POST">
                <h4>Add A User To Your Blocked List</h4>
                <div class="form-group" style="width:50%;margin-left:26%;">
                    <input type="text" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Block User</button>
                </form>
                <br>
               <i> <figcaption>Has someone been harassing you on Plantr? Don't be afraid to report any behaviour you find harassing, threatening or a danger. Visit the <a href="support.php">Plantr Support</a> section to find out more information on how to report violating activity.</figcaption></i>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Exit</button>
                 </div>
             </div>
         </div>
     </div>
 </div>
 
  <div class="panel panel-default text-center">
  <div class="panel-body"><p>&copy; <z>P</z><la>LA</la><v>N</v><w>T</w><u>r</u> <?php echo date('Y'); ?></p></div>
</div>

</body>
</html>

<style>
    
@import url('https://fonts.googleapis.com/css?family=Shadows+Into+Light');


body {background-color:#5E009B;}

.container h2 {
color:aliceblue;
font-size: 3em;
font-family: 'Shadows Into Light', cursive;

}

#well1 {
background-color:#FFEA54;
border: 2px solid #FFEA54;
}


.jumbotron {background-color:#54FF56;}

x {color:red;}

y {color:#84F66D;}

z {color:gold;}

    
.panel {
background-color:#25023C;
cursor:default;
    border:2px solid #25023C;
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
   
</style>





















