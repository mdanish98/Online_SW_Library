<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>mail</title>
</head>

<body>
<?php
ini_set('error_reporting',E_ALL & ~E_DEPRECATED & ~E_NOTICE);
$username=$_POST['username'];
$password=$_POST['password'];
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("facebook");
$query="select *from login";
$run=mysql_query($query);
$row=mysql_fetch_assoc($run);
if($username==$row['username'] && $password==$row['password'])
{
	echo "welcome to facebook";
	echo "<table border='1'>";
	echo "<tr>";
	echo "<td>Username</td>";
	echo "<td>Name</td>";
	echo "<td>status</td>";
	echo "<td>relationship</td>";
	echo "<td>hometown</td>";
    echo "</tr>";
	echo "<tr>";
	echo "<td>$row[username]</td>";
	echo "<td>$row[name]</td>";
	echo "<td>$row[status]</td>";
	echo "<td>$row[relationship]</td>";
	echo "<td>$row[hometown]</td>";
	echo "</tr>";
	echo "<t";
}
else
{
	echo "Wrong username or password";
}
?>
</body>
</html>