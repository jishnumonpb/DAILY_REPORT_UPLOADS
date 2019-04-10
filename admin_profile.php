 <?php
	require "connect.php";
	if(isset($_POST["submit"]))
	{
		$name=$_POST["name"];
		$address=$_POST["address"];
		
		$uname=$_POST["uname"];
		$phone=$_POST["phone"];
		$email=$_POST["email"];
		$password=$_POST["password"];
		$password1=$_POST["password1"];
		$target_dir = "uploads/";
						$target_file = $target_dir . basename($_FILES["image"]["name"]);
						move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
						
						$image=$target_file;
						echo $suc =mysqli_query($conn, "insert into admin_profile(name,address,image,uname,phone,email,password,password1) values('$name','$address','$target_file','$uname','$phone','$email','$password','$password1')") or die (mysqli_error());
	}
?>		
<html>
<head>
<link href="css\style1.css" rel="stylesheet">
</head>
<body background="images/123.PNG">
<div id="main">
<center>
<div id="top"><b>ADMIN PROFILE</b></div>
<div id="menu"><center><a href="adminhome1.php">HOME &nbsp&nbsp </a>
</a><a href="addvehicles.php">ADD CARS &nbsp&nbsp</a>
</a><a href="confirmation_mail.php">CONFIRM &nbsp&nbsp</a>
</a><a href="login_autosh.php">CUSTOMERS &nbsp&nbsp</a>
</a><a href="login_autosh.php">SALES &nbsp&nbsp</a>
</a><a href="login_autosh.php">PROFILE &nbsp&nbsp</a>
</a><a href="login_autosh.php">LOGOUT &nbsp&nbsp</a>
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