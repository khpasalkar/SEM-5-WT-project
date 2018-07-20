<?php 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'home');
 define('DB_USER','root');
 define('DB_PASSWORD',''); 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
 if(!empty($_POST['username'])) 
	{ $query = mysql_query("SELECT * FROM signup WHERE username4 = '$_POST[username]' AND password= '$_POST[password]'") or die(mysql_error());
if( mysql_fetch_array($query) == 0 )
{  
echo "YOU ARE NOT REGISTERED USER OR PASSWORD IS INCORRECT..."; 
echo "<a href=\"signup.html\">Signup here</a>";
 }else{
	 echo "YOU ARE SUCCESSFULLY LOGGED IN..."; 
	session_start(); 
	$_SESSION['user_name'] = $_POST['username'];
	echo $_SESSION['user_name'];
	$name = $_SESSION['user_name'];
echo "<a href=\"apply.php\">Continue for filling application form</a>";
	}}
?>