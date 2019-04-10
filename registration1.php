 <?php
	require "connect.php";
	if(isset($_POST["submit"]))
	{
		$fname=$_POST["fname"];
		$mname=$_POST["mname"];
		$lname=$_POST["lname"];
		$address=$_POST["address"];
		$dob=$_POST["date"];
		$phone=$_POST["phone"];
		$email=$_POST["email"];
		
		if($password==$cpassword)
		{
		echo	$qury="INSERT INTO `registration`(`fname`,`mname`,`lname`,`address`,`dob`,`phone`,`email`) VALUES ('$fname','$mname','$lname','$address','$dob','$phone','$email')";
			$obj=mysqli_query($conn,$qury);
		
$id=mysqli_insert_id($conn);
 echo $qury1 = "INSERT INTO login_autoshop (lid, uname, password,rol,status) 
  	       	VALUES ($id, '$uname', '".md5($password)."','user',0)";
		
 echo 	  $obj1 = mysqli_query($conn, $qury1);
		}
		else
		{
			echo "<script>alert('password mismatch...');</script>";
		}
      if($obj && $obj1 )
    {
      header('location:userhome1.php');
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
<div id="menu"><center><a href="userhome1.php">HOME &nbsp&nbsp </a> 
<br>
<br>
<br>
<form action="#" name="form1" method="post">
<div id="signup">
<h2 class="smp">REGISTRATION<h2>
<center>
<font size="4px">
<label>First Name:</label>
<input id="fname" name="fname" pattern="([A-z])" placeholder="First Name" type="text" required><br>
<label>Middle Name:</label>
<input id="mname" name="mname" pattern="([A-z])" placeholder="Middle Name" type="text" required><br>
<label>Last Name:</label>
<input id="lname" name="lname" pattern="([A-z])" placeholder="Last Name" type="text" required><br>
<label>Address:</label><br>
<textarea placeholder="Address" name="address" required></textarea><br>
<label>Date of Birth:</label><br>
<input id="dob" name="date"  placeholder="Date of Birth" type="date" required><br>
<label>Contct Number:</label>
<input id="phone" name="phone" pattern="[0-9]{10}" placeholder="Phone Number" type="phone" required><br>
<script src="mobval.js"></script><br>
<label>E-mail:</label>
<input id="email" name="email" pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" placeholder="Email id" type="email" required><br>
<script src="email.js"></script><br>

<input  name="submit" type="submit" value=" REGISTER ">
<br>
</font>

</center>
</div>
</form>
<body>
</html>