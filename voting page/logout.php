<?php
   session_start();
   $login_session=$_SESSION['login_user'];

   
   if(session_destroy()) {
      header("Location: /e-vote/LOGIN-SINGUP/login.php");
   }
?>