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
<html>
<head>
<style>
body
{
	height:100%;
	width:100%;
}
#add
{
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
	position:absolute;
	top:270px;
	right:205px;
}

#add:hover
{
	color:#336;
	background-color:#09C;
}


#add
{
	-webkit-transition:width 0.5s, height 0.5s, -webkit-transform 0.5s;
transition:width 0.5s, height 0.5s, transform 0.5s;
transition-property:all;
-webkit-transition-timing-function:linear;

}
#add:hover
{
	width:175px;
	height:60px;
-webkit-transform:rotate(360deg);
transform:rotate(360deg);
}
#rem
{
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
	position:absolute;
	top:340px;
	right:210px;
}

#rem:hover
{
	color:#336;
	background-color:#09C;
}


#rem
{
	-webkit-transition:width 0.5s, height 0.5s, -webkit-transform 0.5s;
transition:width 0.5s, height 0.5s, transform 0.5s;
transition-property:all;
-webkit-transition-timing-function:linear;

}
#rem:hover
{
	width:175px;
	height:60px;
-webkit-transform:rotate(360deg);
transform:rotate(360deg);
}
#view
{
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
	position:absolute;
	top:415px;
	right:205px;
}

#view:hover
{
	color:#336;
	background-color:#09C;
}


#view
{
	-webkit-transition:width 0.5s, height 0.5s, -webkit-transform 0.5s;
transition:width 0.5s, height 0.5s, transform 0.5s;
transition-property:all;
-webkit-transition-timing-function:linear;

}
#view:hover
{
	width:175px;
	height:60px;
-webkit-transform:rotate(360deg);
transform:rotate(360deg);
}
#set
{
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
	position:absolute;
	top:480px;
	right:212px;
}

#set:hover
{
	color:#336;
	background-color:#09C;
}


#set
{
	-webkit-transition:width 0.5s, height 0.5s, -webkit-transform 0.5s;
transition:width 0.5s, height 0.5s, transform 0.5s;
transition-property:all;
-webkit-transition-timing-function:linear;

}
#set:hover
{
	width:175px;
	height:60px;
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
    font-size: 15px;
    text-decoration: none;
    cursor: pointer;
    border:none;
	position:absolute;
	top:540px;
	right:225px;
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
	width:100px;
	height:40px;
-webkit-transform:rotate(360deg);
transform:rotate(360deg);
}
#date
{
	position:absolute;
	top:100px;
	right:120px;
	color:#666;
}
#wel
{
	color:#3B5998 ;
	position:absolute;
	top:200px;
	left:175px;
	font-size:20px;
	
}
#slider
{
	position:absolute;
	top:250px;
	left:160px;
	z-index:200;
}



</style> <style>
        h1
{
		height:50px;
	width:100%;
	text-align:center;
	animation-direction:normal;
	cursor:pointer;
	font-family:"Arial Black", Gadget, sans-serif;

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
#mill
{
	position:absolute;
	top:0px;
	left:50px;
	cursor:pointer;

}

</style>
<style> h1{ } 
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
<div id="mill">
<img src="277px-Jamia_Millia_Islamia_Logo.svg_.png" height="110px" width="110px"/>
</div>
<h2 ><td width="195"><b><strong><font size = 6><center><strong>Online Software Library<hr/></font></strong></b></center></h2>
<div id="wel">
<?php
$x = $_SESSION['login_user'];

echo "
Welcome,$x";

?> <br><br><br><br>
</div>
<strong><b></b>
<center>

<input name= "am" type="button" value="      Add  Member     "  
	 onclick="window.location='http://localhost/online_software_library/soft_lib/pages/mshpam.php';" id="add"> <br><br>
<input name ="rm" type="button" value="  Remove Member "
	 onclick="window.location='http://localhost/online_software_library/soft_lib/pages/mshprm.php';" id="rem"><br><br>
<input name ="vd" type= "button" value = "      View    Details    "
	 onclick="window.location='http://localhost/online_software_library/soft_lib/pages/mshpvd.php';" id="view"><br><br>
<input name ="bm" type= "button" value = "Set Member Status"
	 onclick="window.location='http://localhost/online_software_library/soft_lib/pages/mshpbm.php';" id="set"><br><br><br>
<input  type="submit" value="     Go Back    " 
     onclick="window.location='http://localhost/online_software_library/soft_lib/pages/jadm.php';" id="back" /> 
<br><br>
<br><br>
&nbsp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&emsp;
&nbsp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&ensp;&nbsp;&emsp;
	
</body>	

</html>