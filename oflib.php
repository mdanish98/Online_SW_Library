<html>
<style>
div.ex
{
width:220px;
padding:10px;
border:5px solid black;
margin:0px;

position:absolute;
right:5px;


}


</style> 
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
</script>
<div class="ex">Offline Library<form name="reg" action="vldtn.php" method = "post"><br>
	<div>
<label for="username">User Name</label>
<input type="text" name="username" value="" maxlength="100" id="username" onblur="valid(reg.username.value,reg.username);" /><br>
</div>

<label for="password">password</label>	
 <input type="password" name="password" id="password" onblur="valid(reg.password.value,reg.password);" /><br>
	<input type="submit" name="btnSubmit" id="btnSubmit" value="Login">
	<img src="http://localhost/online_software_library/soft_lib/images/key.gif" alt="key" width="180" height="175">
</div>






</html>