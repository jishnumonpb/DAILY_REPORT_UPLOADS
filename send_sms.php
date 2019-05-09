<?php
	require "connect.php";
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
	}

	if(isset($_POST["save"]))
	{

		$sms=$_POST["sub"];
		// $bp=$_POST["bp"];
		// $l_date=$_POST["l_date"];
        // $brate=$_POST["brate"];
        
		echo $suc =mysqli_query($conn, "insert into tbl_send_sms(uid,message) values($id,'$sms')") or die (mysqli_error());
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
<form action="#" name="form1" method="post" onsubmit="Alert()">
<div id="signup">
<h2 class="smp">CONFIRMATION SMS<h2>
<center>
<font size="4px">



<label>Please Send SMS:</label><br>
<textarea placeholder="Send Confirmation SMS" name="sub" required></textarea><br><br>
<input  name="save" type="submit" value="SEND">
<br><br>
<script>
function Alert()
{
	alert("Message has been send");
}
</script>
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
