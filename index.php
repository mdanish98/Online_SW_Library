<?php
session_start();
session_destroy();
?> 
<!DOCTYPE html>
<div id="res">
<Title>Welcome to Online Software library</Title>
<html>
<head>
<style>
body
{
	width:100%;
	height:100%;
}
        .box{ z-index:10;
		 
     
       
                font-family:Tahoma, Geneva, sans-serif;
                font-size:16px;
                color:#333;
                padding:5px;
				background-color:#999;
                border:2px solid #999;
        }
		#res
		{
			width:100%;margin:auto;min-width:800px;max-width:2000px;
		}
		
.alls {
	color:#0C3;
}
h1
{
		height:50px;
	width:100%;
	text-align:center;
	animation-direction:normal;
	cursor:pointer;

}

.jmi {
	color: #0F3;
}
.jmmi {
	background-color:#0f3;
}
#kill tr td input {
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
</style>
<style>
html, body { margin:0; padding:0 }
div.box
{
width:100%;
padding:10px;
border:40px ridge;
margin:0px;
{background-color:#9F3;} 
position:static;
left:10px;
top:100px;
}
</style> 
<style> h1{} 
alls
{
	color:#090;
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

#res
{
	max-width:100%;
}
#kil
{
	position:absolute;
	
	z-index:100;
}
#loi
{
	background-repeat:no-repeat;
	position:absolute;
	top:255px;
}
#all
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
}
#quit
{
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
#mem
{
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
#search
{
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
#admin
{
	 background-color:#FF9009;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius:6px;
    color:#FFF;
    font-family: 'Oswald';
    font-size: 15px;
    text-decoration: none;
    cursor: pointer;
    border:none;
}
#admin:hover
{
	color:#336;
	background-color:#09C;
}
#quit:hover
{
	color:#336;
	background-color:#09C;
}
#search:hover
{
	color:#336;
	background-color:#09C;
}
#all:hover
{
	color:#336;
	background-color:#09C;
}
#mem:hover
{
	color:#336;
	background-color:#09C;
}

#mill
{
	position:absolute;
	top:0px;
	left:50px;
	cursor:pointer;

}
#luk
{
	position:absolute;
	top:280px;
	right:10px;
	cursor:pointer;
}

#limca
{
	font-variant:normal;
	font-family:"Times New Roman", Times, serif;
	font-size:18px;
	font:"Times New Roman", Times, serif;
	color:#609;
	
}
h2:hover
{
	color:#FC0;
}
#lil
{
	position:absolute;
	top:100px;
}
#kli
{
	font-family:"Times New Roman", Times, serif;
	font-size:25px;
	color:#9F0;
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
	width:100%;
	height:100%;
-webkit-transform:rotate(360deg);
transform:rotate(360deg);


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
	width:100%;
	height:100%;
-webkit-transform:rotate(360deg);
transform:rotate(360deg);
}
#quit
{
	-webkit-transition:width 0.5s, height 0.5s, -webkit-transform 0.5s;
transition:width 0.5s, height 0.5s, transform 0.5s;
transition-property:all;
-webkit-transition-timing-function:linear;

}
#quit:hover
{
	width:100%;
	height:100%;
-webkit-transform:rotate(360deg);
transform:rotate(360deg);
}
#all
{
	-webkit-transition:width 0.5s, height 0.5s, -webkit-transform 0.5s;
transition:width 0.5s, height 0.5s, transform 0.5s;
transition-property:all;
-webkit-transition-timing-function:linear;

}
#all:hover
{
	width:100%;
	height:100%;
-webkit-transform:rotate(360deg);
transform:rotate(360deg);
}
#admin
{
	-webkit-transition:width 0.5s, height 0.5s, -webkit-transform 0.5s;
transition:width 0.5s, height 0.5s, transform 0.5s;
transition-property:all;
-webkit-transition-timing-function:linear;

}
#admin:hover
{
	width:100%;
	height:100%;
-webkit-transform:rotate(360deg);
transform:rotate(360deg);
}
#jim
{
width:100px;
height:100px;
background:red;
border-radius:25px;
position:absolute;
top:500px;
/* Chrome, Safari, Opera */
-webkit-animation-name:myfirst;
-webkit-animation-duration:5s;
-webkit-animation-timing-function:linear;
-webkit-animation-delay:2s;
-webkit-animation-iteration-count:infinite;
-webkit-animation-direction:alternate;
-webkit-animation-play-state:running;
}
@-webkit-keyframes myfirst
{
0%   {background:red; left:0px; top:500px;}
25%  {background:yellow; left:150px; top:500px;}
50%  {background:blue; left:150px; top:700px;}
75%  {background:green; left:0px; top:700px;}
100% {background:red; left:0px; top:500px;}
}
#kim
{
width:100px;
height:100px;
background:red;
border-radius:25px;
position:absolute;
top:500px;
/* Chrome, Safari, Opera */
-webkit-animation-name:myfirst1;
-webkit-animation-duration:5s;
-webkit-animation-timing-function:linear;
-webkit-animation-delay:2s;
-webkit-animation-iteration-count:infinite;
-webkit-animation-direction:alternate;
-webkit-animation-play-state:running;
}
@-webkit-keyframes myfirst1
{
0%   {background:red; right:0px; top:500px;}
25%  {background:yellow; right:150px; top:500px;}
50%  {background:blue; right:150px; top:700px;}
75%  {background:green; right:0px; top:700px;}
100% {background:red; right:0px; top:500px;}
}


</style>
</head>
<body>
<h1 id="lik">Welcome to Jamia Millia Islamia</h1>
<div id="loi">
<img src="DeliciousLibrary256x256.png" height="225px" width="225px">
</div>

<div id="mill">
<img src="277px-Jamia_Millia_Islamia_Logo.svg_.png" height="110px" width="110px"/>
</div>

<h2 ><td width="195"><b><strong><font size = 6><center><strong>Online Software Library<hr/></font></strong></b></center></h2>
<table align="center" >


<!--<center><br><br><br><br><br><br>-->
<div id="kil">
<tr>
<td><input  type="submit" value="           All Softwares              " 
     onclick="window.location='http://localhost/online_software_library/soft_lib/pages/fulcat.php';" id="all" /><br><br><br></td>

<td>	 <input  type="submit" value="                 Search                 " 
     onclick="window.location='http://localhost/online_software_library/soft_lib/pages/nsir.php';" id="search" /><br><br><br>
<td width="204">	 <input  type="submit" value="            Membership Form         " 
     onclick="window.location='http://localhost/online_software_library/soft_lib/pages/uonline.php';" id="mem" /><br><br><br>
</td>
<td width="218">	 <input  type="submit" value="                Administration              " 
     onclick="window.location='http://localhost/online_software_library/soft_lib/pages/oflib.php';" id="admin" /><br><br><br></td>
	
<td width="159">	 <input  type="submit" value="	       Quit                  " 
     onclick="window.close()" id="quit" /><br><br><br></center></td></tr></table></div>
     <table align="center" height="500px" width="800px">
     <th align="left"><p id="kli"><br/><br/>About Online Software Library<hr/></th>
     
     <div id="lil">
     <tr>
    <td><p id="limca"><br/><br/>In computer science, a library is a collection of implementations of behavior, written in terms of a language, that has a well-defined interface by which the behavior is invoked. This means that as long as a higher level program uses a library to make system calls, it does not need to be re-written to implement those system calls over and over again.
Library code is organized in such a way that it can be used by multiple programs that have no connection to each other, while code that is part of a program is organized to only be used within that one program. This distinction can gain a hierarchical notion when a program grows large, such as a multi-million-line program. In that case, there may be internal libraries that are reused by independent sub-portions of the large program. The distinguishing feature is that a library is organized for the purposes of being reused by independent programs or sub-programs, and the user only needs to know the interface, and not the internal details of the library.

The value of a library is the reuse of the behavior. When a program invokes a library, it gains the behavior implemented inside that library without having to implement that behavior itself. Libraries encourage the sharing of code in a modular fashion, and ease the distribution of the code.<br/>A software library is a suite of data and programming code that is used to develop software programs and applications. It is designed to assist both the programmer and the programming language compiler in building and executing software.<br/>A software library generally consists of pre-written code, classes, procedures, scripts, configuration data and more. Typically, a developer might manually add a software library to a program to achieve more functionality or to automate a process without writing code for it. For example, when developing a mathematical program or application, a developer may add a mathematics software library to the program to eliminate the need for writing complex functions. All of the available functions within a software library can just be called/used within the program body without defining them explicitly. Similarly, a compiler might automatically add a related software library to a program on run time.</p></td></tr></div></table>
<div id="luk">
<img src="Entertainment_Software_Association_logo.jpg" height="200px" width="220px">
     </div>
     <div id="kim"></div>
      <div id="jim"></div>
      
     </body>
     </html>
     </div>