
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
<h2 class="smp">ADD TO AUCTION<h2>
<center>
<font size="4px">
<label>Amount:</label>
<input id="amount" name="amount" placeholder="Amount" type="text"><br><br>

<br><input  name="Save" type="submit" value="SAVE"><br>
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
