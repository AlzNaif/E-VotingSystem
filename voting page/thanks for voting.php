<?php 
session_start();
   $login_session=$_SESSION['login_user'];

if (isset($_SESSION['login_user'])){

session_unset();
}else{
header("location:/e-vote/LOGIN-SINGUP/login.php");
exit();
}
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Thanks for Voting</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body background ="b.png">

 
<br/>
<br/>
<br/>
<br/>
<br/>

<div class="form">

    <h1 > <font color ="#ffffff">Voting was successful. Thanks for voting </h1>

    <form action="logout.php" method="post">
     <div class="field-wrap">
      <label>
      </label>
    </div>
    <button class="button button-block"/>Logout</button>
    </form>
  </div>


</body>
 </center>
</html>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  
</body>

</html>
