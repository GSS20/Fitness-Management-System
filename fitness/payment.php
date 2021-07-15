<?php
   include_once("include/dbconnect.php");
  if ($_SERVER['REQUEST_METHOD'] == 'POST')
   {
      $amount=$_POST['amount'];
      $cardname=$_POST['cardname'];
	  $cardnumber=$_POST['cardnumber'];
	  $expmonth=$_POST['expmonth'];
      $expyear=$_POST['expyear'];
      $cvv=$_POST['cvv'];
      
      $sql = "INSERT INTO payment( amount,cardname,cardnumber,expmonth,expyear,cvv) VALUES ('$amount','$cardname','$cardnumber','$expmonth','$expyear','$cvv')";
    
          if (mysqli_query($conn,$sql)) 
            {
              echo "<script>alert(\"You have paied successfully .\")</script>";  
            echo "<span>thank you for joining us, <a href='home1.html'>click here to visit home page</a></span>";
            }
         else
            {
            echo "<span  class='success_msg'>Error: " . $sql . "<br>" . $conn->error . "</span>";
            }
    }
?>