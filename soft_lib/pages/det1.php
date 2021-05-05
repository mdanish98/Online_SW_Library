<html>
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

function edit()
{


document.write("<tr>");
  document.write("<td><label name S.No>s.no<br><input type=text value= '$_post[$sid]'></td>");
  document.write("<td><input type=text value= ''></td>");
  document.write("<td><input type=text value= ''></td>");
  document.write("<td><input type=text value= ''></td>");;
  document.write("<td><input type=text value= ''></td>");
  document.write("<td><input type=text value= ''></td>");
  document.write("<td><input type=text value= ''></td>");
  document.write("<td><input type=text value= ''></td>");
  document.write("<td><input type=text value= ''></td>");
  document.write("<td><input type=text value= ''></td>");
  document.write("<td><input type=text value= ''></td>");;
  document.write("<td><input type=text value= ''></td>");
  document.write("<td><input type=text value= ''></td>");
  document.write("<td><input type=text value= ''></td>");
  document.write("<td><input type=text value= ''></td>");
  document.write("<td><input type=text value= ''></td>");
  document.write("<td><input type=text value= ''></td>");
  document.write("</tr>");

}
</script>
<form name="sof" action="det1.php" method = "post"><br>
<label for="sid">Enter Softrware ID:</label>
<input type="text" name="sid" value="" maxlength="100" id="sid" />
<input type="submit" name="btnSubmit" id="btnSubmit" value="Go" onClick="valid(sof.sid.value,sof.sid);"  >
<input type='submit' name='btnSubmit' id='btnSubmit' value='Edit' onclick='edit();'>
</form>
<?php 
ini_set('error_reporting',E_ALL & ~E_DEPRECATED & ~E_NOTICE);
$s[]=array();
$sid = $_POST['sid'];

//echo("$sid");
mysql_connect("localhost", "root", "") or die("Opps some thing went wrong");
mysql_select_db("jmi")or die("Opps some thing went wrong");
$sql="SELECT * FROM sofftt WHERE sid ='$sid'";
$result=mysql_query($sql);
//$row=mysql_fetch_array($result);
//echo("$result");
//echo("$row");
//$active=$row['active'];
echo "<form name='data' >
<label name s.no>S.No.</label>
<label name sid>S.Id</label>
<label name name>name</label>"
/*<th>Brand Name</th>
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
</tr>"*/;

while($row = mysql_fetch_array($result))
  {
  echo "<br>";
 $s[0] = $row['s.no'];
  echo "<input type='text' value= '". $row['s.no'] . "'>";
  /*echo "<td>" . $row['sid'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['brand_name'] . "</td>";
  echo "<td>" . $row['version'] . "</td>";
  echo "<td>" . $row['technology'] . "</td>";
  echo "<td>" . $row['quantity'] . "</td>";
  echo "<td>" . $row['license'] . "</td>";
  echo "<td>" . $row['media_source'] . "</td>";
  echo "<td>" . $row['keywords'] . "</td>";
  echo "<td>" . $row['mannuals'] . "</td>";
  echo "<td>" . $row['registration_key'] . "</td>";
  echo "<td>" . $row['key_classification'] . "</td>";
  echo "<td>" . $row['date_purchse'] . "</td>";
  echo "<td>" . $row['date_received '] . "</td>";
  echo "<td>" . $row['url'] . "</td>";
  echo "<td>" . $row['status'] . "</td>";
  echo "</tr>";*/
  $s++;
  }


//echo "<form name='soff' action='' method = 'post'>
//<input type='submit' name='btnSubmit' id='btnSubmit' value='Edit' onclick='edit();' //></form>";
echo "</form>";
?>

