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

</head>


<style>
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




</style> 
<style> h1{ } 
</style>
<style>
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
#mem
{
	font-size:16px;
	color:#06C;
}

</style>
<style>
#block
{
	position:absolute;
	top:150px;
	right:0%;
	font-size:15px;
	color:#930;
}
#mem
{
	position:absolute;
	top:100px;
	left:70%;
}
#mid
{
	position:absolute;
	top:100px;
	left:85%;
	
	
}

</style> 
<style> h1{ } 
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
	top:200px;
	right:450px;
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
	top:275px;
	right:600px;
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
	top:275px;
	right:300px;
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
#tal
{
	position:absolute;
	top:20%;
	left:115%;
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
$x = $_SESSION['login_user'];

echo "
Welcome,$x";

?> 

<strong><b></b>
<center>
<form name="reg" action="mshpbm.php" method = "post">
<label for="mid" id="mem">Member  Id:</label>
<input type="text" name="mid" value="" maxlength="20" id="mid" /><br><br>&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;
<div id="block">
<input type="radio" name="sets" value="-1">Block
<input type="radio" name="sets" value="0">UnBlock<br><br> </div>
&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;
<input type = "submit" value="          Submit          " id="submit" />
</form>
&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;
<input  type="submit" value="       Main Menu      " 
     onclick="window.location='http://localhost/online_software_library/soft_lib/pages/jadm.php';" id="main" /><br><br>
&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;
<input  type="submit" value="         Go Back        " 
     onclick="window.location='http://localhost/online_software_library/soft_lib/pages/mshp.php';" id="back" />


	 </html>




<?php
//echo"<input type='submit' name='btnSubmit' id='btnSubmit' value='Edit' onclick=".edit();">
echo"</form>";
ini_set('error_reporting',E_ALL & ~E_DEPRECATED & ~E_NOTICE);

$sets=$_POST['sets'];
$mid = $_POST['mid'];
if (!empty($mid))
{
mysql_connect("localhost", "root", "") or die("Opps some thing went wrong");
mysql_select_db("jmi")or die("Opps some thing went wrong");
if($sets== -1){
	$sql="UPDATE usoath SET status= '-1' WHERE mid='$mid'";
	mysql_query($sql);
	echo "success! The member $mid has been blocked";
	}
else{
	$sql="UPDATE usoath SET status= '0' WHERE mid='$mid'";
	mysql_query($sql);
	echo "success! The member $mid has been blocked";
	}
}
?></body>