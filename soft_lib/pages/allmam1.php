<?php
session_start();

$x = $_SESSION['login_user'];
 
if(!isset($x))
	{
	header("location:welcome.php");
	exit();
	}

 
?>
<html>
<style>
        .box{ z-index:10;
		 
      height:88%;
       
                font-family:Tahoma, Geneva, sans-serif;
                font-size:16px;
                color:#333;
                padding:5px;
                background-color:#CCC;
                border:2px solid #999;
        }
</style>
<img src="http://localhost/online_software_library/soft_lib/images/logo.jpg" alt="logo" width="100%" height="12%">
<style>
html, body { margin:0; padding:0 }
div.box
{
width:100%;
padding:10px;
border:40px ridge;
margin:0px;
{background-color:#66E0FF;} 
position:static;
left:10px;
top:100px;
}
</style> 
<style> h1{  background-color:#0099FF;} 
</style>
<div class="box">


<h1 ><strong><font size = 6><center><strong>TOSL</font></strong></CENTER></h1>
<?php

echo "Welcome,$x";

?>
<font size='3' ><center>Members List</font></center><br><br>
<?php
mysql_connect("localhost", "root", "") or die("Opps some thing went wrong");
mysql_select_db("jmi") or die("Opps some thing went wrong");
$sql="SELECT * FROM usoath ";
		$result=mysql_query($sql) or die("Opps some thing went wrong1");;
echo"<center>";
		echo "<br><br><table border='1' name = 'fs'>
<tr>
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
						echo "<tr>";
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
								else
									$xx="Access Granted";
						 echo "<td>" . $xx . "</td>";
						 echo "<td>" . $row['ofcdet'] . "</td>";
						  echo"<td><a href =http://localhost/online_software_library/soft_lib/pages/mshpvd.php?mid=". $row['mid'] ."&sets=1 > Edit</a>| <a href =http://localhost/online_software_library/soft_lib/pages/mshprm.php?mid=". $row['mid'] ." > Delete</a> </td>";
						  
					  echo "</tr>";
  }
  echo "</table>";
  
  
				  ?>
				  <center>
				 <br> <br><input  type="submit" value="          Main Menu        " 
     onclick="window.location='http://localhost/online_software_library/soft_lib/pages/jadm.php';" /> <br><br>

	 <input  type="submit" value="    Back To Search    " 
     onclick="window.location='http://localhost/online_software_library/soft_lib/pages/jadmsir.php';" />
