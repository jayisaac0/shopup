<?php require_once 'includes/head/panelheader.php'; ?>
<?php require_once 'database/loginsession.php'; ?>
<?php require_once 'includes/body/premiumcheck/premiumcheck.php' ?>

<div class="container body">
<div class="main_container">

<?php require_once 'includes/head/panel.php'; ?>
<!-- top navigation -->
<?php require_once 'includes/head/topPanelNav.php'; ?>
<!-- /top navigation -->
<?php
if(isset($_GET['generalshoporders_id'])) {
$generalshoporders_id = $_GET['generalshoporders_id'];


?>
   
<!-- page content -->
<div class="right_col" role="main">
<div class="">
<div class="clearfix"></div>
<div class="row">

<?php

$stmt = $auth_user->runQuery("SELECT * FROM generalshoporders WHERE `shopname`='$user->shopname' AND `generalshoporders_id`='$generalshoporders_id' ");
$stmt->execute(array());
$generalshop=$stmt->fetchAll(PDO::FETCH_OBJ);
foreach ($generalshop as $generalshop) {
?>
<div class="col-md-12 col-sm-12 col-xs-12" id="mypagecard">
    <div class="x_panel">

      <div class="x_title">
        <h2>
            <a href="invoice"><button class="btn btn-lg btn-primary" type="button" data-placement="top" data-toggle="tooltip" data-original-title="invoice"><i class="fa fa-back">Back to orders</i></button></a>
        </h2>
        <div class="clearfix"></div>
      </div>

        <div class="x_content">
            <section class="content invoice">
                <div class="row">
                    <div class="col-xs-12 invoice-header">
                        <h1>
                            <i class="fa fa-globe"></i> Invoice.
                            <small class="pull-right">Date: <?php echo $generalshop->timeposted; ?></small>
                        </h1>
                    </div>
                </div>
                <div class="row invoice-info">
                    <div class="col-sm-4 invoice-col">
                        From
                        <address>
                            <strong><?php echo $generalshop->shopname; ?></strong>
                            <br><?php echo $user->country; ?>, <?php echo $user->town; ?>
                            <br>Phone: <?php echo $user->phonenumber; ?>
                            <br>Email: <?php echo $user->user_email; ?>
                        </address>
                    </div>
                    <div class="col-sm-4 invoice-col">
                        To
                        <address>
                            <strong><?php echo $generalshop->shopperusername; ?></strong>
                            <?php
                                $stmt = $auth_user->runQuery("SELECT * FROM users WHERE `user_name`='$generalshop->shopperusername' ");
                                $stmt->execute(array());
                                $users=$stmt->fetchAll(PDO::FETCH_OBJ);
                                foreach ($users as $users) {
                                    ?>
                                        <br>795 Freedom Ave, Suite 600
                                        <br>Phone: <?php echo $users->userphonenumber; ?>
                                        <br>Email: <?php echo $users->user_email; ?>
                                    <?php
                                }
                            ?>
                        </address>
                    </div>
                    <div class="col-sm-4 invoice-col">
                        <b>Invoice #007612</b>
                        <br>
                        <br>
                        <b>Order ID:</b> <?php echo $generalshop->grouporder; ?>
                        <br>
                        <b>Payment Due:</b> 2/22/2014
                        <br>
                        <b>Account:</b> 968-34567
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 table">
                        <?php
                            $stmt = $auth_user->runQuery("SELECT * FROM generalshoporders WHERE `grouporder`='$generalshop->grouporder' ");
                            $stmt->execute(array());
                            $generalshoporders=$stmt->fetchAll(PDO::FETCH_OBJ);
                            foreach ($generalshoporders as $generalshoporders) {
                                echo html_entity_decode($generalshoporders->product);
                            }
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-xs-12">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th style="width:50%">Subtotal:</th>
                                    <td>$<?php echo $generalshoporders->subtotal; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-4 col-md-4 col-xs-12">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>Tax (9.3%)</th>
                                    <td>$10.34</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-4 col-md-4 col-xs-12">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>Total:</th>
                                    <td>$<?php echo $generalshoporders->subtotal; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row no-print">
                    <div class="col-xs-12">
                        <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                        <button class="btn btn-warning pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>
                        <button class="btn btn-success pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>               
<?php
}

?>

<?php
    //Mark message as read 
    $stmt = $auth_user->runQuery("SELECT * FROM generalshoporders WHERE  `generalshoporders_id`='$generalshoporders_id'");
    $stmt->execute(array());
    $generalshoporders=$stmt->fetchAll(PDO::FETCH_OBJ);
    if($stmt->rowCount() == 1)
    {
        try
        {
            $generalshoporders_id = $_GET['generalshoporders_id'];
            $stmt = $auth_user->runQuery("UPDATE generalshoporders SET `orderfilled`=1 WHERE `generalshoporders_id`='$generalshoporders_id' ");
            $stmt->bindparam("1", $orderfilled);
            $stmt->execute();
            return $stmt;
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }  
    }
?>



</div>
</div>
</div>
<!-- /page content -->
<?php
}
?>

</div>
</div>

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

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.php5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>

    

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
    
</body>
</html>