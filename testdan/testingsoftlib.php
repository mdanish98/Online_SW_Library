<?php
session_start();
session_destroy();
?> 
<html>
<!DOCTYPE html>
<Title>Welcome to Online Software library</Title>
<html>
<head>
<link rel="stylesheet" type="text/css" href="testingsoftlibcss.css">
<h1 id="lik">Welcome to jamia Millia Islamia</h1>
</head>
<div id="kill" >
</div>

<body>
<h2 ><td width="195"><b><strong><font size = 6><center><strong>TOSL<hr/></font></strong></b></center></h2>
<table align="center" >


<!--<center><br><br><br><br><br><br>-->
<div id="kil">
<tr>
<td><input  type="submit" value="    All Softwares( Catalogue )   " 
     onclick="window.location='http://localhost/online_software_library/soft_lib/pages/fulcat.php';" /><br><br><br></td>

<td>	 <input  type="submit" value="              Search              " 
     onclick="window.location='http://localhost/online_software_library/soft_lib/pages/nsir.php';" /><br><br><br>
<td width="204">	 <input  type="submit" value="            Membership Form         " 
     onclick="window.location='http://localhost/online_software_library/soft_lib/pages/uonline.php';" /><br><br><br>
</td>
<td width="218">	 <input  type="submit" value="                Administration              " 
     onclick="window.location='http://localhost/online_software_library/soft_lib/pages/oflib.php';" /><br><br><br></td>
	
<td width="159">	 <input  type="submit" value="	      Quit                         " 
     onclick="window.close()" /><br><br><br></center></td></tr></table></div>
     </body>
     </html>