<html>
<script type="text/javascript">
  function valid(n,c) {
    if(n == "") {
      alert("This field cannot be empty");
      c.focus();
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
<form name="reg" action="Register.jsp" method="get">
<fieldset>
<legend>Your Details</legend>
<div>
<label for="name">Name:</label>
<input type="text" name="name" value="" maxlength="100" onblur="valid(reg.name.value,reg.name);" /><br>
</div>
<div>
<label for="addr">Address:</label>
<input type="text" name="addr" onblur="valid(reg.addr.value,reg.addr);" />
</div>
<div>
<label for="zone">Zone:</label>
<select name="zone" >
  <option>East</option>
  <option>West</option>
  <option>South</option>
  <option>North</option>
  
</select>
<div>
<label for="phone">Phone:</label>
<input type="text" name="phone" value="" maxlength="100"  onblur="valid(reg.phone.value,reg.phone);" /><br>
</div>
<div>
<label for="age">Age:</label>*
<input type="text" name="age" value="" maxlength="100" onblur="valid(reg.age.value,reg.age);" /><br>
</div>
<div>
<label for="pincode">Pin Code:</label>*
<input type="text" name="pincode" value="" maxlength="100" onblur="valid(reg.pincode.value,reg.pincode);"  /><br>
</div>
<div>
<label for="weight">Weight:</label>*
<input type="text" name="weight" value="" maxlength="100" onblur="valid(reg.weight.value,reg.weight);"  /><br>
<!-- <input name='lName' onchange='testInput(this, 8);'/>  -->
<!-- <input name='fName' onchange='testInput(this, 15);'/> -->
</div>
</div>
<div>
<label for="bloodgrp">Blood Group:</label>
<select name="bloodgrp">
  <option>A+</option>
  <option>A-</option>
  <option>B+</option>
  <option>B-</option>
  <option>AB+</option>
  <option>AB-</option>
  <option>O+</option>
  <option>O-</option>
</select>
</div>
<br>
<div>
<input type="submit" value="Register" />
</div>
</fieldset>
</form></td>
</tr>
</table>
</body>
</center>
</html>