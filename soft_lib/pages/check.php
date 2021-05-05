<?php
include_once('inc/dbConnect.inc.php');
if(isset($_POST['username']) && !empty($_POST['username'])){
      $username=strtolower(mysql_real_escape_string($_POST['username']));
      $query="select mid,status from usoath where LOWER(mid)='$username'";
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