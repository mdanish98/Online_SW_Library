<?php 
ini_set('error_reporting',E_ALL & ~E_DEPRECATED & ~E_NOTICE);
session_start();
?>
<html>
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
</style>
<style>
#btnSubmit
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
	right:680px;
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
	width:150px;
	height:50px;
-webkit-transform:rotate(360deg);
transform:rotate(360deg);
}
#catalogue
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
	top:480px;
	right:800px;
}

#catalogue:hover
{
	color:#336;
	background-color:#09C;
}


#catalogue
{
	-webkit-transition:width 0.5s, height 0.5s, -webkit-transform 0.5s;
transition:width 0.5s, height 0.5s, transform 0.5s;
transition-property:all;
-webkit-transition-timing-function:linear;

}
#catalogue:hover
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
	top:480px;
	right:535px;
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
	width:190px;
	height:50px;
-webkit-transform:rotate(360deg);
transform:rotate(360deg);
}
</style> 
</head>

<script type="text/javascript">
  function valid(n,c,t,k) {
    if( (n== "") && (c== "") && (k== "") && (t == "") ) 

 {     alert("please enter a valid option");
     // c.focus();
    }
}
	</script>
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
echo "Welcome,user";
?>
</div>
<center>Search By:
<form name ="srch" action = "testt.php" method = "POST">

<br><br><label>&ensp;&nbsp;&ensp;&nbsp;&ensp;Name:	&ensp;&nbsp;&ensp;&nbsp;&ensp;&ensp;&nbsp;&ensp;&nbsp;&ensp;	</label><input name= "name" id ="name" type ="text">
<br><br><label>&ensp;&nbsp;&ensp;&nbsp;&ensp;Company:&ensp;&ensp;&nbsp;&ensp;&nbsp;&ensp;		</label><input name= "brand_name" id ="brand_name" type ="text">
<br><br><label>&ensp;&nbsp;&ensp;&nbsp;&ensp;Technology:&ensp;&nbsp;&ensp;&nbsp;&ensp;	</label><input name= "technology" id ="technology" type ="text">
<br><br><label>&ensp;&nbsp;&ensp;&nbsp;&ensp;Key Words:	&ensp;&nbsp;&ensp;&nbsp;&ensp;</label><input name= "keywords" id ="keywords" type ="text">
<br><br><br><input type ="submit" value = "     Search     " onClick="valid(srch.name.value,srch.brand_name.value,srch.technology.value,srch.keywords.value);" id="btnSubmit"> </form>

<input  type="submit" value="         Catalogue        " 
     onclick="window.location='http://localhost/online_software_library/soft_lib/pages/fulcat.php';" id="catalogue" />
	 <input  type="submit" value="         Go Back        " 
     onclick="window.location='http://localhost/online_software_library/soft_lib/pages/welcome.php';" id="back" />
<?php

mysql_connect("localhost", "root", "") or die("Opps some thing went wrong");
mysql_select_db("jmi") or die("Opps some thing went wrong");

$n=mysql_real_escape_string($_POST['name']);
$c=mysql_real_escape_string($_POST['brand_name']);
$t=mysql_real_escape_string($_POST['technology']);
$k=mysql_real_escape_string($_POST['keywords']);
$_SESSION['setc']=$c;
$_SESSION['setn']=$n;
$_SESSION['setk']=$k;
$_SESSION['settt']=$t;
echo"$c";


if (!empty($n))
		{
			$sql="SELECT * FROM sofftt WHERE name like	'%$n%' ";
		$result=mysql_query($sql) or die("Opps some thing went wrong1");;

		echo "<br><br>Details<br><br><table border='1' name = 'fs'>
				<tr>
				
				<th>Product</th>
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
					  
					  echo "<td>" . $row['name'] . "</td>";
					  echo "<td>" . $row['brand_name'] . "</td>";
					  echo "<td>" . $row['version'] . "</td>";
					  echo "<td>" . $row['technology'] . "</td>";
					
					  echo "<td>" . $row['mannuals'] . "</td>";
						 echo "<td>" . $row['status'] . "</td>";
						 echo "<td> <p>Download URL:<a href =http://localhost/online_software_library/soft_lib/pages/uonlin.php > hello</a> </td>";
					  echo "</tr>";
			  
				  }

		}

elseif (!empty($c))
		{
			$sql1="SELECT * FROM sofftt WHERE brand_name like '%$c%' ";
		$result1=mysql_query($sql1) or die("Opps some thing went wrong2");;

		echo "<br><br>Details<br><br><table border='1' name = 'fs'>
				<tr>
				
				<th>Product</th>
				<th>Company</th>
				<th>version</th>
				<th>technology</th>
				<th>manuals</th>
				<th>Status</th>
				<th>Download</th>
				</tr>";
			
				while($row = mysql_fetch_array($result1))
				  {
					  echo "<tr>";
					  
					  echo "<td>" . $row['name'] . "</td>";
					  echo "<td>" . $row['brand_name'] . "</td>";
					  echo "<td>" . $row['version'] . "</td>";
					  echo "<td>" . $row['technology'] . "</td>";
					
					  echo "<td>" . $row['mannuals'] . "</td>";
						 echo "<td>" . $row['status'] . "</td>";
						 echo "<td> <p>Download URL:<a href =http://localhost/online_software_library/soft_lib/pages/uonlin.php > hello</a> </td>";
					  echo "</tr>";
			  
				  }

		}
elseif (!empty($t))
		{
			$sql="SELECT * FROM sofftt WHERE technology like	'%$t%' ";
		$result=mysql_query($sql) or die("Opps some thing went wrong1");;

		echo "<br><br>Details<br><br><table border='1' name = 'fs'>
				<tr>
				
				<th>Product</th>
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
					  
					  echo "<td>" . $row['name'] . "</td>";
					  echo "<td>" . $row['brand_name'] . "</td>";
					  echo "<td>" . $row['version'] . "</td>";
					  echo "<td>" . $row['technology'] . "</td>";
					
					  echo "<td>" . $row['mannuals'] . "</td>";
						 echo "<td>" . $row['status'] . "</td>";
						 echo "<td> <p>Download URL:<a href =http://localhost/online_software_library/soft_lib/pages/uonlin.php > hello</a> </td>";
					  echo "</tr>";
			  
				  }

		}
	
else if (!empty($k)){ 
			$sql="SELECT * FROM sofftt WHERE keywords like	'%$k%' ";
		$result=mysql_query($sql) or die("Opps some thing went wrong1");;

		echo "<br><br>Details<br><br><table border='1' name = 'fs'>
				<tr>
				
				<th>Product</th>
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
					  
					  echo "<td>" . $row['name'] . "</td>";
					  echo "<td>" . $row['brand_name'] . "</td>";
					  echo "<td>" . $row['version'] . "</td>";
					  echo "<td>" . $row['technology'] . "</td>";
					
					  echo "<td>" . $row['mannuals'] . "</td>";
						 echo "<td>" . $row['status'] . "</td>";
						 echo "<td> <p>Download URL:<a href =http://localhost/online_software_library/soft_lib/pages/uonlin.php > hello</a> </td>";
					  echo "</tr>";
			  
				  }

		}

	else //if ((empty($n) and empty($c) and empty($t) and empty($k) ))
		{
		echo"<script type='text/javascript'>
		return 'Please Select atleast one valid option.';
		</script>";
		}


?>








<?php
/*
<form action = >
<table border='1'>

<tr>
<td>S.No.</td>
<th>S Id</th>
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
</tr>
</body>*/
?>
</body>
</html>