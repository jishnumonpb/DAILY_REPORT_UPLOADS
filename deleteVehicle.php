                           
						   
						   
						   
						   
						             <?php
										require "connect.php";
										
										$qury="delete from addvehicle where vid=".$_GET['id'];
			                            $obj=mysqli_query($conn,$qury);
										header("location: table.php");
										?>