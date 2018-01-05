<?php require('../includes/db.php');?>
<?php require('../includes/sess_check.php');?>
<?php include('../includes/authen.php');?>
<?php include('../includes/navi.php');?>


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
    <title>Home</title>
    <!--bootstrap included via navi.php -->
    
</head>
<body>

<!--layout of home-->

<div class="jumbotron text-center" id="jumbotron">
  <a href="https://www.leafly.com/" style="text-decoration:none;" data-toggle="tooltip" title="Click Me For A Surprise" target="_blank"><h1 id="q">?</h1></a>
    <h1 id="h1">Home Page</h1>
    <h4 id="h4">Welcome <?php  echo $rws['firstname'];?></h4> <!--dynamic-->
</div>

<div class="container text-center">    
  <div class="row">
    <div class="col-sm-3 well" style="background-color:#1abc9c;" id="col3">
      <div class="well" style="background-color:#9AE7AD;border-color:#9AE7AD;" id="well1">
        <p style="color:black;cursor:default;font-weight:800;" id="p"><?php echo $_SESSION['nickname'] = $nickname;?></p>
      <img src="../photos/<?php echo $imageMain;?>" class="img-circle"/>
      </div>
      
        <!--THEME CHANGER:JQUERY BELOW-->
        <h3 style="cursor:default;color:white;font-family:arial;" id="change">Change Your Theme</h3>
        <hr>
        <button type="button" id="t1" class="btn btn-warning">Mysterious</button><br><br>
        <button type="button" id="t2" class="btn btn-warning">Under The Stars</button><br><br>
        <button type="button" id="t3" class="btn btn-warning">High In The Sky</button><br><br>
        <button type="button" id="t4" class="btn btn-warning">minimalism</button><br><br>
        <button type="button" id="t5" class="btn btn-warning">Original</button>
    </div>
    
    
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default text-left">
            <div class="panel-body text-center">
              <h1 id="feed">My Feed</h1>
            </div>
          </div>
        </div>
      </div>
      
      <!--FEED/STATUS UPDATES-->
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default text-left">
            <div class="panel-body">
              <form method="POST">
              <textarea class="form-control" rows="2" id="comment" placeholder="Hey, <?php echo $rws['firstname'];?>! What's New?"></textarea>
               <br>
                <button type="submit" class="btn btn-success" id="updates"> Let Your Buds Know What's Up!</button>
                 </form>
            </div>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           Avatar
           <a href="profile.php?user=<?php echo $usrnm ?>"><?php echo $usrnm;?></a>
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            dynamically add post feed
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           Avatar
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
                        dynamically add post feed

          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
          Avatar
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
                        dynamically add post feed

          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           Avatar
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
                        dynamically add post feed

          </div>
        </div>
      </div>     
    </div>
    <!--consider endless scrolling-->
    <div class="col-sm-2 well"  id="col2" style="background-color:#9AE7AD;">
      <div class="thumbnail box" style="background-color:white;">
        <strong>Trending</strong>
        <br><br>
        <p>dynamically add popular posts.</p><br>
        <a href="forum.php"><button class="btn btn-success" id="topics"><strong>Find More Topics</strong> 
        <b>More</b>
        
        </button></a>
      </div>  
      
      <!--SIDE NAV FRIENDS(buds) and Popular Posts-->
      <div class="thumbnail box" style="background-color:white;">
          <strong>My Buds</strong>
          <br><br>
<!--          <p>dynamically add friends list.</p>-->
          <br>
          <a href="forum.php"><button class="btn btn-warning" id="buds"><strong>See All Buds</strong>
          <b>All</b>
          </button></a>
      </div>    
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
    <!----------------------add/view/delete images---------------->
    <div class="col-sm-2 well" id="col2" style="background-color:white;border:2px solid white;">
        <p style="cursor:default;color:purple;">View Add Delete Images</p>
        <span class="glyphicon glyphicon-arrow-down"></span><br>
        <button type="button" class="btn btn-primary" id="btn3" data-toggle="modal" data-target="#images"><span class="glyphicon glyphicon-camera"></span></button>
    </div>
  </div>
</div>
<div class="panel panel-default text-center" id="panel">
<div class="panel-body"><p>&copy; <z>P</z><la>LA</la><v>N</v><w>T</w><u>r</u> <?php echo date('Y'); ?></p></div>
</div>


<!----IMAGE MODAL---->
<div class="modal fade" id="images" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content text-center">
            <div class="modal-header text-center" style="background-color:#741878;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 style="color:aliceblue;cursor:default;">My Images</h2>
            </div>
            <div class="modal-body">
                <h4 style="color:#A241E1;cursor:default;">Profile Image</h4>
                 <img src="../photos/<?php echo $imageMain; ?>" class="img-circle" style="width:20%;"/>
                 <hr>
                 <h4 style="color:#C9004F;cursor:default;">My Gallery</h4>
                 <h5>Upload Images Here - These Will Appear On Your Profile Page</h5>
                 <!---Below we have 10 forms. The max number of photo gallery photos is 10--->
                 
                 <!--a good idea, is to have small "file uploads" underneath the photos that are hidden and triggered when a user clicks on an image. Then, they can click a small, miniature sized green "check" sign to indicate that they want to upload this image. Or, something similar." 
                 
                 <!--form1-->
                 <div class="well cover">
                <form method="POST" enctype="multipart/form-data" class="form">
                 <img src="../gallery/<?php echo $imageOne; ?>" class="img-rounded browse" alt="Upload Image" style="max-width:20%;cursor:pointer;" id="first"  data-toggle="tooltip" title="Click To Change Image"/>
                 <input type="file" id="my_file" style="display: none;" name="imgOne"  onchange="readURL(this);" />
                 <button type="submit" class="btn btn-success save" name="save1" >Save</button><br><br>
                 <button type="submit" class="btn btn-danger delete" name="delete1" >Delete</button>
                </form>
                </div>
                
            <!--form2-->
            <div class="well cover">
            <form method="POST" enctype="multipart/form-data" class="form">
                 <img src="../gallery/<?php echo $imageTwo; ?>"  class="img-rounded browse" alt="Upload Image" style="max-width:20%;cursor:pointer;"  id="second" data-toggle="tooltip" title="Click To Change Image">
                 <input type="file" id="my_file2" style="display: none;" name="imgTwo" onchange="readURA(this);"/>
                 <button type="submit" class="btn btn-success save" name="save2">Save</button><br><br>
                 <button type="submit" class="btn btn-danger delete" name="delete2" >Delete</button>
            </form>
            </div>
            
            <!--form3-->
            <div class="well cover">
            <form method="POST" enctype="multipart/form-data" class="form">
                  <img src="../gallery/<?php echo $imageThree; ?>"  class="img-rounded" alt="Upload Image" style="max-width:20%;cursor:pointer;"  id="third" data-toggle="tooltip" title="Click To Change Image">
                 <input type="file" id="my_file3" style="display: none;" name="imgThree" onchange="readURB(this);"/>
                 <button type="submit" class="btn btn-success save" name="save3">Save</button><br><br>
                 <button type="submit" class="btn btn-danger delete" name="delete3">Delete</button>
            </form>
            </div>
            
            <!--frorm4-->
            <div class="well cover">
            <form method="POST" enctype="multipart/form-data" class="form">
                 <img src="../gallery/<?php echo $imageFour; ?>"  class="img-rounded" alt="Upload Image" style="max-width:20%;cursor:pointer;"  id="four" data-toggle="tooltip" title="Click To Change Image">
                 
                 <input type="file" id="my_file4" style="display: none;" name="imgFour" onchange="readURC(this);"/>
                 <button type="submit" class="btn btn-success save" name="save4">Save</button><br><br>
                 <button type="submit" class="btn btn-danger delete" name="delete4">Delete</button>
            </form>
            </div>
            <!--form5-->
            <div class="well cover">
            <form method="POST" enctype="multipart/form-data" class="form">
                 <img src="../gallery/<?php echo $imageFive; ?>"  class="img-rounded" alt="Upload Image" style="max-width:20%;cursor:pointer;" id="five"  data-toggle="tooltip" title="Click To Change Image">
                 
                 <input type="file" id="my_file5" style="display: none;" name="imgFive" onchange="readURD(this);"/>
                 <button type="submit" class="btn btn-success save" name="save5">Save</button><br><br>
                 <button type="submit" class="btn btn-danger delete" name="delete5">Delete</button>
            </form>
            </div>
            <!--form6-->
            <div class="well cover">
            <form method="POST" enctype="multipart/form-data" class="form">
                  <img src="../gallery/<?php echo $imageSix; ?>"   class="img-rounded" alt="Upload Image" style="max-width:20%;cursor:pointer;"  id="six" data-toggle="tooltip" title="Click To Change Image">
                 
                 <input type="file" id="my_file6" style="display: none;" name="imgSix" onchange="readURE(this);"/>
                 <button type="submit" class="btn btn-success save" name="save6">Save</button><br><br>
                 <button type="submit" class="btn btn-danger delete" name="delete6">Delete</button>
            </form>
            </div>
            <!--form7-->
            <div class="well cover">
            <form method="POST" enctype="multipart/form-data" class="form">
                  <img src="../gallery/<?php echo $imageSeven; ?>"  class="img-rounded" alt="Upload Image" style="max-width:20%;cursor:pointer;" id="seven" data-toggle="tooltip" title="Click To Change Image">
                 
                 <input type="file" id="my_file7" style="display: none;" name="imgSeven" onchange="readURF(this);"/>
                 <button type="submit" class="btn btn-success save" name="save7">Save</button><br><br>
                 <button type="submit" class="btn btn-danger delete" name="delete7">Delete</button>
            </form>
            </div>
            <!--form8--->
            <div class="well cover">
            <form method="POST" enctype="multipart/form-data" class="form">
                  <img src="../gallery/<?php echo $imageEight;?>"   class="img-rounded" alt="Upload Image" style="max-width:20%;cursor:pointer;" id="eight"  data-toggle="tooltip" title="Click To Change Image">
                 
                 <input type="file" id="my_file8" style="display: none;" name="imgEight" onchange="readURG(this);"/>
                 <button type="submit" class="btn btn-success save" name="save8">Save</button><br><br>
                 <button type="submit" class="btn btn-danger delete" name="delete8">Delete</button>
            </form>
            </div>
            <!--form9-->
            <div class="well cover">
            <form method="POST" enctype="multipart/form-data" class="form">
                  <img src="../gallery/<?php echo $imageNine; ?>"  class="img-rounded" alt="Upload Image" style="max-width:20%;cursor:pointer;" id="nine" data-toggle="tooltip" title="Click To Change Image">
                 
                 <input type="file" id="my_file9" style="display: none;" name="imgNine" onchange="readURH(this);"/>
                 <button type="submit" class="btn btn-success save" name="save9">Save</button><br><br>
                 <button type="submit" class="btn btn-danger delete" name="delete9">Delete</button>
            </form>
            </div>
            <!--form10-->
            <div class="well cover">
            <form method="POST" enctype="multipart/form-data" class="form">
                 <img src="../gallery/<?php echo $imageTen; ?>"  class="img-rounded" alt="Upload Image" style="max-width:20%;cursor:pointer;" id="ten" data-toggle="tooltip" title="Click To Change Image">
                 
                 <input type="file" id="my_file10" style="display: none;" name="imgTen" onchange="readURI(this);"/>
                 <button type="submit" class="btn btn-success save" name="save10">Save</button><br><br>
                 <button type="submit" class="btn btn-danger delete" name="delete10">Delete</button>
                
            </form>
            </div>
            
            </div>
            <div class="modal-footer" class="form">
                
                <!---CLOSE BUTTOMN--->
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
               
            </div>
        </div>
    </div>
</div>

</body>
</html>


   
<style>

/*theme buttons*/
@import url('https://fonts.googleapis.com/css?family=Montserrat');
#t1 {
background-color:black;
color:#FF0800;
}
#t1:hover {
opacity: 0.9;
}
#t2 {
background-color:#250958;
color:aliceblue;
}

#t2:hover {
opacity: 0.9;
}

#t3 {
background-color:#1490EC;
color:#FFEB20;
}
#t3:hover {
opacity: 0.9;
}

#t4 {
background-color:#FFFFFF; 
font-weight: 200;
color:black;
border-color:black;
}
    
#t5 {
border-color:black;
}
    
#q {
color:aliceblue;
font-size:20em;
display: none;

}
.col-sm-7 .well {
background-color:white;
}
    
#feed {
cursor:default;
}
    
  
.form {
display: inline;
} 

.form img:hover {
opacity: 0.8;
}
 
.save {
width:50%;
margin-top:9%;
}
.delete {
width: 50%;
margin-left:20%;
}

.cover {
background-color:#FFF3A4;
border:2px solid #FFF3A4;
}

    .save, .delete {
        display:block;
        margin-left:24%;
    }
  
/*media queries below*/
/*@import url('https://fonts.googleapis.com/css?family=Montserrat');*/
    
.well {font-family: 'Montserrat', sans-serif;}
    
.well img {max-width: 200px;}
    
.container {margin-bottom:100px;}
    
.jumbotron {background-color:#1abc9c;margin-top:-20px;cursor:default;}
    
.jumbotron h4 {color:aliceblue;}
    
#panel {background-color:#25023C;cursor:default;}
    
.panel p {color:aliceblue;}
    
.panel-body z {color:#0453af;}
    
.panel-body la {color: #04af4a;}
    
.panel-body v {color: #f8255b;}
    
.panel-body w {color: #f8ab25;}

.panel-body u {color: aliceblue;}

.panel-body u:hover {color: red;}
    
/**MEDIA QUERIES**/
@media screen and (min-width:320px) {
.thumbnail a b {display:none;}
        
.thumbnail a strong {display:block;}
}
  
@media screen and (min-width:768px) and (max-width:1023px) {
.container img {max-width: 100%;}
    
.thumbnail p {font-size: 10px;}
    
.thumbnail button {width:70%;}

.thumbnail a b {display:block;}
    
.thumbnail a strong {display:none;}
    
}  
    
@media screen and (min-width:1024px) and (max-width:1279px) {
.container img {max-width: 100%;}
    
.thumbnail button {width:70%;}

.thumbnail a strong {display:none;}
    
.thumbnail a b {display:block;}
    
}   
    
@media screen and (min-width:1280px) {
.thumbnail a strong {display:block;}
        
.thumbnail a b {display:none;}
    
}
    
</style>

<script type="text/javascript">
//mysterious    
    
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
    
    
$(document).ready(function(){
    $("#t1").click(function(){
        $(".jumbotron").css("background-color", "black");
        $(".jumbotron").css("font-family", "arial");
        $("#h1").css("color", "red");
        $("#h4").css("color", "white");
        $("body").css("background-color", "black");
        $("#updates").css("background-color", "black");
        $("#updates").css("color", "white");
        $("#buds").css("background-color", "black");
        $("#buds").css("color", "red");
        $("#topics").css("background-color", "black");
        $("#topics").css("color", "red");
        $("#q").css("display", "block");
        $("#updates").css("font-family", "arial");
        $("#feed").css("font-family", "arial");
        
        //colums
        
        $("#col3").css("background-color", "black");
        $("#col3").css("font-family", "arial");
        $("#well1").css("background-color", "black");
        $("#well1").css("border-color", "red");
        $("#p").css("color", "white");
        $("#col2").css("background-color", "black");
        $(".box").css("border-color", "red");
        $(".box").css("font-family", "arial");
        $("#change").css("color", "white");
        $("#change").css("font-family", "arial");

    });
});

//under the stars
$(document).ready(function(){
    $("#t2").click(function(){
        $(".jumbotron").css("background-color", "#250958");
        $(".jumbotron").css("font-family", "arial");
        $("#h1").css("color", "white");
        $("body").css("background-color", "#7003EC");
        $("#updates").css("background-color", "#7003EC");
        $("#updates").css("color", "white");
        $("#updates").css("font-family", "arial");
        $("#buds").css("background-color", "#7003EC");
        $("#buds").css("color", "white");
        $("#topics").css("background-color", "#7003EC");
        $("#topics").css("color", "white");
        $("#q").css("display", "none");
         $("#feed").css("font-family", "arial");
         $("#h4").css("color", "white");
        
        //columns
         $("#col3").css("background-color", "#250958");
        $("#well1").css("background-color", "#7003EC");
        $("#well1").css("border-color", "white");
        $("#p").css("color", "white");
        $("#col2").css("background-color", "#7003EC");
        $(".box").css("border-color", "white");
        $(".box").css("font-family", "arial");
        $("#t1").css("font-family", "arial");
        $("#t2").css("font-family", "arial");
        $("#t3").css("font-family", "arial");
        $("#t4").css("font-family", "arial");
        $("#t5").css("font-family", "arial");
        $("#change").css("font-family", "arial");
        $("#change").css("color", "white");

    });
    
});
    
//high in the sky
$(document).ready(function(){
    $("#t3").click(function(){
        $(".jumbotron").css("background-color", "#1490EC");
        $(".jumbotron").css("font-family", "arial");
        $("#h1").css("color", "white");
        $("body").css("background-color", "#D2F0FF");
        $("#updates").css("background-color", "#FFE720");
        $("#updates").css("color", "black");
        $("#updates").css("font-family", "arial");
        $("#buds").css("background-color", "#FFE720");
        $("#buds").css("color", "black");
        $("#topics").css("background-color", "#FFE720");
        $("#topics").css("color", "black");
        $("#q").css("display", "none");
        $("#feed").css("font-family", "arial");
        
        
        //colums
        
         $("#col3").css("background-color", "#1490EC");
        $("#well1").css("background-color", "#D2F0FF");
        $("#well1").css("border-color", "white");
        $("#p").css("color", "black");
        $("#col2").css("background-color", "#1490EC");
        $(".box").css("border-color", "white");
        $(".box").css("font-family", "arial");
        $("#change").css("font-family", "arial");
        $("#change").css("color", "yellow");
        $("#t1").css("font-family", "arial");
        $("#t2").css("font-family", "arial");
        $("#t3").css("font-family", "arial");
        $("#t4").css("font-family", "arial");
        $("#t5").css("font-family", "arial");
    });
    
});
    
//minimalism
$(document).ready(function(){
    $("#t4").click(function(){
        $(".jumbotron").css("background-color", "white");
        $(".jumbotron").css("font-family", "courier");
        $("#h1").css("color", "black");
        $("#h4").css("color", "black");
        $("body").css("background-color", "white");
        $("#updates").css("background-color", "white");
        $("#updates").css("color", "black");
        $("#updates").css("border-color", "black");
        $("#updates").css("font-family", "courier");
        $("#buds").css("background-color", "white");
        $("#buds").css("color", "black");
        $("#buds").css("border-color", "black");
        $("#topics").css("background-color", "white");
        $("#topics").css("color", "black");
        $("#topics").css("border-color", "black");
           $("#q").css("display", "none");
        $("#feed").css("font-family", "courier");
        
        //colums
        
        $("#col3").css("background-color", "white");
        $("#col3").css("font-family", "courier");
        $("#well1").css("background-color", "black");
        $("#well1").css("border-color", "white");
        
        $("#p").css("color", "white");
        $("#col2").css("background-color", "black");
        $(".box").css("border-color", "white");
        $(".box").css("font-family", "courier");
        $("#change").css("color", "black");
        $("#change").css("font-family", "courier");
        
        
    });
    
});
    
//original 
$(document).ready(function(){
    $("#t5").click(function(){
        $(".jumbotron").css("background-color", "#1abc9c");
        $(".jumbotron").css("font-family", "arial");
        $("#h1").css("color", "black");
        $("#h4").css("color", "white");
        $("body").css("background-color", "white");
        $("body").css("font-family", "arial");
        $("#change").css("font-family", "arial");
        $("#change").css("color", "white");
        $("#col3").css("font-family", "'Montserrat'");
        $("#feed").css("font-family", "arial");
       
        
        $("#updates").css("border-color", "#5cb85c");
        $("#updates").css("background-color", "#5cb85c");
        $("#updates").css("color", "white");
        $("#updates").css("font-family", "arial");
        
        
        $("#buds").css("background-color", "#FFA020");
        $("#buds").css("color", "white");
        $("#buds").css("border-color", "#FFA020");
        $("#buds").css("opacity", "0.8");
        $("#buds").css("font-family", "arial");
        
        
        $("#topics").css("background-color", "#5cb85c");
        $("#topics").css("color", "white");
        $("#topics").css("border-color", "#5cb85c");
        $("#q").css("display", "none");
        $(".box").css("font-family", "'Montserrat'");
        $(".box").css("background-color", "white");
        $(".box").css("border-color", "white");
        
        //original colours
        $("#col3").css("background-color", "#1abc9c");
        $("#well1").css("background-color", "#9AE7AD");
        $("#well1").css("border-color", "#9AE7AD");
        $("#p").css("color", "black");
        $("#col2").css("background-color", "#9AE7AD");
       
        
    });
    
});
    
$(document).ready(function(){
    $("#first").click(function() {
       $("input[id='my_file']").click();
        
        
    });
    
    $("#second").click(function(){
        $("input[id='my_file2']").click();
        
    });
    
     $("#third").click(function(){
        $("input[id='my_file3']").click();
        
    });
    
     $("#four").click(function(){
        $("input[id='my_file4']").click();
        
    });
    
     $("#five").click(function(){
        $("input[id='my_file5']").click();
        
    });
    
     $("#six").click(function(){
        $("input[id='my_file6']").click();
        
    });
     $("#seven").click(function(){
        $("input[id='my_file7']").click();
         
    });
     $("#eight").click(function(){
        $("input[id='my_file8']").click();
        
    });
    
     $("#nine").click(function(){
        $("input[id='my_file9']").click();
        
    });
     $("#ten").click(function(){
        $("input[id='my_file10']").click();
        
    });

});
    
    

//image preview
    
function readURL(input) {
    if (input.files && input.files[0]) {
            var reader = new FileReader();
                reader.onload = function (e) {
                    $('#first').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    
function readURA(input) {
    if (input.files && input.files[0]) {
            var reader = new FileReader();
                reader.onload = function (e) {
                    $('#second').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    
function readURB(input) {
    if (input.files && input.files[0]) {
            var reader = new FileReader();
                reader.onload = function (e) {
                    $('#third').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }  
    
    
function readURC(input) {
    if (input.files && input.files[0]) {
            var reader = new FileReader();
                reader.onload = function (e) {
                    $('#four').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    
function readURD(input) {
    if (input.files && input.files[0]) {
            var reader = new FileReader();
                reader.onload = function (e) {
                    $('#five').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

    
function readURE(input) {
    if (input.files && input.files[0]) {
            var reader = new FileReader();
                reader.onload = function (e) {
                    $('#six').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    
    
    
function readURF(input) {
    if (input.files && input.files[0]) {
            var reader = new FileReader();
                reader.onload = function (e) {
                    $('#seven').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
function readURG(input) {
    if (input.files && input.files[0]) {
            var reader = new FileReader();
                reader.onload = function (e) {
                    $('#eight').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    
function readURH(input) {
    if (input.files && input.files[0]) {
            var reader = new FileReader();
                reader.onload = function (e) {
                    $('#nine').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    
function readURI(input) {
    if (input.files && input.files[0]) {
            var reader = new FileReader();
                reader.onload = function (e) {
                    $('#ten').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>


