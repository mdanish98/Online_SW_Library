<?php
ini_set('error_reporting',E_ALL & ~E_DEPRECATED & ~E_NOTICE);
session_start();

  /*function valid() {
    

     echo ("Wrong Username or Password");
     // c.focus();
	 return;
    }
	*/
 
mysql_connect("localhost", "root", "") or die("Opps some thing went wrong");
mysql_select_db("jmi") or die("Opps some thing went wrong");


if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from form 

$username=mysql_real_escape_string($_POST['username']); 
$password=mysql_real_escape_string($_POST['password']); 


$sql="SELECT * FROM usoath WHERE mid='$username' and sword='$password'";
 
$result=mysql_query($sql);

$row=mysql_fetch_array($result);
$active=$row['active'];

$count=mysql_num_rows($result);
//echo ("$count");
/*if($username== "admin" && $password == "admin")
	{
		echo ("Wrong Username or Password");
	}*/
// If result matched $username and $password, table row must be 1 row
if($count==1)
{
//session_register($username);
//session_start();

$_SESSION['login_userr']=$username;


header("location:oathusr.php");
}
else  
{
	header("location: usretry.php"); ;
//echo "";

//$error="Your Login Name or Password is invalid";
}
}
?>