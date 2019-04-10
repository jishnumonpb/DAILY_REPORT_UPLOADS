<?php
	session_start();
	if(isset($_SESSION['username'])){
		if($_SESSION['type']==1){
		}
		else{
			echo "<script type=\"text/javascript\"> window.location.assign(\"search.php\")</script>";
		}
	}
	else{
		echo "<script type=\"text/javascript\"> window.location.assign(\"login.php\")</script>";
	}
?>
