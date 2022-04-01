<script src='https://www.google.com/recaptcha/api.js'></script>
<?php include "header.php";
if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<br>
<br>
<center>
<legend> <h3> Register </h3></legend> </center>
<?php global $nam; echo $nam; ?> 
<?php global $error; echo $error; ?>
<html>
    <head>
        <style type="text/css">
           .hub{
            margin: 0;
            padding: 1%;
            width: 40px;
            height: 40px;
            
        }
        .log{
            margin: 0;
            padding: 0;
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
            outline: none;
            border-radius: 10px;
            font-size: 20px;
            cursor: pointer;
        } 
        .button:hover{
            background: yellow;
        }
        </style>
    </head>

<body style="background: url(img/reg.jpg);background-repeat: no-repeat; width:140%;padding: -5%;float: right;
    position: relative;
    background-position: cover;
    width: 60%;
    padding-bottom: 15px;
    height: 120vh;
    display: block;">
<center><font size="4" >
<form action= "reg_action.php" method= "post" id="myform" >
Firstname:
<input class="log" type="text" name="firstname" value="" />
<br>
<br>
Lastname: 
<input class="log" type="text" name="lastname" value="" />
<br>
<br>
Username: 
<input class="log" type="text" name="username" value="" />
<br>
<br>
Password: 
<input class="log" type="password" name="password" value="" />
<br>
<br>
<div class="g-recaptcha" data-sitekey="6LeD3hEUAAAAAKne6ua3iVmspK3AdilgB6dcjST0"></div> 
<input class="button" type="submit" name="submit" value="Next" />
</form>
<div>
    <a href="https://facebook.com"><img class="hub" src="img/fb.png"></a>
    <a href="https://google.com"><img class="hub" src="img/g++.png"></a>
    <a href="https://instagram.com"><img class="hub" src="img/insta.jpg"></a>
    
</div>
</font>
</center>
</html>
<script type= "text/javascript" >
 var frmvalidator = new Validator("myform"); 
 frmvalidator.addValidation("firstname","req","Please enter student firstname"); 
 frmvalidator.addValidation("firstname","maxlen=50");
 frmvalidator.addValidation("lastname","req","Please enter student lastname"); 
 frmvalidator.addValidation("lastname","maxlen=50");
 frmvalidator.addValidation("username","req","Please enter student username"); 
 frmvalidator.addValidation("username","maxlen=50");
 frmvalidator.addValidation("password","req","Please enter student password"); 
 frmvalidator.addValidation("password","minlen=6","Password must not be less than 6 characters.");

</script>
<marquee behavior="alternate" direction="right"><img src="img/yaseen.jpg" style="width: 50px; padding: 2px;"></marquee>
<?php include "footer.php" ;?>

