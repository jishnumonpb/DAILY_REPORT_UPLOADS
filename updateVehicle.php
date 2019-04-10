                           
						   
						   
						   
						   
						             <?php
										require "connect.php";
										
										// print_r($_POST);
										if(isset($_POST['submit']))
										{
										$vid=$_POST['vid'];
										$bp=$_POST['bp'];
										$desc=$_POST['desc'];
										$model=$_POST['model'];
										$color=$_POST['color'];
										$fuel=$_POST['fuel'];
										$reg=$_POST['reg'];
										$year=$_POST['year'];
										$milage=$_POST['milage'];
										$trans=$_POST['trans'];
										echo $qury="update addvehicle set basic_price='$bp',description='$desc',model='$model',color='$color',fuel='$fuel',registred='$reg',year='$year',milage='$milage',transmission='$trans' where vid='$vid'";
										// die();
			                            $obj=mysqli_query($conn,$qury);
										header("location: editVehicle.php");
										}
										header("location: table.php");
										?>