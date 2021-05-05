<?php
ini_set('error_reporting',E_ALL & ~E_DEPRECATED & ~E_NOTICE);

session_start();
$x = $_SESSION['login_user'];
 
if(!isset($x))
	{
	header("location:index.php");
	exit();
	}
include "cal.php";

?>
<style>
body
{
	width:100%;
	height:100%;
}
        .box{ z-index:10; height:88%;
                font-family:Tahoma, Geneva, sans-serif;
                font-size:16px;
                color:#333;
                padding:5px;
                background-color:#CCC;
                border:2px solid #999;
        }
</style>
<script type="text/javascript">
  function validd(n,c,t) {
    if( (n== "") && (c== "")  && (t == "") ) 

 {     alert("Please complete all the entries");
     // c.focus();
    }
}
	</script>
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
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="css/style.css" />
<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
<script type="text/javascript">
$(function()
{
  $('.username').keyup(function()
  {
  var username=$(this).val();
  username=trim(username);
  if(username!=''){
  $('.check').show();
  $('.check').fadeIn(400).html('');

  var dataString = 'username='+ username;
  $.ajax({
          type: "POST",
          url: "check.php",
          data: dataString,
          cache: false,
          success: function(result){
               var result=trim(result);
               if(result==''){
                       $('.check').html('Not Avaliable');
                       $('#submit').attr('disabled', '');
                       $('#submit').attr('value', 'Active');
                       $(".username").removeClass("white");
                       $(".username").addClass("red");
               }
					   else if(result=='blocked'){
                       $('.check').html(' '+' ID Blocked');
                       $('#submit').attr('disabled', 'disabled');
                       $('#submit').attr('value', 'Deactive');
                       $(".username1").removeClass("black");
                       $(".username1").addClass("white");
			   }
					   else{
                       $('.check').html(' '+' Available');
                       $('#submit').attr('disabled', 'disabled');
                       $('#submit').attr('value', 'Deactive');
                       $(".username").removeClass("black");
                       $(".username").addClass("white");
               }
          }
      });
   }else{
       $('.check').html('');
       $('#submit').attr('disabled', 'disabled');
       $('#submit').attr('value', 'Deactive');
   }
  });
});

function trim(str){
     var str=str.replace(/^\s+|\s+$/,'');
     return str;
}
</script>
 
   <script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
<script type="text/javascript">
$(function()
{
	   $('.username1').keyup(function()
  {
  var username1=$(this).val();
  username1=trim(username1);
  if(username1!=''){
  $('.check1').show();
  $('.check1').fadeIn(400).html(' ');

  var dataString1 = 'username1='+ username1;
  $.ajax({
          type: "POST",
          url: "check1.php",
          data: dataString1,
          cache: false,
          success: function(result){
               var result=trim(result);
               if(result==''){
                       $('.check1').html('Not Avaliable');
                       $('#submit').attr('disabled', '');
                       $('#submit').attr('value', 'Active');
                       $(".username1").removeClass("white");
                       $(".username1").addClass("red");
			   }
                else{
                       $('.check1').html(' '+' Available');
                       $('#submit').attr('disabled', 'disabled');
                       $('#submit').attr('value', 'Deactive');
                       $(".username1").removeClass("black");
                       $(".username1").addClass("white");
               }
          }
      });
   }else{
       $('.check1').html('');
       $('#submit').attr('disabled', 'disabled');
       $('#submit').attr('value', 'Deactive');
   }
  });
});

function trim(str){
     var str=str.replace(/^\s+|\s+$/,'');
     return str;
}
</script>
<style>
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
#table
{
	position:absolute;
	left:500px;
	top:190px;
}
#mill:hover
{

	opacity:0.9;
}
#go
{
	 position:absolute;
	top:380px;
	left:470px;
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
#go
{
	-webkit-transition:width 0.5s, height 0.5s, -webkit-transform 0.5s;
transition:width 0.5s, height 0.5s, transform 0.5s;
transition-property:all;
-webkit-transition-timing-function:linear;

}
#go:hover
{
	width:120px;
	height:30px;
	color:#009;
	background-color:#0F0;
-webkit-transform:rotate(360deg);
transform:rotate(360deg);
}

#ret
{
	position:absolute;
	top:380px;
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
#ret
{
	-webkit-transition:width 0.5s, height 0.5s, -webkit-transform 0.5s;
transition:width 0.5s, height 0.5s, transform 0.5s;
transition-property:all;
-webkit-transition-timing-function:linear;

}
#ret:hover
{
	width:124px;
	height:30px;
	
	color:#336;
	background-color:#09C;
	-webkit-transform:rotate(360deg);
transform:rotate(360deg);
}
#menu
{
	 position:absolute;
	top:380px;
	left:730px;
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
#menu
{
	-webkit-transition:width 0.5s, height 0.5s, -webkit-transform 0.5s;
transition:width 0.5s, height 0.5s, transform 0.5s;
transition-property:all;
-webkit-transition-timing-function:linear;

}
#menu:hover
{
	width:120px;
	height:30px;
	color:#009;
	background-color:#0F0;
-webkit-transform:rotate(360deg);
transform:rotate(360deg);
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
top:115px;
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
0%   {color:red; left:0px; right:900px;}
25%  {color:yellow; right:0px; left:900px;}
50%  {color:blue; left:opx; right:900px;}
75%  {color:green; left:900px; right:0px;}
100% {color:red; left:0px; right:900px;}
}-




</style>
</head>
<body>
<h1 id="lik">Welcome to Jamia Millia Islamia</h1>
<div id="mill">
<img src="277px-Jamia_Millia_Islamia_Logo.svg_.png" height="110px" width="110px"/>
</div>

<h2 ><b><strong><font size = 6><center><strong>Online Software Library</font></strong></b></center></h2>

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

</style> 
<style> h1{  background-color:#0099FF;} 
</style>
<div class="box">
<?php
$x = $_SESSION['login_user'];

echo "
Welcome,$x";

?> <br><br>
<strong><b></b>
</center><font size='3' ><center>Return Software </font></center><br>
<div id="table">
<form name="iss" action="bret.php" method ="post">

<table width="307" >
  <tr>
    <td width="116"><br/>
Member Id: <span class="check" style="color:red;" ></span> <br/>
<br/></td>
    <td width="175"><input type="text" id="username" name="username" class="username" autocomplete="off" /></td>
  </tr>
  <tr>
    <td><br/>
Software Id: <span class="check1" style="color:red;" ></span> <br />
<br /></td>
    <td><input name ="username1" id="username1" class="username1" autocomplete="off" type="text" value="" /></td>
  </tr>
  <tr>
    <td height="50"><label for="dor">Return Date:</label></td>
    <td><input name ="dor" value=""  id="dor" onClick="displayDatePicker('dor');" /></td>
  </tr>
</table></div>
<div id="ret">
<input type="submit" value="        Return      " onClick="validd(iss.username.value,iss.username1.value,iss.dor.value);"  />
</div>



    
    
    
         <div id="frmBox">
             <div class="try_option"></div>
         </div>
   

    


<div id="frmbx">
<div class="try_option"></div>
</div>
</form>
<div id="go">	
<input  type="submit" value="      Go Back     " 
    onclick="window.location='http://localhost/online_software_library/soft_lib/pages/sft.php';" /> </div>
	<div id="menu">
    <input  type="submit" value="    Main Menu    " 
    onclick="window.location='http://localhost/online_software_library/soft_lib/pages/jadm.php';" /> </div>
<br><br>
&nbsp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&emsp;
&nbsp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&emsp;

<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><?php
mysql_connect("localhost", "root", "") or die("Opps some thing went wrong");
mysql_select_db("jmi") or die("Opps some thing went wrong");
$mid=$_POST['username'];
$sid=$_POST['username1'];
$dor=$_POST['dor'];
if (!empty($mid))
{
	$s="SELECT * FROM sofftt where sid='$sid'";
	$res= mysql_query($s) or die("Opps some thing went wrong");
	$sm="SELECT * FROM usoath where mid='$mid'";
		$resm= mysql_query($sm) or die("Opps some thing went wrong");
		$rowm = mysql_fetch_array($resm);
	$row = mysql_fetch_array($res);
		if ($row['status']==1)
	{	

		echo"<script type='text/javascript'>
		alert('Already Returned.');
		</script>";
	}
	else
	{	
		if ($rowm['status']== -1)
		{	
		echo"<script type='text/javascript'>
		alert('Member Blocked.');
		</script>";
		}
		else{
		$ss="UPDATE sofftt SET status ='1' WHERE sid ='$sid'";
		mysql_query($ss);
		$ss1="UPDATE soffrec SET status ='1' WHERE sid ='$sid'";
		mysql_query($ss1);
		//$sql="UPDATE msrcrd SET status ='1',dor ='$dor' WHERE sid ='$sid'";
		$sql="UPDATE msrcrd SET status =1,dor ='$dor' WHERE sid ='$sid' ORDER BY sno DESC LIMIT 1";
		mysql_query($sql)or die("Opps some thing went wrong");;
		}
	}
	$row['status']== null;
}
//else{echo"<script type='text/javascript'>
	//	alert('Enter the values');
		//</script>";}
	?>
<div id="jim"><h2><i><b>welcome user to return software </b></i></h2></div>
</body>
</html>