<?php

session_start();

$x = $_SESSION['login_user'];
 
if(!isset($x))
	{
	header("location:index.php");
	exit();
	}

 
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



html, body { margin:0; padding:0 }
#log
{
	position:absolute;
	top:400px;
	right:735px;
}
#soft
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
	right:100px;
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
	width:175px;
	height:60px;
-webkit-transform:rotate(360deg);
transform:rotate(360deg);
}
#search
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
	right:100px;
}

#search:hover
{
	color:#336;
	background-color:#09C;
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
	width:175px;
	height:60px;
-webkit-transform:rotate(360deg);
transform:rotate(360deg);
}
#mem
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
	right:105px;
}

#mem:hover
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


#mem
{
	-webkit-transition:width 0.5s, height 0.5s, -webkit-transform 0.5s;
transition:width 0.5s, height 0.5s, transform 0.5s;
transition-property:all;
-webkit-transition-timing-function:linear;

}
#mem:hover
{
	width:175px;
	height:60px;
-webkit-transform:rotate(360deg);
transform:rotate(360deg);
}
#req
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
	right:100px;
}

#req:hover
{
	color:#336;
	background-color:#09C;
}


#req
{
	-webkit-transition:width 0.5s, height 0.5s, -webkit-transform 0.5s;
transition:width 0.5s, height 0.5s, transform 0.5s;
transition-property:all;
-webkit-transition-timing-function:linear;

}
#req:hover
{
	width:175px;
	height:60px;
-webkit-transform:rotate(360deg);
transform:rotate(360deg);
}
#log
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
	right:150px;
}

#log:hover
{
	color:#336;
	background-color:#09C;
}


#log
{
	-webkit-transition:width 0.5s, height 0.5s, -webkit-transform 0.5s;
transition:width 0.5s, height 0.5s, transform 0.5s;
transition-property:all;
-webkit-transition-timing-function:linear;

}
#log:hover
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



</style> 
<style> 
</style>
<head>


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
<div id="mill">
<img src="277px-Jamia_Millia_Islamia_Logo.svg_.png" height="110px" width="110px"/>
</div>
<h2 ><td width="195"><b><strong><font size = 6><center><strong>Online Software Library<hr/></font></strong></b></center></h2>
<div id="wel">
<?php
ini_set('error_reporting',E_ALL & ~E_DEPRECATED & ~E_NOTICE);
echo "Welcome,$x";
?>
</div>
<form  name="logout" action="index.php"><input type="submit" value="Log out" id="log"></form> <br><br><br><br>
<strong><b></b>
<CENTER>

<input  type="submit" value="           Softwares            " 
    onclick="window.location='http://localhost/online_software_library/soft_lib/pages/sft.php';" id="soft" /><br><br>


	<input type="submit" value="              Search              " 
    onclick="window.location='http://localhost/online_software_library/soft_lib/pages/jadmsir.php';" id="search" /> 
<br><br>

	<input type="submit" value="        Membership          " 
    onclick="window.location='http://localhost/online_software_library/soft_lib/pages/mshp.php';" id="mem" /> <br><br>

	<input type="submit" value="          Requisitions         " 
    onclick="window.location='http://localhost/online_software_library/soft_lib/pages/rosmam.php';" id="req" /> 

	</CENTER>
<?php 
/*$x = $_SESSION['login_user'];
echo($x);*/?>
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