<?php
ini_set('error_reporting', E_ALL & ~E_DEPRECATED & ~E_NOTICE);

session_start(); 
/*$r =array();
if(isset($_SESSION['value'])){

foreach ($_SESSION['value'] as $p) {
        //echo $p . "<br />";
		 $r=array($p);
		next($r);
		echo $r;
        //unset($_SESSION['value']);
    }
}*/
$sid=$_POST['sid'];
echo ($sid);
//echo"$row['sid']";
//echo $r['0']."<br />";
/*echo'<table>

<tr>
<th>S.No.</th>
<th>S Id</th>
<th>Name</th>
<th>Brand Name</th>
<th>Version</th>
<th>Technology</th>
<th>Quantity</th>
<th>License</th>
<th>Media Source</th>
<th>Key Words</th>
<th>Mannuals</th>
<th>Registration Key</th>
<th>Key Classification</th>
<th>Date Of Purchse</th>
<th>Date Of Received </th>
<th>URL</th>
<th>Status</th>
</tr>';


echo"<tr>";
//echo '<td><input type ="text" value ="' .$s['0'].'"></td>';

echo"
<td><input type ='text'><value='".$s['value']."'></td>
<td><input type ='text'></td>
<td><input type ='text'></td>
<td><input type ='text'></td>
<td><input type ='text'></td>
<td><input type ='text'></td>
<td><input type ='text'></td>
<td><input type ='text'></td>
<td><input type ='text'></td>
<td><input type ='text'></td>
<td><input type ='text'></td>
<td><input type ='text'></td>
<td><input type ='text'></td>
<td><input type ='text'></td>
<td><input type ='text'></td>
<td><input type ='text'></td>
</tr><form action ='update.php'>
<input type ='submit' value = ''>";
echo"</tr>";
echo"</table>";
	*/?>