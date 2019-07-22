<div class="col-md-3 col-sm-3 col-xs-12">
    <div class="x_panel" id="mypagecard">
        <div class="x_title">
            <h2>Daily active users <small>Sessions</small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                    </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <ul class="list-unstyled msg_list">
            <?php

            $stmt = $auth_user->runQuery("SELECT * FROM cars WHERE `user_name` = '$user' ORDER BY carprice LIMIT 6  ");
            $stmt->execute(array());
            $cars=$stmt->fetchAll(PDO::FETCH_OBJ);
            foreach ($cars as $car) {
                ?>
                <li>
                    <a href="car/<?php echo $shop->user_name; ?>/<?php echo $car->cars_id; ?>">
                        <span class="image">
                            <img src="<?php echo $car->carimage; ?>" alt="<?php echo $car->carname; ?>" />
                        </span>
                        <span>
                            <span><?php echo $car->carname; ?></span>
                            <span class="time"><?php echo $shop->currency.' '; ?><?php echo number_format($car->carprice, 2); ?></span>
                        </span>
                    </a>
                </li>
                <?php
            }
            ?>
            </ul>
        </div>
    </div>
</div>