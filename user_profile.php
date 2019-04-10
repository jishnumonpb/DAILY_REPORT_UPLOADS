 <?php
	require "connect.php";
	if(isset($_POST["submit"]))
	{
		$fname=$_POST["name"];
		$address=$_POST["address"];
		$lname=$_POST["lname"];
		$address=$_POST["address"];
		$dob=$_POST["date"];
		$phone=$_POST["phone"];
		$email=$_POST["email"];
	//	$uname=$_POST["uname"];
		$password=$_POST["password"];
		$cpassword=$_POST["cpassword"];
		if($password==$cpassword)
		{
		echo	$qury="INSERT INTO `user_profile`(`fname`,`mname`,`lname`,`address`,`dob`,`phone`,`email`,`password`) VALUES ('$fname','$mname','$lname','$address','$dob','$phone','$email','$password')";
			$obj=mysqli_query($conn,$qury);

$id=mysqli_insert_id($conn);
 echo $qury1 = "INSERT INTO login_autoshop1 (lid, email, password,rol,status)
  	       	VALUES ($id, '$email', '".md5($password)."','user',0)";

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
<div id="top"><b>USER PROFILE</b></div>
<div id="menu"><center><a href="userhome1.php">HOME &nbsp&nbsp </a>

<br>
<br>
<br>

<form action="#" method="post" enctype="multipart/form-data">
<div id="signup">
<h2 class="smp">UPDATE YOUR PROFILE<h2>
<center>
<font size="4px">
<label>Name:</label>
<input id="name" name="name"  placeholder="Name" type="text" required pattern="^[a-zA-Z0-9]+$"><br>
<label>Address:</label><br>
<textarea placeholder="address" name="Address" required></textarea><br>
<label>Upload Image:<br></label>
<input type="file" id ="image" name="image" accept="image/*" placeholder="Upload Vehicles Image"><br><bR>
<label>User Name:</label>
<input id="uname" name="uname"  placeholder="User Name" type="text" required pattern="^[a-zA-Z0-9]+$"><br>
<label>Contct Number:</label>
<input id="phone" name="phone"  placeholder="Phone Number" type="phone" required><br>
<script src="mobval.js"></script><br>
<label>E-Mail:</label>
<input id="email" name="email"  placeholder="E-Mail Address" type="email" required><br>
<script src="email.js"></script><br>

<h2 class="smp">CHANGE PASSWORD<h2>

<label> Current Password :</label>
<input id="password" name="password" placeholder="**********" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
<script src="password.js"></script><br>
<label> New Password :</label>
<input id="password1" name="password1" placeholder="**********" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
<script src="password.js"></script><br>
<label>Confirm Password :</label>
<input id="cpassword" name="cpassword" placeholder="**********" type="password"><br><br>
</select><br>

<!--<label>Transmission:</label>
<input id="transmission" name="transmission"  placeholder="Transmission" type="text" required><br>
<br>!--><br>
<input  name="submit" type="submit" value=" SUBMIT ">
<br>
</font>
</center>
</div>
</form>
<body>
</html>