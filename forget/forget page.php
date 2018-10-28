<?php
 

if(isset($_POST['reset'])){
    
$hostname='localhost';
$user = 'root';
$password = '';
$mysql_database = 'E_voting';
$db = mysql_connect($hostname, $user, $password,$mysql_database);
mysql_select_db("E_voting", $db);

$email=$_POST['email'];

 
$query = mysql_query("SELECT email FROM Admin WHERE email='$email' ");

$queryC = mysql_query("SELECT email FROM candidate WHERE email='$email' ");

$queryV = mysql_query("SELECT email FROM Voter WHERE email='$email' ");

 if (mysql_num_rows($query) != 0)
{

header("location:new%20password.php") ;
 }
else if (mysql_num_rows($queryC) != 0){

header("location:new%20password.php") ;


}


else if (mysql_num_rows($queryV) != 0){

header("location:new%20password.php") ;


}
  else 
  {
header("location:email doesn't exist.php ");

}

}

?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
   <title>Reset Your Password</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body background="b.png" >
<br/>
<br/>
<br/>
<br/>
<br/>




  <div class="form">

    <h1>Reset Your Password</h1>

    <form action="forget page.php" method="post">
     <div class="field-wrap">
      <label>
       <span class="req"></span>
      </label>
      <input type="email" placeholder=" Email Address" required autocomplete="off" name="email"/>
    </div>
    <button name="reset" class="button button-block"/>Reset</button>
    </form>
  </div>
          

</body>

</html>
  

</body>

</html>
