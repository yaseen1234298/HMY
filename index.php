<?php include "header.php";
session_start();
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<?php global $msg; echo $msg;?>
<html>
<head>
	<style type="text/css">
		body{
			margin:0;
			padding:0;
			background-size: 100%;
			background-position: cover; 
}
		.logo{
			margin: 0;
			padding: 0;
			border-image: 2px;
			width: 100px ;
			height: 120px;
			padding-left: 13%;
		}
		.vote{
			margin: 0;
			padding: 0;
			border-image: 2px;
			width: 120px ;
			height: 120px;
			padding-left: -5%;
			margin-right: 90%;
			left: 30%;
		}
			.content{
				margin: 0;
			font-family: times roman new;
			color: blue;
			padding-top:0;
				float: left;   
	position: absolute;
	top: 25%;
	left: 10%;
	right: 5%;
	background-color: transparent;
	font-size: 28px;
	display: block;
	text-align: center;
			}
			.idea{
				margin: 0;
			font-family: times roman new;
			color: blue;
			padding-top:0;
				float: left;   
	position: absolute;
	top: 48%;
	left: 12%;
	right: 15%;
	background-color: transparent;
	font-size: 40px;
	display: block;
	text-align: center;
			}
			.idea1{
				margin: 0;
			font-family: times roman new;
			color: red;
			padding-top:0;
				float: left;   
	position: absolute;
	top: 90%;
	left: 12%;
	right: 15%;
	background-color: transparent;
	font-size: 40px;
	display: block;
	text-align: center;
			}
	</style>
</head>
<body  style="background: url(img/cahc.jpg);background-repeat: no-repeat;
transform: translate3d(10px, 0px, 0px); background-size: 100% 100%;width: 98%;height: 99vh; background-position: cover; ">
<img class="logo" src="img/logo.png">
<div class="content">
<p class="content"><legend><i><center><b class="glow" style=" color: #CCFF00; font-size: 35px;text-align: center;">C. ABDUL HAKEEM COLLEGE (AUTONOMOUS)</center><br><center>MELVISHARAM-632 509</b></center></i></p></legend><br>
<center><p class="idea"><b><i><br>COLLEGE CHAIRMAN ELECTION - 2022</b><br><br><b class="idea1">ONLINE VOTING SYSTEM</b></i></font></legend></center>
	&nbsp;&nbsp;</p>
    </div>
</body>
</html>
<br>
<br><br>
<br><br><br>
<?php include "footer.php";?>


