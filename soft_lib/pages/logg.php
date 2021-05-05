<?php

ini_set('error_reporting', E_ALL & ~E_DEPRECATED & ~E_NOTICE);

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
#req
{
	position:absolute;
	top:175px;
	right:650px;
	color:#903;
	font-size:18px;
	}
	#upper
	{
		font-size:18px;
		color:#C30;
	}
	#lower
	{
		color:#033;
	}
</style>
<style>
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
	top:30px;
	left:100px;
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
	top:30px;
	right:100px;
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
#main2
{
	
	width:1300px;
	
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
echo "Welcome,$x";?>
<?php
mysql_connect("localhost", "root", "") or die("Opps some thing went wrong");
mysql_select_db("jmi") or die("Opps some thing went wrong");
$sql="SELECT * FROM msrcrd ";
		echo "<div id='main2'>";
		$result=mysql_query($sql) or die("Opps some thing went wrong1");;


		echo "<br><br><table border='1'>
<tr id='upper'>
<th>sno</th>
<th>Member Id</th>
<th>Software Id</th>
<th>Date Of Issue</th>
<th>Date Of Return</th>
<th>Status</th>
</tr>";
//echo '<form name="softt" action ="det.php" method="post">
//<label for ="s.no">s.no</label><input type ="text" name ="s.no" value ="'.$s[0]. '">';

while($row = mysql_fetch_array($result))
  {
						echo "<tr>";
  
  echo "<td width='6%' id='lower'>" . $row['sno'] . "</td>";  
  echo "<td width='16%'>" . $row['mid'] . "</td>";
  echo "<td width='2%'>" . $row['sid'] . "</td>";
  echo "<td width='6%'>" . $row['doi'] . "</td>";
  echo "<td width='6%'>" . $row['dor'] . "</td>";
  
  $zz =$row['status'];
								if($zz == -1)
									$xx="Issued";
								else if($zz == 0)
									$xx="Online";
								else
									$xx="Available";
						 echo "<td width='6%'>" . $xx . "</td>";
  
  
  echo "</tr>";
  
  }
  echo "</table>";
  
  echo "</div>";
				  ?>
				 
				 <br> <br><input  type="submit" value="          Main Menu        " 
     onclick="window.location='http://localhost/online_software_library/soft_lib/pages/jadm.php';" id="main" /> <br><br>

	 <input  type="submit" value="    Back To Search    " 
     onclick="window.location='http://localhost/online_software_library/soft_lib/pages/jadmsir.php';" id="back" />
     </body>
