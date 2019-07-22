<?php
$page_title = "General shop | ";
$content = "Want a shop with everything you can think of? Look no further.";
?>

<?php require_once 'header.php'; ?>
<?php require_once 'navigation.php'; ?>
<?php
    if(isset($_GET['user'])) {
    $user = $_GET['user'];
?>

<?php

    $stmt = $auth_user->runQuery("
        SELECT *
                        FROM    `users`
                        JOIN    `shops`
                        ON      `users`.`user_id`=`shops`.`user_id`
                        WHERE   `shops`.`user_name` = '$user'
                        ");
    $stmt->execute(array());
    $shops=$stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($shops as $shop) {
        ?>

<div class="container body" style="margin-top:60px;">
   





<?php
$page = $_SERVER['PHP_SELF'];

if(isset($_GET['add'])) {
    @$_SESSION['cart_'.$_GET['add']];

    $quantity = ($stmt = $auth_user->runQuery('SELECT * FROM food WHERE food_id = '.$_GET['add'] ));
    $stmt->execute(array());
    $foodRow=$stmt->fetch(PDO::FETCH_ASSOC);
    if ($foodRow['snackname'] != @$_SESSION['cart_'.$_GET['add']] ) {

        @$_SESSION['cart_'.$_GET['add']] ++;    
        @header('Location:'.$_SERVER['PHP_SELF']);
    }

} 


if (isset($_GET['delete'])) {
$_SESSION['cart_'.(int)$_GET['delete']] = '0';
    @header('Location:'.$_SERVER['PHP_SELF']);
}


if (isset($_GET['remove'])) {
$_SESSION['cart_'.(int)$_GET['remove']] --;
    @header('Location:'.$_SERVER['PHP_SELF']);
}
?>




<div class=" ">
    <div class="col-sm-12 col-md-12">
        <div class=" col-sm-12 col-md-12"  style = "margin:2px;padding:5px;">

            <div class=" panel-collapse col-sm-12 col-md-12" role="tabpanel" style = "margin:;padding:10px;">




                <table class="table">
                    <?php
                        foreach( $_SESSION as $name => $value ){
                            //echo $name. ' has value '. $value . '<br />' ;
                            if ($value > 0) {
                                if (substr($name, 0, 5) == 'cart_') {
                                    //echo $name. '<br />';
                                    $id = substr($name, 5, (strlen($name) -5));
                                    //echo $id. '<br />';

                                        $stmt = $auth_user->runQuery("SELECT * 
                                                                    FROM `food` 
                                                                    JOIN `users`
                                                                    ON   `food`.`user_id`=`users`.`user_id`
                                                                    WHERE `food_id` = '$id' ");
                                        $stmt->execute(array());
                                        
                                        $food=$stmt->fetchAll(PDO::FETCH_OBJ);


                                        foreach ($food as $food) {
                                        @$total = $food->snackprice * $value;
                                        @$num = 1;
                                        @$totalcost += $total;
                                        @$count += $num;
                                        ?>                      
                                            


<tr class = "myHover" style = "background:#EBE9FF;border:2px solid #FFFFFF;">
<td><?php echo $food->user_name; ?> </td>
<td><?php echo $food->user_id; ?> </td>
<td><?php echo $food->snackname; ?> </td>
<td>Qty <input type = "input" name = "value" value = "<?php echo $value; ?>" style = "width:50px;"/></td>
<td><a href = "fcart.php?user=<?php echo $shop->user_name; ?>&amp;add=<?php echo $id; ?> "><img src = "images/icons/add.ico" /></a></td>
<td><a href = "fcart.php?user=<?php echo $shop->user_name; ?>&amp;remove=<?php echo $id; ?> "><img src = "images/icons/remove.ico" /></a></td>
<td>@</td>
<td><?php echo number_format($food->snackprice, 2); ?></td>
<td> = </td>
<td><?php echo number_format($total, 2); ?></td>
<td> <a href = "fcart.php?user=<?php echo $shop->user_name; ?>&amp;delete=<?php echo $id; ?>">delete</a></td>
</tr>


                                            
                                        <?php

                                    }

                                }
                                
                            }

                        }
                        
                    ?>

                </table>
                <div style = "padding-bottom:20px;">
                <button type="button" class="btn btn-primary btn-lg  col-sm-12 col-md-12"  style = ""> $ <?php echo number_format(@$totalcost, 2);  ?></button><br />
                </div>






            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12" id="mypagecard">
                <div class="x_panel">
                  <div class="x_title">
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <section class="content invoice">
                      <!-- title row -->
                      <div class="row">
                        <div class="col-xs-12 invoice-header">
                          <h1>
                                          <i class="fa fa-file"></i> Invoice.
                                          <small class="pull-right">Date: <?php echo date('D'); ?>/<?php echo date('M'); ?>/<?php echo date('Y'); ?></small>
                                      </h1>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- info row -->
                      <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                          From
                          <address>
                                          <strong><?php echo $shop->shopname; ?></strong>
                                          <br><?php echo $shop->country; ?>, <?php echo $shop->town; ?>
                                          <br>Phone: <?php echo $shop->phonenumber; ?>
                                          <br>Email: <?php echo $shop->user_email; ?>
                                      </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                          To
                          <address>
                                          <strong><?php echo $userRow['first_name'].' '; ?><?php echo $userRow['middle_name']; ?></strong>
                                          <br><?php //echo $userRow['country'].' '; ?><?php //echo $userRow['city']; ?>Adress
                                          <br>Phone: <?php echo $userRow['userphonenumber']; ?>
                                          <br>Email: <?php echo $userRow['user_email']; ?>
                                      </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                          <b>Invoice #<?php echo time(); ?> </b>
                          <br>
                          <br>
                          <b>Order ID:</b> <?php echo substr(strtoupper(md5(time())), 0, 10) ; ?>
                          <br>
                          <b>Payment Due:</b> 2/22/2014
                          <br>
                          <b>Account:</b> <?php echo $shop->phonenumber; ?>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- Table row -->
                      <div class="row">
                        <div class="col-xs-12 table">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>Qty</th>
                                <th>Product</th>
                                <th>Serial #</th>
                                <th style="width: 59%">Description</th>
                                <th>Subtotal</th>
                              </tr>
                            </thead>
                            <tbody>
                            
                          
                    <?php
                        foreach( $_SESSION as $name => $value ){
                            //echo $name. ' has value '. $value . '<br />' ;
                            if ($value > 0) {
                                if (substr($name, 0, 5) == 'cart_') {
                                    //echo $name. '<br />';
                                    $id = substr($name, 5, (strlen($name) -5));
                                    //echo $id. '<br />';
                                        $stmt = $auth_user->runQuery("SELECT * 
                                                                    FROM `food` 
                                                                    JOIN `users`
                                                                    ON   `food`.`user_id`=`users`.`user_id`
                                                                    WHERE `food_id` = '$id' ");
                                        $stmt->execute(array());
                                        
                                        $food=$stmt->fetchAll(PDO::FETCH_OBJ);


                                        foreach ($food as $food) {
                                        @$mytotal = $food->snackprice * $value;
                                        @$num = 1;
                                        @$ftotalcost += $mytotal;
                                        @$count += $num;
                                        ?>  
                                          <tr>
                                          <td><?php echo $value; ?></td>
                                          <td><?php echo $food->snackname;  ?></td>
                                          <td>#<?php echo substr(strtoupper(md5($food->food_id)), 0, 10); ?></td>
                                          <td><?php echo substr($food->snackdetails, 0, 120); ?>...</td>
                                          <td>$<?php echo number_format($mytotal, 2); ?></td>
                                          </tr>







                                        <?php

                                    }

                                }
                                
                            }
                          }

                        
                    ?>

                    </tbody>

                </table>

                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

<?php require_once 'includes/body/formcontrollers/generalshopcartformccontroller.php'; ?>
    <form class="form-horizontal"  role="form" method="POST" data-parsley-validate enctype="multipart/form-data">
    <input type="hidden" name="user_id" value="<?php echo $shop->user_id; ?>" />
    <input type="hidden" name="user_name" value="<?php echo $shop->user_name; ?>" />
    <input type="hidden" name="shopname" value="<?php echo $shop->shopname; ?>" />
    <input type="hidden" name="shopper" value="<?php echo $userRow['user_id']; ?>" />
    <input type="hidden" name="shopperusername" value="<?php echo $userRow['user_name']; ?>" />
    <input type="hidden" name="typeofbusiness" value="<?php echo $shop->typeofbusiness; ?>" />
    <input type="hidden" name="qty" value="<?php echo $value; ?>" />
    <textarea type="" name="product" readonly="readonly" class="form-control btn btn-primary" style="max-width:0px;max-height:0px;">
        <table class="table table-striped">
        <thead>
        <tr>
        <th>Qty</th>
        <th>Product</th>
        <th>Serial #</th>
        <th style="width: 59%">Description</th>
        <th>Subtotal</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach( $_SESSION as $name => $value ){
        //echo $name. ' has value '. $value . '<br />' ;
        if ($value > 0) {
        if (substr($name, 0, 5) == 'cart_') {
        //echo $name. '<br />';
        $id = substr($name, 5, (strlen($name) -5));
        //echo $id. '<br />';
        $stmt = $auth_user->runQuery("SELECT * FROM `food` JOIN `users`ON   `food`.`user_id`=`users`.`user_id`WHERE `food_id` = '$id' ");
        $stmt->execute(array());
        $food=$stmt->fetchAll(PDO::FETCH_OBJ);
        foreach ($food as $food) {
        @$mytotal = $food->snackprice * $value;
        @$num = 1;
        @$ctotalcost += $mytotal;
        @$count += $num;
        ?>  
        <tr>
        <td><?php echo $value; ?></td>
        <td><?php echo $food->snackname;  ?></td>
        <td>#<?php echo substr(strtoupper(md5($food->food_id)), 0, 10); ?></td>
        <td><?php echo substr($food->snackdetails, 0, 120); ?>...</td>
        <td>$<?php echo number_format($mytotal, 2); ?></td>
        </tr>
        <?php }}}} ?>
        </tbody>
        </table>
    </textarea>
    <input type="hidden" name="orderserialno" value="<?php echo substr(strtoupper(md5($food->food_id)), 0, 10); ?>" />
    <input type="hidden" name="desccription" value="<?php echo substr($food->snackdetails, 0, 120); ?>" />
    <input type="hidden" name="subtotal" value="<?php echo number_format($ctotalcost, 2); ?>" />
    <input type="hidden" name="grouporder" value="<?php echo substr(strtoupper(md5(time())), 0, 15); ?>" />




                      <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-xs-6">
                          <p class="lead">Payment Methods:</p>
                          <img src="images/visa.png" alt="Visa">
                          <img src="images/mastercard.png" alt="Mastercard">
                          <img src="images/american-express.png" alt="American Express">
                          <img src="images/paypal.png" alt="Paypal">
                          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                            Thank you for purchasing with us
                          </p>
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-6">
                          <p class="lead">Checkout amount</p>
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <th style="width:50%">Subtotal:</th>
                                  <td>$ <?php echo number_format(@$ftotalcost, 2);  ?></td>
                                </tr>
                                <tr>
                                  <th>Tax ()</th>
                                  <td>Included</td>
                                </tr>
                                <tr>
                                  <th>Total:</th>
                                  <td>$ <?php echo number_format(@$ftotalcost, 2);  ?></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- this row will not appear when printing -->
                      <div class="row no-print">
                        <div class="col-xs-12">
                          <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                          <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>
                          <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
            </div>


            <div class=" panel-collapse col-sm-12 col-md-12" role="tabpanel" style = "margin:;padding:10px;">

                <?php
                    if (@$totalcost != 0) {
                    ?>
                    <a href="foodlist/<?php echo $shop->user_name; ?>" >
                        <div class="w3-btn w3-padding-large w3-blue w3-animate-zoom w3-center btn btn-lg btn-primary">
                            Back to <?php echo $shop->shopname; ?>
                        </div>
                    </a>

                    <?php
                    $login = new USER();
                    if($login->is_loggedin()!="")
                    {
                        ?>
                        <a>
                                <input class="w3-btn w3-padding-large w3-blue w3-animate-zoom w3-center btn btn-lg btn-primary" name="generalshopcartsubmit" type="submit" value="Submit" /> 
                        </a>
                        <?php
                    }else
                    {
                        ?>
                        <a href="log-in.php?url=<?php echo base64_encode('cart/'.$shop->user_name.'/'.'0'); ?>">
                            <div class="w3-btn w3-padding-large w3-blue w3-animate-zoom w3-center btn btn-lg btn-primary">
                                Log in to Check out
                            </div>
                        </a>
                        <?php
                    }
                    ?>
                    </form>
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong><a href = "#"></a> <a href = "#">HINT! </a></strong> Check out or order from one shop at a time.
                        
                    </div>
                    <?php
                    }else {
                        ?>
                        <div class="alert alert-warning alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h1><b><center><strong><a href = "#"></a> <a href = "#">!!! </a></strong>EMPTY ORDER CART</center></b></h1>
                        </div>
                    <?php
                    }
                ?>
            </div>


            </div>


        </div>
    </div>
</div>







</div>
    
          
        <!-- /page content -->


     

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>

    <!-- jQuery -->    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>

    <script src="build/js/custom.min.js"></script>

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>

    <script src="build/js/custom.min.js"></script>

    
         <?php
    }
?>
<?php
}
?>
  </body>
</html>
