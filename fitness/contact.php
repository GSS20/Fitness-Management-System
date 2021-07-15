<?php
   include_once("include/dbconnect.php");
  if ($_SERVER['REQUEST_METHOD'] == 'POST')
   {
      $name=$_POST['name'];
	  $email=$_POST['email'];
      $subject=$_POST['subject'];
      $message=$_POST['message'];
      
      $sql = "INSERT INTO contact(name,email,subject,message) VALUES ('$name','$email','$subject','$message')";

          if (mysqli_query($conn,$sql)) 
            {
              echo "<script>alert(\"Message have sent successfully .\");window.location='contact.html'</script>";  
            }
            else
            {
            echo "<span  class='success_msg'>Error: " . $sql . "<br>" . $conn->error . "</span>";
            }
    }
?>