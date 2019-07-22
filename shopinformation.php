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
                <div class="col-md-12 col-sm-12 " id="mypagecard">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2><?php echo $user->typeofbusiness; ?></h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <?php
                                if($user->typeofbusiness == "generalshop")
                                    {                                      
                                        require_once 'includes/body/coverforms/generalshopcoverform.php';    
                                    }
                                else if($user->typeofbusiness == "cars")
                                    {                                     
                                        require_once 'includes/body/coverforms/carscoverform.php'; 
                                    }
                                else if($user->typeofbusiness == "hotels")
                                    {                                      
                                        require_once 'includes/body/coverforms/hotelscoverform.php';    
                                    }
                                else if($user->typeofbusiness == "food")
                                    {                                    
                                        require_once 'includes/body/coverforms/foodcoverform.php';     
                                    }
                                else if($user->typeofbusiness == "farming")
                                    {
                                        require_once 'includes/body/coverforms/farmingcoverform.php'; 
                                    }
                                else if($user->typeofbusiness == "health")
                                    {
                                        require_once 'includes/body/coverforms/healthcoverform.php'; 
                                    }
                                else if($user->typeofbusiness == "catering")
                                    {
                                        
                                        require_once 'includes/body/coverforms/cateringcoverform.php'; 
                                    }
                                else if($user->typeofbusiness == "cosmetics")
                                    {                                      
                                        require_once 'includes/body/coverforms/cosmeticscoverform.php'; 
                                    }
                                //else if($user->typeofbusiness == "consultancy"){ require_once 'includes/body/updateforms/consultancyeditform.php'; }
                                else if($user->typeofbusiness == "education")
                                    {                                       
                                        require_once 'includes/body/coverforms/educationcoverform.php';     
                                    }
                                //else if($user->typeofbusiness == "shop"){ require_once 'includes/body/updateforms/shopeditform.php'; }
                            ?>
                        </div>
                    </div>
                </div>

            </div>
            <?php
        }
    ?>




        </div>
        <!-- /page content -->

      </div>
    </div>

<?php require_once 'includes/footer/footer.php'; ?>