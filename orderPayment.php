<?php
require('data/sessions.php');

if (!getSession('type') == 'player') {
    header('location:index.php');
}


isset($_POST['pay'])? setSession('order', $_POST): header('location:shopequipment.php');


include 'components/top.php';
include 'navs/navplayer.php';


?>

<div class="main-agile">
    <div class="w3l-banner-2">
        <?php
        if (getSession('r')) {
            echo '<h6>Welcome!</h6>
            <br><p>You are signed up!</p>';

            delSession('r');
        } else {
            echo '<h6>MAKE YOUR PAYMENT</h6>';
        }
        ?>
    </div>
</div>

<div class="contact">
    <div class="container">
        <div class="contact-grids">
            <div class="clearfix"> </div>
                <hr>
<?php $order = getSession('order');?>
                <h4>Equipment: <?php echo $order['equipment']; ?></h4>  <br>
                <h4>Vendor: <?php echo $order['vendor']; ?></h4>  <br>
                <h4>Count: <?php echo $order['count']; ?></h4> <br>
                <h4>Price: <?php echo $order['price']; ?></h4> <br>
                <h4>Total: <?php echo $order['price'] * $order['count']; ?></h4>

                <form action="data/player/buyEquipment.php" name="myform" method="post">
                <br>
                    <select name="bank" id="" required class="form-control" style="width:200px;">
                        <option value="">--select bank--</option>
                        <option value="">IDBI</option>
                        <option value="">AXIS</option>
                        <option value="">HDFC</option>
                        <option value="">SBI</option>
                        <option value="">ICCI</option>
                        <option value="">FEDARAL</option>
                        <option value="">CANARA</option>
                    </select>
                    <br>
                   
                    <select name="type" id="" required class="form-control" style="width:200px;">
                        <option value="">--select cart type--</option>
                        <option value="">VISA</option>
                        <option value="">MASTER CARD</option>
                    </select>
                    <br>
                    <input type="text" name="card name" id="card-name" placeholder="name in the card" onkeyup="capitalizel(this.id, this.value);" onchange="C_name();" autocomplete="off" required class="form-control" style="width:200px;">
                                    <label class="errortext" style="display:none; color:red" id="cat_1"></label><br>


                                        <script>
                                        function capitalizel(textboxid, str) {
                                            // string with alteast one character
                                            if (str && str.length >= 1)
                                            {       
                                                var firstChar = str.charAt(0);
                                                var remainingStr = str.slice(1);
                                                str = firstChar.toUpperCase() + remainingStr.toUpperCase();
                                            }
                                            document.getElementById(textboxid).value = str;
                                        }
                                        </script>

                                        <script>
                                            function C_name()
                                            {
                                                var val = document.getElementById('card-name').value;
                                                // alert(val);
                                                if (!val.match(/^[A-Z][A-Za-z" "]{2,}$/))
                                                {
                                                    $("#cat_1").html('Min 3 and Only Alphabets Allowed..!').fadeIn().delay(4000).fadeOut();
                                                    document.getElementById('card-name').value="";
                                                    return false;
                                                }
                                                return true;
                                            }
                                            </script>

                    <br>
                    <input type="number" name="card-number" id="card-number" placeholder="Card Number" onchange="Myfunction();" required class="form-control" style="width:200px;">
                    <label style="display:none; color:red" id="c_no1"></label>
                    <br>
                    <script>
                    function Myfunction()
                    {
                    var c_no=document.getElementById('card-number').value;
                    // alert(c_no);
                    if(c_no.length<16 || c_no.length>16)
                    {
                        $("#c_no1").html('invalid card number').fadeIn().delay(4000).fadeOut();
                        // alert("invalid card number");
                        return false;

                    }

                    }
                    </script>
                    <br>
                    <input type="number" name="cvv" id="cvv" placeholder="cvv" onchange="Myfunction1();" required class="form-control" style="width:200px;">
                    <label style="display:none; color:red" id="c_no2"></label>
                    <br>
                    <script>
                    function Myfunction1()
                    {
                    var cvv=document.getElementById('cvv').value;
                    // alert(c_no);
                    if(cvv.length<3 || cvv.length>3)
                    {
                        $("#c_no2").html('invalid card number').fadeIn().delay(4000).fadeOut();
                        // alert("invalid card number");
                        return false;

                    }

                    }
                    </script>

                    <input type="submit" value="Pay">
                </form>
        </div>
    </div>
</div>


<?php
include 'components/footer.php';
include 'components/end.php';
?>