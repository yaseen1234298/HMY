<?php include "header.php"; 
if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<br>
<center>
<legend> <h3>Login for Voting </h3></legend> 
<br>
</center>
<?php global $nam; echo $nam; ?>
<?php global $error; echo $error; ?>
<br>
<center><font size="4" >
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
			padding: 8px;
			border-radius: 20px;
		}
		.button{
			margin: 0;
			padding: 8px;
			width: 100px;
			background: yellow;
			color: black;
			outline: none;
			border-radius: 10px;
			font-size: 20px;
			cursor: pointer;

		}
		.button:hover{
			background: lightgreen;
		}
	</style>
</head>
	<body style="background: url(img/login.jpg);background-repeat: no-repeat; width:170%;float: right;
    position: relative;
    width: 60%;
    height: 120px;
    display: block;">
<form class="box" action="login_action.php" method="post" id="myform" >
	
<b>Username :</b> 
<input class="log" type="text" name="username" value="" > 
<br>
<br>
<b>Password :</b> 
<input class="log" type="password" name="password" value="" >
<br>
<br>
<input class="button" type="submit" name="login" value="login" > 
</form></font>
<div>
	<br>
	<a href="https://facebook.com"><img class="hub" src="img/fb.png"></a>
	<a href="https://google.com"><img class="hub" src="img/g++.png"></a>
	<a href="https://instagram.com"><img class="hub" src="img/insta.jpg"></a>
	
</div>
</center>
</html>

<script type="text/javascript" > 
var frmvalidator = new Validator("myform");
frmvalidator.addValidation("username" , "req" , "Please Enter Username");
frmvalidator.addValidation("username", "maxlen=50");
frmvalidator.addValidation("password", "req" , "Please Enter Password");
</script>

<marquee behavior="alternate" direction="right"><img src="img/yaseen.jpg" style="width: 50px; padding: 2px;"></marquee>

<?php include "footer.php"; ?>
