<?php
$page_title = "Catering service |";
$content = "Full catering service details";
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
                        JOIN    `catering`
                        ON      `users`.`user_name`=`catering`.`user_name`
                        WHERE   `shops`.`user_name` = '$user' AND `catering`.`catering_id`='$id'
  ");
$stmt->execute(array());
$catering=$stmt->fetchAll(PDO::FETCH_OBJ);
foreach ($catering as $catering) {
    ?>




    <div class="container body" style="margin-top:60px;">
      <div class="main_container">


        <!-- top navigation -->







        <div class="" role="main">

          <div class="">

            
            <div class="clearfix"></div>

            <div class="">
              <div class="col-md-12 col-sm-12 col-xs-12" id="mypagecard">
                <div class="x_panel">
                  

                  <div class="x_content">

                    <div class="col-md-7 col-sm-7 col-xs-12">
                      <div class="product-image">
                        <img src="<?php echo $catering->cateringserviceimage; ?>" alt="..." />
                      </div>
                      <div class="product_gallery col-md-12 col-sm-12">
                        
                        <br />
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <div class="image view view-first">
                                <img style="width: 100%; display: block;" src="<?php echo $catering->cateringserviceimage; ?>" alt="image" style="height:250px;width:100%;"/>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <div class="image view view-first">
                                <img style="width: 100%; display: block;" src="<?php echo $catering->cateringserviceimage; ?>" alt="image" style="height:250px;width:100%;"/>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <div class="image view view-first">
                                <img style="width: 100%; display: block;" src="<?php echo $catering->cateringserviceimage; ?>" alt="image" style="height:250px;width:100%;"/>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <div class="image view view-first">
                                <img style="width: 100%; display: block;" src="<?php echo $catering->cateringserviceimage; ?>" alt="image" style="height:250px;width:100%;"/>
                            </div>
                        </div>
                      </div>
                        
                        <?php require_once 'includes/body/productreviews/cateringservice.php'; ?>

                    </div>

                    <div class="col-md-5 col-sm-5 col-xs-12" style="border:0px solid #e5e5e5;">

                      <h3 class="prod_title"><?php echo $catering->cateringservice; ?></h3>

                    

                      <div class="">
                        <div class="product_price">
                          <h1 class="price"><?php echo $catering->currency.' '; ?><?php echo number_format($catering->cateringserviceprice, 2); ?> </h1>
                          <span class="price-tax">Ex Tax: Ksh80.00</span>
                          <br>
                        </div>
                      </div>

                      <div class="">
                        <button type="button" class="btn btn-default btn-lg">Add to Cart</button>
                        <button type="button" class="btn btn-default btn-lg">View reviews</button>
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

    </div>

  


      <?php

  }
  ?>
<?php
}
?>
<?php require_once 'includes/footer/footer.php'; ?>