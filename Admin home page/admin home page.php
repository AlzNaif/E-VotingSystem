
<?php session_start();
$login_session=$_SESSION['login_user'];

if (isset($_SESSION['login_user'])){

}else{
header("location:/e-vote/LOGIN-SINGUP/login.php");
exit();
}


?>
<!DOCTYPE html>
<html lang="en" >
<center>

<br>
<br>
	  <h1><font color="#151515";>ＡＤＭＩＮ ＰＡＮＥＬ <h1>
  </center>
<head>
  <meta charset="UTF-8">
  <title>ADMIN PAGE</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="css/style.css">

</head>




<body>

  <div id="container">
 <form method="get" action="/e-vote/CONTROL PANLE/control panel.php">

  <button type="submit" id="btn-3" class="light"    style="background-color:#13232f " ><font color ="#ffffff"> Control Panel</button>
  </form>
<form method="get" action="/e-vote/RESULTS/result.php">
   <button type="submit" id="btn-4" class="dark" style="background-color:#13232f "  > <font color ="#ffffff"> Results</button>
   
   </form>
   <form method="get" action="logout.php">

    <button  type="submit" id="btn-5"   style="background-color:#13232f "><font color ="#ffffff"> Logout</button>
  </form>


</body>

</html>
