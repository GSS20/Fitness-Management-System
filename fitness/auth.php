<?php
include('include/dbconnect.php');

if (isset($_POST['username']))
{

$username=$_POST['username'];
$password=$_POST['password'];

$login_query=mysqli_query($conn,"select * from signup where username='".$username."' and password='".$password."'");
$count=mysqli_num_rows($login_query);
$row=mysqli_fetch_array($login_query);


//echo "<script>alert('  !'); </script>";	
if ($count > 0)
{
	
//echo "<script>alert('Successfully Login!'); </script>";	
/*mysql_query("INSERT INTO history (date,action,data)VALUES(NOW(),'Login','$user')")or die(mysql_error());*/

echo "<script>alert('Successfully Login!'); window.location='home1.html'</script>";
}

else
{
	echo "<script>alert('Invalid Username and Password! Try again.'); window.location='index.php'</script>";
}	

 } 
 ?>
