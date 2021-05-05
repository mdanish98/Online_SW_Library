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
html, body { margin:0; padding:0 }
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
<!--this style is for buttons.-->
<style>
#mem
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
	top:270px;
	right:118px;
}

#mem:hover
{
	color:#336;
	background-color:#09C;
}


#mem
{
	-webkit-transition:width 0.5s, height 0.5s, -webkit-transform 0.5s;
transition:width 0.5s, height 0.5s, transform 0.5s;
transition-property:all;
-webkit-transition-timing-function:linear;

}
#mem:hover
{
	width:225px;
	height:60px;
-webkit-transform:rotate(360deg);
transform:rotate(360deg);
}
#soft
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
	top:340px;
	right:120px;
}

#soft:hover
{
	color:#336;
	background-color:#09C;
}


#soft
{
	-webkit-transition:width 0.5s, height 0.5s, -webkit-transform 0.5s;
transition:width 0.5s, height 0.5s, transform 0.5s;
transition-property:all;
-webkit-transition-timing-function:linear;

}
#soft:hover
{
	width:225px;
	height:60px;
-webkit-transform:rotate(360deg);
transform:rotate(360deg);
}
#history
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
	top:415px;
	right:110px;
}

#history:hover
{
	color:#336;
	background-color:#09C;
}
#slider
{
	position:absolute;
	top:250px;
	left:160px;
	z-index:200;
}


#history
{
	-webkit-transition:width 0.5s, height 0.5s, -webkit-transform 0.5s;
transition:width 0.5s, height 0.5s, transform 0.5s;
transition-property:all;
-webkit-transition-timing-function:linear;

}
#history:hover
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
	top:480px;
	right:100px;
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
#kill
{
	position:absolute;
	top:200px;
	right:240px;
	font-family:"Times New Roman", Times, serif;
	font-size:22px;
	color:#03F;
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


</style>
</head>
<body>
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
<body>
<div id="mill">
<img src="277px-Jamia_Millia_Islamia_Logo.svg_.png" height="110px" width="110px"/>
</div>
<h2 ><td width="195"><b><strong><font size = 6><center><strong>Online Software Library<hr/></font></strong></b></center></h2>

<div id="wel">
<?php
$x = $_SESSION['login_user'];

echo "
Welcome,$x";

?> 
</div>

<script type="text/javascript">
  function valid(n,c,t,k) {
    if( (n== "") && (c== "") && (k== "") && (t == "") ) 

 {     alert("please enter a valid option");
     // c.focus();
    }
}
	</script>

<h3 id="kill">Search By:</h3>
<input name= "am" type="button" value="              Members          "  
	 onclick="window.location='http://localhost/online_software_library/soft_lib/pages/allmam.php';" id="mem"> <br><br>
<input name ="rm" type="button" value="            Softwares           "
	 onclick="window.location='http://localhost/online_software_library/soft_lib/pages/allsof.php';" id="soft"><br><br>
<input name ="vd" type= "button" value = "                History             "
	 onclick="window.location='http://localhost/online_software_library/soft_lib/pages/logg.php';" id="history"><br><br>

<input  type="submit" value="             Main Menu            " 
     onclick="window.location='http://localhost/online_software_library/soft_lib/pages/jadm.php';" id="main" /> 
<div id="date">
<?php
echo "Date-";
echo date("d-M-Y");
echo "\t";
echo date("D");
?>
</div>

</body>
</html>


