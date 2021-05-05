<?php

session_start();

$x = $_SESSION['login_user'];
 
if(!isset($x))
	{
	header("location:index.php");
	exit();
	}

?>
<html>
<head>

</head>


<style>
body
{
	width:100%;
	height:100%;
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




</style> 
<style>
		#date
{
	position:absolute;
	top:100px;
	right:120px;
	color:#300;
	font-style:oblique;
}
#wel
{
	color:#3B5998 ;
	position:absolute;
	top:150px;
	left:100px;
	font-size:20px;
	
}
#table
{
	position:absolute;
	top:250px;
	left:100px;
}
#form
{
	position:absolute;
	top:300px;
	left:600px;
}
#issue
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
	top:295px;
	left:850px;

	}

#issue:hover
{
	color:#336;
	background-color:#09C;
}


#issue
{
	-webkit-transition:width 0.5s, height 0.5s, -webkit-transform 0.5s;
transition:width 0.5s, height 0.5s, transform 0.5s;
transition-property:all;
-webkit-transition-timing-function:linear;

}
#issue:hover
{
	width:150px;
	height:50px;
-webkit-transform:rotate(360deg);
transform:rotate(360deg);
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
echo "Welcome,$x";

?> 
<br><br><br><br>
</div>
<strong><b></b>

<form name="iss" >
<div id="form">
Member Id:<input type="text" value="">
</div>
	<input type="submit" value="        Issue        " 
    onclick="window.location='http://localhost/online_software_library/soft_lib/pages/asue.php';" id="issue" /> 

	
<br><br>
&nbsp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&emsp;
&nbsp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&emsp;
	
	
</body>
</html>