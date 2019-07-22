<?php
$page_title = "Food and snacks details |";
$content = "Want to know the a, b, c that makes that delicious burger you can't seem to stop eating. Here is the perfect place.";
?>

<?php require_once 'header.php'; ?>
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

    $stmt = $auth_user->runQuery("SELECT * FROM cosmetics WHERE `user_name`='$user' AND `cosmetics_id` = '$id' ");
    $stmt->execute(array());
    $cosmetics=$stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($cosmetics as $cosmetic) {
        ?>
    <div class="container body" style="margin-top:60px;">
      <div class="main_container">



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
                        <img src="<?php echo $cosmetic->cosmeticimage; ?>" alt="<?php echo $cosmetic->cosmeticname; ?>" />
                      </div>
                      <div class="product_gallery">
                        <a>
                          <img src="<?php echo $cosmetic->cosmeticimage; ?>" alt="<?php echo $cosmetic->cosmeticname; ?>" />
                        </a>
                        <a>
                          <img src="<?php echo $cosmetic->cosmeticimage; ?>" alt="<?php echo $cosmetic->cosmeticname; ?>" />
                        </a>
                        <a>
                          <img src="<?php echo $cosmetic->cosmeticimage; ?>" alt="<?php echo $cosmetic->cosmeticname; ?>" />
                        </a>
                        <a>
                          <img src="<?php echo $cosmetic->cosmeticimage; ?>" alt="<?php echo $cosmetic->cosmeticname; ?>" />
                        </a>
                      </div>
                      
                      <?php require_once 'includes/body/productreviews/productreview.php'; ?>

                    </div>

                    <div class="col-md-5 col-sm-5 col-xs-12" style="border:0px solid #e5e5e5;">

                      <h1 class=""><?php echo $cosmetic->cosmeticname; ?></h1>

                      <p><?php echo $cosmetic->cosmeticdetails; ?></p>
                      <br />

                      <div class="">
                        <h2>Available Colors</h2>
                        <ul class="list-inline prod_color">
                        <?php echo $cosmetic->cosmeticcolors; ?>
                         

                        </ul>
                      </div>
                      <br />

                      <br />

                      <div class="">
                        <div class="product_price">
                          <h1 class="price"><?php echo $shop->currency.' '; ?><?php echo number_format($cosmetic->cosmeticprice , 2); ?></h1>
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

  




    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>

    <script src="build/js/custom.min.js"></script>
         <?php
    }
?>
<?php
}
?>  
<?php 
}
?>
  </body>
</html>