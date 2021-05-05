<?php
ini_set('error_reporting',E_ALL & ~E_DEPRECATED & ~E_NOTICE);

session_start();

$x = $_SESSION['login_user'];
 
if(!isset($x))
	{
	header("location:index.php");
	exit();
	}

 
?>
<html>
<style>
body
{
	width:100%;
	height:100%;
}
        .box{ z-index:10;
		 
      height:88%;
       
                font-family:Tahoma, Geneva, sans-serif;
                font-size:16px;
                color:#333;
                padding:5px;
                background-color:#CCC;
                border:2px solid #999;
				right:10%;
				left:10%;
        }
</style>
<style>
#lik
{
	outline-width:10px;
	text-align:center;
	cursor:pointer;
	
	text-shadow:#093;
	color:#960;
	text-outline:#CCC;
}
#lik:hover
{
	background:#0F0;
	color:#00C;
	opacity:0.4;
}


#mill
{
	position:absolute;
	top:10px;
	left:50px;
	cursor:pointer;

}
#mill:hover
{

	opacity:0.9;
	color:#93F;
}
#menu
{
	position: absolute;
	top: 246px;
	left: 628px;
	background-color: #FF9009;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 6px;
	color: #FFF;
	font-family: 'Oswald',serif;
	font-size: 15px;
	text-decoration: none;
	cursor: pointer;
	border: none;
}
#menu
{
	-webkit-transition:width 0.5s, height 0.5s, -webkit-transform 0.5s;
transition:width 0.5s, height 0.5s, transform 0.5s;
transition-property:all;
-webkit-transition-timing-function:linear;

}
#menu:hover
{
	width:160px;
	height:40px;
	color:#009;
	background-color:#0F0;
-webkit-transform:rotate(360deg);
transform:rotate(360deg);
}

#back
{
	position: absolute;
	top: 246px;
	left: 851px;
	background-color: #FF9009;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 6px;
	color: #FFF;
	font-family: 'Oswald',serif;
	font-size: 15px;
	text-decoration: none;
	cursor: pointer;
	border: none;
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
	width:160px;
	height:40px;
	color:#009;
	background-color:#0F0;
-webkit-transform:rotate(360deg);
transform:rotate(360deg);
}
#jim:hover
{
	opacity:0.5;
	color:#33F;
	border:#009;
	cursor:pointer;

}


#jim
{
	height:0px;
	width:600px;
position:absolute;
top:115px;
/* Chrome, Safari, Opera */
-webkit-animation-name:myfirst;
-webkit-animation-duration:30s;
-webkit-animation-timing-function:linear;
-webkit-animation-delay:2s;
-webkit-animation-iteration-count:infinite;
-webkit-animation-direction:alternate;
-webkit-animation-play-state:running;
}
@-webkit-keyframes myfirst
{
0%   {color:red; left:0px; right:800px;}
25%  {color:yellow; right:0px; left:800px;}
50%  {color:blue; left:opx; right:800px;}
75%  {color:green; left:800px; right:0px;}
100% {color:red; left:0px; right:800px;}
}-




</style>
<body>
<h1 id="lik">Welcome to Jamia Millia Islamia</h1>
<div id="mill">

<img src="277px-Jamia_Millia_Islamia_Logo.svg_.png" height="110px" width="110px"/>
</div>
<h2 ><b><strong><font size = 6><center><strong>Online Software Library</font></strong></b></center></h2>

<style>
html, body { margin:0; padding:0 }
div.box
{
width:100%;
background-color:#FFF; 
position:static;
left:10px;
top:100px;

}
#table
{
	position:absolute;
	top:280px;
	right:150px;
}


</style> 
<style> h1{  } 
</style>
<div class="box">
<?php

echo "Welcome,$x";

?>
<br /><br /><br /><br />
<?php
ini_set('error_reporting',E_ALL & ~E_DEPRECATED & ~E_NOTICE);
mysql_connect("localhost", "root", "") or die("Opps some thing went wrong");
mysql_select_db("jmi") or die("Opps some thing went wrong");
$sql="SELECT * FROM soffrec ";
		$result=mysql_query($sql) or die("Opps some thing went wrong1");;
echo"<style>
 td { max-width: 05px; }
 </style>";

		echo "<br><br><table border='1' name = 'fs' width='80%' height=100 id='table'>
<tr>
<th>sno</th>
<th>S<br>
Id</th>
<th>Name</th>
<th>Brand Name</th>
<th>Version</th>
<th>Technology</th>
<th>Quantity</th>
<th>License</th>
<th>Media Source</th>
<th>Key Words</th>
<th>Mannuals</th>
<th>Registration Key</th>
<th>Key Classification</th>
<th>Date Of Purchse</th>
<th>Date Of Received </th>
<th>URL</th>
<th>Status</th>
<th>Comments</th>
<th>Action</th>
</tr>";
//echo '<form name="softt" action ="det.php" method="post">
//<label for ="s.no">s.no</label><input type ="text" name ="s.no" value ="'.$s[0]. '">';

while($row = mysql_fetch_array($result))
  {
						echo "<tr>";
  
  echo "<td width='6%'>" . $row['sno'] . "</td>";
  echo "<td width='6%'>" . $row['sid'] . "</td>";
  echo "<td width='6%'>" . $row['name'] . "</td>";
  echo "<td width='6%'>" . $row['brand_name'] . "</td>";
  echo "<td width='6%'>" . $row['version'] . "</td>";
  echo "<td width='6%'>" . $row['technology'] . "</td>";
  echo "<td width='6%'>" . $row['quantity'] . "</td>";
  echo "<td width='6%'>" . $row['license'] . "</td>";
  echo "<td width='6%'>" . $row['media_source'] . "</td>";
  echo "<td width='6%'>" . $row['keywords'] . "</td>";
  echo "<td width='6%'>" . $row['mannuals'] . "</td>";
  echo "<td width='6%'>" . $row['registration_key'] . "</td>";
  echo "<td width='6%'>" . $row['key_classification'] . "</td>";
  echo "<td width='6%'>" . $row['date_purchse'] . "</td>";
  echo "<td width='6%'>" . $row['date_received'] . "</td>";
  echo "<td width='6%'>" . $row['url'] . "</td>";
  $zz =$row['status'];
								if($zz== -1)
									$xx="Access Restricted";
								else
									$xx="Available";
						 echo "<td>" . $xx . "</td>";
  echo "<td width='6%'>" . $row['comments'] . "</td>";
  $s=array($row['s.no'],$row['sid'] );
  echo"<td><a href =http://localhost/online_software_library/soft_lib/pages/det.php?sid=". $row['sid'] ." > Edit</a> </td>";
  echo "</tr>";
  
  }
  echo "</table>";
  
  
				  ?>
				  <center>

				 <br> <br><div id="menu"><input  type="submit" value="          Main Menu        " 
     onclick="window.location='http://localhost/online_software_library/soft_lib/pages/jadm.php';" /> </div>

<div id="back"><input  type="submit" value="    Back To Search    " 
     onclick="window.location='http://localhost/online_software_library/soft_lib/pages/jadmsir.php';" /></div>
<div id="jim"><h2><i><b>welcome user to software details </b></i></h2></div>
</body>