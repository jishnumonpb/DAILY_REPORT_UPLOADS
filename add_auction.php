
<?php
 		
	

	require "connect.php";
	
	if(isset($_POST["Save"]))
	{
		echo "sdsdsdsasdfsd\nfsdfsdfdsf";
		$add_date=$_POST["add_date"];
		//$bp=$_POST["bp"];
		$l_date=$_POST["l_date"];
		$brate=$_POST["brate"];
		$idd=$_GET['id'];
		//echo $suc =mysqli_query($conn, "insert into addvehicle(add_date,bp,l_date,brate) values('$add_date','$bp','$l_date','$brate')") or die (mysqli_error());
		$suc =mysqli_query($conn, "update addvehicle set add_date='$add_date',l_date='$l_date',brate=$brate where vid=$idd");// or die (mysqli_error());

		//echo "update addvehicle set add_date='$add_date',bp=$bp,l_date='$l_date',brate=$brate where vid=$idd";
		
		//$qury="INSERT INTO `tbl_addauction`(`add_date`,`bp`,`l_date`,`brate`) VALUES ('$add_date','$bp','$l_date','$brate')";
			//$obj=mysqli_query($conn,$qury);
			echo "<script> alert('s')</script>";

		header('location:adminhome1.php');
 
		

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
<div id="menu"><center><a href="adminhome1.php">HOME &nbsp&nbsp </a><a href="adminview.php">OLDER AUCTION DETAILS &nbsp&nbsp </a> </div>

<br>
<br>
<br>
<form action="#" name="form1" method="post">
<div id="signup">
<h2 class="smp">ADD TO AUCTION<h2>
<center>
<font size="4px">

<label>Adding Date:</label><br>
<input id="add_date" name="add_date"  placeholder="Adding Date" type="date" required><br>
<label>Last Date:</label><br>
<input id="l_date" name="l_date"  placeholder="Last Date" type="date" required><br>
<label>Bid Rate:</label>
<!-- <input id="brate" name="brate" placeholder="Bid Rate" type="text"><br><br> -->
<input id="brate" name="brate" placeholder="Please Enter Starting Bid Rate" type="number" pattern="\d+(\.\d{2})?" required><br><br><br>
<input  name="Save" type="submit" value="SAVE">
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
