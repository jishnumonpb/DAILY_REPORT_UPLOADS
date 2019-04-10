 <?php
	require "connect.php";
	if(isset($_POST["submit"]))
	{
		$vehicle=$_POST["vehicle"];
		$basic_price=$_POST["basic_price"];
		
		$description=$_POST["description"];
		$model=$_POST["model"];
		$color=$_POST["color"];
		$fuel=$_POST["fuel"];
		$registred=$_POST["registred"];
		$year=$_POST["year"];
		$milage=$_POST["milage"];
		$transmission=$_POST["transmission"];
		$target_dir = "uploads/";
						$target_file = $target_dir . basename($_FILES["image"]["name"]);
						move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
						
						$image=$target_file;
						echo $suc =mysqli_query($conn, "insert into addvehicle(vehicle,basic_price,image,description,model,color,fuel,registred,year,milage,transmission) values('$vehicle','$basic_price','$target_file','$description','$model','$color','$fuel','$registred','$year','$milage','$transmission')") or die (mysqli_error());
	}
?>		
<html>
<head>
<link href="css\style1.css" rel="stylesheet">
</head>
<body background="images/123.PNG">
<div id="main">
<center>
<div id="top"><b>ADD VEHICLES</b></div>
<div id="menu"><center><a href="adminhome1.php">HOME &nbsp&nbsp </a>
</a><a href="addvehicles.php" >ADD CARS &nbsp&nbsp</a>
</a><a href="confirmation_mail.php">CONFIRM &nbsp&nbsp</a>
</a><a href="login_autosh.php">CUSTOMERS &nbsp&nbsp</a>
</a><a href="login_autosh.php">SALES &nbsp&nbsp</a>
</a><a href="login_autosh.php">PROFILE &nbsp&nbsp</a>
</a><a href="logout.php">LOGOUT &nbsp&nbsp</a>
<br>
<br>
<br>

<form action="#" method="post" enctype="multipart/form-data">
<div id="signup">
<h2 class="smp">UPLOAD DETAILS<h2>
<center>
<font size="4px">
<label>Vehicles:</label>
<input id="vehicle" name="vehicle"  placeholder="Vehicles" type="text" required pattern="^[a-zA-Z0-9]+$"><br>
<label>Basic Price:</label>
<input id="basic_price" name="basic_price" placeholder="Basic Price" type="number" pattern="\d+(\.\d{2})?" required><br>
<label>Upload Image:<br></label>
<input type="file" id ="image" name="image" accept="image/*" placeholder="Upload Vehicles Image"><br><bR>
<label>Description:</label><br>
<textarea placeholder="description" name="description" required></textarea><br>
<h2 class="smp">FEATURES<h2>
<label>Models:</label>
<input id="model" name="model"  placeholder="Model" type="text" required><br>
<label>Color:</label>
<input id="color" name="color" pattern="^[a-zA-Z0-9]+$"  placeholder="Color" type="text" required><br>
<label>Fuel Type:</label>
<select id="fuel" name="fuel"  pattern="^[a-zA-Z0-9]+$" placeholder="Fuel" type="text" required>
<option value="">Select</option>
<option value="Petrol">Petrol</option>
<option value="Diesel">Diesel</option>
</select><br>
<label>Registerd:</label><br>

Yes<input id="registred" name="registred"  placeholder="Registred" type="radio" value="yes" required><br>
No<input id="" name="registred"  placeholder="Registred" type="radio" value="no" required><br>

<label>Year:</label>
<input id="year" name="year" pattern="[0-9]{4}" placeholder="Year" type="text" required><br>
<label>Milage:</label>
<input id="milage" name="milage"  placeholder="Milage" type="text" required><br>

<label>Transmission:</label>
<select id="transmission" name="transmission"  pattern="^[a-zA-Z0-9]+$" placeholder="transmission" type="text" required>
<option value="">Select</option>
<option value="Automated">Automated</option>
<option value="Manuel">Manuel</option>
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