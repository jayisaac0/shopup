<?php
$page_title = "Home | Welcome to shopup";
$content = "Login and be part of our community";
?>
<?php require_once 'header.php'; ?>

<?php require_once 'database/loginsession.php'; ?>
<?php require_once 'navigation.php'; ?>


    <div class="container body" style="margin-top:60px;">
        <div class="main_container">
            <div class="right_col" role="main">
                <div class="">
                    <div class="clearfix"></div>
                    <div class="">
                        
<?php
    if(isset($_GET['pesapal_merchant_reference'])) {
    $pesapal_transaction_tracking_id = $_GET['pesapal_transaction_tracking_id'];
    $pesapal_merchant_reference = $_GET['pesapal_merchant_reference'];


?>

<div style="margin-top:;" class="resetTop">


<?php echo $pesapal_transaction_tracking_id; ?><br />
<?php echo $pesapal_merchant_reference; ?>






    <?php
        //check payment
        $stmt = $auth_user->runQuery("SELECT * FROM log WHERE `pesapal_merchant_reference`='$pesapal_merchant_reference'");
        $stmt->execute(array());
        $log=$stmt->fetchAll(PDO::FETCH_OBJ);
        if($stmt->rowCount() == 1)
        {
            //update user row each time a purchase is made
            echo "found";
            //update select data from log
            $stmt = $auth_user->runQuery("SELECT * FROM log WHERE `pesapal_merchant_reference` = '$pesapal_merchant_reference' ");
            $stmt->execute(array());
            $log=$stmt->fetchAll(PDO::FETCH_OBJ);
            foreach ($log as $logs) {
                ?>
                <?php echo $logs->pesapal_merchant_reference; ?>
                <?php echo $logs->pesapal_transaction_tracking_id; ?>
                <?php echo $logs->log_id; ?>
                <?php
            }
            //end select data from log



        }
        else
        {
                //if not made made insert payment in database
                try
                {
                    if($auth_user->updatelog($pesapal_merchant_reference, $pesapal_transaction_tracking_id))
                    {
                        try
                        {
                            $premium = 1;
                            if($auth_user->updatepremium($premium))
                            {

                                ?>
                                    <div class="alert alert-success"  style = "padding:1px;margin:1px;">
                                        <i class="glyphicon glyphicon-warning-sign"></i> &nbsp;

                                        <?php
                                        echo '<script type="text/javascript">
                                                window.location = "pagesite.php"
                                            </script>';
                                            echo 'SHOP OPENED <a href="pagesite.php"; /> !'; ?>
                                    </div>
                                <?php
                            }


                        }
                        catch(PDOException $e)
                        {
                            echo $e->getMessage();
                        }
                        ?>
                            <div class="alert alert-success"  style = "padding:1px;margin:1px;">
                                <i class="glyphicon glyphicon-warning-sign"></i> &nbsp;
                                <?php echo 'UPDATED!'; ?>
                            </div>
                        <?php
                    }


                }
                catch(PDOException $e)
                {
                    echo $e->getMessage();
                }

        }
    ?>

</div>









<?php
}
?>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="vendors/iCheck/icheck.min.js"></script>
    <script src="build/js/custom.min.js"></script>
    </body>
</html>
