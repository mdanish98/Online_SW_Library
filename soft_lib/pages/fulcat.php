<!DOCTYPE html>
<div class="box">
<Title>Welcome to Online Software library</Title>
<html>
<head>
<style>
     div.box
{
width:100%;
position:static;
left:10px;
top:100px;
}

	    #lik
{
	text-shadow:#093;
	color:#090;
	text-outline:#06C;
	text-align:center;
	cursor:pointer;
}
#lik:hover
{
	color:#0CF;
}
html { 
  background: url(images/bg.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

</style>
<h1 id="lik">Welcome to Jamia Millia Islamia</h1>

<style>
html, body { margin:0; padding:0 }
</style> 
<style> 
h1{} 
#res
		{
			width:100%;margin:auto;min-width:800px;max-width:2000px;
		}
h2
{
	font-family:"Times New Roman", Times, serif;
	font-size:30px;
	color:#306;<table width="200" border="1">
  <tr>
    <td></td>
    <td></td>
  </tr>
</table>

	text-align:center;
	position:relative;
}
#kil
{
	position:absolute;
	top:0px;
	left:50px;

}

body
{
	position: absolute;
	top: 50px;
	right:190px;
	text-align: center;
}
h3
{
	color:#0C0;
	text-align:left;
}
#lim
{
	background-color:#0c0;
	height:auto;
	width:1300px;
}
#home
{
	 background-color:#FF9009;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius:6px;
    color:#FFF;
    font-family:'Oswald',serif;
    font-size: 15px;
    text-decoration: none;
    cursor: pointer;
    border:none;
}
#submit
{
	 background-color: #FF9009;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius:6px;
    color: #FFF;
    font-family: 'Oswald';
    font-size: 15px;
    text-decoration: none;
    cursor: pointer;
    border:none;
}
#home:hover
{
	color:#336;
	background-color:#09C;
}
#submit:hover
{
	color:#336;
	background-color:#09C;
}
#home
{
	-webkit-transition:width 0.5s, height 0.5s, -webkit-transform 0.5s;
transition:width 0.5s, height 0.5s, transform 0.5s;
transition-property:all;
-webkit-transition-timing-function:linear;

}
#home:hover
{
	width:150px;
	height:30px;
-webkit-transform:rotate(360deg);
transform:rotate(360deg);
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
	width:150px;
	height:30px;
-webkit-transform:rotate(360deg);
transform:rotate(360deg);
}
#jil
{
	position:fixed;
	height:100px;
	width:300px;
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
#dann
{
	position:absolute;
	top:100px;
	left:100px;
}


</style>
</head>
<body>
<div id="kil">
<img src="../../277px-Jamia_Millia_Islamia_Logo.svg_.png" height="110px" width="110px"/>
</div>
<h2><td width="195"><b><strong><font size = 6><center><strong>Online Software Library<hr/></font></strong></b></center></h2>
<table align="center" >
<?php

echo "<h3>Welcome,user</h3>";?><br><br>

<table cellspacing="30" cellspacing="30" id="lij" align="center">
  <tr align="center">
  <td><input  type="submit" value="         Home        " 
     onClick="window.location='http://localhost/online_software_library/index.php';" id="home"/> </td> 
 <td> <input  type="submit" value=  "         Search        " 
     onClick="window.location='http://localhost/online_software_library/soft_lib/pages/nsir.php';" id="submit" /></td></tr></table>


<table align="center" id="kli">

<tr>
<td></td>
	 <td><br><br></td>
    </tr>
  </table>
<font size='3' ><center></center>
<p><br>
  <br>
  
  
  </body>
  <?php
ini_set('error_reporting', E_ALL & ~E_DEPRECATED & ~E_NOTICE);
mysql_connect("localhost", "root", "") or die("Opps some thing went wrong");
error_reporting(E_ALL | error_reporting());

mysql_select_db("jmi") or die("Opps some thing went wrong");
$sql="SELECT * FROM sofftt ";
		$result=mysql_query($sql) or die("Opps some thing went wrong1");;
echo"<center>";
		echo "<br><br>Details<br><br><table border='1' border-color='aqua' name = 'fs' >
	
				<tr>
				<th>Software Id.</th>
				<th>Name</th>
				<th>Company</th>
				<th>version</th>
				<th>technology</th>
				<th>manuals</th>
				<th>Status</th>
				<th>Download</th>
				</tr>";
			
				while($row = mysql_fetch_array($result))
				  {
					  echo "<tr>";
					  echo "<td id='tal'>" . $row['sid'] . "</td>";
					  echo "<td>" . $row['name'] . "</td>";
					  echo "<td>" . $row['brand_name'] . "</td>";
					  echo "<td>" . $row['version'] . "</td>";
					  echo "<td>" . $row['technology'] . "</td>";
					
					  echo "<td>" . $row['mannuals'] . "</td>";
						 $zz =$row['status'];
								if($zz== -1)
									$xx="Access Restricted";
								else
									$xx="Available";
						 echo "<td>" . $xx . "</td>";
						 $u=$row['url'] ;
						 
						  if ($zz==-1)
							{	echo "<td>Link Unavailable</a> </td>";}
						 else{

						 echo "<td><a href =http://localhost/online_software_library/soft_lib/pages/nsir.php?name=". $row['name'] ." > Download</a> </td>";}
					  echo "</tr>";
			 
				  }	echo '</div>';			  				  ?>
</table>
</p>
<p>Softwares List</p></font>
</div>
</div>