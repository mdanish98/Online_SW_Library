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
<h1 id="lik">Welcome to Jamia Millia Islamia</h1>
<div id="date">
<?php
echo "Date-";
echo date("d-M-Y");
echo "\t";
echo date("D");
?>
</div>

</head>


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
	top:200px;
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
#req1
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
	right:100px;
}

#req1:hover
{
	color:#336;
	background-color:#09C;
}


#req1
{
	-webkit-transition:width 0.5s, height 0.5s, -webkit-transform 0.5s;
transition:width 0.5s, height 0.5s, transform 0.5s;
transition-property:all;
-webkit-transition-timing-function:linear;

}
#req1:hover
{
	width:200px;
	height:50px;
-webkit-transform:rotate(360deg);
transform:rotate(360deg);
}

</style>
<body>
<h2 ><td width="195"><b><strong><font size = 6><center><strong>Online Software Library<hr/></font></strong></b></center></h2>
<div id="mill">
<img src="277px-Jamia_Millia_Islamia_Logo.svg_.png" height="110px" width="110px"/>
</div>
</body>
<div id="wel">
<?php
echo "Welcome,$x";?></div>
<font size='3' ><center><p id="req">Requisitions</p></font></center><br><br>
<?php
ini_set('error_reporting',E_ALL & ~E_DEPRECATED & ~E_NOTICE);
mysql_connect("localhost", "root", "") or die("Opps some thing went wrong");
mysql_select_db("jmi") or die("Opps some thing went wrong");
$sql="SELECT * FROM usereq ";
		$result=mysql_query($sql) or die("Opps some thing went wrong1");;
echo"<center>";
		echo "<br><br><table border='1' name = 'fs'>
<tr id='upper'>
				<th>Serial no.</th>
				<th>User name</th>
				<th>Address</th>
				<th>Cell Number</th>
				<th>Land Line</th>
				<th>Email</th>
				<th>Dept. Details</th>
				<th>Member Id</th>
				<th>Password</th>
				<th>Date</th>
				<th>Action</th>
				
				<th>Status</th>
				</tr>";
//echo '<form name="softt" action ="det.php" method="post">
//<label for ="s.no">s.no</label><input type ="text" name ="s.no" value ="'.$s[0]. '">';

while($row = mysql_fetch_array($result))
  {
					echo "<tr id='lower'>";
					
					  echo "<td>" . $row['sno'] . "</td>";
					 
					  echo "<td>" . $row['reguser'] . "</td>";
					 
					  echo "<td>" . $row['addr'] . "</td>";
					  echo "<td>" . $row['cell'] . "</td>";
					  echo "<td>" . $row['landl'] . "</td>";
					  echo "<td>" . $row['email'] . "</td>";
						 echo "<td>" . $row['ofcdet'] . "</td>";
						  echo "<td>" . $row['mid'] . "</td>";
						   echo "<td>" . $row['sword'] . "</td>";
						   echo "<td>" . $row['date'] . "</td>";
						  echo"<td><a href =http://localhost/online_software_library/soft_lib/pages/rosth.php?sno=". $row['sno'] ." > Authenticate</a> | <a href =http://localhost/online_software_library/soft_lib/pages/rosdl.php?sno=". $row['sno'] ." > Delete</a> </td>";
						  $wb=$row['status'];
						  if($wb==1)
							  echo "<td>Authenticated</td>";
							  else
								  echo "<td>Pending</td>";

					  echo "</tr>";
  }
  echo "</table>";
  

  
				  ?>
				  <br><br><br><br>

	 <input  type="submit" value="         Requisitions       " 
     onclick="window.location='http://localhost/online_software_library/soft_lib/pages/ros.php';" id="req1" />

	 <input  type="submit" value="          Main Menu         " 
     onclick="window.location='http://localhost/online_software_library/soft_lib/pages/jadm.php';" id="main" />


