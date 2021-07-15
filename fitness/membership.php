<?php
   include_once("include/dbconnect.php");
  if ($_SERVER['REQUEST_METHOD'] == 'POST')
   {
      $fullname=$_POST['fullname'];
      $dob=$_POST['dob'];
	  $age=$_POST['age'];
	  $gender=$_POST['gender'];
	  $weight=$_POST['weight'];
	  $height=$_POST['height'];
	  $package=$_POST['package'];
	  $email=$_POST['email'];
	  $phoneno=$_POST['phoneno'];
      $address=$_POST['address'];
      $city=$_POST['city'];
	  $branch=$_POST['branch'];
      
      $sql = "INSERT INTO membership(fullname,dob,age,gender,weight,height,package,email,phoneno,address,city,branch ) VALUES ('$fullname','$dob','$age','$gender','$weight','$height','$package','$email','$phoneno','$address','$city','$branch')";
    
          if (mysqli_query($conn,$sql)) 
            {
              echo "<script>alert(\"processed to payment .\")</script>";  
            echo "<span><a href='payment.html'>please click here for payment.</a></span>";
            }
         else
            {
            echo "<span  class='success_msg'>Error: " . $sql . "<br>" . $conn->error . "</span>";
            }
    }
?>