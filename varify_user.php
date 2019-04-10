 <?php
	require "connect.php";
	if(isset($_POST["Save"]))
	{

		$add_date=$_POST["add_date"];
		$bp=$_POST["bp"];
		$l_date=$_POST["l_date"];
	    $brate=$_POST["brate"];
		echo $suc =mysqli_query($conn, "insert into tbl_addauction(add_date,bp,l_date,brate) values('$add_date','$bp','$l_date','$brate')") or die (mysqli_error());
			//$qury="INSERT INTO `tbl_addauction`(`add_date`,`bp`,`l_date`,`brate`) VALUES ('$add_date','$bp','$l_date','$brate')";
			//$obj=mysqli_query($conn,$qury);



		

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
<div id="menu"><center><a href="adminhome1.php">HOME &nbsp&nbsp </a> </div>
<br>
<br>
<br>
<form action="#" name="form1" method="post">
<div id="signup">
<h2 class="smp">VARIFY USER<h2>
<center>
<font size="4px">

<label>Varification Code:</label>
<input id="vc" name="vc" placeholder="Varification Code" type="text"><br><br>
<input  name="varify" type="submit" value="VARIFY">
<br><br>
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
