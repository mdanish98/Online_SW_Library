<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
#table
{
	position:absolute;
	top:100px;
	right:300px;
}
</style>

</head>

<body>
<?php
$username=$_POST['username'];
$password=$_POST['password'];
ini_set('error_reporting',E_ALL & ~E_DEPRECATED & ~E_NOTICE);
$con=mysql_connect("localhost","root","");
$db=mysql_select_db('login',$con);
$query="select * from username";
$run=mysql_query($query);
$row=mysql_fetch_assoc($run);
if($username==$row['username'] && $password==$row['password'])
{
echo "Welcome\t\t";
echo $username;
echo "\n\nconnection succesful";
echo "<div id='table'>";
echo "<table border='1' id='table' >";
echo "<tr>";
echo "<td>username:</td>";
echo "<td>password:</td>";
echo "</tr>";
echo "<tr>";
echo "<td>$username</td>";
echo "<td>$password</td>";
echo "</tr>";
echo "</div>";

}
else
{
	echo "username or password is wrong";
}


?>
</body>
</html>