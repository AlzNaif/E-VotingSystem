<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "E_voting";
$conn = new mysqli($servername, $username, $password, $dbname);

$success='';



session_start();
$login_session=$_SESSION['login_user'];

if (isset($_SESSION['login_user'])){

}else{
header("location:/e-vote/LOGIN-SINGUP/login.php");
exit();
}

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass1=$_POST['pass1'];
    $pass2=$_POST['pass2'];
    $q=$_POST['q'];
    $phone=$_POST['phone'];
    $birth=$_POST['birth'];
    $bio=$_POST['bio'];





    if ($pass1 == $pass2)
    {
    $sql="UPDATE candidate SET  name ='$name', email= '$email', password='$pass2',qualifications= '$q',phone=$phone, birth='$birth'
      ,bio='$bio'  WHERE c_id = '$login_session' ";

}
        if (mysqli_query($conn, $sql)) 
     {
            $success="Your information has been updated";
      } 
      else 
      {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

 
    }
      mysqli_close($conn); 


  
  ?>

  <!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Edit profile</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>


<body background ="b.png">

  <div class="form">

<div class="container" style="width:100%">

  <div class="profile">
  <h1><font color="#ffffff">Edit Profile</h1>

    <form name="candidate" action="candidate page.php" method="post">
   <fieldset>
    
    <div class="content">
  <div class="pic">
      <div class="img">
      
<center>  <img src="gggggg.png"/></div> </center>
        </div>
      

</div>
     
        <label for="avatar"><font color="#ffffff"></label>
          <center>
          <div class="grid-65">
            <span class="photo" title="Upload your Avatar!"></span>
            
            <input type="file"  class="btn" />
                  <button type="submit" name="upload">Upload</button>

         
              </div>
      </center>
             </fieldset>
          <br>
     <br>
     <center>
                    <span><span style="color:blue;font-weight:bold"><?php echo $success;?></span> </span>
</center>
          <br>
          <div class="top">
            <div class="field-wrap">
              <label>
                <span class="req"></span>
              </label>
              <input type="text" placeholder="Full Name" name="name"  autocomplete="off" maxlength="40"/>
            </div>
       
            

         <div class="field-wrap">
            <label>
              <span class="required"></span>
            </label>
            <input type="email" placeholder="email" name="email"  autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
      <label>
              <span class="req"></span>
            </label>
          <input type="password" placeholder="Password" name="pass1"  required>
     </div>
     <div class="field-wrap">
      <label>
              <span class="req"></span>
            </label>
        <input type="password" placeholder="Confirm Password" name="pass2" required >
          </div>
          
           
           <div class="field-wrap">
            <label>
              <span class="req"></span>
            </label>
            <input type="text" placeholder="Qualifications" name="q"  autocomplete="off" maxlength="50"/>
          </div>
          
            
            <div class="field-wrap">
            <label>
             <span class="required"></span>
            </label>
             <input type="number" placeholder=" phone number"  name="phone" autocomplete="off" maxlength="10"/>
            
           
        
          </div>
          
      
     
      
          <div class="field-wrap">
            <label>
              <span class="req"></span>
            </label>
             <input type="date" name="birth"  autocomplete="off"/ max="2000-12-31" min="1900-01-01"><br><br>
          
          </div>



    <div >
            <label>
              <span class="req"></span>
            </label>
           <textarea rows="4" cols="50" name="bio" placeholder="Write your bio..." ></textarea>  <br><br>
          
          </div>






         
     
            
          <button type="submit" name="submit" class="button button-block"/>Save</button>
          
      <p class=" View results ">
      <a href="/e-vote/RESULTS/result.php"><h1>View results</h1></a>
      </p>
      
      <p class="Logout">
      <a href="Logout.php">Logout</a>
      </p>
          </form>

        </div>
        
  

  

</body>

</html>
