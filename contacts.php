<?php
$page_title = "Contacts | ";
$content = "View all your shop costomers";
?>
<?php require_once 'header.php'; ?>

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

                    <div class="clearfix"></div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12" id="mypagecard">
                                <div class="x_panel">
                                    <div class="x_content">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                                
                                            </div>
                                            <div class="clearfix"></div>
                                    <?php

                                        $stmt = $auth_user->runQuery("
                                                SELECT *
                                                FROM    `businesscycle`
                                                WHERE   `businesscycle`.`user` = '$user->user_name' 
                                            ");
                                        $stmt->execute(array());
                                        $businesscycle=$stmt->fetchAll(PDO::FETCH_OBJ);
                                        foreach ($businesscycle as $businesscycle ) {
                                            ?>


                                    <?php

                                        $stmt = $auth_user->runQuery("
                                                SELECT *
                                                FROM    `users`
                                                WHERE   `users`.`user_id` = '$businesscycle->user_id' 
                                            ");
                                        $stmt->execute(array());
                                        $users=$stmt->fetchAll(PDO::FETCH_OBJ);
                                        foreach ($users as $user ) {
                                            ?>

                                            <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                                                <div class="well profile_view">
                                                    <div class="col-sm-12">
                                                        <h4 class="brief"><i>Customer</i></h4>
                                                        <div class="left col-xs-7">
                                                            <h2><?php echo $user->first_name.' '; ?><?php echo $user->middle_name.' '; ?><?php echo $user->last_name; ?></h2>
                                                            <ul class="list-unstyled">
                                                                <li><i class="fa fa-envelope"></i> Address: <?php echo $user->user_email; ?></li>
                                                                <li><i class="fa fa-phone"></i> Phone #: <?php echo $user->userphonenumber; ?></li>
                                                            </ul>
                                                        </div>
                                                        <div class="right col-xs-5 text-center">
                                                            <img src="<?php echo $user->profileimage; ?>" alt="<?php echo $user->user_name; ?>" class="img-circle img-responsive" style="width:100px;height:100px;">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 bottom text-center">
                                                        <div class="col-xs-12 col-sm-6 emphasis">
                                                            <p class="ratings">
                                                                <a>4.0</a>
                                                                <a><span class="fa fa-star"></span></a>
                                                                <a><span class="fa fa-star"></span></a>
                                                                <a><span class="fa fa-star"></span></a>
                                                                <a><span class="fa fa-star"></span></a>
                                                                <a><span class="fa fa-star-o"></span></a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            }
                                        ?>

                                            <?php
                                            }
                                        ?>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
</body>
</html>

