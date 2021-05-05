<html>

<style>
        #lik
{
	text-shadow:#093;
	color:#090;
	text-outline:#06C;
	text-align:center;
}

</style>
<h1 id="lik">Welcome to Jamia Millia Islamia</h1>

<style>
html, body { margin:0; padding:0 }
</style> 
<style> 
h1{} 
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
	top: 5px;
	text-align: center;
}
h3
{
	color:#0C0;
	text-align:left;
}

</style>
<div class="box">

<body>
<div id="kil">
<img src="../../277px-Jamia_Millia_Islamia_Logo.svg_.png" height="110px" width="110px"/>
</div>
<h2 ><td width="195"><b><strong><font size = 6><center><strong>TOSL<hr/></font></strong></b></center></h2>
<?php

echo "<h3>Welcome,user</h3>";?><br><br>

  <input  type="submit" value="         Home        " 
     onClick="window.location='http://localhost/online_software_library/soft_lib/pages/welcome.php';" />
  <input  type="submit" value="         Search        " 
     onClick="window.location='http://localhost/online_software_library/soft_lib/pages/nsir.php';" />
<table align="center">
<tr>
<td></td>
	 <td><br><br></td>
    </tr>
  </table>
<font size='3' ><center></center>
<p><br>
  <br>
<?php
mysql_connect("localhost", "root", "") or die("Opps some thing went wrong");
echo "connected to my sql";
/*mysqli_select_db("jmi") or die("Opps some thing went wrong");*/
$sql="SELECT * FROM sofftt ";
		$result=mysql_query($sql) or die("Opps some thing went wrong1");;
echo"<center>";
		echo "<br><br>Details<br><br><table border='1' name = 'fs'>
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
			
				while($row =mysql_fetch_array($result))
				  {
					  echo "<tr>";
					  echo "<td>" . $row['sid'] . "</td>";
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
			  
				  }
				  ?>
</p>
<p>Softwares List</p></font>
</body>