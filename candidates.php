<?php
if(!isset($_SESSION)) { 
session_start();
}
include "header_voter.php"; 
?>
<html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
img.sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  width: 200px;
  left: 70px;

}
  .vl {
  border-left: 6px solid green;
  height: 430px;
  position: absolute;
  left: 28%;
  margin-left: -3px;
  top: 0%;
}
h2{
  font-family: times new roman;
  font-size: 30px;
}
p{
  position: relative;
  font-size: 15px;
}

* {
   box-sizing: border-box;
}
.imageColumn {
   float:right;
   width: 10%;
   padding: 10px;
}
.box{
  width: 250px;
  padding: 20px;
  float: left;
  position: absolute;
  top: 18%;
  right: 79%;
  background:yellow;
  text-align: center;
  border-radius: 20px;
}

.box1{
  width: 250px;
  padding: 20px;
  float: left;
  position: absolute;
  top: 18%;
  right: 60%;
  background:yellow;
  text-align: center;
  border-radius: 20px;
}
.box2{
  width: 250px;
  padding: 20px;
  float: left;
  position: absolute;
  top: 18%;
  right: 41%;
  background:yellow;
  text-align: center;
  border-radius: 20px;
}
.box3{
  width: 250px;
  padding: 20px;
  float: left;
  position: absolute;
  top: 18%;
  right: 22%;
  background:yellow;
  text-align: center;
  border-radius: 20px;
}
.box4{
  width: 250px;
  padding:13px;
  float: left;
  position: absolute;
  top: 18%;
  right: 3%;
  background:yellow;
  text-align: center;
  border-radius: 20px;
}
</style>
</head>
<body>
  <div class="imageColumn">
    <form class="box" action="Candidates.html" method="post" >
<img class="sticky" src="img/HOD Haja sir.jpg" alt="Avatar">
<h2 ><b>Mr. S.HAJA MOHIDEEN SIR(SHM)<b></h2>
<p><b>C. ABDUL HAKEEM COLLEGE<br>(AUTONOMOUS)<br> MELVISHARAM - 632 509<br>DEPARTMENT OF COMPUTER SCIENCE<br></p>

</div >
</form>
 <br>
 <div class="imageColumn">
    <form class="box1" action="Candidates.html" method="post" >
<img class="sticky" src="img/Ramesh kumar sir.jpg" alt="Avatar">
<h2 ><b>Dr. G.RAMESH KUMAR SIR(SHM)<b></h2>
<p><b>C. ABDUL HAKEEM COLLEGE<br>(AUTONOMOUS)<br> MELVISHARAM - 632 509<br>DEPARTMENT OF COMPUTER SCIENCE<br></p>
  
</div >
</form>
 
 <div class="imageColumn">
    <form class="box2" action="Candidates.html" method="post" >
<img class="sticky" src="img/kalimullah sir.jpg" alt="Avatar">
<h2 ><b>Dr. A.<br>KALIMULLAH SIR(AKS)<b></h2>
<p><b>C. ABDUL HAKEEM COLLEGE<br>(AUTONOMOUS)<br> MELVISHARAM - 632 509<br>DEPARTMENT OF COMPUTER SCIENCE<br></p>
  
</div >
</form>
 
 <div class="imageColumn">
    <form class="box3" action="Candidates.html" method="post" >
<img class="sticky" src="img/Ashfaq sir.jpg" alt="Avatar">
<h2 ><b>Mr. K.ASHFAQ AHAMED SIR(KAA)<b></h2>
<p><b>C. ABDUL HAKEEM COLLEGE<br>(AUTONOMOUS)<br> MELVISHARAM - 632 509<br>DEPARTMENT OF COMPUTER SCIENCE<br></p>
  
</div >
</form>
 
 <div class="imageColumn">
    <form class="box4" action="Candidates.html" method="post" >
<img class="sticky" src="img/Mahfuzur Rahman sir.jpg" alt="Avatar">
<h2 ><b>Mr. M.S.<br>MAHFUZUR RAHMAN SIR(SMR)<b></h2>
<p><b>C. ABDUL HAKEEM COLLEGE<br>(AUTONOMOUS)<br> MELVISHARAM - 632 509<br>DEPARTMENT OF COMPUTER SCIENCE<br></p>
  
</div >
</form>
 

</div>
</body>
</html>


