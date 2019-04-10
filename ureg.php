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
		
						echo $suc =mysqli_query($conn, "insert into registration(fname,mname,lname,address,date,phone,email) values('$fname','$mname','$lname','$address','$date','$phone','$email')") or die (mysqli_error());
	}
?>		
<html>
<head>
<link href="css\style1.css" rel="stylesheet">
</head>
<body background="images/123.PNG">
<div id="main">
<center>
<div id="top"><b>USER REGISTERATION</b></div>
<div id="menu"><center><a href="home.php">HOME &nbsp&nbsp </a>
</a><a href="login_autosh.php">LOGOUT &nbsp&nbsp</a>
<br>
<br>
<br>

<form action="#" name="form1" method="post">
<div id="signup">
<h2 class="smp">REGISTERATION<h2>
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
<input id="dob" name="date"  placeholder="Date of Birth" type="date" required><br>
<label>Contct Number:</label>
<input id="phone" name="phone"  placeholder="Phone Number" type="phone" required><br>
<script src="mobval.js"></script><br>
<label>E-mail:</label>
<input id="email" name="email"  placeholder="Email id" type="email" required><br>
<script src="email.js"></script><br>
<br><br>
<input  name="submit" type="submit" value=" SUBMIT ">
<br>
</font>
</center>
</div>
</form>
<body>
</html>