<?php
 include "connect.php";
 $id = $_POST['v_id'];


 //query
$sql="select max(amount) from auction  where v_id='$id'";
$res= mysqli_query($conn,$sql);
   
 //exectue
 


 //fetch amount
$amount = mysqli_fetch_array($res);
echo $amount[0];




?>