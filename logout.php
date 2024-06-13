<?php
  session_start();
  
  // Perform logout actions, e.g., destroy session, unset variables, etc.
  // ...
  
  // Unset the logged_in session variable
  unset($_SESSION['log in']);
  
  // Return a success response
  echo 'success';
?>
