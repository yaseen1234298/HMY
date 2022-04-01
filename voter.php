<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php"; 
?>
<h4 style="color: red"> Welcome <?php echo $_SESSION['SESS_NAME']; ?> </h4>
<h3 style="color: blue">Make a Vote </h3>
<html>
<head>
	<style type="text/css">
		.box{
	width: 350px;
	padding: 40px;
	float: right;
	position: absolute;
	top: 20%;
	left: 34%;
	right: 15%;
	transform: translate(-50% -50%);
	background:lightskyblue;
	text-align: center;
	border-radius: 20px;
}
.box input {
	background: red;
	display: inline-flex;
	text-align: center;
	text-decoration: 15px;
	border: 1px solid white;
	width: 100px;
	height: 3vh;
	left: 20: 
	padding: 10px ;
	border-radius: 20px;
	outline: none;
	color: white;
	font-size: 20px;
	transition: 0.5s;
}	
.button{
            margin: 0;
            padding: 8px;
            padding-bottom: 30px;
            width: 150px;
            background: red;
            color:black;
            outline: none;
            border-radius: 10px;
            font-size: 20px;
            cursor: pointer;
        } 
        .button:hover{
            background: green;
        }
	</style>
</head>

<div align="left" class="box1" id="myform">
<form class="box" action="submit_vote.php" name="vote" method="post" id="myform" >
<font>
<center><font size='6'> Which is your favorite Candidate? <BR>
<input type="radio" name="lan" value="SHM">SHM<BR>
<input type="radio" name="lan" value="GRK">GRK<BR>
<input type="radio" name="lan" value="AKS">AKS<BR>
<input type="radio" name="lan" value="KAA">KAA<BR>
<input type="radio" name="lan" value="MSMR">SMR<BR>
</font></center><br>
<?php global $msg; echo $msg; ?>
<?php global $error; echo $error; ?>
<center><input class="button" type="submit" value="Submit Vote" name="submit" style="height:30px; width:128px;text-align: center;" /></center>
</form>
</body>
</html>