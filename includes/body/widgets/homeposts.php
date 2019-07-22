<div class="col-md-8 col-sm-8 col-xs-12">

<?php
    $stmt = $auth_user->runQuery("SELECT * FROM businesscycle WHERE `user_id`='$user_id' ");
    $stmt->execute(array());
    $businesscycle=$stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($businesscycle as $businesscycle) {

            $stmt = $auth_user->runQuery("SELECT * FROM `shops` WHERE `user_name`='$businesscycle->user' ");
            $stmt->execute(array());
            $shops=$stmt->fetchAll(PDO::FETCH_OBJ);
            foreach ($shops as $shop) {

                if($shop->typeofbusiness == "generalshop")
                {
                    ?>


                                

                            <?php
                            $stmt = $auth_user->runQuery("SELECT * FROM `generalshop` WHERE `user_name` = '$shop->user_name' ");
                            $stmt->execute(array());
                            $generalshop=$stmt->fetchAll(PDO::FETCH_OBJ);
                            foreach ($generalshop as $generalshop) {
                                ?>
    <div class="x_panel" id="mypagecard" style="height:;">
        <div class="x_title">
            <h2><i class="fa fa-bars"></i> <?php echo $generalshop->user_name; ?> / <?php echo $generalshop->productname; ?> </h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                <li><a href="#" style="padding:0px;margin:0px;"><img src="images/icons/facebook.png" alt="" /> </a></li>
                <li><a href="#" style="padding:0px;margin:0px;"><img src="images/icons/twitter.png" alt="" /> </a></li>
                <li><a href="#" style="padding:0px;margin:0px;"><img src="images/icons/googleplus.png" alt="" /> </a></li>
                <li><a href="#" style="padding:0px;margin:0px;"><img src="images/icons/linkedin.png" alt="" /> </a></li>
                <li><a href="#" style="padding:0px;margin:0px;"><img src="images/icons/youtube.png" alt="" /> </a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="col-xs-12 col-md-3 col-sm-3">
                <!-- required for floating -->
                <!-- Nav tabs -->
                <ul class="nav nav-tabs tabs-left">
                    <li class="active">
                        <a href="" data-toggle="tab">
                            <?php
                            $stmt = $auth_user->runQuery("SELECT * FROM `users` WHERE `user_name` = '$shop->user_name' ");
                            $stmt->execute(array());
                            $users=$stmt->fetchAll(PDO::FETCH_OBJ);
                            foreach ($users as $user) {
                                ?><div class=" caption">
                                    <img src="<?php echo $user->profileimage; ?>" alt="" style="max-height:100px;" /> 
                                </div>
                                <?php
                                }
                            ?>
                        </a>
                    </li>
                    <li class="active"><a style="margin-left:2px;padding-left:2px;" href="#generalshop<?php echo $generalshop->generalshop_id; ?>home" data-toggle="tab"><span class="glyphicon glyphicon-camera"></span> Product</a>
                    </li>
                    <li><a style="margin-left:2px;padding-left:2px;" href="#generalshop<?php echo $generalshop->generalshop_id; ?>profile" data-toggle="tab"><span class="glyphicon glyphicon-book"></span> About</a>
                    </li>
                    <li><a style="margin-left:2px;padding-left:2px;" href="<?php echo $shop->typeofbusiness; ?>/<?php echo $shop->user_name; ?>" data-toggle=""><span class="glyphicon glyphicon-home"></span> Shop</a>
                    </li>
                    <li><a style="margin-left:2px;padding-left:2px;" href="contact/<?php echo $shop->user_name; ?>" data-toggle="" ><span class="glyphicon glyphicon-envelope"></span> Contact</a>
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-9 col-md-9" style="height:325px;">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="generalshop<?php echo $generalshop->generalshop_id; ?>home">

                            <div class="bs-example thumbnail caption" data-example-id="simple-jumbotron" style="height:320px;width:auto;">
                                <div class="image view view-first col-xs-12 col-sm-7 col-md-7" style="height:300px;">
                                    <img src="<?php echo $generalshop->productimage; ?>" alt="img"  style="max-height:100%;width:90%;"/>
                                            <h3><?php echo $generalshop->productname; ?></h3>
                                            <p><b>Price: <?php echo $shop->currency.' '; ?><?php echo $generalshop->productprice; ?></b></p>
                                    <div class="mask">
                                        <h3><?php echo $generalshop->productname; ?></h3>
                                        <p><?php echo $generalshop->productspecification; ?></p>
                                        <div class="tools tools-bottom">
                                            <a>Price: <?php echo $shop->currency.' '; ?><?php echo number_format($generalshop->productprice, 2); ?></a><br />
                                            <a>Order now</a><br />
                                        </div>
                                    </div>
                                </div>

                                <div class="image view-first col-xs-12 col-sm-5 col-md-5" style="height:300px;">
                                        <p class="lead"><?php echo $generalshop->productname; ?></p>
                                        <p><?php echo $generalshop->productspecification; ?></p>
                                        <h3>Price: <b class="red"><?php echo $shop->currency.' '; ?><?php echo number_format($generalshop->productprice, 2); ?></b></h3>
                                </div>
                            </div>

                    </div>
                    <div class="tab-pane" id="generalshop<?php echo $generalshop->generalshop_id; ?>profile">
                        <div class="bs-example thumbnail caption " data-example-id="simple-jumbotron" style="height:320px;width:auto;overflow-y:scroll;">
                            <p class="lead"><?php echo $generalshop->productname; ?></p>
                            <p><?php echo $generalshop->productspecification; ?></p>
                            <h3>Price: <?php echo $shop->currency.' '; ?><b class="red"><?php echo $shop->currency.' '; ?><?php echo number_format($generalshop->productprice, 2); ?></b></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
                                <?php
                                }
                            ?>





                    <?php
                }
                else if($shop->typeofbusiness == "cosmetics")
                {
                    ?>


                                


                            <?php
                            $stmt = $auth_user->runQuery("SELECT * FROM `cosmetics` WHERE `user_name` = '$shop->user_name' ");
                            $stmt->execute(array());
                            $cosmetics=$stmt->fetchAll(PDO::FETCH_OBJ);
                            foreach ($cosmetics as $cosmetics) {
                                ?>
    <div class="x_panel" id="mypagecard" style="height:;">
        <div class="x_title">
            <h2><i class="fa fa-bars"></i> <?php echo $cosmetics->user_name; ?> / <?php echo $cosmetics->cosmeticname; ?> </h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                <li><a href="#" style="padding:0px;margin:0px;"><img src="images/icons/facebook.png" alt="" /> </a></li>
                <li><a href="#" style="padding:0px;margin:0px;"><img src="images/icons/twitter.png" alt="" /> </a></li>
                <li><a href="#" style="padding:0px;margin:0px;"><img src="images/icons/googleplus.png" alt="" /> </a></li>
                <li><a href="#" style="padding:0px;margin:0px;"><img src="images/icons/linkedin.png" alt="" /> </a></li>
                <li><a href="#" style="padding:0px;margin:0px;"><img src="images/icons/youtube.png" alt="" /> </a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="col-xs-12 col-md-3 col-sm-3">
                <!-- required for floating -->
                <!-- Nav tabs -->
                <ul class="nav nav-tabs tabs-left">
                    <li class="active">
                        <a href="" data-toggle="tab">
                            <?php
                            $stmt = $auth_user->runQuery("SELECT * FROM `users` WHERE `user_name` = '$shop->user_name' ");
                            $stmt->execute(array());
                            $users=$stmt->fetchAll(PDO::FETCH_OBJ);
                            foreach ($users as $user) {
                                ?><div class=" caption">
                                    <img src="<?php echo $user->profileimage; ?>" alt="" style="max-height:100px;" /> 
                                </div>
                                <?php
                                }
                            ?>
                        </a>
                    </li>
                    <li class="active"><a style="margin-left:2px;padding-left:2px;" href="#cosmetics<?php echo $cosmetics->cosmetics_id; ?>home" data-toggle="tab"><span class="glyphicon glyphicon-camera"></span> Product</a>
                    </li>
                    <li><a style="margin-left:2px;padding-left:2px;" href="#cosmetics<?php echo $cosmetics->cosmetics_id; ?>profile" data-toggle="tab"><span class="glyphicon glyphicon-book"></span> About</a>
                    </li>
                    <li><a style="margin-left:2px;padding-left:2px;" href="<?php echo $shop->typeofbusiness; ?>/<?php echo $shop->user_name; ?>" data-toggle=""><span class="glyphicon glyphicon-home"></span> Shop</a>
                    </li>
                    <li><a style="margin-left:2px;padding-left:2px;" href="contact/<?php echo $shop->user_name; ?>" data-toggle="" ><span class="glyphicon glyphicon-envelope"></span> Contact</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-9 col-md-9 col-xs-12" style="height:325px;">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="cosmetics<?php echo $cosmetics->cosmetics_id; ?>home">

                            <div class="bs-example thumbnail caption" data-example-id="simple-jumbotron" style="height:320px;width:auto;">
                            <div class="image view view-first" style="height:300px;">
                            <img src="<?php echo $cosmetics->cosmeticimage; ?>" alt="img"  style="height:300px;width:auto;"/>
                                    <h3><?php echo $cosmetics->cosmeticname; ?></h3>
                                    <p><b>Price: <?php echo $shop->currency.' '; ?><?php echo number_format($cosmetics->cosmeticprice, 2); ?></b></p>

                            <div class="mask">
                                <h3><?php echo $cosmetics->cosmeticname; ?></h3>
                                <p><?php echo $cosmetics->cosmeticdetails; ?></p>
                                <div class="tools tools-bottom">
                                    <a href="#">Price: <?php echo $shop->currency.' '; ?><?php echo number_format($cosmetics->cosmeticprice, 2); ?></a><br />
                                    <a href="#">Order now</a><br />
                                </div>
                            </div>

                            </div>
                            </div>

                    </div>
                    <div class="tab-pane" id="cosmetics<?php echo $cosmetics->cosmetics_id; ?>profile">
                        <div class="bs-example thumbnail caption " data-example-id="simple-jumbotron" style="height:320px;width:auto;overflow-y:scroll;">
                            <p class="lead"><?php echo $cosmetics->cosmeticname; ?></p>
                            <p><?php echo $cosmetics->cosmeticdetails; ?></p>
                            <h3>Price: <?php echo $shop->currency.' '; ?><b class="red"><?php echo number_format($cosmetics->cosmeticprice, 2); ?></b></h3>
                            <p class="lead">Manufacturer: <?php echo $cosmetics->cosmeticmanufacturer; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
                                <?php
                                }
                            ?>





                    <?php
                }
                else if($shop->typeofbusiness == "cars")
                {
                    ?>


                                

                            <?php
                            $stmt = $auth_user->runQuery("SELECT * FROM `cars` WHERE `user_name` = '$shop->user_name' ");
                            $stmt->execute(array());
                            $cars=$stmt->fetchAll(PDO::FETCH_OBJ);
                            foreach ($cars as $cars) {?>
    <div class="x_panel" id="mypagecard" style="height:;">
        <div class="x_title">
            <h2><i class="fa fa-bars"></i> <?php echo $cars->user_name; ?> / <?php echo $cars->carname; ?> </h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                <li><a href="#" style="padding:0px;margin:0px;"><img src="images/icons/facebook.png" alt="" /> </a></li>
                <li><a href="#" style="padding:0px;margin:0px;"><img src="images/icons/twitter.png" alt="" /> </a></li>
                <li><a href="#" style="padding:0px;margin:0px;"><img src="images/icons/googleplus.png" alt="" /> </a></li>
                <li><a href="#" style="padding:0px;margin:0px;"><img src="images/icons/linkedin.png" alt="" /> </a></li>
                <li><a href="#" style="padding:0px;margin:0px;"><img src="images/icons/youtube.png" alt="" /> </a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="col-xs-12 col-md-3 col-sm-3">
                <!-- required for floating -->
                <!-- Nav tabs -->
                <ul class="nav nav-tabs tabs-left">
                    <li class="active">
                        <a href="" data-toggle="tab">
                            <?php
                            $stmt = $auth_user->runQuery("SELECT * FROM `users` WHERE `user_name` = '$shop->user_name' ");
                            $stmt->execute(array());
                            $users=$stmt->fetchAll(PDO::FETCH_OBJ);
                            foreach ($users as $user) {
                                ?><div class=" caption">
                                    <img src="<?php echo $user->profileimage; ?>" alt="" style="max-height:100px;" /> 
                                </div>
                                <?php
                                }
                            ?>
                        </a>
                    </li>



                    <li class="active"><a style="margin-left:2px;padding-left:2px;" href="#cars<?php echo $cars->cars_id; ?>home" data-toggle="tab"><span class="glyphicon glyphicon-camera"></span> Product</a>
                    </li>
                    <li><a style="margin-left:2px;padding-left:2px;" href="#cars<?php echo $cars->cars_id; ?>profile" data-toggle="tab"><span class="glyphicon glyphicon-book"></span> About</a>
                    </li>
                    <li><a style="margin-left:2px;padding-left:2px;" href="<?php echo $shop->typeofbusiness; ?>/<?php echo $shop->user_name; ?>" data-toggle=""><span class="glyphicon glyphicon-home"></span> Shop</a>
                    </li>
                    <li><a style="margin-left:2px;padding-left:2px;" href="contact/<?php echo $shop->user_name; ?>" data-toggle="" ><span class="glyphicon glyphicon-envelope"></span> Contact</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-9 col-md-9 col-xs-12" style="height:325px;">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="cars<?php echo $cars->cars_id; ?>home">

                            <div class="bs-example thumbnail caption" data-example-id="simple-jumbotron" style="height:320px;width:auto;">
                            <div class="image view view-first" style="height:300px;">
                            <img src="<?php echo $cars->carimage; ?>" alt="img"  style="height:300px;width:auto;"/>
                                    <h3><?php echo $cars->carname; ?></h3>
                                    <p><b>Price: <?php echo $shop->currency.' '; ?><?php echo number_format($cars->carprice, 2); ?></b></p>

                            <div class="mask">
                                <h3><?php echo $cars->carname; ?></h3>
                                <p><?php echo $cars->cardetails; ?></p>
                                <div class="tools tools-bottom">
                                    <a href="#">Price: <?php echo $shop->currency.' '; ?><?php echo number_format($cars->carprice, 2); ?></a><br />
                                    <a href="#">Order now</a><br />
                                </div>
                            </div>

                            </div>
                            </div>

                    </div>
                    <div class="tab-pane" id="cars<?php echo $cars->cars_id; ?>profile">
                        <div class="bs-example thumbnail caption " data-example-id="simple-jumbotron" style="height:320px;width:auto;overflow-y:scroll;">
                            <p class="lead"><?php echo $cars->carname; ?></p>
                            <p><?php echo $cars->cardetails; ?></p>
                            <h3>Price: <?php echo $shop->currency.' '; ?><b class="red"><?php echo number_format($cars->carprice, 2); ?></b></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

                                <?php
                                }
                            ?>




                    <?php
                }
                else if($shop->typeofbusiness == "catering")
                {
                    ?>


                             <?php
                            $stmt = $auth_user->runQuery("SELECT * FROM `catering` WHERE `user_name` = '$shop->user_name' ");
                            $stmt->execute(array());
                            $catering=$stmt->fetchAll(PDO::FETCH_OBJ);
                            foreach ($catering as $catering) {
                                ?>
                               
    <div class="x_panel" id="mypagecard" style="height:;">
        <div class="x_title">
            <h2><i class="fa fa-bars"></i> <?php echo $catering->user_name; ?> / <?php echo $catering->cateringservice; ?> </h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                <li><a href="#" style="padding:0px;margin:0px;"><img src="images/icons/facebook.png" alt="" /> </a></li>
                <li><a href="#" style="padding:0px;margin:0px;"><img src="images/icons/twitter.png" alt="" /> </a></li>
                <li><a href="#" style="padding:0px;margin:0px;"><img src="images/icons/googleplus.png" alt="" /> </a></li>
                <li><a href="#" style="padding:0px;margin:0px;"><img src="images/icons/linkedin.png" alt="" /> </a></li>
                <li><a href="#" style="padding:0px;margin:0px;"><img src="images/icons/youtube.png" alt="" /> </a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="col-xs-12 col-md-3 col-sm-3">
                <!-- required for floating -->
                <!-- Nav tabs -->
                <ul class="nav nav-tabs tabs-left">
                    <li class="active">
                        <a href="" data-toggle="tab">
                            <?php
                            $stmt = $auth_user->runQuery("SELECT * FROM `users` WHERE `user_name` = '$shop->user_name' ");
                            $stmt->execute(array());
                            $users=$stmt->fetchAll(PDO::FETCH_OBJ);
                            foreach ($users as $user) {
                                ?><div class=" caption">
                                    <img src="<?php echo $user->profileimage; ?>" alt="" style="max-height:100px;" /> 
                                </div>
                                <?php
                                }
                            ?>
                        </a>
                    </li>

                    <li class="active"><a style="margin-left:2px;padding-left:2px;" href="#catering<?php echo $catering->catering_id; ?>home" data-toggle="tab"><span class="glyphicon glyphicon-camera"></span> Product</a>
                    </li>
                    <li><a style="margin-left:2px;padding-left:2px;" href="#catering<?php echo $catering->catering_id; ?>profile" data-toggle="tab"><span class="glyphicon glyphicon-book"></span> About</a>
                    </li>
                    <li><a style="margin-left:2px;padding-left:2px;" href="<?php echo $shop->typeofbusiness; ?>/<?php echo $shop->user_name; ?>" data-toggle=""><span class="glyphicon glyphicon-home"></span> Shop</a>
                    </li>
                    <li><a style="margin-left:2px;padding-left:2px;" href="contact/<?php echo $shop->user_name; ?>" data-toggle="" ><span class="glyphicon glyphicon-envelope"></span> Contact</a>
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-9 col-md-9" style="height:325px;">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="catering<?php echo $catering->catering_id; ?>home">

                            <div class="bs-example thumbnail caption" data-example-id="simple-jumbotron" style="height:320px;width:auto;">
                                <div class="image view view-first col-xs-12 col-sm-7 col-md-7" style="height:300px;">
                                    <img src="<?php echo $catering->cateringserviceimage; ?>" alt="<?php echo $catering->cateringservice; ?>"  style="max-height:100%;width:90%;"/>
                                            <h3><?php echo $catering->cateringservice; ?></h3>
                                            <p><b>Price: <?php echo $shop->currency.' '; ?><?php echo number_format($catering->cateringserviceprice, 2); ?></b></p>
                                    <div class="mask">
                                        <h3><?php echo $catering->cateringservice; ?></h3>
                                        <p>Get the best of fast food</p>
                                        <div class="tools tools-bottom">
                                            <a>Price: <?php echo $shop->currency.' '; ?><?php echo number_format($catering->cateringserviceprice, 2); ?></a><br />
                                            <a>Order now</a><br />
                                        </div>
                                    </div>
                                </div>

                                <div class="image view-first col-xs-12 col-sm-5 col-md-5" style="height:300px;">
                                        <p class="lead"><?php echo $catering->cateringservice; ?></p>
                                        <p>Get the best of fast food</p>
                                        <h3>Price: <?php echo $shop->currency.' '; ?><b class="red"><?php echo number_format($catering->cateringserviceprice, 2); ?></b></h3>
                                </div>
                            </div>

                    </div>
                    <div class="tab-pane" id="catering<?php echo $catering->catering_id; ?>profile">
                        <div class="bs-example thumbnail caption " data-example-id="simple-jumbotron" style="height:320px;width:auto;overflow-y:scroll;">
                            <p class="lead"><?php echo $catering->cateringservice; ?></p>
                            <p>Get the best of fast food</p>
                            <h3>Price: <?php echo $shop->currency.' '; ?><b class="red"><?php echo number_format($catering->cateringserviceprice, 2); ?></b></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
                                <?php
                                }
                            ?>



                    <?php
                }
                else if($shop->typeofbusiness == "education")
                {
                    ?>

                                









                            <?php
                            $stmt = $auth_user->runQuery("SELECT * FROM `education` WHERE `user_name` = '$shop->user_name' ");
                            $stmt->execute(array());
                            $education=$stmt->fetchAll(PDO::FETCH_OBJ);
                            foreach ($education as $education) {
                                ?>
    <div class="x_panel" id="mypagecard" style="height:;">
        <div class="x_title">
            <h2><i class="fa fa-bars"></i> <?php echo $education->user_name; ?> / <?php echo $education->producttitle; ?> </h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                <li><a href="#" style="padding:0px;margin:0px;"><img src="images/icons/facebook.png" alt="" /> </a></li>
                <li><a href="#" style="padding:0px;margin:0px;"><img src="images/icons/twitter.png" alt="" /> </a></li>
                <li><a href="#" style="padding:0px;margin:0px;"><img src="images/icons/googleplus.png" alt="" /> </a></li>
                <li><a href="#" style="padding:0px;margin:0px;"><img src="images/icons/linkedin.png" alt="" /> </a></li>
                <li><a href="#" style="padding:0px;margin:0px;"><img src="images/icons/youtube.png" alt="" /> </a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="col-xs-12 col-md-3 col-sm-3">
                <!-- required for floating -->
                <!-- Nav tabs -->
                <ul class="nav nav-tabs tabs-left">
                    <li class="active">
                        <a href="" data-toggle="tab">
                            <?php
                            $stmt = $auth_user->runQuery("SELECT * FROM `users` WHERE `user_name` = '$shop->user_name' ");
                            $stmt->execute(array());
                            $users=$stmt->fetchAll(PDO::FETCH_OBJ);
                            foreach ($users as $user) {
                                ?><div class=" caption">
                                    <img src="<?php echo $user->profileimage; ?>" alt="" style="max-height:100px;" /> 
                                </div>
                                <?php
                                }
                            ?>
                        </a>
                    </li>                
                    <li class="active"><a style="margin-left:2px;padding-left:2px;" href="#education<?php echo $education->education_id; ?>home" data-toggle="tab"><span class="glyphicon glyphicon-camera"></span> Product</a>
                    </li>
                    <li><a style="margin-left:2px;padding-left:2px;" href="#education<?php echo $education->education_id; ?>profile" data-toggle="tab"><span class="glyphicon glyphicon-book"></span> About</a>
                    </li>
                    <li><a style="margin-left:2px;padding-left:2px;" href="<?php echo $shop->typeofbusiness; ?>/<?php echo $shop->user_name; ?>" data-toggle=""><span class="glyphicon glyphicon-home"></span> Shop</a>
                    </li>
                    <li><a style="margin-left:2px;padding-left:2px;" href="contact/<?php echo $shop->user_name; ?>" data-toggle=""><span class="glyphicon glyphicon-envelope"></span> Contact</a>
                    </li>
                </ul>
            </div>
            <div class="col-xs-9" style="height:325px;">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="education<?php echo $education->education_id; ?>home">

                     
                            <div class="bs-example thumbnail caption " data-example-id="simple-jumbotron" style="height:320px;width:auto;">
                            <div class="image view view-first" style="height:300px;">
                            <img src="<?php echo $education->productimage; ?>" alt="img"  style="max-height:300px;width:auto;"/>

                            <div class="mask">
                                <h3><?php echo $education->producttitle; ?></h3>
                                <p><?php echo $education->productdetails; ?></p>
                                <div class="tools tools-bottom">
                                    <a href="#">Price: <?php echo $shop->currency.' '; ?><?php echo number_format($education->productprice, 2); ?></a><br />
                                    <a href="#">Order now</a><br />
                                </div>
                            </div>
                            </div>
                            </div>

                    </div>
                    <div class="tab-pane" id="education<?php echo $education->education_id; ?>profile">
                        <div class="bs-example thumbnail caption " data-example-id="simple-jumbotron" style="height:320px;width:auto;overflow-y:scroll;">
                            <p class="lead"><?php echo $education->producttitle; ?></p>
                            <p><?php echo $education->productdetails; ?></p>
                            <h3>Price: <?php echo $shop->currency.' '; ?><b class="red"><?php echo number_format($education->productprice, 2); ?></b></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
                                <?php
                                }
                            ?>


                    <?php
                }
                else if($shop->typeofbusiness == "farming")
                {
                    ?>



                            <?php
                            $stmt = $auth_user->runQuery("SELECT * FROM `farming` WHERE `user_name` = '$shop->user_name' ");
                            $stmt->execute(array());
                            $farming=$stmt->fetchAll(PDO::FETCH_OBJ);
                            foreach ($farming as $farming) {
                                ?>                                
    <div class="x_panel" id="mypagecard" style="height:;">
        <div class="x_title">
            <h2><i class="fa fa-bars"></i> <?php echo $farming->user_name; ?> / <?php echo $farming->farmproduct; ?> </h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                <li><a href="#" style="padding:0px;margin:0px;"><img src="images/icons/facebook.png" alt="" /> </a></li>
                <li><a href="#" style="padding:0px;margin:0px;"><img src="images/icons/twitter.png" alt="" /> </a></li>
                <li><a href="#" style="padding:0px;margin:0px;"><img src="images/icons/googleplus.png" alt="" /> </a></li>
                <li><a href="#" style="padding:0px;margin:0px;"><img src="images/icons/linkedin.png" alt="" /> </a></li>
                <li><a href="#" style="padding:0px;margin:0px;"><img src="images/icons/youtube.png" alt="" /> </a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="col-xs-12 col-md-3 col-sm-3">
                <!-- required for floating -->
                <!-- Nav tabs -->
                <ul class="nav nav-tabs tabs-left">
                    <li class="active">
                        <a href="" data-toggle="tab">
                            <?php
                            $stmt = $auth_user->runQuery("SELECT * FROM `users` WHERE `user_name` = '$shop->user_name' ");
                            $stmt->execute(array());
                            $users=$stmt->fetchAll(PDO::FETCH_OBJ);
                            foreach ($users as $user) {
                                ?><div class=" caption">
                                    <img src="<?php echo $user->profileimage; ?>" alt="" style="max-height:100px;" /> 
                                </div>
                                <?php
                                }
                            ?>
                        </a>
                    </li>
                    <li class="active"><a style="margin-left:2px;padding-left:2px;" href="#farming<?php echo $farming->farming_id; ?>home" data-toggle="tab"><span class="glyphicon glyphicon-camera"></span> Product</a>
                    </li>
                    <li><a style="margin-left:2px;padding-left:2px;" href="#farming<?php echo $farming->farming_id; ?>profile" data-toggle="tab"><span class="glyphicon glyphicon-book"></span> About</a>
                    </li>
                    <li><a style="margin-left:2px;padding-left:2px;" href="<?php echo $shop->typeofbusiness; ?>/<?php echo $shop->user_name; ?>" data-toggle=""><span class="glyphicon glyphicon-home"></span> Shop</a>
                    </li>
                    <li><a style="margin-left:2px;padding-left:2px;" href="contact/<?php echo $shop->user_name; ?>" data-toggle="" ><span class="glyphicon glyphicon-envelope"></span> Contact</a>
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-9 col-md-9" style="height:325px;">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="farming<?php echo $farming->farming_id; ?>home">

                            <div class="bs-example thumbnail caption" data-example-id="simple-jumbotron" style="height:320px;width:auto;">
                                <div class="image view view-first col-xs-12 col-sm-7 col-md-7" style="height:300px;">
                                    <img src="<?php echo $farming->farmproductimage; ?>" alt="img"  style="max-height:100%;width:90%;"/>
                                            <h3><?php echo $farming->farmproduct; ?></h3>
                                            <p><b>Price: <?php echo $shop->currency.' '; ?><?php echo number_format($farming->farmproductprice, 2); ?></b></p>
                                    <div class="mask">
                                        <h3><?php echo $farming->farmproduct; ?></h3>
                                        <p><?php echo $farming->farmproductdetails; ?></p>
                                        <div class="tools tools-bottom">
                                            <a>Price: <?php echo $shop->currency.' '; ?><?php echo number_format($farming->farmproductprice, 2); ?></a><br />
                                            <a>Order now</a><br />
                                        </div>
                                    </div>
                                </div>

                                <div class="image view-first col-xs-12 col-sm-5 col-md-5" style="height:300px;">
                                        <p class="lead"><?php echo $farming->farmproduct; ?></p>
                                        <p><?php echo $farming->farmproductdetails; ?></p>
                                        <h3>Price: <?php echo $shop->currency.' '; ?><b class="red"><?php echo number_format($farming->farmproductprice, 2); ?></b></h3>
                                </div>
                            </div>

                    </div>
                    <div class="tab-pane" id="farming<?php echo $farming->farming_id; ?>profile">
                        <div class="bs-example thumbnail caption " data-example-id="simple-jumbotron" style="height:320px;width:auto;overflow-y:scroll;">
                            <p class="lead"><?php echo $farming->farmproduct; ?></p>
                            <p><?php echo $farming->farmproductdetails; ?></p>
                            <h3>Price: <?php echo $shop->currency.' '; ?><b class="red"><?php echo number_format($farming->farmproductprice, 2); ?></b></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
                                <?php
                                }
                            ?>



                    <?php
                }
                else if($shop->typeofbusiness == "hotels")
                {
                    ?>



                            <?php
                            $stmt = $auth_user->runQuery("SELECT * FROM `hotels` WHERE `user_name` = '$shop->user_name' ");
                            $stmt->execute(array());
                            $hotels=$stmt->fetchAll(PDO::FETCH_OBJ);
                            foreach ($hotels as $hotels) {
                                ?>                                
    <div class="x_panel" id="mypagecard" style="height:;">
        <div class="x_title">
            <h2><i class="fa fa-bars"></i> <?php echo $hotels->user_name; ?> / <?php echo $hotels->hotelname; ?> </h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                <li><a href="#" style="padding:0px;margin:0px;"><img src="images/icons/facebook.png" alt="" /> </a></li>
                <li><a href="#" style="padding:0px;margin:0px;"><img src="images/icons/twitter.png" alt="" /> </a></li>
                <li><a href="#" style="padding:0px;margin:0px;"><img src="images/icons/googleplus.png" alt="" /> </a></li>
                <li><a href="#" style="padding:0px;margin:0px;"><img src="images/icons/linkedin.png" alt="" /> </a></li>
                <li><a href="#" style="padding:0px;margin:0px;"><img src="images/icons/youtube.png" alt="" /> </a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="col-xs-12 col-md-3 col-sm-3">
                <!-- required for floating -->
                <!-- Nav tabs -->
                <ul class="nav nav-tabs tabs-left">
                    <li class="active">
                        <a href="" data-toggle="tab">
                            <?php
                            $stmt = $auth_user->runQuery("SELECT * FROM `users` WHERE `user_name` = '$shop->user_name' ");
                            $stmt->execute(array());
                            $users=$stmt->fetchAll(PDO::FETCH_OBJ);
                            foreach ($users as $user) {
                                ?><div class=" caption">
                                    <img src="<?php echo $user->profileimage; ?>" alt="" style="max-height:100px;" /> 
                                </div>
                                <?php
                                }
                            ?>
                        </a>
                    </li>
                    <li class="active"><a style="margin-left:2px;padding-left:2px;" href="#hotels<?php echo $hotels->hotels_id; ?>home" data-toggle="tab"><span class="glyphicon glyphicon-camera"></span> Product</a>
                    </li>
                    <li><a style="margin-left:2px;padding-left:2px;" href="#hotels<?php echo $hotels->hotels_id; ?>profile" data-toggle="tab"><span class="glyphicon glyphicon-book"></span> About</a>
                    </li>
                    <li><a style="margin-left:2px;padding-left:2px;" href="<?php echo $shop->typeofbusiness; ?>/<?php echo $shop->user_name; ?>" data-toggle=""><span class="glyphicon glyphicon-home"></span> Shop</a>
                    </li>
                    <li><a style="margin-left:2px;padding-left:2px;" href="contact/<?php echo $shop->user_name; ?>" data-toggle="" ><span class="glyphicon glyphicon-envelope"></span> Contact</a>
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-9 col-md-9" style="height:325px;">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="hotels<?php echo $hotels->hotels_id; ?>home">

                            <div class="bs-example thumbnail caption" data-example-id="simple-jumbotron" style="height:320px;width:auto;">
                                <div class="image view view-first col-xs-12 col-sm-7 col-md-7" style="height:300px;">
                                    <img src="<?php echo $hotels->hotelroomimage; ?>" alt="img"  style="max-height:100%;width:90%;"/>
                                            <h3><?php echo $hotels->hotelname; ?></h3>
                                            <p><b>Price: <?php echo $shop->currency.' '; ?><?php echo number_format($hotels->hotelroomprice, 2); ?></b></p>
                                    <div class="mask">
                                        <h3><?php echo $hotels->hotelname; ?></h3>
                                        <p><?php echo $hotels->hotelroomdetails; ?></p>
                                        <div class="tools tools-bottom">
                                            <a>Price: <?php echo $shop->currency.' '; ?><?php echo number_format($hotels->hotelroomprice, 2); ?></a><br />
                                            <a>Order now</a><br />
                                        </div>
                                    </div>
                                </div>

                                <div class="image view-first col-xs-12 col-sm-5 col-md-5" style="height:300px;">
                                        <p class="lead"><?php echo $hotels->hotelname; ?></p>
                                        <p><?php echo $hotels->hotelroomdetails; ?></p>
                                        <h4>HOTEL LOCATION: <?php echo $hotels->hotellocation; ?></h4>
                                        <h3>Price: <?php echo $shop->currency.' '; ?><b class="red"><?php echo number_format($hotels->hotelroomprice, 2); ?></b></h3>
                                </div>
                            </div>

                    </div>
                    <div class="tab-pane" id="hotels<?php echo $hotels->hotels_id; ?>profile">
                        <div class="bs-example thumbnail caption " data-example-id="simple-jumbotron" style="height:320px;width:auto;overflow-y:scroll;">
                            <p class="lead"><?php echo $hotels->hotelname; ?></p>
                            <p><?php echo $hotels->hotelroomdetails; ?></p>
                            <h4>HOTEL LOCATION: <?php echo $hotels->hotellocation; ?></h4>
                            <h3>Price: <?php echo $shop->currency.' '; ?><b class="red"><?php echo number_format($hotels->hotelroomprice, 2); ?></b></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
                                <?php
                                }
                            ?>



                    <?php
                }
                else if($shop->typeofbusiness == "food")
                {
                    ?>



                            <?php
                            $stmt = $auth_user->runQuery("SELECT * FROM `food` WHERE `user_name` = '$shop->user_name' ");
                            $stmt->execute(array());
                            $food=$stmt->fetchAll(PDO::FETCH_OBJ);
                            foreach ($food as $food) {
                                ?>                                
    <div class="x_panel" id="mypagecard" style="height:;">
        <div class="x_title">
            <h2><i class="fa fa-bars"></i> <?php echo $food->user_name; ?> / <?php echo $food->snackname; ?> </h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                <li><a href="#" style="padding:0px;margin:0px;"><img src="images/icons/facebook.png" alt="" /> </a></li>
                <li><a href="#" style="padding:0px;margin:0px;"><img src="images/icons/twitter.png" alt="" /> </a></li>
                <li><a href="#" style="padding:0px;margin:0px;"><img src="images/icons/googleplus.png" alt="" /> </a></li>
                <li><a href="#" style="padding:0px;margin:0px;"><img src="images/icons/linkedin.png" alt="" /> </a></li>
                <li><a href="#" style="padding:0px;margin:0px;"><img src="images/icons/youtube.png" alt="" /> </a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="col-xs-12 col-md-3 col-sm-3">
                <!-- required for floating -->
                <!-- Nav tabs -->
                <ul class="nav nav-tabs tabs-left">
                    <li class="active">
                        <a href="" data-toggle="tab">
                            <?php
                            $stmt = $auth_user->runQuery("SELECT * FROM `users` WHERE `user_name` = '$shop->user_name' ");
                            $stmt->execute(array());
                            $users=$stmt->fetchAll(PDO::FETCH_OBJ);
                            foreach ($users as $user) {
                                ?><div class=" caption">
                                    <img src="<?php echo $user->profileimage; ?>" alt="" style="max-height:100px;" /> 
                                </div>
                                <?php
                                }
                            ?>
                        </a>
                    </li>
                    <li class="active"><a style="margin-left:2px;padding-left:2px;" href="#food<?php echo $food->food_id; ?>home" data-toggle="tab"><span class="glyphicon glyphicon-camera"></span> Product</a>
                    </li>
                    <li><a style="margin-left:2px;padding-left:2px;" href="#food<?php echo $food->food_id; ?>profile" data-toggle="tab"><span class="glyphicon glyphicon-book"></span> About</a>
                    </li>
                    <li><a style="margin-left:2px;padding-left:2px;" href="<?php echo $shop->typeofbusiness; ?>/<?php echo $shop->user_name; ?>" data-toggle=""><span class="glyphicon glyphicon-home"></span> Shop</a>
                    </li>
                    <li><a style="margin-left:2px;padding-left:2px;" href="contact/<?php echo $shop->user_name; ?>" data-toggle="" ><span class="glyphicon glyphicon-envelope"></span> Contact</a>
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-9 col-md-9" style="height:325px;">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="food<?php echo $food->food_id; ?>home">

                            <div class="bs-example thumbnail caption" data-example-id="simple-jumbotron" style="height:320px;width:auto;">
                                <div class="image view view-first col-xs-12 col-sm-7 col-md-7" style="height:300px;">
                                    <img src="<?php echo $food->snackimage; ?>" alt="img"  style="max-height:100%;width:90%;"/>
                                            <h3><?php echo $food->snackname; ?></h3>
                                            <p><b>Price: <?php echo $shop->currency.' '; ?><?php echo number_format($food->snackprice, 2); ?></b></p>
                                    <div class="mask">
                                        <h3><?php echo $food->snackname; ?></h3>
                                        <p><?php echo $food->snackdetails; ?></p>
                                        <div class="tools tools-bottom">
                                            <a>Price: <?php echo $shop->currency.' '; ?><?php echo number_format($food->snackprice, 2); ?></a><br />
                                            <a>Order now</a><br />
                                        </div>
                                    </div>
                                </div>

                                <div class="image view-first col-xs-12 col-sm-5 col-md-5" style="height:300px;">
                                        <p class="lead"><?php echo $food->snackname; ?></p>
                                        <p><?php echo $food->snackdetails; ?></p>
                                        <h3>Price: <?php echo $shop->currency.' '; ?><b class="red"><?php echo number_format($food->snackprice, 2); ?></b></h3>
                                </div>
                            </div>

                    </div>
                    <div class="tab-pane" id="food<?php echo $food->food_id; ?>profile">
                        <div class="bs-example thumbnail caption " data-example-id="simple-jumbotron" style="height:320px;width:auto;overflow-y:scroll;">
                            <p class="lead"><?php echo $food->snackname; ?></p>
                            <p><?php echo $food->snackdetails; ?></p>
                            <h3>Price: <?php echo $shop->currency.' '; ?><b class="red"><?php echo number_format($food->snackprice, 2); ?></b></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
                                <?php
                                }
                            ?>



                    <?php
                }
                else{
                    echo 'ERROR NOF FOUND';
                }
                
            }

    }
?>


</div>