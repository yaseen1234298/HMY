<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php"; 
?>
<br>
<br>
<center><h3>Change Password</h3></center>
<h4 style="color:#e60808;"><?php global $nam; echo $nam;?> </h4> 
<?php global $error; echo $error;?>
<html>
<head>
	<style type="text/css">
           .hub{
            margin: 0;
            padding: 1%;
            width: 40px;
            height: 40px;
            
        }
        input.log{
            margin: 0;
            padding: 8px;
            top: 20px;
            border-radius: 20px;
        }
        .button{
            margin: 0;
            padding: 8px;
            
            width: 100px;
            background: lightgreen;
            color:black;
            top: 10px;
            left: 20px;
            outline: none;
            border-radius: 10px;
            font-size: 20px;
            cursor: pointer;
        } 
	</style>
</head>                  
 <form class="box" action="submit_vote.php" name="vote" method="post" id="myform" >
<center><form action="change_pass_action.php" method="post" id="myform">
Current Password :
<input class="log" type="password" name="cpassword" value="" />
<br>
<br>
New Password:
<input class="log" type="password" name="npassword" value="" />
<br>
<br>
Confirm New Password:
<input class="log" type="password" name="cnpassword" value="" />
<br>
<br>
<div class="g-recaptcha" data-sitekey="6LeD3hEUAAAAAKne6ua3iVmspK3AdilgB6dcjST0"></div> 
<input class="button" type="submit" name="cpass" value="UPDATE" >
</form>
<div>
    <a href="https://facebook.com"><img class="hub" src="img/fb.png"></a>
    <a href="https://google.com"><img class="hub" src="img/g++.png"></a>
    <a href="https://instagram.com"><img class="hub" src="img/insta.jpg"></a>
    
</div>
</form></center>
<script type="text/javascript">
var frmvalidator = new Validator("myform"); 
frmvalidator.addValidation("cpassword","req","Please enter Current Password"); 
frmvalidator.addValidation("cpassword","maxlen=50");
frmvalidator.addValidation("npassword","req","Please enter New Password"); 
frmvalidator.addValidation("npassword","maxlen=50");
frmvalidator.addValidation("cnpassword","req","Please enter Confirm New Password"); 
frmvalidator.addValidation("cnpassword","maxlen=50");
</script>
<br>
<marquee behavior="alternate" direction="right"><img src="img/yaseen.jpg" style="width: 50px; padding: 2px;"></marquee>
<br>
<?php include "footer.php";?>
