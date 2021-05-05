<?php
ini_set('error_reporting',E_ALL & ~E_DEPRECATED & ~E_NOTICE);
session_start();
?>
<html>
<!DOCTYPE html>

<Title>Welcome to Online Software library</Title>

<head>
<h1 id="lik">Welcome to Jamia Millia Islamia</h1>
<style>

h1
{
		height:50px;
	width:100%;
	text-align:center;
	animation-direction:normal;
	cursor:pointer;

}
h1{
	background:#9FF;
	
}
#kil
{
	position:absolute;
	
	z-index:100;
}
#mill
{
	position:absolute;
	top:10px;
	left:50px;
	cursor:pointer;

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
	width:100%;
position:absolute;
top:130px;
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
0%   {color:red; left:0px; right:700px;}
25%  {color:yellow; right:0px; left:700px;}
50%  {color:blue; left:opx; right:700px;}
75%  {color:green; left:700px; right:0px;}
100% {color:red; left:0px; right:700px;}
}-



#lik
{
	outline-width:10px;
	
	text-shadow:#093;
	color:#960;
	text-outline:#CCC;
}
#lik:hover
{
	color:#009;
	opacity:0.4;
}
</style>
<body>
<h2 ><b><strong><font size = 6><center><strong>Online Software Library</font></strong></b></center></h2>
<div id="mill">

<img src="277px-Jamia_Millia_Islamia_Logo.svg_.png" height="110px" width="110px"/>
</div>

</body>

<style>
        .box{
		 
    
       
                font-family:Tahoma, Geneva, sans-serif;
                font-size:16px;
                color:#333;
              
				background:#FFF;
			               border:2px solid #5C5233;
        }
</style>
<style>

</style>
<script type="text/javascript">
  function valid(n,c,t,k) {
    if( (n== "") && (c== "") && (k== "") && (t == "") ) 

 {     alert("please enter a valid option");
     // c.focus();
    }
}
	</script>

<style> 
#name
{
	background-color:#CCC;
}
#search
{
	 position:absolute;
	top:10px;
	left:920px;
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
#search
{
	-webkit-transition:width 0.5s, height 0.5s, -webkit-transform 0.5s;
transition:width 0.5s, height 0.5s, transform 0.5s;
transition-property:all;
-webkit-transition-timing-function:linear;

}
#search:hover
{
	width:100px;
	height:30px;
	color:#009;
	background-color:#0F0;
-webkit-transform:rotate(360deg);
transform:rotate(360deg);
}

#go
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
	position:absolute;
	top:50px;
	left:900px;
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
	width:115px;
	height:30px;
	
	color:#336;
	background-color:#09C;
	-webkit-transform:rotate(360deg);
transform:rotate(360deg);
}


</style>

<style>
#brand_name
{
	background-color:#CCC;
}
#technology
{
	background-color:#CCC;
}
#keywords
{
	background-color:#CCC;
}

	</style></head>
<div class="box">
<center><b><i><h2><br>Search By</h2></i></b></h2>
</i></b>
<form name ="srch" action = "nsir.php" method = "POST">
<table width="340">
  <tr>
    <td width="150" height="53">software name:</td>
    <td width="229"><input name= "name" id ="name" type ="text"></td>
  </tr>
  <tr>
    <td height="48">Company:</td>
    <td><input name= "brand_name" id ="brand_name" type ="text"></td>
  </tr>
  <tr>
    <td height="57">Technology:</td>
    <td><input name= "technology" id ="technology" type ="text"></td>
  </tr>
  <tr>
    <td height="61">Key Words: </td>
    <td><input name= "keywords" id ="keywords" type ="text"></td>
  </tr>
</table>

<br>
<div id="kil">
<input type ="submit" value = "     Search     "   onClick="valid(srch.name.value,srch.brand_name.value,srch.technology.value,srch.keywords.value);" id="search">
</div>
</form> 
<div id="kil">
<input  type="submit" value="         Go Back        "
     onclick="window.location='http://localhost/online_software_library/soft_lib/pages/index.php';" id="go" /><br><br><br>
</div>	
</html>

<?php
ini_set('error_reporting',E_ALL & ~E_DEPRECATED & ~E_NOTICE);
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
$n1=$_GET['name'];
$_SESSION['setnn1']=$n1;



if (!empty($n))
		{
			$sql="SELECT * FROM sofftt WHERE name like	'%$n%'  ";
		$result=mysql_query($sql) or die("Opps some thing went wrong1");;

		echo "<br><br>Details<br><br><table border='1' name = 'fs'>
				<tr>
				
				<th>Product</th>
				<th>Company</th>
				<th>Version</th>
				<th>Technology</th>
				<th>Manuals</th>
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
						 $zz =$row['status'];
								if($zz== -1)
									$xx="Access Restricted";
								else
									$xx="Available";
						 echo "<td>" . $xx . "</td>";
						 $u=$row['url'] ;
						 
						  if ($zz==-1)
							{	echo "<td> Link Unavailable </td>";}
						 else{
						 echo "<td> <a href =http://localhost/online_software_library/soft_lib/pages/uonlin.php  > Download </a> </td>";}
					  echo "</tr>";
			  
				  }


		}


else if (!empty($n1))
		{
			$sql="SELECT * FROM sofftt WHERE name like	'%$n1%' ";
		$result=mysql_query($sql) or die("Opps some thing went wrong1");;

		echo "<br><br>You Selected<br><br><table border='1' name = 'fs'>
				<tr>
				
				<th>Product</th>
				<th>Company</th>
				<th>Version</th>
				<th>Technology</th>
				<th>Manuals</th>
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
						 $zz =$row['status'];
								if($zz== -1)
									$xx="Access Restricted";
								else
									$xx="Available";
						 echo "<td>" . $xx . "</td>";
						 $u=$row['url'] ;
						 
						  if ($zz==-1)
							{	echo "<td>Link Unavailable </td>";}
						 else{
						 echo "<td> <a href =http://localhost/online_software_library/soft_lib/pages/uonlin.php > Download</a> </td>";}
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
						$zz =$row['status'];
								if($zz== -1)
									$xx="Access Restricted";
								else
									$xx="Available";
						 echo "<td>" . $xx . "</td>";
						 $u=$row['url'] ;
						  if ($zz==-1)
							{	echo "<td> Link Unavailable </td>";}
						 else{
						 echo "<td> <a href =http://localhost/online_software_library/soft_lib/pages/uonlin.php > Download </a> </td>";}
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
						$zz =$row['status'];
								if($zz== -1)
									$xx="Access Restricted";
								else
									$xx="Available";
						 echo "<td>" . $xx . "</td>";
						 $u=$row['url'] ;
						  if ($zz==-1)
							{	echo "<td>Link Unavailable </td>";}
						 else{
						 echo "<td> <a href =http://localhost/online_software_library/soft_lib/pages/uonlin.php > Download </a> </td>";}
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
						 $zz =$row['status'];
								if($zz== -1)
									$xx="Access Restricted";
								else
									$xx="Available";
						 echo "<td>" . $xx . "</td>";
						 if ($zz==-1)
							{	echo "<td> Link Unavailable </td>";}
						 else{
						 echo "<td> <p>Download URL:<a href =http://localhost/online_software_library/soft_lib/pages/uonlin.php > DOWNLOAD</a> </td>";}
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
      <div id="jim"><h2><i><b>welcome user to get the software details</b></i></h2></div>
     