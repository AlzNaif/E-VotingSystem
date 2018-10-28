
<?php
$hostname='localhost';
$user = 'root';
$password = '';
$mysql_database = 'E_voting';
$con = mysql_connect($hostname, $user, $password,$mysql_database);
mysql_select_db("E_voting", $con);


$Cno=$_GET['cn'];


 ?>

<!DOCTYPE html>
<html lang="en" >
<body background ="b.png">

<head>
  <meta charset="UTF-8">
  <title>Candidate info</title>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  
  <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/2.0/css/font-awesome.css'>

      <link rel="stylesheet" href="css/s.css">

  
</head>




  

<center>
  <body style="width:50%">
		<div class="container" style="width:100%">
			<div class="profile" >
				<div class="pic">
					<div class="img">
					<img src="gggggg.png"/></div>
				
					
				</div>
				<br>
				<br>

				<table width=100% >
      <tbody style="background-color: #1ab188" >
<tr>

<th>candidate Name</th>
<th>Date of Birth</th>
<th>Qualifications And Obectives</th>
<th>Bio</th>
</tr>
  <?php

$result = mysql_query("SELECT * FROM candidate WHERE c_no = '$Cno'");
  

while($row = mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>"  . $row['name'] . "</td>";
echo "<td>"  . $row['birth'] . "</td>";
echo "<td>"  . $row['qualifications'] . "</td>";
echo "<td>"  . $row['bio'] . "</td>";
echo "</tr>";
}
echo "</table>";
?>
				
		</div>
      </center>

  
  </tbody>


</body>
</html>
