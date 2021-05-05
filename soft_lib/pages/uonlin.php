<html>
<head>
<style>
body
{
	height:100%;
	width:100%;
}
div.ex
{
	width: 220px;
	padding: 10px;
	 solid black;
	margin: 0px;
	position: absolute;
	right: 75px;
	top: 251px;
	color: #0F6;
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
	text-align: center;
}
#slider
{
	position:absolute;
	top:250px;
	left:160px;
	z-index:200;
}
#form
{
	position:absolute;
	top:300px;
	right:50px;
	border-radius:30px;
	background-position:center;
	background-color:#00C;
	color:#FFF;
}


.lki {
	font-weight: bold;
	color: #FFF;
}
#btnSubmit
{
	 background-color:#FF9009;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius:6px;
    color:#FFF;
    font-family:'Oswald',serif;
    font-size: 25px;
    text-decoration: none;
    cursor: pointer;
    border:none;
	position:absolute;
	top:150px;
	right:100px;
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
	width:100px;
	height:70px;
-webkit-transform:rotate(360deg);
transform:rotate(360deg);
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




</style>
</head>
<body>
<link href="../../includes/JQuerySlider/JQuerySlider4.css" rel="stylesheet" type="text/css" />
<div id="slider">
<script type="text/javascript" src="../../includes/JQuerySlider/jquery.extend.js"></script>
<script type="text/javascript" src="../../includes/JQuerySlider/JQuerySlider.js"></script>
<script type="text/javascript" src="../../includes/JQuerySlider/JQuerySlider4.js"></script>
<link href="../../includes/JQuerySlider/JQuerySlider4.css" rel="stylesheet" type="text/css" />
<div id="JQuerySlider4Container">
	<div id="JQuerySlider4" class="JQSlider">
	  <ul>
	    <li class="JQuerySliderShow" title="slide1"><img src="../../soft1.jpg" width="700" height="375"></li>
        <li class="JQuerySliderHide" title="slide2"><img src="../../java.jpg" width="700" height="375"></li>
        <li class="JQuerySliderHide" title="slide3"><img src="../../oracle.jpg" width="700" height="375"></li>
        <li class="JQuerySliderHide" title="slide4"> <img src="../../softper.jpg" width="700" height="375"></li>
        <li class="JQuerySliderHide" title="slide5"><img src="../../soft5.jpg" width="700" height="341"></li>
        <li class="JQuerySliderHide" title="slide6"><img src="../../xbox.jpg" width="700" height="375"></li>
      </ul>
      <div id="JQuerySlider4_bullets_in">
        <ul>
          <li title="slide1"><a></a></li>
          <li title="slide2"><a></a></li>
          <li title="slide3"><a></a></li>
          <li title="slide4"><a></a></li>
          <li title="slide5"><a></a></li>
          <li title="slide6"><a></a></li>
        </ul>
      </div>
      <div id="JQuerySlider4_back_in" ></div>
      <div id="JQuerySlider4_next_in" ></div>
    </div>
</div>
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
<h1 id="lik">Welcome to Jamia Millia Islamia</h1>
<h2 ><td width="195"><b><strong><font size = 6><center><strong>Online Software Library<hr/></font></strong></b></center></h2>
<div id="mill">
<img src="277px-Jamia_Millia_Islamia_Logo.svg_.png" height="110px" width="110px"/>
</div>
<div class="ex">Registerd User:</div>
<form name="reg" action="uvldtn.php" method = "post" id="form"><br>
<table width="298"  cellspacing="0" cellpadding="2">
  <tr>
    <td width="94" height="60" class="lki">User Name:</td>
    <td width="190"><input type="text" name="username" value="" maxlength="100" id="username" onBlur="valid(reg.username.value,reg.username);" /></td>
  </tr>
  <tr>
    <td height="50"><span class="lki"> Password:</span></td>
    <td><input type="password" name="password" id="password" onBlur="valid(reg.password.value,reg.password);" align="middle" /></td>
  </tr>
</table>
<br>
</div>
</div>
<input type="submit" name="btnSubmit" id="btnSubmit" value="Login">
<script type="text/javascript">
  function validd(a,b,c,d,e,f,g,h) {
	  
    if( (a== "") && (b== "") && (c== "") && (d == "")&&(e== "") && (f== "") && (g== "") && (h == "") ) 

 {     alert("Please complete all the entries ");
     // c.focus();
    }
	



}
	</script>
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
                       $('.check').html('Avaliable');
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
                       $('.check').html(' '+' Not Available');
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



<?php
ini_set('error_reporting',E_ALL & ~E_DEPRECATED & ~E_NOTICE);
mysql_connect("localhost", "root", "") or die("Opps some thing went wrong");
mysql_select_db("jmi") or die("Opps some thing went wrong");
$a=$_POST['nam'];
$b=$_POST['addr'];
$c=$_POST['cell'];
$d=$_POST['landl'];
$e=$_POST['email'];
$f=$_POST['ofcdet'];
$g=$_POST['mid'];
$h=$_POST['password'];
if(!empty($g) and !empty($f)and !empty($a)and !empty($b)and !empty($c)and !empty($d)and !empty($e)and !empty($h)){
$sql ="INSERT INTO usereq VALUES( '','$a','$b','$c','$d','$e','$f','$g','$h','')";
mysql_query($sql)or die("Opps some thing went wrong");;
}


?>

</body>

</html>