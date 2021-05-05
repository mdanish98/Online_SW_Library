
<html>
<body>
<?
session_start();
 
if(!session_is_registered(username)){
  header("location:oflib.php");
}
?>
 
<strong>
Login Successful</strong>
</body>
</html>
