<?php
session_start();
if(!isset($_SESSION['lid'])){
	header("location: http://localhost:8080/autoshoppp/");	
}
$id=$_GET['id']
?>
<!DOCTYPE html>
<html lang="en">

<!--index.html 17:55:36 GMT -->
<head>
<meta http-equiv="x-ua-compatible" content="ie=edge">
<!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<meta charset="UTF-8">
<meta name="description" content="Practo - The Ultimate Multipurpose Admin Template">
<meta name="keywords" content="Practo, Admin, Template, Bootstrap">
<title>Bethlehem</title>
<link rel="shortcut icon" href="favicon.ico">
<link href="css/animate.min.css" rel="stylesheet">
<link href="css/material-design-iconic-font.min.css" rel="stylesheet">
<link href="css/fullcalendar.min.css" rel="stylesheet">
<link href="css/jquery.mCustomScrollbar.min.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href="../css/bootstrap.css" rel="stylesheet">
<link href="../css/custom.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/oh-autoval-style.css">


</head>

<body>
<?php
include('header.php');
// include 'adminnavs.php';
?>
<div style='margin-left:50px;' id="wrapper">



<section class="section clearfix">
    <div class="container">
        <div class="row">
            <div id="fullwidth" class="col-sm-12">

                <!-- START CONTENT -->
                <?php
										require "../connect.php";
										
										$qury="SELECT * FROM `tbl_book_package` WHERE  b_id=".$_GET['id'];
			                            $obj=mysqli_query($con,$qury);
										while($row = mysqli_fetch_array($obj)) { 
                                            ?> 
    
                <div class="row">
                    <div id="content" class="col-md-11 col-sm-11 col-xs-11">
                        <form action="payment_action.php" method="post" onsubmit="return" class="oh-autoval-form" id="infoform">
                            <div class="row">
                                <div class="col-sm-6">
                                <input type="hidden" name="b_id" value="<?php echo $_GET['id']; ?>">
                                     <h4 style='margin-left:300px;'><label  >Payment Details</label></h4>
                                        
                                   
                                    
                                    </div><!-- end row -->
                                    
                                    <div style='margin-left:200px;' class="row">
                                        <div class="col-sm-12">
                                        
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                <label  >Card Number</label>
                                                    <input style='height:40px;' type="text" name="cardno" class="form-control av-posnumber " av-message="Numbers only and 16 numbers " required=""  placeholder="XXXX XXXX XXXX XXXX"> 
                                                </div>
                                            </div><!-- end row -->
                                        </div><!-- end col -->
                                    </div><!-- end row -->
                                     <br>
                                    

                                    <div style='margin-left:200px;' class="row">
                                        <div class="col-sm-12">
                                      
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                <label  >Card Holder Name</label>
                                                    <input  style='height:40px;' name="cardname" type="text" class="form-control av-name" av-message=" alphabets only" required=""  placeholder="Card Holder Name"> 
                                                </div>
                                            </div><!-- end row -->
                                        </div><!-- end col -->
                                    </div><!-- end row -->
                                    <br>
                                    <div style='margin-left:200px;' class="row">
                                        <div class="col-sm-6">
                                            
                                                <!-- <h6>Expriy Date</h6> -->
                                            
                                            <div class="form-group">
                                            <label  >Expriy Month</label>
                                                <div class="input-group">
                                                
                                                    <!-- <input style='height:40px;' name="month" type="text" class="form-control"  placeholder="expriy date"> -->
                                                    <select style="height:40px;width:200px;" name="month" class="form-control " required="" placeholder="expriy date">
                  <option value="Jan">Jan</option>
                  <option value="Feb">Feb</option>
                  <option value="Mar">Mar</option>
                  <option value="Apr">Apr</option>
                  <option value="May">May</option>
                  <option value="Jun">Jun</option>
                  <option value="Jul">Jul</option>
                  <option value="Aug">Aug</option>
                  <option value="Sep">Sep</option>
                  <option value="Oct">Oct</option>
                  <option value="Nov">Nov</option>
                  <option value="Dec">Dec</option>

                </select>
                                                </div>
                                            </div>
                                        </div ><!-- end col -->

                                        <div  class="col-sm-6" style="margin-left:-224px;">
                                         
                                                
                                            
                                            <div class="form-group">
                                            <label  >Expriy Year</label>
                                                <div class="input-group">
                                                
                                                    <!-- <input style='height:40px;' name="year" type="text" class="form-control"  placeholder="Expriy Year"> -->
                                                    <select style="height:40px;width:200px;" name="year" class="form-control " placeholder="Expriy Year">
                                                <option value="2019">2019</option>
                                                 <option value="2020">2020</option>
                                                 <option value="2021">2021</option>
                                                 <option value="2022">2022</option>
                                                 <option value="2023">2023</option>
                                                 <option value="2024">2024</option>
                                                 <option value="2025">2025</option>
                                                 <option value="2026">2026</option>
                                                 <option value="2027">2027</option>
                                                 <option value="2028">2028</option>
                 
                </select>
                                                </div>
                                            </div> 
                                            </div>                                          
                                    </div><!-- end row -->
                                    <div style='margin-left:200px;' class="row">
                                        <div class="col-sm-6">
                                            
                                                <!-- <h6>Expriy Date</h6> -->
                                            
                                            <div class="form-group">
                                            <label  >cvv</label>
                                                <div class="input-group">
                                                
                                                    <input style='height:40px;' name="cvv" type="text" class="form-control "required="" av-message="Minimum 3 characters and alphabets only" required=""  placeholder="cvv">
                                                    
                                                </div>
                                            </div>
                                        </div ><!-- end col -->

                                        <div  class="col-sm-6" style="margin-left:-224px;">
                                         
                                                
                                            
                                            <div class="form-group">
                                            <label  >Amount</label>
                                                <div class="input-group">
                                                
                                                    <input style='height:40px;' type="text" name="amount" class="form-control" value="<?php echo $row['amount']; ?>" placeholder="Amount">
                                                    
                                                </div>
                                            </div> 
                                            </div>                                          
                                    </div><!-- end row -->
                                </div><!-- end col 6 -->
                                
                            </div><!-- end row -->
                            <br>
                            
                            <div class="row text-center" style="margin-left:130px;">
                                <div class="col-md-12">
                                <input type="submit" name="submit" value="make payment" class="btn btn-primary btn-normal btn-lg"required/>
 
                                    
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </form><!-- end form -->
                    </div><!-- end col -->
                </div><!-- end row -->
                <?php	
                                            }		
							        ?>
                <!-- END CONTENT -->

            </div><!-- end fullwidth -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end section -->




</div><!-- end wrapper -->





<!-- Javascript Libraries --> 
<script src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flot.js"></script> 
<script src="js/jquery.flot.resize.js"></script> 
<script src="js/jquery.flot.orderBars.js"></script> 
<script src="js/curvedLines.js"></script> 
<script src="js/jquery.flot.orderBars.js"></script> 
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script> 
<script src="js/jquery.sparkline.min.js"></script> 
<script src="js/jquery.easypiechart.min.js"></script> 
<script src="js/bootstrap-growl.min.js"></script> 
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script> 
<script src="js/moment.min.js"></script> 
<script src="js/fullcalendar.min.js"></script> 
<script src="js/flot-charts/curved-line-chart.js"></script> 
<script src="js/flot-charts/bar-chart.js"></script> 
<script src="js/charts.js"></script> 
<script src="js/functions.js"></script> 
<script src="js/demo.js"></script>
<script src="../js/jquery-ui.js"></script>

<script src="../js/jquery.min.js"></script>

<script src="../js/oh-autoval-script.js"></script>

    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/retina.js"></script>
    <script src="../js/sidebar.js"></script>
    <script src="../js/circle.js"></script>
    <script src="../js/progress.js"></script>
    <script src="../js/jquery.prettyPhoto.js"></script>
    <script src="../js/contact.js"></script>
    <script src="../js/parallax.js"></script>
    <script src="../js/owl.carousel.js"></script>
    <script src="../js/bootstrap-select.js"></script>
   

    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script src="../rs-plugin/js/jquery.themepunch.tools.min.js"></script>   
    <script src="../rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="../js/revslider.js"></script>
</body>

<!--index.html 17:56:39 GMT -->
</html>