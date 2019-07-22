<?php
$page_title = "Shop |";
$content = "Thank you for taking interest in owning a simpe shop with us";
?>

<?php require_once 'includes/head/panelheader.php'; ?>
<?php require_once 'database/loginsession.php'; ?>
<?php require_once 'includes/body/premiumcheck/premiumcheck.php' ?>

    <div class="container body">
      <div class="main_container">

            <?php require_once 'includes/head/panel.php'; ?>
            <!-- top navigation -->
            <?php require_once 'includes/head/topPanelNav.php'; ?>
        <!-- /top navigation -->

<div class="right_col" role="main">

    <div class="row">
        <div class="col-md-8 col-sm-8 " id="mypagecard">
            <div class="x_panel">
                <div class="x_title">
                    <h2>CREATE SHOP</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <?php require_once 'includes/body/updateforms/createshopeditform.php'; ?>
                </div>
            </div>
        </div>


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
            foreach ($users as $user) {
                ?>
                <div class="col-md-4 col-sm-4 col-xs-12 profile_left">
                    <div class="profile_img">
                        <div id="crop-avatar">
                            <!-- Current avatar -->
                            <img class="img-responsive avatar-view" src="<?php echo $user->profileimage; ?>" alt="Avatar" title="Change the avatar">
                        </div>
                    </div>
                    <h3><?php echo $user->user_name; ?></h3>
                    <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i><?php echo $user->first_name; ?> <?php echo $user->middle_name; ?> <?php echo $user->last_name; ?></li>
                        <li><i class="fa fa-map-marker user-profile-icon"></i><?php echo $user->user_email; ?></li>
                        <li><i class="fa fa-map-marker user-profile-icon"></i><?php echo $user->gender; ?></li>
                        <li><i class="fa fa-map-marker user-profile-icon"></i><?php echo $user->yearofbirth; ?></li>
                        <li><i class="fa fa-map-marker user-profile-icon"></i><?php echo $user->userphonenumber; ?></li>

                    </ul>
                    <a class="btn btn-success" href="profile"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                    <br />

                </div>
                <?php
            }
        ?>




    </div>

</div>
</div>
</div>

<?php require_once 'includes/footer/footer.php'; ?>
