<?php
$page_title = "Car | View specific car";
$content = "full car details";
?>
<?php require_once 'header.php'; ?>
<?php require_once 'navigation.php'; ?>
<?php
    if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $user = $_GET['user'];
?>

<?php

    $stmt = $auth_user->runQuery("
        SELECT *
                        FROM    `users`
                        JOIN    `shops`
                        ON      `users`.`user_id`=`shops`.`user_id`
                        JOIN    `cars`
                        ON      `users`.`user_name`=`cars`.`user_name`
                        WHERE   `shops`.`user_name` = '$user' AND `cars`.`cars_id`='$id'
                        ");
    $stmt->execute(array());
    $shops=$stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($shops as $shop) {
        ?>


    <div class="container body" style="margin-top:60px;">
      <div class="main_container" >


        <!-- top navigation -->







<?php

$stmt = $auth_user->runQuery("SELECT * FROM cars WHERE `cars_id` = '$id' ");
$stmt->execute(array());
$cars=$stmt->fetchAll(PDO::FETCH_OBJ);
foreach ($cars as $car) {
    ?>




        <!-- top navigation -->
        <!-- /top navigation -->

        <!-- page content -->
        <div class="" role="main">

          <div class="">

            
            <div class="clearfix"></div>

            <div class="">
              <div class="col-md-12 col-sm-12 col-xs-12" id="mypagecard">
                <div class="x_panel">
                  

                  <div class="x_content">

                    <div class="col-md-7 col-sm-7 col-xs-12">
                      <div class="product-image">
                        <img src="<?php echo $car->carimage; ?>" alt="<?php echo $car->carname; ?>" />
                      </div>
                      <div class="product_gallery">
                        <a>
                          <img src="<?php echo $car->carimage; ?>" alt="<?php echo $car->carname; ?>" />
                        </a>
                        <a>
                          <img src="<?php echo $car->carimage; ?>" alt="<?php echo $car->carname; ?>" />
                        </a>
                        <a>
                          <img src="<?php echo $car->carimage; ?>" alt="<?php echo $car->carname; ?>" />
                        </a>
                        <a>
                          <img src="<?php echo $car->carimage; ?>" alt="<?php echo $car->carname; ?>" />
                        </a>
                      </div>

                      <?php require_once 'includes/body/productreviews/car.php'; ?>

                    </div>











                    <div class="col-md-5 col-sm-5 col-xs-12" style="border:0px solid #e5e5e5;">

                      <h1 class=""><?php echo $car->carname; ?> <?php echo $car->cartype; ?></h1>

                      <p><?php echo $car->carmanufacturer; ?></p>
                      <br />

                      <div class="">
                        <h2>Available Colors</h2>
                        <ul class="list-inline prod_color">
                        <?php echo $car->carcolors; ?>
                          <li>
                            <p>Green</p>
                            <div class="color bg-green"></div>
                          </li>
                          <li>
                            <p>Blue</p>
                            <div class="color bg-blue"></div>
                          </li>
                          <li>
                            <p>Red</p>
                            <div class="color bg-red"></div>
                          </li>
                          <li>
                            <p>Orange</p>
                            <div class="color bg-orange"></div>
                          </li>

                        </ul>
                      </div>
                      <br />

                      <br />

                      <div class="">
                        <div class="product_price">
                          <h1 class="price"><?php echo $shop->currency.' '; ?><?php echo number_format($car->carprice, 2); ?></h1>
                          <span class="price-tax">Ex Tax: Ksh80.00</span>
                          <br>
                        </div>
                      </div>

                      <div class="">
                        <button type="button" class="btn btn-default btn-lg">Add to Cart</button>
                        <button type="button" class="btn btn-default btn-lg">Add to Wishlist</button>
                        <a href="contact/<?php echo $shop->user_name; ?>"><button type="button" class="btn btn-default btn-lg">Contact us</button></a>
                      </div>


                      <div class="product_social">
                        <ul class="list-inline">
                          <li><a href="#"><i class="fa fa-facebook-square"></i></a>
                          </li>
                          <li><a href="#"><i class="fa fa-twitter-square"></i></a>
                          </li>
                          <li><a href="#"><i class="fa fa-envelope-square"></i></a>
                          </li>
                          <li><a href="#"><i class="fa fa-rss-square"></i></a>
                          </li>
                        </ul>
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
    <?php require_once 'includes/body/statistics/statistics.php'; ?>      
    </div>

    <?php

}
?>


  




  
  


         <?php
    }
?>
<?php
}
?>  
<?php require_once 'includes/footer/footer.php'; ?>