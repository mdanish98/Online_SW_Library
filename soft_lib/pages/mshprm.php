<?php

session_start();
$x = $_SESSION['login_user'];
if(!isset($x))
	{
	header("location:index.php");
	exit();
 }
include "cal.php";

?>
<html>
<head>
<style>
       
</style><style>
</style> 
<style> h1{ } 
body
{
	height:100%;
	width:100%;
}
		h1
{
		height:50px;
	width:100%;
	text-align:center;
	animation-direction:normal;
	cursor:pointer;

}
#lik
{
	text-shadow:#093;
	color:#090;
	text-outline:#06C;
}
#lik:hover
{
	color:#0CF;
}
#mill
{
	position:absolute;
	top:0px;
	left:50px;
	cursor:pointer;

}
h2
{
	font-family:"Times New Roman", Times, serif;
	font-size:30px;
	color:#E44424;
	text-align:center;
	position:relative;
	cursor:pointer;
}
h2:hover
{
	color:#FC0;
}
#date
{
	position:absolute;
	top:100px;
	right:120px;
	color:#666;
	font-style:oblique;
}
#wel
{
	color:#3B5998 ;
	position:absolute;
	top:200px;
	left:175px;
	font-size:20px;
	
}
#mid
{
	position:absolute;
	top:300px;
	right:34%;
	background-color:#CCC;
	border-radius:8px;
	
}
#mid1
{
	position:absolute;
	top:40%;
	right:53%;
	
}
#submit
{
	 background-color:#FF9009;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius:6px;
    color:#FFF;
    font-family:'Oswald',serif;
    font-size: 20px;
    text-decoration: none;
    cursor: pointer;
    border:none;
	position:absolute;
	top:400px;
	right:650px;
}

#submit:hover
{
	color:#336;
	background-color:#09C;
}


#submit
{
	-webkit-transition:width 0.5s, height 0.5s, -webkit-transform 0.5s;
transition:width 0.5s, height 0.5s, transform 0.5s;
transition-property:all;
-webkit-transition-timing-function:linear;

}
#submit:hover
{
	width:200px;
	height:50px;
-webkit-transform:rotate(360deg);
transform:rotate(360deg);
}
#main
{
	 background-color:#FF9009;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius:6px;
    color:#FFF;
    font-family:'Oswald',serif;
    font-size: 20px;
    text-decoration: none;
    cursor: pointer;
    border:none;
	position:absolute;
	top:475px;
	right:800px;
}

#main:hover
{
	color:#336;
	background-color:#09C;
}


#main
{
	-webkit-transition:width 0.5s, height 0.5s, -webkit-transform 0.5s;
transition:width 0.5s, height 0.5s, transform 0.5s;
transition-property:all;
-webkit-transition-timing-function:linear;

}
#main:hover
{
	width:200px;
	height:50px;
-webkit-transform:rotate(360deg);
transform:rotate(360deg);
}
#back
{
	 background-color:#FF9009;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius:6px;
    color:#FFF;
    font-family:'Oswald',serif;
    font-size: 20px;
    text-decoration: none;
    cursor: pointer;
    border:none;
	position:absolute;
	top:475px;
	right:500px;
}

#back:hover
{
	color:#336;
	background-color:#09C;
}


#back
{
	-webkit-transition:width 0.5s, height 0.5s, -webkit-transform 0.5s;
transition:width 0.5s, height 0.5s, transform 0.5s;
transition-property:all;
-webkit-transition-timing-function:linear;

}
#back:hover
{
	width:200px;
	height:50px;
-webkit-transform:rotate(360deg);
transform:rotate(360deg);
}
#delete
{
	color:#0C0;
	position:absolute;
	top:225px;
	right:600px;
}
#b
{
	font-size:22px;
	font-family:"Times New Roman", Times, serif;
	color:#000;
	font-style:oblique;
}
#tal
{
	position:absolute;
	top:3%;
	right:9%;
}

</style>
</head>
<body>
<h1 id="lik">Welcome to Jamia Millia Islamia</h1>
<div id="date">
<?php
echo "Date-";
echo date("d-M-Y");
echo "\t";
echo date("D");
?>
</div>
<h2 ><td width="195"><b><strong><font size = 6><center><strong>Online Software Library<hr/></font></strong></b></center></h2>
<div id="mill">
<img src="277px-Jamia_Millia_Islamia_Logo.svg_.png" height="110px" width="110px"/>
</div>
<div id="wel">
<?php
ini_set('error_reporting',E_ALL & ~E_DEPRECATED & ~E_NOTICE);
$x = $_SESSION['login_user'];

echo "
Welcome,$x";
$midd1=$_GET['mid'];
?> <br><br><br><br>
</div>
<strong><b></b>
<center>
&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;
<input  type="submit" value="       Main Menu      " 
     onclick="window.location='http://localhost/online_software_library/soft_lib/pages/jadm.php';" id="main" /><br><br>
&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;
<input  type="submit" value="         Go Back        " 
     onclick="window.location='http://localhost/online_software_library/soft_lib/pages/mshp.php';" id="back" />

<form name="reg" action="mshprm.php" method = "post">
	<div>
&ensp;&nbsp;&emsp;&ensp;&nbsp;&emsp;&ensp;&nbsp;&emsp;&ensp;&nbsp;&emsp;&ensp;&nbsp;&emsp;&ensp;&nbsp;&emsp;
<label for="mid"><p id="mid1">Member  Id:</label>
<input type="text" name="mid" value="<?php echo($midd1);?>" maxlength="20"  /></p><br><br>&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;
<div id="tal">
<input type = "submit" value="          Submit          " id="submit" />
</form>
	 </div>
     </html>

 <?php
ini_set('error_reporting', E_ALL & ~E_DEPRECATED & ~E_NOTICE);
mysql_connect("localhost", "root", "") or die("Opps some thing went wrong");
mysql_select_db("jmi") or die("Opps some thing went wrong");
$mid=$_POST['mid'];
$midd=$_GET['mid'];
$sn=$_GET['sno'];

if (!empty($mid))
		{$ss="UPDATE usrecd SET status=0 where mid ='$mid'";
mysql_query($ss)or die("Opps some thing went wrong11");;

$sql="DELETE FROM usoath
WHERE mid='$mid'";
mysql_query($sql);
echo "<h3 id='delete'>Success! The Member id <b id='b'>$mid</b> has been deleted</h3>";

}
else if (!empty($mid))
		{$ss="UPDATE usrecd SET status=0 where sno ='$sn'";
mysql_query($ss)or die("Opps some thing went wrong22");;
			$sql="DELETE FROM usoath
WHERE mid='$midd'";
mysql_query($sql);
}
?>
</body>