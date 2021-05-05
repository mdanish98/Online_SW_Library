<?php

$mail= $_GET["mail"];

if(!filter_has_var(INPUT_GET,"mail"))

{

echo "Input type does not exists";

}

else

{

if(!filter_input(INPUT_GET,"mail",FILTER_VALIDATE_EMAIL ))

{

   header( 'Location: http://localhost/online_software_library/soft_lib/pages/Val.php' ) ;



echo "Email address is not valid";

}

else

{

echo "Email address is valid";

}

}

?>