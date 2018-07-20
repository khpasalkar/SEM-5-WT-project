<!doctype html>
<html>
<head>
<title>
medicine
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
#image{
position:absolute;
top:12px;
}
#medicine{
position:absolute;
top:270px;
left:70px;
width:1155px;
height:470px;
background:lightblue;
color:blue;
border-radius:20px;
}
#upload{
position:absolute;
top:80px;
left:80px;
width:200px;
height:30px;
background:darkblue;
color:white;
font-size:25px;
border-radius:5px;
}
#list{
position:absolute;
top:120px;
left:90px;
color:black;
font-size:20px;
}

</style>
</head>
<body>
<hr size="4" color="black">
<br>
<br>
<br>
<br>
<div id="signup"><a href="logout.html"><h5>Log out</h5></a></div>
<h1 align="right">WELCOME  <?php session_start();  echo $_SESSION['user_name'];?> ONLINE MEDICAL REIMBURSEMENT SYSTEM</h1>
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
<img src="images.png"/> 
</div>

<div id="medicine">
<center><h1>MEDICINE REIMBURSEMENT</h1></center>
<div id="upload">Upload documents</div>
<div id="list">
<form name="myform" method="post" action="medicine_reimbursement.php" onsubmit="">
(upload medicine bills)<br><br>
List of medicines<br>
<textarea name = "list_of_medicines" rows="4" cols="50"> 
</textarea><br><br>
Total cost to be reimbursed<br>
<input type="text" name="cost" size="50"><br><br>
Name of medical store<br>
<input type="text" name="store" size="50"><br><br>
<input type="hidden" name="user_name" size="50" value=<?php  echo $_SESSION['user_name'];?>>
<input type="submit" value="Submit">
</div>
</form>
</div>
</body>
</html>







