<?php
if (check_username_and_password())
 {
   //they logged in successfully
   $access = TRUE;
}
if ($access) {
   echo "Welcome to the administrative control panel.";
   //more privileged code here...
}
else {
  echo "Access denied";
}
?>
