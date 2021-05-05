<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Facebook Registration</title>
</head>

<body>
<?php
ini_set('error_reporting',E_ALL & ~E_DEPRECATED & ~E_NOTICE);
$username=$_POST['username1'];
$name=$_POST['name'];
$password=$_POST['password1'];
$status=$_POST['status'];
$relationship=$_POST['relationship'];
$hometown=$_POST['hometown'];
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("facebook");
$query="INSERT INTO `facebook`.`login` (`username`, `name`, `password`, `status`, `relationship`, `hometown`) VALUES ('$username', '$name', '$password', '$status', '$relationship', '$hometown');";
$run=mysql_query($query);
echo "hello";
?>
</body>
</html>