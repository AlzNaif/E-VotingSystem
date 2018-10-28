<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "E_voting";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['save']))
{
    $name=$_POST['name'];
    $id=$_POST['number'];
    $pass1=$_POST['pass1'];
    $pass2=$_POST['pass2'];
    $address=$_POST['address'];
    $gender=$_POST['gender'];
    $phone=$_POST['phone'];
    $birth=$_POST['birth'];
    $email=$_POST['email'];
    $approval = '0';
    $doneVoting = '0';
    if ($pass1 == $pass2)
    {
      $sql= "INSERT INTO Voter(name, v_id, password, address,  gender, phone, birth, email, approval, doneVoting) 
      VALUES ('$name','$id','$pass2' ,'$address', '$gender', '$phone' , '$birth', '$email', '$approval', '$doneVoting')";
      
     if (mysqli_query($conn, $sql)) 
     {
 echo "<script language='javascript' type='text/javascript'> location.href='successfully done.php' </script>";  

      } 
      else 
      {
    echo 'You Have Entered Incorrect Information';
    exit();
      }

    mysqli_close($conn); 
 
    }
  } 

  ?>


<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Sign-Up</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body background ="b.jpg">

  <div class="form">
      
<div class="imgcontainer">
  <img width="100%"  height="200" 
    <img src="vvv1.png" >
  </div>
          <p class="are you candidate ?">
      <a href="candidate Sign-Up.php"><h1>are you candidate ?</h1></a>
      </p>
<div class="form" >
     
  <font color ="#ffffff"> <h1> Voter </h1> 
      
      <div class="tab-content">
        
<center>    
         
        
        <div id="login">   
          <h2> Sign Up</h2>
        </center>
          <form action="voter sign-up.php" method="post">

          
            <div class="top">
            <div class="field-wrap">
              <label>
                <span class="req"></span>
              </label>
              <input type="text" placeholder="Full Name" name="name" required autocomplete="off" maxlength="40"/>
            </div>
            
            <div class="field-wrap">
              <label>
                <span class="req"></span>
              </label>
             <input type="number" placeholder="ID number" name="number" required autocomplete="off"  maxlength="10"/>
            </div>
          <div class="field-wrap">
            <label>
              <span class="required"></span>
            </label>
            <input type="email" placeholder="email" name="email" required autocomplete="off"/>
          </div>
            
            <div class="field-wrap">
      <label>
              <span class="req"></span>
            </label>
          <input type="password" placeholder="Password" name="pass1" required>
     </div>
     <div class="field-wrap">
      <label>
              <span class="req"></span>
            </label>
        <input type="password" placeholder="Confirm Password" name="pass2" required>
          </div>
        
            
            <div class="field-wrap">
            <label>
              <span class="req"></span>
            </label>
            <input type="text" placeholder="address" name="address" required autocomplete="off" maxlength="50"/>
          </div>
          
          <div class="field-wrap">
            <label>
              <span class="req"></span>
            </label>
            
            
     <input list="gender"  placeholder="gender"  name="gender" required autocomplete="off"/>
         <datalist id="gender">
         <option value="male">male</option>
         <option value="female">female</option>
            
           
          </div>
               <div class="field-wrap">
            <label>
             <span class="required"></span>
            </label>
             <input type="number" placeholder="phone number"  name="phone" required autocomplete="off" maxlength="10"/>
            
          </div>
            
            <div class="field-wrap">
            <label>
              <span class="req"></span>
            </label>
             <input type="date"  placeholder="birth" name="birth" required autocomplete="off"/ max="2000-12-31" min="1900-01-01"><br><br>
          </div>   
          <button name="save" class="button button-block"/>submit</button>

          </form>

        </div>
        
      </div>
      
</div> 
</body>
</html>
