<?php 
$user ='root'; 
$pass =''; 
$db = 'home'; 
$db = new mysqli('localhost',$user,$pass,$db) or die("Unable to connect"); 
// create a variable
$list_of_medicines=$_POST['list_of_medicines']; 
$cost=$_POST['cost']; 
$store=$_POST['store']; 
$user_name=$_POST['user_name'];
$id=$_POST['id'];   
mysqli_query($db,"INSERT INTO medicine(list_of_medicines, total_cost, username, name_of_store) 				
     VALUES('$list_of_medicines','$cost','$user_name','$store')"); 							 	
if(mysqli_affected_rows($db) > 0)
{ 	echo "<p>User Added</p>"; 	
echo "<a href=\"apply.php\">you can apply for reimbursement from here</a>"; } 
else { 	echo "Employee NOT Added<br />"; 	echo mysqli_error ($db); } ?>


