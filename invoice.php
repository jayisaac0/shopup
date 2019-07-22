<?php require_once 'includes/head/panelheader.php'; ?>
<?php require_once 'database/loginsession.php'; ?>
<?php require_once 'includes/body/premiumcheck/premiumcheck.php' ?>

<div class="container body">
<div class="main_container">

<?php require_once 'includes/head/panel.php'; ?>
<!-- top navigation -->
<?php require_once 'includes/head/topPanelNav.php'; ?>
<!-- /top navigation -->

<!-- page content -->
<div class="right_col" role="main">
<div class="">
<div class="clearfix"></div>

            <?php
                $stmt = $auth_user->runQuery("
                        SELECT *
                        FROM    `users`
                        JOIN    `shops`
                        ON      `users`.`user_id`=`shops`.`user_id`
                        WHERE   `shops`.`user_id` = '$user_id'
                    ");
                $stmt->execute(array());
                $users=$stmt->fetchAll(PDO::FETCH_OBJ);
                foreach ($users as $user ) {
                    ?>
            <div class="row">

                <?php
                    if($user->typeofbusiness == "generalshop")
                        { 
                            require_once 'includes/body/invoices/generalshoporders.php';
                        }
                    else if($user->typeofbusiness == "cars")
                        { 
                            require_once 'includes/body/invoices/cars.php';
                        }
                    else if($user->typeofbusiness == "hotels")
                        { 
                            require_once 'includes/body/invoices/hotels.php';
                        }
                    else if($user->typeofbusiness == "food")
                        { 
                            require_once 'includes/body/invoices/food.php';
                        }
                    else if($user->typeofbusiness == "farming")
                        { 
                            require_once 'includes/body/invoices/farming.php';
                        }
                    else if($user->typeofbusiness == "health")
                        { 
                            require_once 'includes/body/invoices/health.php';
                        }
                    else if($user->typeofbusiness == "catering")
                        { 
                            require_once 'includes/body/invoices/catering.php';
                        }
                    else if($user->typeofbusiness == "cosmetics")
                        { 
                            require_once 'includes/body/invoices/cosmetics.php';
                        }
                    //else if($user->typeofbusiness == "consultancy"){ require_once 'includes/body/updateforms/consultancyeditform.php'; }
                    else if($user->typeofbusiness == "education")
                        { 
                            require_once 'includes/body/invoices/education.php';
                        }
                    //else if($user->typeofbusiness == "shop"){ require_once 'includes/body/updateforms/shopeditform.php'; }
                    else
                        {
                            echo "ERROR!!!";
                        }
                ?>

            </div>

            <?php
        }
    ?>

</div>
</div>
<!-- /page content -->


</div>
</div>

<!-- jQuery -->
<script src="vendors/jquery/dist/jquery.min.js"></script>
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="vendors/jquery/dist/jquery.min.js"></script>
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="vendors/fastclick/lib/fastclick.js"></script>
<script src="vendors/nprogress/nprogress.js"></script>
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


<script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<script src="vendors/iCheck/icheck.min.js"></script>
<script src="vendors/moment/min/moment.min.js"></script>
<script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
<script src="vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
<script src="vendors/google-code-prettify/src/prettify.js"></script>
<script src="vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
<script src="vendors/switchery/dist/switchery.min.js"></script>
<script src="vendors/select2/dist/js/select2.full.min.js"></script>
<script src="vendors/parsleyjs/dist/parsley.min.js"></script>
<script src="vendors/autosize/dist/autosize.min.js"></script>
<script src="vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
<script src="vendors/starrr/dist/starrr.js"></script>
<script src="build/js/custom.min.js"></script>


</body>
</html>