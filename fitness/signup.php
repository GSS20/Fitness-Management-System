<?php
   include_once("include/dbconnect.php");
  if ($_SERVER['REQUEST_METHOD'] == 'POST')
   {
      $username=$_POST['username'];
      $firstname=$_POST['firstname'];
	  $lastname=$_POST['lastname'];
	  $phonenumber=$_POST['phonenumber'];
      $email=$_POST['email'];
      $password=$_POST['password'];
      
      $sql = "INSERT INTO signup( username,firstname, lastname,phonenumber,email,password) VALUES ('$username','$firstname','$lastname','$phonenumber','$email', '$password')";
    
          if (mysqli_query($conn,$sql)) 
            {
              echo "<script>alert(\"You have registered successfully .\")</script>";  
            echo "<span>You have registered successfully, <a href='login.html'>please click here to login.</a></span>";
            }
         else
            {
            echo "<span  class='success_msg'>Error: " . $sql . "<br>" . $conn->error . "</span>";
            }
    }
?>