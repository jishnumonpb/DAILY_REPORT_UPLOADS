<?php
session_start();
include 'connect.php';
if(!isset($_SESSION['lid'])){
	header("location: http://localhost:8080/autoshoppp/");	

}
$name=NULL;
$bp=NULL;
$dates=NULL;
?>
 <?php
 if(isset($_GET['id']))
 {
	echo $id=$_GET['id'];
	$sks="select max(amount) from auction  where v_id=$id";
	$lm= mysqli_query($conn,$sks);
	 while($k=mysqli_fetch_array($lm))
	 {
          $amt=$k[0];
	 }
	 $s="select * from addvehicle  where vid=$id";
	$f= mysqli_query($conn,$s);
	 while($k=mysqli_fetch_array($f))
	 {
		 $name=$k[1];
		 $bp=$k[2];
		 $brate=$k[15];
		 $dates=$k[14];
	 }
 }
 
	require "connect.php";     
	if(isset($_POST["Save"]))
	{
		$v_id=$_POST["vid"];
		 $amount=$_POST["amount"];   
		    
        $u_id=$_SESSION["lid"];
		//$time=$_POST["time"];
		$date="";
		if($_POST["amount"]<=$brate)
		{
			echo "<script>alert(\"Rate must be grater than base price\");</script>";

		}
		else{
			// echo "<script>alert(\"pihjkpjioikpoijk\");</script>";
		echo "insert into auction(v_id,u_id,amount,time) values($v_id,$u_id,$amount,CURRENT_TIMESTAMP())";
		//return;
		$suc=mysqli_query($conn, "insert into auction(v_id,u_id,amount,time) values($v_id,$u_id,$amount,CURRENT_TIMESTAMP())");// or die (mysqli_error());
			//$qury="INSERT INTO `tbl_addauction`(`add_date`,`bp`,`l_date`,`brate`) VALUES ('$add_date','$bp','$l_date','$brate')";
			//$obj=mysqli_query($conn,$qury);
			

			$tmp="location: auction_user.php?msg='success'&&id=".$_GET['id'];
			header($tmp);
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
<div id="menu"><center><a href="userhome1.php">HOME &nbsp&nbsp </a> </div>
<br>
<br>
<br>
<form action="#" name="form1" method="post">
<div id="signup">
<h2 class="smp">USER AUCTION<h2>
<center>
<font size="4px">
<form method="post" action="save_new_bid.php">
<input id="vid" name="vid"  placeholder="Vehicle id" type="hidden" value="<?php echo $_GET['id']; ?>"><br><br>
<label>Vehicle Name:</label>
<input id="vehicle" name="vehicle" value="<?php echo $name; ?>"  placeholder="Name" type="text" required pattern="^[a-zA-Z0-9]+$" disabled><br>
<label>Starting Bid Rate:</label>
<input id="brate" name="brate" value="<?php echo $brate; ?>" placeholder="Starting Bid Rate" type="text" disabled><br><br>
<label>Highest Bid Rate:</label>
<input id="brate1" name="brate1" value="<?php echo $amt; ?>"  placeholder=" Bid Rate" type="text" disabled><br><br>
<label>Last Date:</label><br>
<input id="l_date" name="l_date" value="<?php echo $dates; ?>"  placeholder="Last Date" type="date" required disabled><br><br>
<label>Please Enter Your Bid Amount:</label>
<!-- <input id="amount" name="amount"  placeholder="Amount" type="text" required><br><br><br> -->
<input id="amount" name="amount" placeholder="Please Enter Your Bid Amount" type="number" pattern="\d+(\.\d{2})?" required><br><br><br>

<!-- <?php
//if($_GET['msg']){
//	header ('location:userhome1.php');
//}
?> -->
<input  name="Save" type="submit" value="SUBMIT"><br><br><br>
</form>
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
<script src="vendor\jqueryui\external\jquery\jquery.js"></script>
<script>
	var vehicleId = '<?php echo $_GET['id']; ?>';
	setInterval(() => {
		$.post('live_auction.php', {'v_id':vehicleId}).then(function(data){
			$("#brate1").val(data);
		});
	}, 1000);
	
</script>
<body>
</html>
