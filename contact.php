<?php
$page_title = "Contact us | ";
$content = "Contact us here";
?>
<?php require_once 'header.php'; ?>
<?php require_once 'database/loginsession.php'; ?>
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
      <div class="main_container">



        <div class="" role="main">

          <div class="">

            
            <div class="clearfix"></div>

            <div class="">
              <div class="col-md-12 col-sm-12 col-xs-12" id="mypagecard">
                <div class="x_panel">
                  

                  <div class="x_content">


                    <div class="col-md-5 col-sm-5 col-xs-12" style="border:0px solid #e5e5e5;">

                      <h3 class="prod_title"><?php echo strtoupper($shop->shopname); ?> / contact us</h3>

                     

                      <div class="">
                        
                    <div class="profile_img">
                        <div id="crop-avatar">
                            <!-- Current avatar -->
                            <center><img class="img-responsive avatar-view" src="<?php echo $shop->profileimage; ?>" alt="Avatar" title="Change the avatar" style="max-height:400px;" /></center>
                        </div>
                    </div>
                    <h3><?php echo $shop->first_name; ?> <?php echo $shop->middle_name; ?> <?php echo $shop->last_name; ?></h3>
                    <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon" style="font-size:30px;"></i><a href="mailto:<?php echo $shop->user_email; ?>"><?php echo $shop->user_email; ?></a></li>
                        <li><i class="fa fa-map-marker user-profile-icon" style="font-size:30px;"></i><a href="call:<?php echo $shop->userphonenumber; ?>"><?php echo $shop->userphonenumber; ?></a></li>
                    </ul>
                    <br />


                      </div>
                      <br />

                    </div>


                    <div class="col-md-7 col-sm-7 col-xs-12">
                      <div class="product-image">
                        <?php require_once 'includes/body/forms/message.php'; ?>
                      </div>

                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->

        <!-- /footer content -->
      </div>
    </div>

  



         <?php
    }
?>
<?php
}
?>  


<?php require_once 'includes/footer/footer.php'; ?>