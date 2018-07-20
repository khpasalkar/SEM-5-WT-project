<?php 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'temporary');
 define('DB_USER','root');
 define('DB_PASSWORD',''); 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
 $db=mysql_select_db(DB_NAME,$con) or die("Failed to 
connect to MySQL: " . mysql_error());
 function NewUser() { 
 $name1 = $_POST['name1'];
 $name2 = $_POST['name2']; 
 $name3 = $_POST['name3'];
 $password = $_POST['password'];
 $gen = $_POST['gen'];
 $empid = $_POST['empid'];
 $phone1 = $_POST['phone1'];
 $pincode = $_POST['pincode'];
 $inputDate = $_POST['inputDate'];

 mysqli_query($db,"INSERT INTO signup (name1,name2,name3,password,gen,empid,phone1,pincode,inputDate) 
 VALUES ('$name1','$name2','$name3','$password','$gen','$empid','$phone1','$pincode','$inputDate')"); 
 $data = mysql_query ($query)or die(mysql_error()); 
 if($data) { echo "YOUR REGISTRATION IS COMPLETED..."; } } 
 
 function SignUp() { 
 if(!empty($_POST['name1'])) 
	{ $query = mysql_query("SELECT * FROM websiteusers WHERE userName = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysql_error());
if(!$row = mysql_fetch_array($query) or die(mysql_error())) { newuser(); } 
else { echo "SORRY...YOU ARE ALREADY REGISTERED USER..."; } } } 
if(isset($_POST['submit'])) 
{ SignUp(); } 
?>
