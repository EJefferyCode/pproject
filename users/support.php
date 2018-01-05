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
    <title>Support</title>
</head>
<body>
    <div class="jumbotron text-center">
        <div class="well" id="well1">
            <h1 style="cursor:default;">Support</h1>
        </div>
    </div>
    <div class="container text-center">
        <h2 style="cursor:default;color:#513205;font-family: 'Bungee', cursive;">Something happened. Let's see what we can do.</h2>
        <hr style="border: 1px solid gray;height: 2px; background-color:black;">
        <div class="well" id="well2">
            <h2 style="cursor:default;">What happened?</h2>
            <hr style="border: 1px solid gray;height: 0.2px; background-color:grey;">
            
            <button type="button" class="btn btn-primary" id="trig1">I want to delete my account</button>
            <div class="well" id="panel1">
                <b><p style="width: 50%;margin-left:25%;">We totally understand if you're just not feeling it anymore. If you want to delete your account permanently, or simply take a break, you can do that here.</p></b>
                <form method="POST">
                <button type="submit" class="btn btn-info">Close My Account Temporarily</button><br><br>
                <button type="submit" class="btn btn-danger">Close My Account Permanently</button>
                </form>
                <br>
                <span class="glyphicon glyphicon-heart" style="font-size:4em;color:red;"></span>
                <div class="well" id="welle" style="width: 40%;margin-left:30%;cursor:default;background-color:#FFDAA4;">
                    <i><h4>With Love, Emily Jeffery.<br>Creator of Plantr</h4></i>
                </div>
            </div>
            <br><br>
            <!--slidedown info-->
            <button type="button" class="btn btn-danger" id="trig2">Someone's compromised my account</button>
            <div class="well" id="panel2">
                <b><p style="width: 50%;margin-left:25%;">Having your account compromised is a serious issue that we here at Plantr take <i>seriously</i>.<br>If someone has compromised your account in ways, such as: </p></b>
                <ul style="list-style:none;">
                    <li>Stealing/changing your password</li>
                    <li>Logging into your account without permission</li>
                </ul>
                <b><p style="width: 50%;margin-left:25%;"> there are ways to combat this. First and foremost, at the first signs of compromise, it is important to reset your password. Resetting your password can instantly prevent anyone who has your old password from using it to login again. </p></b>
                <p style="width: 50%;margin-left:25%;"> Second, you should send us a message here at Plantr to let us know what's been going on. Click, <a href="#">here</a> to contact us here at Plantr.</p>
            </div>
            <br><br>
            <!--slidedown info-->
            <button type="button" class="btn btn-warning" id="trig3">Something on the site is broken (links, graphics, etc.)</button>
            <div class="well" id="panel3">
                <b><p style="width: 50%;margin-left:25%;"> Unfortunately, sometimes weird things happen, like images not loading correctly, or links simply not working the way they're supposed to. Plantr is a community of users and creators, and it's always appreciated when a user let's the staff know when something's off. If you're experiencing any kind of issue like this, please let us know asap and we'll work on correcting it.</p></b>
                
                <p style="width: 50%;margin-left:25%;">Click <a href="#">here</a> to send us a message. Let us know what the problem is, and where it's occuring.</p> 
            </div>
            <br>
            <br>
            <!--slidedown info-->
            <button type="button" class="btn btn-danger" style="background-color:#77066D;border:1px solid #77066D;" id="trig4">I can't post anything</button>
            <div class="well" id="panel4">
                <b><p style="width: 50%;margin-left:25%;">If your account is in good standing, there shouldn't necessarily be a problem with posting to forums, your bud's feed, etc. Sometimes, it's important to check your internet connecting to make sure that it's working. If your internet connection is fine, the issue may be with the status of your account.</p></b>
                <b><p style="width: 50%;margin-left:25%;">If your account is in the red or black zone, that means that you've been restricted from posting from the forum for 24-48 hours until we investiage the issue. If you're not able to post to a specific bud, make sure that you have permission to post to their account.</p></b>
                
                 <p style="width: 50%;margin-left:25%;">If your account is in either red, or black standing, and you haven't heard from us in 48 hours, you can contact us. If your account is in good standing (green), and you're still unable to post to the forums, your bud's feed, etc., message us <a href="">here.</a></p>
            </div>
            <br>
            <br>
            <!--slidedown info-->
            <button type="button" class="btn btn-danger" style="background-color:#7FF6AA;border: 1px solid #7FF6AA;color:black;" id="trig5">I can't see posts</button>
            <div class="well" id="panel5">
                <b><p style="width: 50%;margin-left:25%;">If you're unable to see any posts, again, check your internet connection. If the problem has nothing to do with your internet connection, there may be a graphics issue, which you can report it to us <a href="">here.</a></p></b>
                <b><p style="width: 50%;margin-left:25%;">If it's not a graphics issue, and the problem persists for more than 24 hours, we will investiage the issue, and check whether other users are reporting the same issue(s).</p></b>
                
            </div>
            <br>
            <br>
            <!--slidedown info-->
            <button type="button" class="btn btn-danger" style="background-color:#FAF35A;color:black;border: 1px solid #FAF35A;" id="trig6">My posts have been flagged unfairly</button>
            <div class="well" id="panel6">
                <b><p style="width: 50%;margin-left:25%;margin-bottom:-4%;">Sometimes, on a social networking site, things happen where people disagree.<br><br></p><br><h3>We Get That</h3><br><p style="width: 50%;margin-left:25%;">Unfortunately, this means that things like false reporting/flagging happen. We work hard to make sure that any posts that are flagged are done so within reason, and any posts that have been unfairly flagged are removed from a flagged status. Remember:<br> <v>Anyone found to have engaged in mass flagging/trolling/false reporting is at risk for being banned from the platform.</v><br> Trolling isn't cool, and it's not right.</p></b>
                <br>
                <p style="width: 50%;margin-left:25%;">If you believe that your posts have been unfairly flagged, message us <a href="">here</a>, so that we can investiage.</p>
            </div>
            <br>
            <br>
            <!--slidedown info-->
            <button type="button" class="btn btn-danger" style="background-color:#FA5ABD;border: 1x solid #FA5ABD;" id="trig7">Someone's harassing me</button>
            <div class="well" id="panel7">
                <p style="width: 50%;margin-left:25%;">
                    If someone's harassing you here on Plantr, we really want you to let us know about it, every single time. You're not bothering us, and we do care. Here are some steps we suggest you take if you've been harassed and/or threatened in any way. 
                </p>
                
                <ol style="width:50%;margin-left:24%;">
                   <b><li>Report it to us, asap. <a href="">Report Harassment</a></li></b>
                  <b><li>Take screenshots of any threatening messages or posts. Try not to delete any messages you've recieved that you find threatening. This will allow us to investiage further.</li></b>
                    <b><li>If you feel as though your safety is in danger, we suggest that you contact the local authorities. Plantr will comply with any local and/or federal law enforcement as required by local and/or federal laws.</li></b>
                </ol>
            </div>
            <br>
            <br>
            <!--slidedown info-->
            <button type="button" class="btn btn-danger" style="background-color:#5AC7FA;color:black;border: 1px solid #5AC7FA;" id="trig8">Something totally different</button>
            <div class="well" id="panel8">
                <h1>Uh Oh...</h1>
                <b><p style="width: 50%;margin-left:25%;">If there's an issue that you're having with the Plantr website that wasn't listed here, please feel free to let us know by, of course, <a href="#">contacting us.</a><br>We'll try our best to fix the issue in a timely manner.</p></b>
            </div>
            <!--slidedown info-->
        </div>
    </div>
    
     <div class="panel panel-default text-center">
  <div class="panel-body"><p>&copy; <z>P</z><la>LA</la><v>N</v><w>T</w><u>r</u> <?php echo date('Y'); ?></p></div>
</div>
</body>
</html>


<style>
    
@import url('https://fonts.googleapis.com/css?family=Bungee');

    
.panel {
background-color:#25023C;
cursor:default;
border: 1px solid #25023C;
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

.panel-body v, v {
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

body {
background-color:#FACC5A;
}
    
#panel1, #panel2, #panel3, #panel4, #panel5, #panel6, #panel7, #panel8 {
background-color:#FCFFDB;
border: 1px solid #FCFFDB;
display:none;
}

#well1 {
background-color:#705A25;
border: 2px solid #705A25;
}

#well1 h1 {
color:yellow;
}

.jumbotron {
background-color:#7C3B08;
}

#well2 {
background-color:#FCFFDB;
border: 1px solid #FCFFDB;
}

</style>

<!--jquery-->
<script>
    $(document).ready(function(){
        $("#trig1").click(function(){
           $("#panel1").slideToggle("slow");
        });
    });
    
    $(document).ready(function(){
        $("#trig2").click(function(){
           $("#panel2").slideToggle("slow");
        });
    });
    
    $(document).ready(function(){
        $("#trig3").click(function(){
           $("#panel3").slideToggle("slow");
        });
    });
    
    $(document).ready(function(){
        $("#trig4").click(function(){
           $("#panel4").slideToggle("slow");
        });
    });
    
    $(document).ready(function(){
        $("#trig5").click(function(){
           $("#panel5").slideToggle("slow");
        });
    });
    
    $(document).ready(function(){
        $("#trig6").click(function(){
           $("#panel6").slideToggle("slow");
        });
    });
    
    $(document).ready(function(){
        $("#trig7").click(function(){
           $("#panel7").slideToggle("slow");
        });
    });
    
    $(document).ready(function(){
        $("#trig8").click(function(){
           $("#panel8").slideToggle("slow");
        });
    });







</script>
























