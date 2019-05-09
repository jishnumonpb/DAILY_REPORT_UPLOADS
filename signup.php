 <?php
	require "connect.php";
	if(isset($_POST["submit"]))
	{
		$fname=$_POST["fname"];
		$mname=$_POST["mname"];
		$lname=$_POST["lname"];
		$address=$_POST["address"];
		$dob=$_POST["dob"];
		$phone=$_POST["phone"];
		$email=$_POST["email"];
	//	$uname=$_POST["uname"];
		$password=$_POST["password"];
		$cpassword=$_POST["cpassword"];
		if($password==$cpassword)
		{
		echo	$qury="INSERT INTO `ureg`(`fname`,`mname`,`lname`,`address`,`dob`,`phone`,`email`,`password`) VALUES ('$fname','$mname','$lname','$address','$dob','$phone','$email','".md5($password)."')";
			$obj=mysqli_query($conn,$qury);

$id=mysqli_insert_id($conn);
 echo $qury1 = "INSERT INTO login_autoshop1 (lid, email, password,rol,status)
  	       	VALUES ($id,'$email', '".md5($password)."','user',0)";

 echo 	  $obj1 = mysqli_query($conn, $qury1);
		}
		else
		{
			echo "<script>alert('password mismatch...');</script>";
		}
      if($obj && $obj1 )
    {
      header('location:signup.php?error=registration sucsess');
    }
    else
	{
      mysqli_error($conn);
    }



	}
?>
<html>
<head>
<link href="css\style1.css" rel="stylesheet">
</head>
<body background="images/123.PNG">
<div id="main">
<center>
<div id="top"><b><marquee>AUTOSHOP</marquee></b></div>
<div id="menu"><center><a href="index.html">HOME &nbsp&nbsp </a> </div>
<br>
<br>
<br>
<form action="#" name="form1" method="post">
<div id="signup">
<h2 class="smp">REGISTRATION<h2>
<center>
<font size="4px">
<label>First Name:</label>
<input id="fname" name="fname"  placeholder="First Name" type="text" required><br>
<label>Middle Name:</label>
<input id="mname" name="mname"  placeholder="Middle Name" type="text" required><br>
<label>Last Name:</label>
<input id="lname" name="lname"  placeholder="Last Name" type="text" required><br>
<label>Address:</label><br>
<textarea placeholder="Address" name="address" required></textarea><br>
<label>Date of Birth:</label><br>
<input id="dob" name="dob"  placeholder="Date of Birth" type="date" required><br>
<label>Contct Number:</label>
<input id="phone" name="phone"  placeholder="Phone Number" type="phone" required><br>
<script src="mobval.js"></script><br>
<label>E-mail:</label>
<input id="email" name="email"  placeholder="Email-id is your user Name" type="email" required><br>
<script src="email.js"></script><br>

<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
<script src="password.js"></script><br>
<label>Confirm Password :</label>
<input id="cpassword" name="cpassword" placeholder="**********" type="password"><br><br>
<input  name="submit" type="submit" value=" REGISTER ">
<br>
</font>
<div style="color:red; font-size=18px">
<?php
if(isset($_GET['error'])){
	echo($_GET['error']);
}
?>
</div>
</center>
</div>
</form>
<body>
</html>
