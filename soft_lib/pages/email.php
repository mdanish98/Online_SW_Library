<html>
<form action= "email.php">
<input type ="submit" name="go">
</form>
<?php
mail('mdanish98@gmail.com', 'the subject', 'the message', null,'mdanish98@gmail.com');
?>
