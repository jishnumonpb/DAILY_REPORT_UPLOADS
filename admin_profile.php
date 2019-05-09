<?php
session_start();
include 'connect.php';
if(!isset($_SESSION['lid'])){
	header("location: http://localhost:8080/autoshoppp/");	
}
?>
<?php
require "connect.php";


$edit=$_GET["id"];
$result=mysqli_query($conn,"select * FROM ureg WHERE uid='$edit'");
$row=mysqli_fetch_array($result);

// $did=$row['d_id'];
// 	$dist="select * from tbl_district where d_id='$did'";
//     $record= mysqli_query($con,$dist);
//     $dis=mysqli_fetch_assoc($record);

//     $stat="select * from tbl_state where s_id='$dis[s_id]'";
//     $state= mysqli_query($con,$stat);
//     $st=mysqli_fetch_assoc($state);

//     $coun="select * from tbl_country where c_id='$st[c_id]'";
//     $county= mysqli_query($con,$coun);
// 		$co=mysqli_fetch_assoc($county);
		


//header("location:view.php");
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
<!-- </a><a href="addvehicles.php">ADD CARS &nbsp&nbsp</a>
</a><a href="confirmation_mail.php">CONFIRM &nbsp&nbsp</a>
</a><a href="login_autosh.php">CUSTOMERS &nbsp&nbsp</a>
</a><a href="login_autosh.php">SALES &nbsp&nbsp</a>
</a><a href="login_autosh.php">PROFILE &nbsp&nbsp</a>
</a><a href="login_autosh.php">LOGOUT &nbsp&nbsp</a> -->
<br>
<br>
<br>

<form action="#" method="post" enctype="multipart/form-data">
<div id="signup">
<h2 class="smp">UPDATE YOUR PROFILE<h2>
<center>
<font size="4px">
<label>Name:</label>
<input id="name" name="fname" value="<?php echo $fname; ?>" placeholder="Name" type="text" required pattern="^[a-zA-Z0-9]+$"><br>
<label>Address:</label><br>
<textarea placeholder="address" name="address" value="<?php echo $address; ?>" required></textarea><br>
<!-- <label>Upload Image:<br></label>
<input type="file" id ="image" name="image" accept="image/*" placeholder="Upload Vehicles Image"><br><bR> -->
<!-- <label>User Name:</label>
<input id="uname" name="uname"  placeholder="User Name" type="text" required pattern="^[a-zA-Z0-9]+$"><br> -->
<label>Contct Number:</label>
<input id="phone" name="phone" value="<?php echo $phone; ?>" placeholder="Phone Number" type="phone" required><br>
<script src="mobval.js"></script><br>
<label>E-Mail:</label>
<input id="email" name="email" value="<?php echo $email; ?>" placeholder="E-Mail Address" type="email" required><br>
<script src="email.js"></script><br>

<h2 class="smp">CHANGE PASSWORD<h2>

<label> Current Password :</label>
<input id="password" name="password" value="<?php echo $password; ?>" placeholder="**********" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
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