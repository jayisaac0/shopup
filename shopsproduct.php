
<?php 
$page_title = "Product |";
$page_content = "View specific product from us";
require_once 'header.php'; ?>
<?php require_once 'navigation.php'; ?>
<?php
    if(isset($_GET['user'])) {
    $user = $_GET['user'];
    $id = $_GET['id'];
?>

<?php

    $stmt = $auth_user->runQuery(" SELECT * FROM  `shops` WHERE `user_name`='$user' ");
    $stmt->execute(array());
    $shops=$stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($shops as $shop) {
        ?>

<?php

    $stmt = $auth_user->runQuery(" SELECT * FROM generalshop WHERE `user_name`='$user' AND `generalshop_id`='$id' ");
    $stmt->execute(array());
    $generalshop=$stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($generalshop as $generalshop) {
        ?>

    <div class="container body" style="margin-top:60px;">
      <div class="main_container">


        <!-- top navigation -->








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
                        <img src="<?php echo $generalshop->productimage; ?>" alt="..." />
                      </div>
                      <div class="product_gallery col-md-12 col-sm-12">
                        
                        <br />
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <div class="image view view-first">
                                <img style="width: 100%; display: block;" src="<?php echo $generalshop->productimage; ?>" alt="image" style="height:250px;width:100%;"/>
                                <div class="mask">
                                    <p>Your Text</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <div class="image view view-first">
                                <img style="width: 100%; display: block;" src="<?php echo $generalshop->productimage; ?>" alt="image" style="height:250px;width:100%;"/>
                                <div class="mask">
                                    <p>Your Text</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <div class="image view view-first">
                                <img style="width: 100%; display: block;" src="<?php echo $generalshop->productimage; ?>" alt="image" style="height:250px;width:100%;"/>
                                <div class="mask">
                                    <p>Your Text</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <div class="image view view-first">
                                <img style="width: 100%; display: block;" src="<?php echo $generalshop->productimage; ?>" alt="image" style="height:250px;width:100%;"/>
                                <div class="mask">
                                    <p>Your Text</p>
                                </div>
                            </div>
                        </div>

                      </div>

                      <?php require_once 'includes/body/productreviews/shopsproduct.php'; ?>

                    </div>

                    <div class="col-md-5 col-sm-5 col-xs-12" style="border:0px solid #e5e5e5;">

                      <h3 class="prod_title"><?php echo $generalshop->productname; ?></h3>

                      <p><?php echo $generalshop->productspecification; ?></p>
                      <br />

                      <br />


                      <br />

                      <div class="">
                        <div class="product_price">
                          <h1 class="price"><?php echo $shop->currency.' '; ?><?php echo number_format($generalshop->productprice, 2); ?></h1>
                          <span class="price-tax">Ex Tax: Ksh80.00</span>
                          <br>
                        </div>
                      </div>

                      <div class="">
                        <button type="button" class="btn btn-default btn-lg">Add to Cart</button>
                        <button type="button" class="btn btn-default btn-lg">Add to Wishlist</button>
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
<?php
}
?>
<?php require_once 'includes/footer/footer.php'; ?>