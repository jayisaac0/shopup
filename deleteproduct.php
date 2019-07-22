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
                <div class="col-md-12 col-sm-12 col-xs-12 " id="">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2><?php echo $user->typeofbusiness; ?></h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <?php
                                if($user->typeofbusiness == "generalshop")
                                    {
                                        if(isset($_GET['generalshop_id'])) {
                                        $generalshop_id = $_GET['generalshop_id'];
                                        ?>
                                            <?php require_once 'includes/body/deleteproduct/generalproductdelete.php';  ?>
                                        <?php
                                        }                                          
                                        
                                    }
                                else if($user->typeofbusiness == "cars")
                                    {
                                        if(isset($_GET['cars_id'])) {
                                        $cars_id = $_GET['cars_id'];
                                        ?>
                                            <?php require_once 'includes/body/deleteproduct/carsproductdelete.php'; ?> 
                                        <?php
                                        }                                        
                                    
                                    }
                                else if($user->typeofbusiness == "hotels")
                                    {
                                        if(isset($_GET['hotels_id'])) {
                                        $hotels_id = $_GET['hotels_id'];
                                        ?>
                                            <?php require_once 'includes/body/deleteproduct/hotelsproductdelete.php';  ?>
                                        <?php
                                        }                                         
                                        
                                    }
                                else if($user->typeofbusiness == "food")
                                    {
                                        if(isset($_GET['food_id'])) {
                                        $food_id = $_GET['food_id'];
                                        ?>
                                            <?php require_once 'includes/body/deleteproduct/foodproductdelete.php'; ?>
                                        <?php
                                        }                                        
                                         
                                    }
                                else if($user->typeofbusiness == "farming")
                                    {
                                        if(isset($_GET['farming_id'])) {
                                        $farming_id = $_GET['farming_id'];
                                        ?>
                                            <?php require_once 'includes/body/deleteproduct/farmingproductdelete.php'; ?>
                                        <?php
                                        }                                        
                                        
                                    }
                                else if($user->typeofbusiness == "health")
                                    {
                                        require_once 'includes/body/deleteproduct/healthproductdelete.php'; 
                                    }
                                else if($user->typeofbusiness == "catering")
                                    {
                                        
                                        if(isset($_GET['catering_id'])) {
                                        $catering_id = $_GET['catering_id'];
                                        ?>
                                            <?php require_once 'includes/body/deleteproduct/cateringproductdelete.php'; ?>
                                        <?php
                                        }
                                        
                                    }
                                else if($user->typeofbusiness == "cosmetics")
                                    {
                                        if(isset($_GET['cosmetics_id'])) {
                                        $cosmetics_id = $_GET['cosmetics_id'];
                                        ?>
                                            <?php require_once 'includes/body/deleteproduct/cosmeticsproductdelete.php'; ?>
                                        <?php
                                        }                                        
                                    
                                    }
                                //else if($user->typeofbusiness == "consultancy"){ require_once 'includes/body/updateforms/consultancyeditform.php'; }
                                else if($user->typeofbusiness == "education")
                                    {
                                        if(isset($_GET['education_id'])) {
                                        $education_id = $_GET['education_id'];
                                        ?>
                                            <?php require_once 'includes/body/deleteproduct/educationproductdelete.php'; ?>
                                        <?php
                                        }                                           
                                         
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

      </div>
    </div>

<?php require_once 'includes/footer/footer.php'; ?>