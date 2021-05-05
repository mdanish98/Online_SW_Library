<?php

session_start();
$x = $_SESSION['login_user'];
 if(!isset($x))
	{
	header("location:index.php");
	exit();
 }
 include "cal.php";
//<span style="float: left; padding: 5px;">

?>

<html>
<head>
<style>
html, body { margin:0; padding:0
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

#mid1
{
	position:absolute;
	top:50px;
	right:60px;
	background-color:#CCC;
	border-radius:8px;
	
}
#kill
{
	position:absolute;
	top:40px;
	right:225px;
	
}

#text
{
	position:absolute;
	top:290px;
	left:680px;
	font:"Times New Roman", Times, serif;
	color:#F66;
	
}
#radio
{
	position:absolute;
	top:350px;
	left:850;
	
}
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
	top:400px;
	right:650px;
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
	width:225px;
	height:60px;
-webkit-transform:rotate(360deg);
transform:rotate(360deg);
}
#all
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
	top:475px;
	right:900px;
}

#all:hover
{
	color:#336;
	background-color:#09C;
}


#all
{
	-webkit-transition:width 0.5s, height 0.5s, -webkit-transform 0.5s;
transition:width 0.5s, height 0.5s, transform 0.5s;
transition-property:all;
-webkit-transition-timing-function:linear;

}
#all:hover
{
	width:225px;
	height:60px;
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
	top:475px;
	right:650px;
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
#go
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
	top:475px;
	right:400px;
}

#go:hover
{
	color:#336;
	background-color:#09C;
}


#go
{
	-webkit-transition:width 0.5s, height 0.5s, -webkit-transform 0.5s;
transition:width 0.5s, height 0.5s, transform 0.5s;
transition-property:all;
-webkit-transition-timing-function:linear;

}
#go:hover
{
	width:225px;
	height:60px;
-webkit-transform:rotate(360deg);
transform:rotate(360deg);
}
#table1
{
	position:absolute;
	top:575px;
	right:550px;
}
#table2
{
	position:absolute;
	top:575px;
	right:350px;
}
#table4
{
	position:absolute;
	top:575px;
	right:550px;
}
#sno
{
	position:absolute;
	top:400px;
	right:575px;
}
#btnSubmit
{
	 background-color:#FF9009;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius:6px;
    color:#FFF;
    font-family:'Oswald',serif;
    font-size:20px;
    text-decoration: none;
    cursor: pointer;
    border:none;
	position:absolute;
	top:375px;
	right:118px;
}

#btnSubmit:hover
{
	color:#336;
	background-color:#09C;
}


#btnSubmit
{
	-webkit-transition:width 0.5s, height 0.5s, -webkit-transform 0.5s;
transition:width 0.5s, height 0.5s, transform 0.5s;
transition-property:all;
-webkit-transition-timing-function:linear;

}
#btnSubmit:hover
{
	width:125px;
	height:60px;
-webkit-transform:rotate(360deg);
transform:rotate(360deg);
}
</style>
</head>

<body>

<div id="date">
<?php
echo "Date-";
echo date("d-M-Y");
echo "\t";
echo date("D");
?>
</div>
<h1 id="lik">Welcome to Jamia Millia Islamia</h1>
<h2 ><td width="195"><b><strong><font size = 6><center><strong>Online Software Library<hr/></font></strong></b></center></h2>
<div id="mill">
<img src="277px-Jamia_Millia_Islamia_Logo.svg_.png" height="110px" width="110px"/>
</div>
<div id="wel">

<?php
ini_set('error_reporting',E_ALL & ~E_DEPRECATED & ~E_NOTICE);
$x = $_SESSION['login_user'];

echo "
Welcome,$x";
$sn=$_GET['mid'];
?> 
</div>
<strong><b></b>
<center>
<input  type="submit" value="       All Members      " 
     onclick="window.location='http://localhost/online_software_library/soft_lib/pages/allmam.php';" id="all" />

<input  type="submit" value="       Main Menu      " 
     onclick="window.location='http://localhost/online_software_library/soft_lib/pages/jadm.php';" id="main" /><br><br>
&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;
<input  type="submit" value="         Go Back        " 
     onclick="window.location='http://localhost/online_software_library/soft_lib/pages/mshp.php';" id="go" />

<form name="reg" action="mshpvd.php" method = "post">
	<div>


&ensp;&nbsp;&emsp;&ensp;&nbsp;&emsp;&ensp;&nbsp;&emsp;&ensp;&nbsp;&emsp;&ensp;&nbsp;&emsp;&ensp;&nbsp;&emsp;

<p id="text"><b>Enter Member Id:</b><input type="text" name="mid" value="<?php echo($sn);?>" maxlength="20" /></p><br>
&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;
<div id="radio">
<input type="radio" name="sets" value="-1"  />View
<input type="radio" name="sets" value="1"  />Edit </div><br><br> <br>&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;
<input type = "submit" value="          Submit          " id="submit" />

</form>

&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;

	
	 </html>




<?php
ini_set('error_reporting', E_ALL & ~E_DEPRECATED & ~E_NOTICE);
mysql_connect("localhost", "root", "") or die("Opps some thing went wrong");
		mysql_select_db("jmi")or die("Opps some thing went wrong");
		$sets=$_POST['sets'];
		 $set11=$_SESSION['sett'];
		 $sno=$_POST['sno'];
		$mid = $_POST['mid'];
		$r=$_POST['reguser'];
		$s=$_POST['sword'];
		$a=$_POST['addr'];
		$c=$_POST['cell'];
		$l=$_POST['landl'];
		$st=$_POST['status'];
		$o=$_POST['ofcdet'];
//$xxx= $_SESSION['$mid'];
//echo"$xxx";
//echo"<input type='submit' name='btnSubmit' id='btnSubmit' value='Edit' onclick=".edit();">

 


if (!empty($mid))
	{

		
		////$sql="SELECT * FROM usoath WHERE mid ='$mid'";
		//$result=mysql_query($sql);
		//$row=mysql_fetch_array($result);
		//echo("$result");
				//echo("$row");
			//$active=$row['active'];

		

	if (!empty($sno))

		{ 
			if($set11== 11){
				ini_set('error_reporting',E_ALL & ~DEPRECATED & ~E_NOTICE);
				mysql_connect("localhost", "root", "") or die("Opps some thing went wrong");
		mysql_select_db("jmi")or die("Opps some thing went wrong");
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

				echo "<div id='table1'>";
								
				echo "<br><br>Changed values<br><br><table border='1' name = 'fs'  id='table'>
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
			  echo "</div>";
				  }
			}
		}
	

	else
		{
			global $s;
			$mid = $_POST['mid'];
			if (isset($mid))

				{//onblur="valid(sof.sets.value,sof.sets);"
   

				//echo("$sid");

				$sql="SELECT * FROM usoath WHERE mid ='$mid'";
				$result=mysql_query($sql);
				//$row=mysql_fetch_array($result);
				//echo("$result");
				//echo("$row");
				//$active=$row['active'];
	
					if($sets== 1){
		
						$row = mysql_fetch_array($result);

							{
							echo "<div id='table4'";

								  echo "<form name='bypas' action='mshpvd.php' method='post'>";
								  echo"<center>";
								  echo "<br><label>	Sno:	</label>&emsp;&ensp;&nbsp;&emsp;&ensp;";
								  echo"<script type='text/javascript'>
								  function notice() 
		    
								 {     alert('This field cannot be changed');
				     // c.focus();
					    }</script>"	;
								  echo "<table >";
								  echo "<td>";
								  echo "<tr><input type='text' name='sno' value='" . $row['sno'] . "'readonly onclick='notice();'></input><br><br></tr>
						";
						  echo "<label>Member Id:</label>";
						  
						  echo "<tr><input class='box1' name='mid' value='". $row['mid'] . "'></input><br><br></tr>";
						  echo "
							<label>UserName:</label>";
							  echo "<input class='box1' name='reguser' value='". $row['reguser'] .			"'></input>&ensp;&ensp;&nbsp;&ensp;
					";
				  echo "<br><br><label>Password:	</label>";
				  echo "<input id='sword' name='sword' value='". $row['sword'] . "'></input><br>";
				  echo "<br><label>Address:	</label>";
					  echo "<input id='addr' name='addr' value='". $row['addr'] . "'></input><br>";
					  echo "<br><label>Cell No:	</label>";
				  echo "<input id='cell' name='cell' value='". $row['cell'] . "'></input><br>";
					  echo "<br><label>Landline:	</label>";
				echo "<input  id='landl' name='landl' value='". $row['landl'] . "'></input><br>";
			  echo "<br><label>Status:	</label>";
			  $zz =$row['status'];
								if($zz== -1)
									$xx="Member Blocked";
								else
									$xx="Access Granted";
				  echo "<input id='status' name='status' value='" . $xx . "'></input><br>";
				  echo "<br><label>Dept. Details</label>";
				  echo "<label for='ofcdet'>Name of the Dept:</label>
<select name = 'ofcdet' id = 'ofcdet'>
	<option value=''>Select</option>
  <option value='Mathematics'>Mathematics</option>
  <option value='Computers'>Computers</option>
  <option value='Law'>Law</option>
  <option value='CMS'>CMS</option>
</select><br>";
			  $_SESSION['sett']=11;
				 echo"<input type ='submit' name='btnSubmit' id='btnSubmit' value='     Submit    '  ></form>";
		  echo "</div>";
		} 
					
}
  
 else if ($sets== -1){
echo "<div id='table2'>";
				
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
				</tr>";
//echo '<form name="softt" action ="det.php" method="post">
//<label for ="s.no">s.no</label><input type ="text" name ="s.no" value ="'.$s[0]. '">';

while($row = mysql_fetch_array($result))
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
  echo "</table>";
  }


}


				}


		
else{	

		echo"<script type='text/javascript'>
		alert('Please Select a valid option from View/Edit.');
		</script>";
	}

		}
	}
		echo "</div>";
	

?>

</div>
</body>