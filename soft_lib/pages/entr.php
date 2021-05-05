<?php
ini_set('error_reporting', E_ALL & ~E_DEPRECATED & ~E_NOTICE);

session_start();

$x=$_SESSION['login_user'];
 
if(!isset($x))
	{
	header("location:index.php");
	session_destroy();
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
#table1
{
	position:absolute;
	top:40%;
	right:30%;
	color:#6F0;
}
#table2
{
	position:absolute;
	top:5%;
	left:90%;
	color:#6F0;
}
#enter
{
	position:absolute;
	top:27%;
	right:45%;
	color:#F30;
	font-size:22px;
	font-family:"Times New Roman", Times, serif;
}
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
	top:600px;
	right:650px;
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
	top:675px;
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
	width:150px;
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
	top:675px;
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
	width:150px;
	height:50px;
-webkit-transform:rotate(360deg);
transform:rotate(360deg);
}

</style> 
</head>



<script type="text/javascript">
  function validd(a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p) {
	  
    if( (a== "") && (b== "") && (c== "") && (d == "")&&(e== "") && (f== "") && (g== "") && (h == "")&&(i== "") && (j== "") && (k== "") && (l == "")&&(m== "") && (n== "") && (o== "") && (p == "") ) 

 {     alert("Please complete all the entries ");
     // c.focus();
    }
	



}
	</script>
<script type="text/javascript">
  function validn(q){

	  if ((typeof(x) !== 'number')) {
   alert("Must be Numeric value");}
}
</script>
<script type="text/javascript">
function notif(x)
{if(x == "") 

    {  alert("Enter Completly");
     // c.focus();
    }
else {
	 alert("Enterd Successfully");
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
echo "Welcome,$x";?>
</div>

<strong><b><p id="enter">Enter Software Details:</p></b>
<div id="table1">
<form name="reg" action="entr.php" method = "post">
<table width="647" border="0" cellspacing="0" cellpadding="2">
  <tr>
    <td width="136"><label for="sno2">Serial No.</label></td>
    <td width="144"><input type="text" name="sno" value="Not Required" maxlength="10" id="sno"  /></td>
    <td width="171"><label for="sid2">S Id:</label></td>
    <td width="170"><input type="text" name="sid" value="" maxlength="20" id="sid"  /></td>
  </tr>
  <tr>
    <td>Name:</td>
    <td><input type="text" name="name" value="" maxlength="100" id="name"  /></td>
    <td><label for="brand_name2">Brand Name:</label></td>
    <td><input type="text" name="brand_name" value="" maxlength="80" id="brand_name"  /></td>
  </tr>
  <tr>
    <td><label for="version2">Version:</label></td>
    <td><input type="text" name="version" value="" maxlength="20" id="version"  /></td>
    <td><label for="technology2">Technology:</label></td>
    <td><input type="text" name="technology" value="" maxlength="80" id="technology"  /></td>
  </tr>
  <tr>
    <td><label for="quantity2">Quantity:</label></td>
    <td><input type="text" name="quantity" value="" maxlength="10" id="quantity" onBlur="validn(reg.quantity.value);" /></td>
    <td><label for="license2">License:</label></td>
    <td><input type="text" name="license" value="" maxlength="50" id="license"  onBlur="validn(reg.license.value);"/></td>
  </tr>
  <tr>
    <td><label for="media_source2">Media Source:</label></td>
    <td><input type="text" name="media_source" value="" maxlength="100" id="media_source"  /></td>
    <td><label for="keywords2">Keywords:</label></td>
    <td><input type="text" name="keywords" value="" maxlength="80" id="keywords"  /></td>
  </tr>
  <tr>
    <td><label for="mannuals2">Mannuals:</label></td>
    <td><input type="text" name="mannuals" value="" maxlength="100" id="mannuals" /></td>
    <td><label for="registration_key2">Registration Key: </label></td>
    <td><input type="text" name="registration_key" value="" maxlength="100" id="registration_key"  /></td>
  </tr>
  <tr>
    <td>Key Classification:</td>
    <td><input type="text" name ="key_classification" name="key_classification" value="" maxlength="100" id="key_classification"  />
</td>
    <td>Date Of Purchase:</td>
    <td><input name="date_purchse" type="date" value="" onclick="displayDatePicker('date_purchse');" 
value="" id="date_purchse"  /> 
</td>
  </tr>
  <tr>
    <td><label for="date_received2">Receiving Date:</label></td>
    <td><input name="date_received" type="date" value=""  id="date_received" onClick="displayDatePicker('date_received');"  /></td>
    <td><label for="url2">Link:</label></td>
    <td><input type="text" name="url" value="" maxlength="100" id="url"  /></td>
  </tr>
  <tr>
    <td><label for="status2">Access:</label></td>
    <td><select name="status" >
      <option value = "">Choose</option>
      <option value = -1>Restricted</option>
      <option value = 1>Available</option>
    </select></td>
    <td><label for="comments2">Comments</label></td>
    <td><input type="text" name="comments" value="Any Comments" maxlength="100" id="comments"  onClick = '(value="")' /></td>
  </tr>
</table>
</div>


<div id="table2">
	<input type="submit" name="btnSubmit" id="btnSubmit" value="         Submit         "   
	onclick="validd(reg.sid.value,reg.name.value,reg.brand_name.value,reg.version.value,reg.technology.value,reg.quantity.value,reg.license.value,reg.media_source.value,reg.keywords.value,reg.mannuals.value,reg.registration_key.value,reg.key_classification.value,reg.date_purchse.value,reg.date_received.value,reg.url.value,reg.status.value);">	

</form>
<input  type="submit" value="     Go Back    " 
    onclick="window.location='http://localhost/online_software_library/soft_lib/pages/sft.php';" id="back" /> <br><br>
	<input  type="submit" value="     Main Menu    " 
    onclick="window.location='http://localhost/online_software_library/soft_lib/pages/jadm.php';" id="main" /> </div>
<?php
ini_set('error_reporting',E_ALL & ~E_DEPRECATED & ~E_NOTICE);
mysql_connect("localhost", "root", "") or die("Opps some thing went wrong");
mysql_select_db("jmi") or die("Opps some thing went wrong11");
$sid = $_POST['sid'];

//$sno=$_POST['sno'];
$name=$_POST['name'];
$bn=$_POST['brand_name'];
$v=$_POST['version'];
$t=$_POST['technology'];
$q=$_POST['quantity'];
$l=$_POST['license'];
$ms=$_POST['media_source'];
$k=$_POST['keywords'];
$m=$_POST['mannuals'];
$r=$_POST['registration_key'];
$kc=$_POST['key_classification'];
$dp=$_POST['date_purchse'];
$dr=$_POST['date_received'];
$u=$_POST['url'];

$s=$_POST['status'];

$c=$_POST['comments'];
//echo"$c";
//$sql="INSERT INTO usoath VALUES( '$mid','$reg','$sword','$add','$cell ','$landl',1)";
if (!empty($sid)){
$sql="INSERT INTO sofftt VALUES(  '','$sid','$name','$bn','$v','$t','$q','$l','$ms','$k','$m','$r','$kc','$dp','$dr','$u','$s','$c')";
//$result = 
mysql_query($sql)or die("Opps some thing went wrong");;

}

/*echo'<script type="text/javascript">
function noitf()$sno,
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




onclick ="notif(reg.sno.value,reg.sid.value,reg.brand_name.value,reg.version.value,reg.technology.value,reg.quantity.value,reg.license.value,reg.media_source.value,reg.keywords.value,reg.mannuals.value,reg.registration_key.value,reg.key_classification.value,reg.date_purchse.value,reg.date_received.value,reg.url.value,reg.status.value);" 

a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q


	if(a=="" || b=="" || c =="" || d==""|| e==""||f==""||g==""||h==""||i==""||j==""||k==""||l==""||m==""||n==""||o==""|| p=="" ||q=="")
	{alert("Incomplete entry");}
	



 //alert("<?php edit123(); ?>");
// }<button >Edit</button>*/

?>
</body>
</html>