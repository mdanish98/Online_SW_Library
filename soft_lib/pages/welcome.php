<?php
session_start();
session_destroy();
?> 
<html>
<!DOCTYPE html>
<Title>Welcome to Online Software library</Title>
<html>
<style>
        .box{ z-index:10;
		 
      height:88%;
       
                font-family:Tahoma, Geneva, sans-serif;
                font-size:16px;
                color:#333;
                padding:5px;
                background-color:#00FFFF;
                border:2px solid #999;
        }
</style>
<img src="http://localhost/online_software_library/soft_lib/images/logo.jpg" alt="logo" width="100%" height="12%">
<style>
html, body { margin:0; padding:0 }
div.box
{
width:100%;
padding:10px;
border:40px ridge;
margin:0px;
{background-color:##00FFFF;} 
position:static;
left:10px;
top:100px;
}
</style> 
<style> h1{  background-color:#00B2B2;} 
</style>
<div class="box">


<h1 ><strong><font size = 6><center><strong>TOSL</font></strong></CENTER></h1>
<center><br><br><br><br><br><br>
<input  type="submit" value="    All Softwares( Catalogue )   " 
     onclick="window.location='http://localhost/online_software_library/soft_lib/pages/fulcat.php';" /><br><br><br>

	 <input  type="submit" value="            Search a Software          " 
     onclick="window.location='http://localhost/online_software_library/soft_lib/pages/nsir.php';" /><br><br><br>

	 <input  type="submit" value="                 Membership               " 
     onclick="window.location='http://localhost/online_software_library/soft_lib/pages/uonline.php';" /><br><br><br>

	 <input  type="submit" value="                Administration              " 
     onclick="window.location='http://localhost/online_software_library/soft_lib/pages/oflib.php';" /><br><br><br>
	
	 <input  type="submit" value="	      Quit                         " 
     onclick="window.close()" /><br><br><br>