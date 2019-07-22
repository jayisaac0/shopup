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
                <div class="col-md-12 col-sm-12 col-xs-12" id="mypagecard">
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
                                    ?>

                                    <div class="row">
                                    <?php
                                        $stmt = $auth_user->runQuery("SELECT * FROM generalshop WHERE `user_id`='$user_id' ");
                                        $stmt->execute(array());
                                        $generalshop=$stmt->fetchAll(PDO::FETCH_OBJ);
                                        foreach ($generalshop as $generalshop) {
                                            ?>
                                            <div class="col-md-55">
                                                <div class="thumbnail">
                                                    <div class="image view view-first">
                                                        <img style="width: 100%; display: block;" src="<?php echo $generalshop->productimage; ?>" alt="<?php echo $generalshop->productname; ?>" />
                                                        <div class="mask">
                                                            <p><?php echo $generalshop->productname; ?></p>
                                                            <div class="tools tools-bottom">
                                                                <a href="#"><i class="fa fa-link"></i></a>
                                                                <a href="#"><i class="fa fa-pencil"></i></a>
                                                                <a href="#"><i class="fa fa-times"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="caption">
                                                    </div>
                                                    <a class="btn btn-success " href="editproducts.php?generalshop_id=<?php echo $generalshop->generalshop_id; ?>" style="width:40%;float:left;"><i class="fa fa-pencil"></i> Edit </a>
                                                    <a href="deleteproduct.php?generalshop_id=<?php echo $generalshop->generalshop_id; ?>"  class="btn btn-danger " style="width:40%;float:right;"><i class="fa fa-times"> Delete </i></a>
                                                </div>
                                            </div>                            
                                            <?php
                                        }
                                    ?>
                                    </div>

                                    <?php

                                    }
                                else if($user->typeofbusiness == "cars")
                                    { 
                                    ?>

                                    <div class="row">
                                    <?php
                                        $stmt = $auth_user->runQuery("SELECT * FROM cars WHERE `user_id`='$user_id' ");
                                        $stmt->execute(array());
                                        $cars=$stmt->fetchAll(PDO::FETCH_OBJ);
                                        foreach ($cars as $car) {
                                            ?>

                                            <div class="col-md-55">
                                                <div class="thumbnail">
                                                <div class="image view view-first">
                                                    <img style="width: 100%; display: block;" src="<?php echo $car->carimage; ?>" alt="image" />
                                                    <div class="mask">
                                                        <p><?php echo $car->carname; ?></p>
                                                        <div class="tools tools-bottom">
                                                            <a href="#"><i class="fa fa-link"></i></a>
                                                            <a href="#"><i class="fa fa-pencil"></i></a>
                                                            <a href="#"><i class="fa fa-times"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                </div>
                                                <a class="btn btn-success " href="editproducts.php?cars_id=<?php echo $car->cars_id; ?>" style="width:40%;float:left;"><i class="fa fa-pencil"></i> Edit </a>
                                                <a href="deleteproduct.php?cars_id=<?php echo $car->cars_id; ?>"  class="btn btn-danger " style="width:40%;float:right;"><i class="fa fa-times"> Delete </i></a>

                                          </div>
                                        </div>

                                            <?php
                                        }
                                    ?>
                                    </div>

                                    <?php

                                    }
                                else if($user->typeofbusiness == "hotels")
                                    { 
                                    ?>

                                    <div class="row">
                                    <?php
                                        $stmt = $auth_user->runQuery("SELECT * FROM hotels WHERE `user_id`='$user_id' ");
                                        $stmt->execute(array());
                                        $hotels=$stmt->fetchAll(PDO::FETCH_OBJ);
                                        foreach ($hotels as $hotel) {
                                            ?>
                                            <div class="col-md-55">
                                                <div class="thumbnail">
                                                    <div class="image view view-first">
                                                        <img style="width: 100%; display: block;" src="<?php echo $hotel->hotelroomimage; ?>" alt="<?php echo $hotel->hotelname; ?>" />
                                                        <div class="mask">
                                                            <p><?php echo $hotel->hotelname; ?></p>
                                                            <div class="tools tools-bottom">
                                                                <a href="#"><i class="fa fa-link"></i></a>
                                                                <a href="#"><i class="fa fa-pencil"></i></a>
                                                                <a href="#"><i class="fa fa-times"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="caption">
                                                    </div>
                                                    <a class="btn btn-success " href="editproducts.php?hotels_id=<?php echo $hotel->hotels_id ?>" style="width:40%;float:left;"><i class="fa fa-pencil"></i> Edit </a>
                                                    <a href="deleteproduct.php?hotels_id=<?php echo $hotel->hotels_id; ?>"  class="btn btn-danger " style="width:40%;float:right;"><i class="fa fa-times"> Delete </i></a>
                                                </div>
                                            </div>                            
                                            <?php
                                        }
                                    ?>
                                    </div>

                                    <?php

                                    }
                                else if($user->typeofbusiness == "food")
                                    { 
                                    ?>

                                    <div class="row">
                                    <?php
                                        $stmt = $auth_user->runQuery("SELECT * FROM food WHERE `user_id`='$user_id' ");
                                        $stmt->execute(array());
                                        $food=$stmt->fetchAll(PDO::FETCH_OBJ);
                                        foreach ($food as $food) {
                                            ?>
                                            <div class="col-md-55">
                                                <div class="thumbnail">
                                                    <div class="image view view-first">
                                                        <img style="width: 100%; display: block;" src="<?php echo $food->snackimage; ?>" alt="<?php echo $food->snackname; ?>" />
                                                        <div class="mask">
                                                            <p><?php echo $food->snackname; ?></p>
                                                            <div class="tools tools-bottom">
                                                                <a href="#"><i class="fa fa-link"></i></a>
                                                                <a href="#"><i class="fa fa-pencil"></i></a>
                                                                <a href="#"><i class="fa fa-times"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="caption">
                                                    </div>
                                                    <a class="btn btn-success " href="editproducts.php?food_id=<?php echo $food->food_id; ?>" style="width:40%;float:left;"><i class="fa fa-pencil"></i> Edit </a>
                                                    <a href="deleteproduct.php?food_id=<?php echo $food->food_id; ?>"  class="btn btn-danger " style="width:40%;float:right;"><i class="fa fa-times"> Delete </i></a>
                                                </div>
                                            </div>                            
                                            <?php
                                        }
                                    ?>
                                    </div>

                                    <?php

                                    }
                                else if($user->typeofbusiness == "farming")
                                    { 
                                    ?>

                                    <div class="row">
                                    <?php
                                        $stmt = $auth_user->runQuery("SELECT * FROM farming WHERE `user_id`='$user_id' ");
                                        $stmt->execute(array());
                                        $farming=$stmt->fetchAll(PDO::FETCH_OBJ);
                                        foreach ($farming as $farming) {
                                            ?>
                                            <div class="col-md-55">
                                                <div class="thumbnail">
                                                    <div class="image view view-first">
                                                        <img style="width: 100%; display: block;" src="<?php echo $farming->farmproductimage; ?>" alt="<?php echo $farming->farmproduct; ?>" />
                                                        <div class="mask">
                                                            <p><?php echo $farming->farmproduct; ?></p>
                                                            <div class="tools tools-bottom">
                                                                <a href="#"><i class="fa fa-link"></i></a>
                                                                <a href="#"><i class="fa fa-pencil"></i></a>
                                                                <a href="#"><i class="fa fa-times"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="caption">
                                                    </div>
                                                    <a class="btn btn-success " href="editproducts.php?farming_id=<?php echo $farming->farming_id; ?>" style="width:40%;float:left;"><i class="fa fa-pencil"></i> Edit </a>
                                                    <a href="deleteproduct.php?farming_id=<?php echo $farming->farming_id; ?>"  class="btn btn-danger " style="width:40%;float:right;"><i class="fa fa-times"> Delete </i></a>
                                                </div>
                                            </div>                            
                                            <?php
                                        }
                                    ?>
                                    </div>

                                    <?php

                                    }
                                else if($user->typeofbusiness == "health")
                                    { 
                                    ?>

                                    <?php

                                    }
                                else if($user->typeofbusiness == "catering")
                                    { 
                                    ?>

                                    <div class="row">
                                    <?php
                                        $stmt = $auth_user->runQuery("SELECT * FROM catering WHERE `user_id`='$user_id' ");
                                        $stmt->execute(array());
                                        $catering=$stmt->fetchAll(PDO::FETCH_OBJ);
                                        foreach ($catering as $catering) {
                                            ?>
                                            <div class="col-md-55">
                                                <div class="thumbnail">
                                                    <div class="image view view-first">
                                                        <img style="width: 100%; display: block;" src="<?php echo $catering->cateringserviceimage; ?>" alt="<?php echo $catering->cateringservice; ?>" />
                                                        <div class="mask">
                                                            <p><?php echo $catering->cateringservice; ?></p>
                                                            <div class="tools tools-bottom">
                                                                <a href="#"><i class="fa fa-link"></i></a>
                                                                <a href="#"><i class="fa fa-pencil"></i></a>
                                                                <a href="#"><i class="fa fa-times"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="caption">
                                                    </div>
                                                    <a class="btn btn-success" href="editproducts.php?catering_id=<?php echo $catering->catering_id; ?>" style="width:40%;float:left;"><i class="fa fa-pencil"></i> Edit </a>
                                                    <a href="deleteproduct.php?catering_id=<?php echo $catering->catering_id; ?>"  class="btn btn-danger " style="width:40%;float:right;"><i class="fa fa-times"> Delete </i></a>
                                                </div>
                                            </div>                            
                                            <?php
                                        }
                                    ?>
                                    </div>

                                    <?php

                                    }
                                else if($user->typeofbusiness == "cosmetics")
                                    { 
                                    ?>

                                    <div class="row">
                                    <?php
                                        $stmt = $auth_user->runQuery("SELECT * FROM cosmetics WHERE `user_id`='$user_id' ");
                                        $stmt->execute(array());
                                        $cosmetics=$stmt->fetchAll(PDO::FETCH_OBJ);
                                        foreach ($cosmetics as $cosmetic) {
                                            ?>
                                            <div class="col-md-55">
                                                <div class="thumbnail">
                                                    <div class="image view view-first">
                                                        <img style="width: 100%; display: block;" src="<?php echo $cosmetic->cosmeticimage; ?>" alt="image" />
                                                        <div class="mask">
                                                            <p><?php echo $cosmetic->cosmeticname; ?></p>
                                                            <div class="tools tools-bottom">
                                                                <a href="#"><i class="fa fa-link"></i></a>
                                                                <a href="#"><i class="fa fa-pencil"></i></a>
                                                                <a href="#"><i class="fa fa-times"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="caption">
                                                    </div>
                                                    <a class="btn btn-success " href="editproducts.php?cosmetics_id=<?php echo $cosmetic->cosmetics_id; ?>" style="width:40%;float:left;"><i class="fa fa-pencil"></i> Edit </a>
                                                    <a href="deleteproduct.php?cosmetics_id=<?php echo $cosmetic->cosmetics_id; ?>"  class="btn btn-danger " style="width:40%;float:right;"><i class="fa fa-times"> Delete </i></a>
                                                </div>
                                            </div>                            
                                            <?php
                                        }
                                    ?>
                                    </div>
                  
                                    <?php

                                    }
                                //else if($user->typeofbusiness == "consultancy"){ require_once 'includes/body/updateforms/consultancyeditform.php'; }
                                else if($user->typeofbusiness == "education")
                                    { 
                                    ?>

                                    <div class="row">
                                    <?php
                                        $stmt = $auth_user->runQuery("SELECT * FROM education WHERE `user_id`='$user_id' ");
                                        $stmt->execute(array());
                                        $education=$stmt->fetchAll(PDO::FETCH_OBJ);
                                        foreach ($education as $education) {
                                            ?>
                                            <div class="col-md-55">
                                                <div class="thumbnail">
                                                    <div class="image view view-first">
                                                        <img style="width: 100%; display: block;" src="<?php echo $education->productimage; ?>" alt="<?php echo $education->productname; ?>" />
                                                        <div class="mask">
                                                            <p><?php echo $education->productname; ?></p>
                                                            <div class="tools tools-bottom">
                                                                <a href="#"><i class="fa fa-link"></i></a>
                                                                <a href="#"><i class="fa fa-pencil"></i></a>
                                                                <a href="#"><i class="fa fa-times"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="caption">
                                                    </div>
                                                    <a class="btn btn-success " href="editproducts.php?education_id=<?php echo $education->education_id; ?>" style="width:40%;float:left;"><i class="fa fa-pencil"></i> Edit </a>
                                                    <a href="deleteproduct.php?education_id=<?php echo $education->education_id; ?>" class="btn btn-danger " style="width:40%;float:right;"><i class="fa fa-times"> Delete </i></a>
                                                </div>
                                            </div>                            
                                            <?php
                                        }
                                    ?>
                                    </div>

                                    <?php

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