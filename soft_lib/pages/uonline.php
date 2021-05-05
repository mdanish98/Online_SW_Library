<html>
<head>
<script type="text/javascript" src="../../includes/JQuerySlider/jquery.extend.js"></script>
<script type="text/javascript" src="../../includes/JQuerySlider/JQuerySlider.js"></script>
<script type="text/javascript" src="../../includes/JQuerySlider/JQuerySlider3.js"></script>
<link href="../../includes/JQuerySlider/JQuerySlider3.css" rel="stylesheet" type="text/css" />

</head>
<style>
body
{
	width:100%;
	height:100%;
}
div.ex
{
width:220px;
padding:10px;
border:5px solid black;
margin:0px;

position:absolute;
left:30%;


}


.addr {
}
.addr label {
	text-align: center;
}
.addr label {
	text-align: left;
}
.name {
	text-align: center;
}
.name {
	text-align: left;
}
.con {
	text-align: center;
}
.con {
	text-align: justify;
	font-family: "Arial Black", Gadget, sans-serif;
	font-weight: bold;
}
.box
{
	margin-right:100px;
}
#start tr td #email {
	color: #999;
}
#lower p font {
	font-size: large;
}
h1
{
	margin-right:50px;
	height:50px;
	width:100%;
	text-align:center;
	animation-direction:normal;
	cursor:pointer;
	color:#090;

}

</style> 
<style>
#start
{
	position:absolute;
	top:250px;
	right:100px;
	background-color:#6F3;
	
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

#home
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
}
#home:hover
{
	color:#336;
	background-color:#09C;
}


#home
{
	-webkit-transition:width 0.5s, height 0.5s, -webkit-transform 0.5s;
transition:width 0.5s, height 0.5s, transform 0.5s;
transition-property:all;
-webkit-transition-timing-function:linear;

}
#home:hover
{
	width:200px;
	height:100px;
-webkit-transform:rotate(360deg);
transform:rotate(360deg);
}
#home
{
	position:absolute;
	top:750px;
	right:225px;
}

#btnSubmit
{
	position:absolute;
	top:700px;
	right:225px;
}
#email
{
	background-color:#CCC;
}
#addr
{
	background-color:#CCC;
}

#cell
{
	background-color:#CCC;
}
#password
{
	background-color:#CCC;
}
#mid
{
	background-color:#CCC;
}
#ofcdet
{
	background-color:#CCC;
}
#landl
{
	background-color:#CCC;
}
#nam
{
	background-color:#CCC;
}
#upper
{
	margin-top:-10px;
	margin-left:1100px;
	color:#C06;
	font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
 
#lower
{
	margin-top:-40px;
	margin-left:1090px;
	
	color:#F00;
	text-decoration:underline;
	font-size:50px;
}
#mill
{
	position:absolute;
	top:0px;
	left:50px;
	cursor:pointer;

}
h2:hover
{
	color:#FC0;
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
#slider
{
	position:absolute;
	top:250px;
	left:160px;
	z-index:200;
}
#start
{
background:red;
border-radius:20px;
/* Chrome, Safari, Opera */
-webkit-animation-name:myfirst;
-webkit-animation-duration:20s;
-webkit-animation-timing-function:linear;
-webkit-animation-delay:20s;
-webkit-animation-iteration-count:infinite;
-webkit-animation-direction:alternate;
-webkit-animation-play-state:running;
}
@-webkit-keyframes myfirst
{
0%   {background:red;}
25%  {background:yellow;}
50%  {background:blue;}
75%  {background:green;}
100% {background:red;}
}
h4
{
	color:#0C0;
	position:absolute;
	top:150px;
	left:250px;
	font-size:25px;
}



       
</style>


  <script type="text/javascript">
function validateEmail(emailField){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(emailField.value) == false) 
        {
            alert('Invalid Email Address');
            return false;
        }

        return true;

}
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
  function validd(a,b,c,d,e,f,g,h) {
	  
    if( (a== "") && (b== "") && (c== "") && (d == "")&&(e== "") && (f== "") && (g== "") && (h == "") ) 

 {     alert("Please complete all the entries ");
     // c.focus();
    }
	
	
	 
}
</script>
<script type="text/javascript">
  function validn(q){

	  if (isNaN(q) ) {
   alert("Telephone Number must be Numeric");}
}
</script>




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
<body>
<h1 id="lik">Welcome to Jamia Millia Islamia</h1>
<div id="slider">
<div id="JQuerySlider3Container">
	<div id="JQuerySlider3" class="JQSlider">
	  <ul>
	    <li class="JQuerySliderShow" title="slide1"><img src="../../xbox.jpg" width="700" height="375"></li>
        <li class="JQuerySliderHide" title="slide2"><img src="../../java.jpg" width="700" height="375"></li>
        <li class="JQuerySliderHide" title="slide3"><img src="../../oracle.jpg" width="700" height="375"></li>
        <li class="JQuerySliderHide" title="slide4"><img src="../../soft1.jpg" width="700" height="375"></li>
        <li class="JQuerySliderHide" title="slide5"><img src="../../soft5.jpg" width="700" height="300"></li>
        <li class="JQuerySliderHide" title="slide6"><img src="../../softper.jpg" width="700" height="375"></li>
      </ul>
      <div id="JQuerySlider3_bullets_in">
        <ul>
          <li title="slide1"><a></a></li>
          <li title="slide2"><a></a></li>
          <li title="slide3"><a></a></li>
          <li title="slide4"><a></a></li>
          <li title="slide5"><a></a></li>
          <li title="slide6"><a></a></li>
        </ul>
      </div>
      <div id="JQuerySlider3_back_in" ></div>
      <div id="JQuerySlider3_next_in" ></div>
    </div>
  </div>
</div>
<div id="mill">
<img src="277px-Jamia_Millia_Islamia_Logo.svg_.png" height="110px" width="110px"/>
</div>
<h2 ><td width="195"><strong><font size = 6><center><strong>Online Software Library<hr/></font></strong></b></center></h2>

<div id="upper">

<span class="box"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Not a Member yet??</b><br/><br/>Apply Online for Membership</span></p></div>
<div id="lower">
<p><font size="2" color="RED">(ALL ENTRIES ARE COMPULSORY)</font></p></div>
<table width="334" cellpadding="2" cellspacing="0" class="con" id="start">
  <tr>
    <th width="88" scope="col" height="51">
    <form name="regg" action="uonline.php" method="post">
   
      <label class="name" ></label>
    Name:</th>
    <th width="232" scope="col">&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="nam" id="nam" value="" maxlength="100" /></th>
  </tr>
  <tr>
    <td class="addr" height="51"><label> Address:</label>
  <br>
    <br></td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;<input name="addr" type="text" id="addr" value="" maxlength="100"  /></td>
  </tr>
  <tr>
    <td height="51">Contact Number:<br>
      <br>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="cell" id="cell" value="" maxlength="100" /></td>
  </tr>
  <tr>
    <td height="51">Land-Line:</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="landl" id="landl" value="" maxlength="100" /></td>
  </tr>
  <tr>
    <td height="51">E-Mail:</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="email" id="email" value="" maxlength="100" /></td>
  </tr>
  <tr>
    <td height="51">Department:</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;<select name = "ofcdet" id = "ofcdet">
      <option value="">Select</option>
      <option value="Mathematics">Mathematics</option>
      <option value="Computers">Computers</option>
      <option value="Law">Law</option>
      <option value="CMS">CMS</option>
    </select></td>
  </tr>
  <tr>
    <td height="51">Username:</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="mid" id="password" value="" class="username" maxlength="100" /></td>
  </tr>
  <tr>
    <td height="45">Password:</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password" id="password" /></td>
  </tr>
  <tr>
    <td height="29" colspan="2">&nbsp;</td>
  </tr>
</table>
<input type="submit" name="btnSubmit" id="btnSubmit" value="Submit" onClick="validd(regg.nam.value,regg.addr.value,regg.cell.value,regg.landl.value,regg.email.value,regg.ofcdet.value,regg.mid.value,regg.password.value);">
</form>
<input  type="submit" value="         Home        " 
     onClick="window.location='http://localhost/online_software_library/soft_lib/pages/index.php';" id="home" />
     
<?php
ini_set('error_reporting', E_ALL & ~E_DEPRECATED & ~E_NOTICE);

mysql_connect("localhost", "root", "") or die("Opps some thing went wrong0");
mysql_select_db("jmi") or die("Opps some thing went wrong1");
$a=mysql_real_escape_string($_POST['nam']);
$b=mysql_real_escape_string($_POST['addr']);
$c=mysql_real_escape_string($_POST['cell']);
$d=mysql_real_escape_string($_POST['landl']);
$e=mysql_real_escape_string($_POST['email']);
$f=mysql_real_escape_string($_POST['ofcdet']);
$g=mysql_real_escape_string($_POST['mid']);
$h=mysql_real_escape_string($_POST['password']);
$cd = date("Y-m-d");
if(!empty($g) and !empty($f)and !empty($a)and !empty($b)and !empty($c)and !empty($d)and !empty($e)and !empty($h)){
$sql ="INSERT INTO usereq VALUES( '','$a','$b','$c','$d','$e','$f','$g','$h','','$cd')";
mysql_query($sql)or die("Opps some thing went wrong2");;
if (isset($a)){
echo "<h4><b>Success! your Request is Submitted successfully</b></h4>";
echo"<script type='text/javascript'>
		alert('Your Request has been Submited');
		</script>";}
		unset ($a);
}


?>


</body>
</html>