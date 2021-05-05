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
<style>
        
</style>
<img src="http://localhost/online_software_library/soft_lib/images/logo.jpg" alt="logo" width="100%" height="12%">
<style>
</style> 
<style> h1{  background-color:#0099FF;} 
</style>
<div class="box">


<h1 ><strong><font size = 6><center><strong>TOSL</font></strong></CENTER></h1><?php

echo "Welcome,$x";
$sn=$_GET['sno'];

mysql_connect("localhost", "root", "") or die("Opps some thing went wrong");
mysql_select_db("jmi") or die("Opps some thing went wrong");

$sql="SELECT * FROM usoath where sno ='$sn'";
		$result=mysql_query($sql) or die("Opps some thing went wrong1");;
while($row = mysql_fetch_array($result))
 {?>
<center>
<b>Enter Member Details:</b><form name="reg" action="memdit.php" method = "post">
	<div><br><br>

&ensp;&nbsp;&emsp;&ensp;&nbsp;&emsp;&ensp;&nbsp;&emsp;&ensp;&nbsp;&emsp;&ensp;&nbsp;&emsp;&ensp;&nbsp;&emsp;
<label for="mid">Member  Id:</label>
<input type="text" name="mid" value="<?php echo($row['mid']);?>" maxlength="20" id="mid"   />

&ensp;&ensp;&ensp;&ensp;&ensp;&emsp;&ensp;&emsp;<label for="reguser">Name:</label>
<input type="text" name="reguser" value="<?php echo($row['reguser']);?>" maxlength="100" id="reguser" /><br><br>
</div>
<div>
&nbsp;&emsp;&ensp;&nbsp;&emsp;&ensp;&nbsp;&emsp;&ensp;&nbsp;&emsp;&ensp;&nbsp;&ensp;&nbsp;&emsp;&ensp;&nbsp;&emsp;&ensp;&nbsp;
<label for="add">Address:</label>
<input type="text" name="addr" value="<?php echo($row['addr']);?>" maxlength="80" id="addr" />
&ensp;&ensp;&nbsp;&ensp;
<label for="cell">Contact No.:</label>
<input type="text" name="cell" value="<?php echo($row['cell']);?>" maxlength="20" id="cell" onBlur="validn(reg.cell.value);" />
</div>
<div>
&emsp;&nbsp;&ensp;&nbsp;&nbsp;&emsp;&ensp;&nbsp;&emsp;&ensp;&nbsp;&emsp;<br>
&emsp;&ensp;&nbsp;&emsp;&ensp;&emsp;&ensp;&nbsp;&emsp;&ensp;&emsp;&ensp;&nbsp;&emsp;&ensp;&emsp;&ensp;&nbsp;
<label for="landl">Landline:</label>
<input type="text" name="landl" value="<?php echo($row['landl']);?>" maxlength="80" id="landl" onBlur="validn(reg.landl.value);" />
&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;
<label for="sword">Password:</label>
<input type="text" name="sword" value="<?php echo($row['sword']);?>" maxlength="10" id="sword" />
</div>



<div>
&emsp;&nbsp;&ensp;&nbsp;&nbsp;&emsp;&ensp;&nbsp;&emsp;&ensp;&nbsp;&emsp;<br>
&emsp;&ensp;&nbsp;&emsp;&ensp;&emsp;&ensp;&nbsp;&emsp;&ensp;&emsp;&ensp;&nbsp;&emsp;&ensp;&emsp;&ensp;&nbsp;
<label for="ofcdet">Name of the Dept:</label>
<select name = "ofcdet" id = "ofcdet">
	<option value="<?php echo($row['ofcdet']);?>">Select</option>
  <option value="Mathematics">Mathematics</option>
  <option value="Computers">Computers</option>
  <option value="Law">Law</option>
  <option value="CMS">CMS</option>
</select>
</div>

<?php $_SESSION['seter']=11; } ?>






<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;
<input  type="submit" value="          Submit          " onClick="validd(reg.mid.value,reg.reguser.value,reg.addr.value,reg.cell.value,reg.landl.value,reg.sword.value,reg.ofcdet.value);"/>
</form>
&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;
<input  type="submit" value="       Main Menu      " 
     onclick="window.location='http://localhost/online_software_library/soft_lib/pages/jadm.php';" /><br><br>
&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;
<input  type="submit" value="         Go Back        " 
     onclick="window.location='http://localhost/online_software_library/soft_lib/pages/mshp.php';" />

	<?php 
	mysql_connect("localhost", "root", "") or die("Opps some thing went wrong");
		mysql_select_db("jmi")or die("Opps some thing went wrong");
		
		 $seter=$_SESSION['seter'];
		 $sno=$_GET['sno'];
		$mid = $_POST['mid'];
		$r=$_POST['reguser'];
		$s=$_POST['sword'];
		$a=$_POST['addr'];
		$c=$_POST['cell'];
		$l=$_POST['landl'];
		$st=$_POST['status'];
		$o=$_POST['ofcdet'];
		if (!empty($sno))

		{ 
			if($seter== 11){
		$sql1231="UPDATE usrecd SET mid='$mid',reguser='$r',sword='$s',addr='$a',cell='$c',landl='$l',status='$st',ofcdet='$o'  WHERE sno='$sno'";
		
			mysql_query($sql1231)or die("Opps some thing went wrong1");

$sql123="UPDATE usoath SET mid='$mid',reguser='$r',sword='$s',addr='$a',cell='$c',landl='$l',status='$st',ofcdet='$o'  WHERE sno='$sno'";
		
			mysql_query($sql123)or die("Opps some thing went wrong1");
		//echo"$sn";

/*
		$sqll="UPDATE sofftt SET sid='$s',name='$n',brand_name='$bn',version='$v',technology='$t',quantity='$q',license='$l',media_source='$ms',keywords='$k',mannuals='$m',registration_key='$rk',key_classification='$kc',date_purchse='$dp',date_received='$dr',url='$u',status='$st',comments='$cm' WHERE sno='$sn'";
	mysql_query($sqll)or die("Opps some thing went wrong");	*/
//echo"$sn";
				$sql121="SELECT * FROM usoath WHERE mid ='$mid'";
				$result121=mysql_query($sql121) or die("Opps some thing went wrong12");;

				echo "<br><br>Changed values<br><br><table border='1' name = 'fs'>
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
				</tr>";
				//echo '<form name="softt" action ="det.php" method="post">
				//<label for ="s.no">s.no</label><input type ="text" name ="s.no" value ="'.$s[0]. '">';
				

				while($row = mysql_fetch_array($result121))
				  {
					  echo "<tr>";
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
					  echo "</tr>";
			  
				  }

			}
		}
				  ?>