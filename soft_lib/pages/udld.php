<html>
<head>
<style>
body
{
	height:100%;
	width:100%;
}
#down
{
	position:absolute;
	top:200px;
	right:500px;
}
</style>
</head>
<body>
<?php
ini_set('error_reporting',E_ALL & ~E_DEPRECATED & ~E_NOTICE);
session_start();

mysql_connect("localhost", "root", "") or die("Opps some thing went wrong");
mysql_select_db("jmi") or die("Opps some thing went wrong");

//$usr=$_SESSION['login_userr'];
//$pw=$_SESSION['login_userp'];
//$sqllp="SELECT mid FROM usoath WHERE reguser='$usr' and sword='$pw'";
 
//$resultp=mysql_query($sqllp);

//$row=mysql_fetch_array($resultp);
$middd=$_SESSION['login_userr'];

$u=$_GET['url'];
$sid=$_GET['sid'];
$doi=$_GET['doi'];

				$sl="SELECT * FROM sofftt where sid='$sid'";
	$resl= mysql_query($sl) or die("Opps some thing went wrong");
	$rowl = mysql_fetch_array($resl);
	$lsn=$row['license'];
	if ($lsn== -10)
			{	


	
		$sql="INSERT INTO msrcrd VALUES( '','$middd','$sid','$doi','1',' ','')";
		mysql_query($sql);
			}

			else if($lsn!==0)
			{	$ls=$lsn-1;

			$ss="UPDATE sofftt SET license='$ls' WHERE sid ='$sid'";
		
		mysql_query($ss);
		$ss1="UPDATE soffrec SET license='$ls' WHERE sid ='$sid'";
		mysql_query($ss1);
		$sql="INSERT INTO msrcrd VALUES( '','$middd','$sid','$doi','1',' ','')";
		mysql_query($sql);
		

				
			}
			else{echo"<script type='text/javascript'>
		alert('License Limit Reached Contact Admin');
		</script>";
		exit;}
		
	
	?>
	<?php
	$ull=$_GET['url'];
	echo "<div id='down'>";
	echo"<a href =".$ull." ><font ='clalibri' size='6'><p id='click'>Click here to download</a>";
	echo "<a href='.$ull.'><img src='../../clickhere.gif' height=50px width=150px></a>";
	echo "</div>";
	echo "<hr/>";
	?>
	    

</body>
</html>