<?php

session_start();
$x = $_SESSION['login_user'];
 
if(!isset($x))
	{
	header("location:index.php");
	exit();
 }
include "cal.php";

?>
<html>
<head>
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
</style>

<style>
html, body { margin:0; padding:0 }
</style> 
<style> h1{ }
#form1
{
	position:absolute;
	top:300px;
	right:40%;
	color:#0C6;
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
	top:500px;
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
	width:200px;
	height:50px;
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
	top:575px;
	right:800px;
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
	top:575px;
	right:500px;
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
	width:200px;
	height:50px;
-webkit-transform:rotate(360deg);
transform:rotate(360deg);
}
#enter
{
	color:#300;
	position:absolute;
	top:250px;
	right:50%;
	font:Georgia, "Times New Roman", Times, serif;
	font-size:20px;
}
#info
{
	color:#0C0;
	position:absolute;
	top:200px;
	right:700px;
}
#tal
{
	position:absolute;
	top:10%;
	right:15%;
}

</style>
</head>
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
</script>
<script type="text/javascript">
  function validn(q){

	  if (isNaN(q) ) {
   alert("Telephone Number must be Numeric");}
}
</script>
<script type="text/javascript">
  function validd(a,b,c,d,e,f,g) {
    if( (a== "") && (b== "")  && (c == "") && (d== "")  && (e == "") && (f== "")  && (g == "") ) 

 {     alert("Please complete all the entries");
     // c.focus();
    }
}
	</script>

<div id="wel">
<?php
$x = $_SESSION['login_user'];

echo "
Welcome,$x";

?> <br><br><br><br></div>
<strong><b></b>
<center>
<b><p id="enter">Enter Member Details:</p></b>
<div id="form1">
<form name="reg" action="mshpam.php" method = "post">
	<div><br><br>
&ensp;&nbsp;&emsp;&ensp;&nbsp;&emsp;&ensp;&nbsp;&emsp;&ensp;&nbsp;&emsp;&ensp;&nbsp;&emsp;&ensp;&nbsp;&emsp;
<label for="mid">Member  Id:</label>
<input type="text" name="mid" value="" maxlength="20" id="mid"   />

&ensp;&ensp;&ensp;&ensp;&ensp;&emsp;&ensp;&emsp;<label for="reguser">Name:</label>
<input type="text" name="reguser" value="" maxlength="100" id="reguser" /><br><br>
</div>
<div>
&nbsp;&emsp;&ensp;&nbsp;&emsp;&ensp;&nbsp;&emsp;&ensp;&nbsp;&emsp;&ensp;&nbsp;&ensp;&nbsp;&emsp;&ensp;&nbsp;&emsp;&ensp;&nbsp;
<label for="add">Address:</label>
<input type="text" name="addr" value="" maxlength="80" id="addr" />
&ensp;&ensp;&nbsp;&ensp;
<label for="cell">Contact No.:</label>
<input type="text" name="cell" value="" maxlength="20" id="cell" onBlur="validn(reg.cell.value);" />
</div>
<div>
&emsp;&nbsp;&ensp;&nbsp;&nbsp;&emsp;&ensp;&nbsp;&emsp;&ensp;&nbsp;&emsp;<br>
&emsp;&ensp;&nbsp;&emsp;&ensp;&emsp;&ensp;&nbsp;&emsp;&ensp;&emsp;&ensp;&nbsp;&emsp;&ensp;&emsp;&ensp;&nbsp;
<label for="landl">Landline:</label>
<input type="text" name="landl" value="" maxlength="80" id="landl" onBlur="validn(reg.landl.value);" />
&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;
<label for="sword">Password:</label>
<input type="text" name="sword" value="" maxlength="10" id="sword" />
</div>



<div>
&emsp;&nbsp;&ensp;&nbsp;&nbsp;&emsp;&ensp;&nbsp;&emsp;&ensp;&nbsp;&emsp;<br>
&emsp;&ensp;&nbsp;&emsp;&ensp;&emsp;&ensp;&nbsp;&emsp;&ensp;&emsp;&ensp;&nbsp;&emsp;&ensp;&emsp;&ensp;&nbsp;
<label for="ofcdet">Name of the Dept:</label>
<select name = "ofcdet" id = "ofcdet">
	<option value="">Select</option>
  <option value="Mathematics">Mathematics</option>
  <option value="Computers">Computers</option>
  <option value="Law">Law</option>
  <option value="CMS">CMS</option>
</select>
</div>




</div>


<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;
<div id="tal">
<input  type="submit" value="          Submit          " onClick="validd(reg.mid.value,reg.reguser.value,reg.addr.value,reg.cell.value,reg.landl.value,reg.sword.value,reg.ofcdet.value);" id="submit"/>
</form>
&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;
<input  type="submit" value="       Main Menu      " 
     onclick="window.location='http://localhost/online_software_library/soft_lib/pages/jadm.php';" id="main" /><br><br>
&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;
<input  type="submit" value="         Go Back        " 
     onclick="window.location='http://localhost/online_software_library/soft_lib/pages/mshp.php';" id="back" />
	 </div>
	 <?php
ini_set('error_reporting',E_ALL & ~E_DEPRECATED & ~E_NOTICE);
mysql_connect("localhost", "root", "") or die("Opps some thing went wrong");
mysql_select_db("jmi") or die("Opps some thing went wrong");
$reg=$_POST['reguser'];
$mid=$_POST['mid'];
$sword=$_POST['sword'];
$landl=$_POST['landl'];
$cell=$_POST['cell'];
$addr=$_POST['addr'];
$o=$_POST['ofcdet'];
if (!empty($mid)){
	$sql26="INSERT INTO usrecd VALUES( '','$mid','$reg','$sword','$addr','$cell ','$landl',1,'$o')";
	mysql_query($sql26)or die("Opps some thing went wrong");
	$sql25="INSERT INTO usoath VALUES( '','$mid','$reg','$sword','$addr','$cell ','$landl',1,'$o')";
	mysql_query($sql25)or die("Opps some thing went wrong");;}
	//<input name= "mid" type="text" value=""  > <br><br>
	if(isset($sql26) && isset($sql25))
	{
	echo "<p id='info'>Success! Your information is Successfully saved</p>";
	}
	
	?>
