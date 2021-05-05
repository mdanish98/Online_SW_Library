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
<head>
</head>

<style>
html, body { margin:0; padding:0 }
</style> 
<style> 
#date
{
	position:absolute;
	top:100px;
	right:120px;
	color:#666;
}
#wel
{
	color:#3B5998 ;
	position:absolute;
	top:200px;
	left:175px;
	font-size:20px;
	
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
	right:750px;
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
	width:225px;
	height:60px;
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
	right:550px;
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
	width:225px;
	height:60px;
-webkit-transform:rotate(360deg);
transform:rotate(360deg);
}
#list
{
	color:#096;
	position:absolute;
	top:185px;
	right:175px;
}
#serial
{
	font-size:22px;
	color:#936;
	
}
#zed
{
	color:#060;
}
body
{
	width:100%;
	height:100%;
}



</style>
<div class="box">

<body>
<h1 id="lik">Welcome to Jamia Millia Islamia</h1>

<h2 ><td width="195"><b><strong><font size = 6><center><strong>Online Software Library<hr/></font></strong></b></center></h2>
<div id="mill">
<img src="277px-Jamia_Millia_Islamia_Logo.svg_.png" height="110px" width="110px"/>
</div>

<div id="wel">
<?php

echo "Welcome,$x";

?>
</div>
<font size='3' ><center>Members List</font></center><br><br>
<div id="list">
<?php
ini_set('error_reporting', E_ALL & ~E_DEPRECATED & ~E_NOTICE);

mysql_connect("localhost", "root", "") or die("Opps some thing went wrong");
mysql_select_db("jmi") or die("Opps some thing went wrong");
$sql="SELECT * FROM usrecd ";
		$result=mysql_query($sql) or die("Opps some thing went wrong1");;
echo"<center>";
		
		echo "<br><br><table border='2' name = 'fs' id='list' cellspacing='5px'>

<tr id='serial'>
				<th>Serial no.</th>
				<th>Member Id</th>
				<th>User name</th>
				<th>Password</th>
				<th>Address</th>
				<th>Cell Number</th>
				<th>Land Line</th>
				<th>Status</th>
				<th>Dept. Details</th>
				<th>Action</th>
				</tr>";
//echo '<form name="softt" action ="det.php" method="post">
//<label for ="s.no">s.no</label><input type ="text" name ="s.no" value ="'.$s[0]. '">';
while($row = mysql_fetch_array($result))
  {
	  if($row['mid']=="")
		  continue;
						echo "<tr id='zed'>";
						$mid=$row['mid'];
						$_SESSION['$mid']= true;
					  echo "<td>" . $row['sno'] . "</td>";
					  echo "<td>" . $row['mid'] . "</td>";
					  echo "<td>" . $row['reguser'] . "</td>";
					  echo "<td>" . $row['sword'] . "</td>";
					  echo "<td>" . $row['addr'] . "</td>";
					  echo "<td>" . $row['cell'] . "</td>";
					  echo "<td>" . $row['landl'] . "</td>";
						 $zz =$row['status'];
								if($zz== -1)
									$xx="Member Blocked";
								else if($zz== 0)
									$xx="DELETED";
									else
									$xx="Access Granted";
						 echo "<td>" . $xx . "</td>";
						 echo "<td>" . $row['ofcdet'] . "</td>";
						  echo"<td><a href =http://localhost/online_software_library/soft_lib/pages/mshpvd.php?mid=". $row['mid'] ." > Edit</a>| <a href =http://localhost/online_software_library/soft_lib/pages/mshprm.php?mid=". $row['mid'] ."&sno=". $row['sno'] ." > Delete</a> </td>";
						  
					  echo "</tr>";
  }
  echo "</table>";
  
  
				  ?>
				  </div>
                  <center>

				 <br> <br><input  type="submit" value="          Main Menu        " 
     onclick="window.location='http://localhost/online_software_library/soft_lib/pages/jadm.php';" id="main" /> <br><br>

	 <input  type="submit" value="    Back To Search    " 
     onclick="window.location='http://localhost/online_software_library/soft_lib/pages/jadmsir.php';" id="back" />
<div id="date">
<?php
echo "Date-";
echo date("d-M-Y");
echo "\t";
echo date("D");
?>
</div>
</body>
</html>
