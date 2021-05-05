<?php
include_once('inc/dbConnect.inc.php');
if(isset($_POST['username1']) && !empty($_POST['username1'])){
      $username=strtolower(mysql_real_escape_string($_POST['username1']));
      $query="select * from sofftt where LOWER(sid)='$username'";
      $res=mysql_query($query);
      $count=mysql_num_rows($res);
      $HTML='';
      if($count > 0){
        $HTML='is already use';
      }else{
        $HTML='';
      }
      echo $HTML;
}
?>