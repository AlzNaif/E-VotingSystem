<?php 
$hostname='localhost';
$user = 'root';
$password = '';
$mysql_database = 'E_voting';
$con = mysql_connect($hostname, $user, $password,$mysql_database);
mysql_select_db("E_voting", $con);
session_start();

if (isset($_SESSION['login_user'])){

}else{

header("location:/e-vote/LOGIN-SINGUP/login.php");
exit();
}
$login_session=$_SESSION['login_user'];


$query = mysql_query("SELECT * FROM Voter WHERE v_id='$login_session' and doneVoting = '1' ");
$result = mysql_num_rows($query);
 if ($result )
{
  echo "<script language='javascript' type='text/javascript'> location.href='already voted.php' </script>"; 


}


else {

  echo "<script language='javascript' type='text/javascript'> location.href='/e-vote/voting page/voting page.php' </script>"; 

}


?>

