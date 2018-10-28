<?php 
  $error ='';
session_start();

if (isset($_SESSION['login_user'])){

}else{
header("location:/e-vote/LOGIN-SINGUP/login.php");
exit();
}
$hostname='localhost';
$user = 'root';
$password = '';
$mysql_database = 'E_voting';
$con = mysql_connect($hostname, $user, $password,$mysql_database);
mysql_select_db("E_voting", $con);


if(isset($_POST['vote'])){
$no =$_POST['number'];
$login_session=$_SESSION['login_user'];

$query = mysql_query("SELECT c_no FROM candidate WHERE c_no='$no'");
$n=mysql_query("SELECT name FROM candidate WHERE c_no='$no'");

while($row = mysql_fetch_assoc($n)){
      $name = $row['name'];
}

 if (mysql_num_rows($query) != 0)
{
mysql_query("INSERT INTO result(c_no, v_id, c_name ) VALUES ('$no','$login_session','$name')");
mysql_query("UPDATE  Voter SET doneVoting = '1' WHERE v_id= '$login_session'");
 echo "<script language='javascript' type='text/javascript'> location.href='thanks for voting.php' </script>"; 


  }

else {

    $error = " You Have Entered Incorrect Candidate No";

}

}



 ?>

 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Voting page</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body background ="b.png">

  <div class="form">
        
       <center>
<div class="imgcontainer">
  <img width="100%"  height="200" 
    <img src="vvv.png">
  </div>

  </center>
   <center>
    
     <center>
  <h3>Enter candidate Number  <style> {background-color: #13232f;}</h3>  
    </center> 
      

      <br> 
      </style>
  <br>
  <br>
               <span  class="error"><span style="color:red;font-weight:bold"><?php echo $error;?></span> </span>



</style>
<body>

  <center>
  
  <br>
            <form name="vote" action="voting page.php" method="post">

  <div class="field-wrap">
            <label>
              
             <span class="req"></span>

            </label>
    <input type="number" required name="number" autocomplete="on"   maxlength="3"/>
</div>

  </br>

          <button name="vote" class="button button-block"/>Vote</button>
  
</form>
      <p class=" View results ">
      <a href="/e-vote/RESULTS/result.php"><h1>View results</h1></a>
      </p>
    </center>
<p class=" View results ">
        <a><h4>NOTE: if you want to see more info click on No.</h4></a>

  </p>



     <body style="color:white;">

<table id='c' style= "background-color: #00000">
<tr>
<th>candidate Name</th>
<th>No</th>
</tr>
 
        <?php

$result = mysql_query("SELECT * FROM candidate");



while($row = mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] ."</td>";
echo "<td> <a href=\"candidate info.php?cn=" . $row['c_no'] . "\"> " . $row['c_no'] . " </a> </td>";
echo "</tr>";
}

?>
</table>
</center>
          </form>

        </div>
        
      </div>
      
</div> 

  





</body>

</html>