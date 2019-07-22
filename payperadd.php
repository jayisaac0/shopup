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
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel" id="mypagecard">
<div class="x_title">
<h2><i class="fa fa-users"></i> My cycle</h2>
<div class="clearfix"></div>
</div>
<div class="x_content">


    <div class="col-md-4 col-sm-4 col-xs-12 profile_left">
        <div class="profile_title">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h2>Select payment method</h2>
            </div>
        </div>

            <form action="mpesa/pesapal-iframe.php" method="post">
            <div  class="thumbnail caption">
                <table>
                    <tr>
                        <!--<td>Amount:</td>-->
                        <td><input type="hidden" name="amount" value="350" />
                        <!--(in Kshs)-->
                        </td>
                    </tr>
                    <tr>
                        <!--<td>Type:</td>-->
                        <td><input type="hidden" name="type" value="MERCHANT" readonly="readonly" />
                        <!--(leave as default - MERCHANT)-->
                        </td>
                    </tr>
                    <tr>
                        <!--<td>Description:</td>-->
                        <td><input type="hidden" name="description" value="Subscription" /></td>
                    </tr>
                    <tr>
                        <!--<td>Reference:</td>-->
                        <td><input type="hidden" name="reference" value="<?php echo $userRow['user_id']; ?>" />
                        <!--(the Order ID )-->
                        </td>
                    </tr>
                    <tr>
                        <!--<td>Shopper's First Name:</td>-->
                        <td><input type="hidden" name="first_name" value="<?php echo $userRow['first_name']; ?>" /></td>
                    </tr>
                    <tr>
                        <!--<td>Shopper's Last Name:</td>-->
                        <td><input type="hidden" name="last_name" value="<?php echo $userRow['last_name']; ?>" /></td>
                    </tr>
                    <tr>
                        <!--<td>Shopper's Email Address:</td>-->
                        <td><input type="hidden" name="email" value="<?php echo $userRow['user_email']; ?>" /></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="alert alert-warning alert-dismissible" role="" style="width:100%;">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <strong><a style="cursor:pointer;">Mobile payment! </a></strong> Only for East Africa.
                            </div>
                            <center><h2>Mobile payments</h2></center>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Make Payment" style="background:url('images/mpesa.jpg') ;" class="btn-lg" />
                        </td>
                    </tr>
                </table>
                </div>
            </form>

            <div  class="thumbnail caption">
                <table>
                    <tr>
                        <td>
                            <div class="alert alert-warning alert-dismissible" role="" style="width:80%;">
                            <strong><a style="cursor:pointer;"> </a></strong>
                            <img src="images/paypal.png" alt="paypaladdpayment" class="" style="width:50%;height:;" /><br />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Make Payment" style="background:url('images/mpesa.jpg') ;" class="btn-lg" />
                        </td>
                    </tr>
                </table>
            </div>

            <div  class="thumbnail caption">
                <table>
                    <tr>
                        <td>
                            <div class="alert alert-warning alert-dismissible" role="" style="width:80%;">
                            <strong><a style="cursor:pointer;"> </a></strong>
                            <img src="images/paypal.png" alt="paypaladdpayment" class="" style="width:50%;height:;" /><br />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Make Payment" style="background:url('images/mpesa.jpg') ;" class="btn-lg" />
                        </td>
                    </tr>
                </table>
            </div>

    </div>


<?php
    if(isset($_GET['url'])) {
    $url = $_GET['url'];


        //check payment
        $stmt = $auth_user->runQuery("SELECT * FROM advertlog WHERE `user_id`='$user_id' AND `advert_key`='$url' ");
        $stmt->execute(array());
        $log=$stmt->fetchAll(PDO::FETCH_OBJ);
        if($stmt->rowCount() == 1)
        {
                                                           
                $stmt = $auth_user->runQuery("SELECT * FROM `advertlog` WHERE `user_id`='$user_id' AND `advert_key`='$url' ");
                $stmt->execute(array());
                $advertlog=$stmt->fetchAll(PDO::FETCH_OBJ);
                foreach ($advertlog as $advertlog) {
                   

                //update user row each time a purchase is made
                echo $advertlog->advertlog_id;
            echo "found";
            ?>
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <div class="profile_title">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <h2>Create Advert</h2>
                        </div>
                    </div>
                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <div id="myTabContent" class="tab-content col-md-12 col-sm-12 col-xs-12">
                            <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                <!-- start recent activity -->

                                <?php require_once 'includes/body/adverts/payperadvert.php'; ?>

                                <form class="form-horizontal"  role="form" method="POST" data-parsley-validate enctype="multipart/form-data">
                                    <?php
                                        if(isset($error))
                                        {
                                            foreach($error as $error)
                                            {
                                                 ?>
                                                 <div class="alert alert-danger" style = "">
                                                    <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                                                 </div>
                                                 <?php
                                            }
                                        }
                                    ?>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Advert title<span class="required">*</span>
                                        </label>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input type="hidden" id="user_id" name="user_id" value="<?php echo $userRow['user_id']; ?>">
                                            <input type="hidden" id="user_name" name="user_name" value="<?php echo $userRow['user_name']; ?>">
                                            <input type="text" id="adverttitle" name="adverttitle" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Advert details<span class="required">*</span>
                                        </label>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <textarea type="text" id="advertdetails" name="advertdetails" required="required" rows="5" class="form-control col-md-7 col-xs-12" ></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Advert image<span class="required">*</span>
                                        </label>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input type="file" id="advertimage" name="advertimage" required="required" class="form-control col-md-7 col-xs-12" />
                                        </div>
                                    </div>

                                    
                                    <div class="form-group">
                                    <i>Please accept our shopup advertising terms and conditions</i>
                                        <label class="control-label required"> </label>
                                        <div class="checkbox col-md-12 col-sm-12 col-xs-12">
                                        <input type="checkbox" class="flat"  value="yes" id="advertisingterms" required="required" name="advertisingterms">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3">
                                            <button class="btn btn-primary" type="button">Cancel</button>
                                            <button class="btn btn-primary" type="reset">Reset</button>
                                            <button type="submit" id="postadvert" name="postadvert" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>
                                </form>

                                <!-- end recent activity -->
                            </div>
                        </div>
                    </div>
                </div>

            <?php
            }
        }
        else
        {
            //echo "NOT FOUND";
            ?>
                <div class="col-md-8 col-sm-8 col-xs-12  caption">
                    <div class="caption" role="tabpanel" data-example-id="togglable-tabs">
                        <div id="myTabContent" class="tab-content  col-md-12 col-sm-12 col-xs-12" style="margin:25% auto;">
                            <div role="tabpanel" class="tab-pane thumbnail fade active in" id="tab_content1" aria-labelledby="home-tab">
                                <!-- start recent activity -->
                                <h1><center>THIS LINK IS <b class="green">INVALID</b> OR <b class="red">EXPIRED</b></center></h1>
                                <!-- end recent activity -->
                            </div>
                        </div>
                    </div>
                </div>
            <?php

        }
    ?>



    <div class="col-md-4 col-sm-4 col-xs-12 profile_left">

    </div>

</div>
</div>
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
<script src="vendors/jquery/dist/jquery.min.js"></script>
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="vendors/fastclick/lib/fastclick.js"></script>
<script src="vendors/nprogress/nprogress.js"></script>
<script src="vendors/raphael/raphael.min.js"></script>
<script src="vendors/morris.js/morris.min.js"></script>
<script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<script src="vendors/moment/min/moment.min.js"></script>
<script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<?php require_once 'includes/footer/footer.php'; ?>
<?php
}
?>

</body>
</html>