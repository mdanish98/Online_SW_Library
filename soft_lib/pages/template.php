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
<style>
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
</style>
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

echo "Welcome,$x";
?>
</div>
</body>
</html>