<?php
$stmt = $auth_user->runQuery("SELECT * FROM cars WHERE `user_name` = '$user' ORDER BY `dateposted` DESC LIMIT 1 ");
$stmt->execute(array());
$cars=$stmt->fetchAll(PDO::FETCH_OBJ);
foreach ($cars as $car) {
    ?>
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel" id="mypagecard" style="height:;">
        <div class="x_title">
            <h2><i class="fa fa-bars"></i> </h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="col-xs-12 col-md-3 col-sm-3">
                <ul class="nav nav-tabs tabs-left">
                    <li class="active"><a href="#car1home" data-toggle="tab">Product</a>
                    </li>
                    <li style="text-align:justify;">
                    <h1><?php echo $car->carname; ?></h1>
                    <h2><?php echo $car->carmodel; ?></h2>
                    <?php echo $car->cardetails; ?>
                    </li>
                    <li class="active"><a href="car/<?php echo $shop->user_name; ?>/<?php echo $car->cars_id; ?>" style="cursor:pointer;">View car</a>
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 col-md-9 col-sm-9" style="height:auto;">
                <div class="tab-content">
                    <div class="tab-pane active" id="car1home">
                            <div class="bs-example" data-example-id="simple-jumbotron">
                            <img src="<?php echo $car->carimage; ?>" alt="img"  style="max-height:100%;width:100%;"/>
                                    <h3><?php echo $car->carname; ?> <?php echo $car->carmodel; ?></h3>
                                    <p><b>Price: <?php echo $shop->currency.' '; ?><?php echo number_format($car->carprice, 2); ?></b> <b style="float:right;">Discount: 1.5%</b></p>
                            </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
        <?php
    }
?>


<br />
<div class="col-md-12 col-sm-12">
    <div class="" style="height:300px;">
            <p>
            <?php
            $stmt = $auth_user->runQuery("SELECT * FROM cars WHERE `user_name` = '$user' ");
            $stmt->execute(array());
            $cars=$stmt->fetchAll(PDO::FETCH_OBJ);
            foreach ($cars as $car) {
                ?>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="thumbnail" style="height:300px;">
                            <div class="image view view-first" style="height:200px;">
                                <img style="width: 100%; display: block;" src="<?php echo $car->carimage; ?>" alt="<?php echo $car->carname; ?>" style="height:250px;width:100%;"/>
                                <div class="mask">
                                    <p><?php echo $car->carname; ?></p>
                                    <div class="tools tools-bottom">
                                        <a><?php echo $shop->currency.' '; ?><?php echo number_format($car->carprice, 2); ?></a><br />
                                        <a>Contact us <i class="fa fa-phone"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="mask">
                                    <p><?php echo $car->carmodel; ?></p>
                                    <div class="tools tools-bottom">
                                        <a href="food">Order now</a>
                                    </div>
                                </div>
                            <a class="btn btn-primary col-sm-12 col-md-12" href="car/<?php echo $shop->user_name; ?>/<?php echo $car->cars_id; ?>" style="cursor:pointer;">View car</a>
                        </div>
                    </div>
                <?php
            }
            ?>
            </p>
    </div>
</div>
