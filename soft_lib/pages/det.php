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
<head>
<style>
body
{
	height:100%;
	width:100%;
}
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
#btnsubmit{
	top:215px;
	width:100px;
	position:absolute;
	left:840px;
}
.go1
{
	 position:absolute;
	top:320px;
	left:770px;
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

.go1
{
	-webkit-transition:width 0.5s, height 0.5s, -webkit-transform 0.5s;
transition:width 0.5s, height 0.5s, transform 0.5s;
transition-property:all;
-webkit-transition-timing-function:linear;

}
.go1:hover
{
	width:120px;
	height:30px;
	color:#009;
	background-color:#0F0;
-webkit-transform:rotate(360deg);
transform:rotate(360deg);
}

#ret1
{
	position:absolute;
	top:320px;
	left:600px;
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
#ret1
{
	-webkit-transition:width 0.5s, height 0.5s, -webkit-transform 0.5s;
transition:width 0.5s, height 0.5s, transform 0.5s;
transition-property:all;
-webkit-transition-timing-function:linear;

}
#ret1:hover
{
	width:130px;
	height:30px;
	
	color:#336;
	background-color:#09C;
	-webkit-transform:rotate(360deg);
transform:rotate(360deg);
}

#sod
{
	position:absolute;
	left:550px;
	top:215px;
}
#sid
{
	width:150px;
	height:25px;
	background-color:#CCC;
}
#vie
{
	position:;
	left:550px;
	top:225px;
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



</style>
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
#res
		{
			width:100%;margin:auto;min-width:800px;max-width:2000px;
		}

</style> 
<style> 
h1{  background-color:#0099FF;} 
</style>

<style>
        .box{ 
			 height:88%;z-index:10;
                font-family:Tahoma, Geneva, sans-serif;
                font-size:16px;
                color:#333;
                padding:5px;
                background-color:#CCC;
                border:2px solid #999;
				
        }
</style>
  <script type="text/javascript">
  function valid(n,c) {
    if(n == "") 

 {     alert("This field cannot be empty");
     // c.focus();
    }
    else if(c.name == "pincode" || c.name == "age" || c.name == "phone" || c.name == "weight")
    {
     var strValidChars = "0123456789";
     var strChar;
     for (i = 0; i < n.length; i++)
     {
      strChar = n.charAt(i);
      if (strValidChars.indexOf(strChar) == -1)
      {
        alert("Please input numerical value in textbox.");
        c.value="";
        c.focus();
        return;
      }
     }
   }
       }

function edit11()
{


document.write("<tr>");
  document.write("<td><label name S.No>s.no<br><input type=text value= '$_post[$sid]'></td>");
  document.write("<td><input type=text value= 'fs.sno.value'></td>");
  document.write("<td><input type=text value= ''></td>");
  document.write("<td><input type=text value= ''></td>");;
  document.write("<td><input type=text value= ''></td>");
  document.write("<td><input type=text value= ''></td>");
  document.write("<td><input type=text value= ''></td>");
  document.write("<td><input type=text value= ''></td>");
  document.write("<td><input type=text value= ''></td>");
  document.write("<td><input type=text value= ''></td>");
  document.write("<td><input type=text value= ''></td>");;
  document.write("<td><input type=text value= ''></td>");
  document.write("<td><input type=text value= ''></td>");
  document.write("<td><input type=text value= ''></td>");
  document.write("<td><input type=text value= ''></td>");
  document.write("<td><input type=text value= ''></td>");
  document.write("<td><input type=text value= ''></td>");
  document.write("</tr>");

}

</script>

</head>
<body>
<div id="res">
<h1 id="lik">Welcome to Jamia Millia Islamia</h1>
<div id="mill">
<img src="277px-Jamia_Millia_Islamia_Logo.svg_.png" height="110px" width="110px"/>
</div>
<h2 ><b><strong><font size = 6><center><strong>Online Software Library</font></strong></b></center></h2>
<p>
 <div class="box"> 
  <?php
$x = $_SESSION['login_user'];

echo "
Welcome,$x";
$sidd1=$_GET['sid'];
/**/?>
  
  </p>
  <div class="go1">
<input  type="submit" value="     Go Back    " 
    onclick="window.location='http://localhost/online_software_library/soft_lib/pages/sft.php';"  /></div> 
    <div id="ret1">
    <input  type="submit" value="     Main Menu    " 
    onclick="window.location='http://localhost/online_software_library/soft_lib/pages/jadm.php';"  />    </div>

<form name="sof" action="det.php" method = "post"><br>
<label for="sid"><br><br> <div id="sod">Softrware ID:</label>
<input type="text" name="sid" value="<?php echo($sidd1);?>" maxlength="100" id="sid" /></div><br /><br /><br /><br />
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<input type="radio" name="sets" value="-1"/>View
<input type="radio" name="sets" value="1" />Edit<br> 
<input type="submit" name="btnSubmit" id="btnSubmit" value="       Submit       " onClick="valid(sof.sid.value,sof.sid);"  />
</form>
<?php
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
mysql_connect("localhost", "root", "") or die("Opps some thing went wrong");
mysql_select_db("jmi")or die("Opps some thing went wrong");

//echo"<input type='submit' name='btnSubmit' id='btnSubmit' value='Edit' onclick=".edit();">
$sets=$_POST['sets'];
 $set1=$_SESSION['set'];
 $sn=$_POST['sno'];
$s=$_POST['sid'];
$n=$_POST['name'];
$bn=$_POST['brand_name'];
$v=$_POST['version'];
$t=$_POST['technology'];
$q=$_POST['quantity'];
$l=$_POST['license'];
$ms=$_POST['media_source'];
$k=$_POST['keywords'];
$m=$_POST['mannuals'];
$rk=$_POST['registration_key'];
$kc=$_POST['key_classification'];
$dp=$_POST['date_purchse'];
$dr=$_POST['date_received'];
$u=$_POST['url'];
$st=$_POST['status'];
$cm=$_POST['comments'];

if (!empty($sn))

{ 
	if($set1==11){
		$sqll="UPDATE sofftt SET sid='$s',name='$n',brand_name='$bn',version='$v',technology='$t',quantity='$q',license='$l',media_source='$ms',keywords='$k',mannuals='$m',registration_key='$rk',key_classification='$kc',date_purchse='$dp',date_received='$dr',url='$u',status='$st',comments='$cm' WHERE sno='$sn'";
	mysql_query($sqll)or die("Opps some thing went wrong");
	
	$sqll2="UPDATE soffrec SET sid='$s',name='$n',brand_name='$bn',version='$v',technology='$t',quantity='$q',license='$l',media_source='$ms',keywords='$k',mannuals='$m',registration_key='$rk',key_classification='$kc',date_purchse='$dp',date_received='$dr',url='$u',status='$st',comments='$cm' WHERE sno='$sn'";
	mysql_query($sqll2)or die("Opps some thing went wrong");


	$sql12="SELECT * FROM sofftt WHERE sid ='$s'";
$result12=mysql_query($sql12) or die("Opps some thing went wrong12");
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";


echo "<br><br><br><br>Changed values<br><br><table border='1' name = 'fs'>
<tr>
<th>sno</th>
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
<th>Comments</th>
</tr>";
//echo '<form name="softt" action ="det.php" method="post">
//<label for ="s.no">s.no</label><input type ="text" name ="s.no" value ="'.$s[0]. '">';

while($row = mysql_fetch_array($result12))
  {
 echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

  echo "<p><tr>";
  
  echo "<td>" . $row['sno'] . "</td>";
  echo "<td>" . $row['sid'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['brand_name'] . "</td>";
  echo "<td>" . $row['version'] . "</td>";
  echo "<td>" . $row['technology'] . "</td>";
  echo "<td>" . $row['quantity'] . "</td>";
  echo "<td>" . $row['license'] . "</td>";
  echo "<td>" . $row['media_source'] . "</td>";
  echo "<td>" . $row['keywords'] . "</td>";
  echo "<td>" . $row['mannuals'] . "</td>";
  echo "<td>" . $row['registration_key'] . "</td>";
  echo "<td>" . $row['key_classification'] . "</td>";
  echo "<td>" . $row['date_purchse'] . "</td>";
  echo "<td>" . $row['date_received'] . "</td>";
  echo "<td>" . $row['url'] . "</td>";
  $zz =$row['status'];
								if($zz== -1)
									$xx="Access Restricted";
								else
									$xx="Available";
						 echo "<td>" . $xx . "</td>";
  echo "<td>" . $row['comments'] . "</td>";
  $s=array($row['s.no'],$row['sid'] );
  echo "</tr>";
  
  }

	}
}
else{
global $s;
$sid = $_POST['sid'];
if (isset($sid))

{//onblur="valid(sof.sets.value,sof.sets);"
   

//echo("$sid");

$sql="SELECT * FROM sofftt WHERE sid ='$sid'";
$result=mysql_query($sql);
//$row=mysql_fetch_array($result);
//echo("$result");
//echo("$row");
//$active=$row['active'];

if($sets== 1){
/*
<br>
<label>S Id</label>

<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th>Registration Key</th>
<th></th>
<th></th>
<th> </th>
<th></th>
<th></th>
<th></th>
</tr>;*/
//echo '<form name="softt" action ="det.php" method="post">
//<label for ="s.no">s.no</label><input type ="text" name ="s.no" value ="'.$s[0]. '">';
$row = mysql_fetch_array($result);

{
/*	echo"<style>
        .box1{	
                font-family:Tahoma, Geneva, sans-serif;
                font-size:16px;
                color:#333;
                padding:5px;
                background-color:#CCC;
                border:2px solid #999;
        }
&ensp;&nbsp;&emsp;&ensp;&nbsp;&emsp;&ensp;&nbsp;&emsp;&ensp;&nbsp;&emsp;&ensp;&nbsp;&emsp;&ensp;&nbsp;&emsp;
&ensp;&nbsp;&emsp;&ensp;&nbsp;&emsp;&ensp;&nbsp;&emsp;&ensp;&nbsp;&emsp;&ensp;&nbsp;&emsp;&ensp;&nbsp;&emsp;



&ensp;&nbsp;&nbsp;&emsp;&ensp;&nbsp;&emsp;
</style>";*/
	//$row = mysql_fetch_array($result);
	//echo"<div class=' box'>";
	echo"<style>.boxx1{
position:absolute;
left:22%;}
</style>
<style>.boxx2{
position:absolute;
left:51%;}
</style>
<style>.boxx11{
position:absolute;
left:30%;}
</style>
<style>.boxx22{
position:absolute;
left:59%;}
</style>";
	echo "<form name='bypas' action='det.php' method='post'>";
//  echo"<center>";
  echo "<br><div class='boxx1'><label>sno</label></div>";
  echo"<script type='text/javascript'>
  function notice() 
    
 {     alert('This field cannot be changed');
     // c.focus();
    }</script>"	;
  echo "<div class='boxx11'><input id='sno' name='sno' value='" . $row['sno'] . "'readonly onclick='notice();'></input></div>
";
  echo "<div class='boxx2'>
<label>S Id</label></div>";
  echo "<div class='boxx22'><input id='sid'  name='sid' value='". $row['sid'] . "'></input></div><br><br>";
  echo "<br><br><div class='boxx1'><label>Name</label></div>";
  echo "<div class='boxx11'><input id='name' name='name' value='". $row['name'] . "'></input></div>
";
  echo "<div class='boxx2'><label>Brand Name</label></div>";
  echo "<div class='boxx22'><input id='brand_name' name='brand_name' value='". $row['brand_name'] . "'></input></div><br><br><br><br>";
  echo "<div class='boxx1'><label>Version</label></div>";
  echo "<div class='boxx11'><input id='version' name='version' value='". $row['version'] . "'></input></div>";
  echo "<div class='boxx2'><label>Technology</label></div>";
  echo "<div class='boxx22'><input id='technology' name='technology' value='". $row['technology'] . "'></input></div><br><br><br><br>";
  echo "<div class='boxx1'><label>Quantity</label></div>";
  echo "<div class='boxx11'><input  id='quantity' name='quantity' value='". $row['quantity'] . "'></input></div>";
  echo "<div class='boxx2'><label>License</label></div>";
  echo "<div class='boxx22'><input id='license' name='license' value='" . $row['license'] . "'></input></div><br><br><br><br>";
  echo "<div class='boxx1'><label>Media Source</label></div>";
  echo "<div class='boxx11'><input id='media_source' name='media_source' value='". $row['media_source'] . "'></input></div>";
  echo "<div class='boxx2'><label>Key Words</label></div>";
  echo "<div class='boxx22'><input id='keywords' name='keywords' value='". $row['keywords'] . "'></input></div><br><br><br><br>";
  echo "<div class='boxx1'><label>Mannuals</label></div>";
  echo "<div class='boxx11'><input id='mannuals' name='mannuals'  value='" . $row['mannuals'] . "'></input></div>";
  echo "<div class='boxx2'><label>Registration Key</label></div>";
  echo "<div class='boxx22'><input id='registration_key' name='registration_key' value='" . $row['registration_key'] . "'></input></div><br><br><br><br>";
  echo "<div class='boxx1'><label>Key Classification</label></div>";
  echo "<div class='boxx11'><input id='key_classification' name='key_classification' value='" . $row['key_classification'] . "'></input></div>";
  echo "<div class='boxx2'><label>Date Of Purchse</label></div>";
  echo "<div class='boxx22'><input class='box1' id='date_purchse' name='date_purchse' value='" . $row['date_purchse'] . "'></input></div><br><br><br><br>";
  echo "<div class='boxx1'><label>Date Of Received</label></div>";
  echo "<div class='boxx11'><input id='date_received' name='date_received' value='" . $row['date_received'] . "'></input></div>";
  echo "<div class='boxx2'><label>URL</label></div>";
  echo "<div class='boxx22'><input id='url' name='url'   value='". $row['url'] . "'></input></div><br><br><br><br>";
  echo "<div class='boxx1'><label>Status</label></div>";
  $zz =$row['status'];
								if($zz== -1)
									$xx="Access Restricted";
								else
									$xx="Available";
						 




  echo "<div class='boxx11'><select name='status' >
	<option value = ".$xx.">Choose</option>
  <option value = -1>Restricted</option>
  <option value = 1>Available</option>
</select>
</div>";
  echo "<div class='boxx2'><label>Comments</label></div>";
  echo "<div class='boxx22'><input  id='comments' name='comments'  value='" . $row['comments'] . "'></input></div><br><br><br><br>";
  $s=array($row['s.no'],$row['sid'] );
  echo "</tr>";
 $_SESSION['set']=11;
 echo"<center>";
  echo"<input type ='submit' name='btnSubmit' id='btnSubmit' value='     Submit    '  ></form>";
  //echo"</div>";
} 
}
  
 else if ($sets== -1){


echo "<table border='1' name = 'fs'>
<tr>
<th>sno</th>
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
<th>Comments</th>
</tr>";
//echo '<form name="softt" action ="det.php" method="post">
//<label for ="s.no">s.no</label><input type ="text" name ="s.no" value ="'.$s[0]. '">';

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  
  echo "<td>" . $row['sno'] . "</td>";
  echo "<td>" . $row['sid'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['brand_name'] . "</td>";
  echo "<td>" . $row['version'] . "</td>";
  echo "<td>" . $row['technology'] . "</td>";
  echo "<td>" . $row['quantity'] . "</td>";
  echo "<td>" . $row['license'] . "</td>";
  echo "<td>" . $row['media_source'] . "</td>";
  echo "<td>" . $row['keywords'] . "</td>";
  echo "<td>" . $row['mannuals'] . "</td>";
  echo "<td>" . $row['registration_key'] . "</td>";
  echo "<td>" . $row['key_classification'] . "</td>";
  echo "<td>" . $row['date_purchse'] . "</td>";
  echo "<td>" . $row['date_received'] . "</td>";
  echo "<td>" . $row['url'] . "</td>";
  $zz =$row['status'];
								if($zz== -1)
									$xx="Access Restricted";
								else
									$xx="Available";
						 echo "<td>" . $xx . "</td>";
  
  echo "<td>" . $row['comments'] . "</td>";
  $s=array($row['s.no'],$row['sid'] );
  echo "</tr>";
  
  }

     

/*echo'<script type="text/javascript">
function edit()
{
document.write("<tr>");';
 echo' document.write("<td><label name S.No>s.no<br><input type=text value="'.$s['0']."></td>)";
  echo 'document.write("<td><input type=text value= '.$s['0'].'"></td>");
</script>';

function edit123()
{echo "<td><input type=text value=".$s[0]."></form></td>";
echo "<td><input type=text value=".$s[1]."></form></td>";
	echo"hello";}
	//echo $s['0'];function edit()
//{
	
 //alert("<?php edit123(); ?>");
// }<button onclick="edit();">Edit</button>*/
 

 

}  

else{	

		echo"<script type='text/javascript'>
		alert('Please Select a valid option from View/Edit.');
		</script>";
	}
}

}

?>
 <div id="jim"><h2><i><b>welcome user to check/edit software details </b></i></h2></div>
 </div></body></html>