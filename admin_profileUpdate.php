<?php
require "connect.php";
if(isset($_POST["submit"]))
{
    $fname=$_POST["fname"];
    //$phone=$_POST["phone"];
	  $address=$_POST["address"];
    $dob=$_POST["dob"];
    $phone=$_POST["phone"];
		$email=$_POST["email"];
		$password=$_POST["password"];
   // $email=$_POST["email"];

    $id=$_POST["abc"];
    

     
      mysqli_query($conn,"UPDATE `ureg` SET `fname`='$fname',`address`='$address',`dob`='$dob',`phone`='$phone',`email`='$email',`password`='$password' WHERE uid='$id'");
      
//header("location:profile.php");
}

?>
