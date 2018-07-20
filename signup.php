<?php 
$user ='root'; 
$pass =''; 
$db = 'home'; 
$db = new mysqli('localhost',$user,$pass,$db) or die("Unable to connect"); 
// create a variable
$first_name=$_POST['username1']; 
$middle_name=$_POST['username2']; 
$last_name=$_POST['username3']; 
$username=$_POST['username4'];
$psw=$_POST['password'];
$gender=$_POST['gender'];
$eid=$_POST['eid'];
$phone_no=$_POST['phone'];
$acc_no=$_POST['acc'];
$email=$_POST['id'];   
mysqli_query($db,"INSERT INTO signup(username1,username2,username3,username4,password,gender,eid,phone,acc,id) 				
     VALUES('$first_name','$middle_name','$last_name','$username','$psw','$gender','$eid','$phone_no','$acc_no','$email')"); 							 	
if(mysqli_affected_rows($db) > 0)
{ 	echo "<p>User Added</p>"; 	
echo "<a href=\"apply.html\">you can apply for reimbursement from here</a>"; } 
else { 	echo "Employee NOT Added<br />"; 	echo mysqli_error ($db); } ?>


