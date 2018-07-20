<!doctype html>
<html>
<head>
<title>
application
</title>
<link rel="stylesheet" type="text/css" href="mystyle.css" />
<style>
#options ul{
list-style:none;
}
#options ul li{
background-color:#3C3E94;
width:252px;
border:1px solid white;
height:60px;
line-height:5px;
text-align:center;
float:left;
color:white;
font-size:26px;
}
#options ul li:hover{
background-color:gray;
}
#login{
position:absolute;
top:10px;
left:1150px;
}
#signup{
position:absolute;
top:10px;
left:1250px;
}
h5{
background:blue;
width:70px;
height:30px;
text-align:center;
font-size:20px;
text-decoration:none;
color:white;
}
h4{
text-decoration:none;
color:white;
font-size:26px;
}
h3{
background:blue;
width:500px;
height:40px;
text-align:center;
font-size:30px;
text-decoration:none;
color:white;
}
#image{
position:absolute;
top:12px;
}
#medicine{
position:absolute;
top:370px;
left:100px;
}
#treatment{
position:absolute;
top:370px;
left:700px;
}
#apply{
position:absolute;
top:300px;
left:70px;
width:1155px;
height:420px;
background:lightblue;
color:blue;
border-radius:20px;
}
</style>
</head>
<body>
<hr size="4" color="black">
<br>
<br>
<br>
<br>
<div id="signup"><a href="logout.html"><h5>log out</h5></a></div>

<h1 align="right">ONLINE MEDICAL REIMBURSEMENT SYSTEM</h1>
<hr size="4" color="black">
<div id="options">
<ul>
   <li><a href="home.html"><h4>Home</h4></a></li>
   <li><a href="login.html"><h4>Apply</h4></a></li>
   <li><a href="Memorials.html"><h4>Memorials</h4></a></li>
   <li><a href="contact.html"><h4>Contact us</h4></a></li>
   <li><a href="faq.html"><h4>FAQ</h4></a></li>
</ul>   
</div>
<div id="image">
<img src="images.png" /> 
</div>
<center><h1>YOU ARE LOGGED IN  <?php session_start();  echo $_SESSION['user_name'];?> </h1></center> 
<div id="apply">
<center><h1>APPLICATION FORM</h1></center>
</div>
<div id="medicine">
<img src="medicine.jpg" height= 250 px width= 500 px />
<a href="medicine.php"><h3>Fill medicine reimbursement form</h3></a>
</div>
<div id="treatment">
<img src="treatment.jpg" height= 250 px width= 500 px />
<a href="treatment.html"><h3>Fill treatment reimbursement form</h3></a>
</div>
</body>
</html>







