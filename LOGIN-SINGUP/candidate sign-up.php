<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "E_voting";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['sign-up']))
{
    $name=$_POST['name'];
    $id=$_POST['number'];
    $email=$_POST['email'];
    $pass1=$_POST['pass1'];
    $pass2=$_POST['pass2'];
    $address=$_POST['address'];
    $q=$_POST['q'];
    $gender=$_POST['gender'];
    $phone=$_POST['phone'];
    $birth=$_POST['birth'];
    $approval = '0';
    $img='0';
    $bio='0';
    if ($pass1 == $pass2)
    {
      $sql= "INSERT INTO candidate (name, c_id, email, password,   address ,qualifications, gender, phone, birth, approval, img, bio) 
      VALUES ('$name','$id','$email' ,'$pass2',  '$address' ,'$q', '$gender' , '$phone', '$birth' ,'$approval','$img','$bio')";
      
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
  <img width="100%"  height="200"  src="vvv1.png" >
  </div>
		  <p class=" voter ">
		  <a href="voter sign-up.php"><h1>are you voter ?</h1></a>
		  </p>
<div class="form" >
     
	<font color ="#ffffff"> <h1> Candidate  </h1> 
      
      <div class="tab-content">
       
<center>		     
        
       <div id="signup">   
          <h2> Sign Up</h2>
        </center>
		  
		  
          </center>
          <form action="candidate sign-up.php" method="post">
          
          
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
            <input type="text" placeholder="Qualifications" name="q" required autocomplete="off" maxlength="50"/>
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
             <input type="number" placeholder=" phone number"  name="phone" required autocomplete="off" maxlength="10"/>
            
           
          </div>
          
		  
		 
		  
          <div class="field-wrap">
            <label>
              <span class="req"></span>
            </label>
             <input type="date"  placeholder="birth" name="birth" required autocomplete="off"/ max="2000-12-31" min="1900-01-01"><br><br>
          
          </div>
		
          
     
        
          <button type="submit" name="sign-up" class="button button-block"/>submit</button>
          
          </form>

        </div>
        
        
        
      </div>
      
</div> 

  





</body>

</html>
  