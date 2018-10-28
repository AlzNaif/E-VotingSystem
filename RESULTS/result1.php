<?php


$conn = mysql_connect("localhost", "root", "");
mysql_select_db("E_voting", $conn);




$total = mysql_query("SELECT c_no FROM result",$conn);
$totavoting = mysql_num_rows($total);




$r1 = mysql_query("SELECT * FROM result where c_no='1' ", $conn);
$c1 = mysql_num_rows($r1);


$r2 = mysql_query("SELECT * FROM result where c_no='2' ", $conn);
$c2 = mysql_num_rows($r2);


$r3 = mysql_query("SELECT * FROM result where c_no='3' ", $conn);
$c3 = mysql_num_rows($r3);


$r4 = mysql_query("SELECT * FROM result where c_no='4' ", $conn);
$c4 = mysql_num_rows($r4);


$r5 = mysql_query("SELECT * FROM result where c_no='5' ", $conn);
$c5 = mysql_num_rows($r5);


$r6 = mysql_query("SELECT * FROM result where c_no='6' ", $conn);
$c6 = mysql_num_rows($r6);


$r7 = mysql_query("SELECT * FROM result where c_no='7' ", $conn);
$c7 = mysql_num_rows($r7);


$r8 = mysql_query("SELECT * FROM result where c_no='8' ", $conn);
$c8 = mysql_num_rows($r8);


$r9 = mysql_query("SELECT * FROM result where c_no='9' ", $conn);
$c9 = mysql_num_rows($r9);


$r10 = mysql_query("SELECT * FROM result where c_no='10' ", $conn);
$c10= mysql_num_rows($r10);



$sql = mysql_query("SELECT * FROM result");

?>



<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>RESULTS</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body background ="b.png">

  <h1>THE RESULTS</h1>
  <center>

    <table style="background-color: #13232f" align="left" style="width:50%" >
        <tr>
          <th># No. </th>
          <th>Candidates Name </th>
     </tr>
    
          <?php


while($row = mysql_fetch_array($sql)){

  
echo "<tr>";
echo "<td>" . $row['c_no'] . "</td>";
echo "<td>" . $row['c_name'] . "</td>";
}

echo "
</table>";
?>


 <h3>TOTAL VOTING NUMBERS:</h3> 
  </div>

  

</body>

</html>
