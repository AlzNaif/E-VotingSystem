<?php


$conn = mysql_connect("localhost", "root", "");
mysql_select_db("E_voting", $conn);



# total votinf
$total = mysql_query("SELECT c_no FROM result",$conn);
$totavoting = mysql_num_rows($total);




#candidate name
$results1 = mysql_query("SELECT * FROM candidate WHERE c_no = 1");
$row1 = mysql_fetch_assoc($results1);

$results2 = mysql_query("SELECT * FROM candidate WHERE c_no = 2");
$row2 = mysql_fetch_assoc($results2);


$results3 = mysql_query("SELECT * FROM candidate WHERE c_no = 3");
$row3 = mysql_fetch_assoc($results3);

$results4 = mysql_query("SELECT * FROM candidate WHERE c_no = 4");
$row4 = mysql_fetch_assoc($results4);

$results5 = mysql_query("SELECT * FROM candidate WHERE c_no = 5");
$row5 = mysql_fetch_assoc($results5);

$results6 = mysql_query("SELECT * FROM candidate WHERE c_no = 6");
$row6 = mysql_fetch_assoc($results6);


$results7 = mysql_query("SELECT * FROM candidate WHERE c_no = 7");
$row7 = mysql_fetch_assoc($results7);

$results8 = mysql_query("SELECT * FROM candidate WHERE c_no = 8");
$row8 = mysql_fetch_assoc($results8);

$results9 = mysql_query("SELECT * FROM candidate WHERE c_no = 9");
$row9 = mysql_fetch_assoc($results9);

$results10 = mysql_query("SELECT * FROM candidate WHERE c_no = 10");
$row10 = mysql_fetch_assoc($results10);


# candidate result
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
<br>
<br>
  <h1>THE RESULTS</h1>
  <center>
 <body width=50% style="background-color: #13232f">
    <table style="background-color: #13232f" width=50%>
     <div>
        <tr>
          <th># No. </th>
          <th>Candidate name</th>
          <th>Total Votes </th>
       
     </tr>
      </thead>
    
  </div>
 
      <tbody style="background-color: #1ab188" >
        <tr>
          <td>1</td>
          <td><?php echo ($row1['name']);?> </td>

          <td><?php echo $c1; ?> </td>
        </tr>
        <tr>
          <tr>
          <td>2</td>
          <td><?php echo ($row2['name']);?> </td>

          <td><?php echo $c2; ?> </td>
        </tr>

        <tr>
          <td>3</td>
          <td><?php echo ($row3['name']);?> </td>

          <td><?php echo $c3; ?> </td>

        </tr>
 <tr>
          <td>4</td>
          <td><?php echo ($row4['name']);?> </td>

          <td><?php echo $c4 ;?> </td>

        </tr>
 <tr>
          <td>5</td>
          <td><?php echo ($row5['name']);?> </td>

          <td><?php echo $c5; ?> </td>

        </tr>
      
       <tr>
          <td>6</td>
          <td><?php echo ($row6['name']);?> </td>

          <td><?php echo $c6; ?> </td>

        </tr>
         <tr>
          <td>7</td>
          <td><?php echo ($row7['name']);?> </td>

          <td><?php echo $c7; ?> </td>

        </tr>
         <tr>
          <td>8</td>
          <td><?php echo ($row8['name']);?> </td>

          <td><?php echo $c8; ?> </td>

        </tr>
         <tr>
          <td>9</td>
<td><?php echo ($row9['name']);?> </td>

          <td><?php echo $c9; ?> </td>

        </tr>
         <tr>
          <td>10</td>
          <td><?php echo ($row10['name']);?> </td>

          <td><?php echo $c10; ?> </td>

        </tr>
      </tbody>
    </table>
  <br>
 <h3>TOTAL VOTING NUMBERS:<?php echo $totavoting; ?></h3> 
  </div>

  

</body>

</html>
