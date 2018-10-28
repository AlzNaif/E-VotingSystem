<?php
 
$hostname='localhost';
$user = 'root';
$password = '';
$mysql_database = 'E_voting';
$con = mysql_connect($hostname, $user, $password,$mysql_database);
mysql_select_db("E_voting", $con);
 
 $error ='';
if(isset($_POST['login'])){
session_start();
$username=$_POST['ID'];
$password=$_POST['password'];

$_SESSION['login_user']=$username;
 
$query = mysql_query("SELECT * FROM Admin WHERE a_id='$username' and password='$password'");

$queryC = mysql_query("SELECT * FROM candidate WHERE c_id='$username' and password='$password'");

$queryV = mysql_query("SELECT * FROM Voter WHERE v_id='$username' and password='$password'");

 if (mysql_num_rows($query) != 0)
{

 echo "<script language='javascript' type='text/javascript'> location.href='/E-vote/Admin%20home%20page/admin%20home%20page.php' </script>";  
  }
else if (mysql_num_rows($queryC) != 0){

 echo "<script language='javascript' type='text/javascript'> location.href='/E-vote/candidate page/candidate page.php' </script>"; 

}


else if (mysql_num_rows($queryV) != 0){

  echo "<script language='javascript' type='text/javascript'> location.href='checkVoting.php' </script>"; 


}
  else
  {
 $error =" You Have Entered Incorrect ID number or Password";
     
      }

}

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Electronic Voting System-Login </title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body background ="b.png">
  
<div class="form">
      <div class="imgcontainer">
  <img width="100%"  height="200" 
    <img src="vvv1.png" >
  </div>
   <div id1="login">   
          <h1> LOGIN  </h1>
          <form name="login" action="login.php" method="post">
            <br>
                <center> <span class="error" style="color:red;font-weight:bold"><?php echo $error;?></span> </center>
                <br>

          <div class="field-wrap">
            <label>
            <span class="req"></span>
            </label>
            <input type="number" placeholder="ID number" name="ID" required autocomplete="on"  maxlength="10"/>
          </div>
           <div class="field-wrap">
            <label>
              <span class="req"></span>
            </label>
            <input type="password" placeholder="Password" name="password" required autocomplete="off"/>
          </div>
          <p class="Sign-up">
		  <a href="voter sign-up.php">Sign-Up</a>		  </p>
          <p class="forget password">
		  <a href="../forget/forget page.php">forget password?</a>		  </p>
          <button name="login" class="button button-block"/>Login</button>
          </form>
		  </div>
        </div>
      </div> 
</body>

</html>