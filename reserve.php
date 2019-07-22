<?php
$page_title = "Hotel rooms | ";
$content = "View rooms and book.";
?>

<?php require_once 'header.php'; ?>
<?php require_once 'navigation.php'; ?>
<?php
    if(isset($_GET['user'])) {
    $user = $_GET['user'];
    $roomid = $_GET['roomid'];
?>

<?php

    $stmt = $auth_user->runQuery("
        SELECT *
                        FROM    `users`
                        JOIN    `shops`
                        ON      `users`.`user_id`=`shops`.`user_id`
                        WHERE   `shops`.`user_name` = '$user'
                        ");
    $stmt->execute(array());
    $shops=$stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($shops as $shop) {
        ?>
<?php

$stmt = $auth_user->runQuery("SELECT * FROM hotelscover WHERE `user_name` = '$shop->user_name' ");
$stmt->execute(array());
$hotelscover=$stmt->fetchAll(PDO::FETCH_OBJ);
foreach ($hotelscover as $hotelscover) {
    ?>



                <?php

                $stmt = $auth_user->runQuery("SELECT * FROM hotels WHERE `user_name` = '$user' AND `hotels_id`='$roomid' ");
                $stmt->execute(array());
                $hotels=$stmt->fetchAll(PDO::FETCH_OBJ);
                foreach ($hotels as $hotel) {
                    ?>


    <div class="container body" style="margin-top:60px;">
      <div class="main_container">


<style type="text/css">
    .mycover{
        background: url('<?php echo $hotel->hotelroomimage; ?>') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
    }
</style>


<div class="right_col" role="main" style="background:<?php echo $hotelscover->backgroundcolor; ?>;">

            <div class="mycover" style="min-height:650px;width:100%;background:cover;">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        <div class="image  view-first" style="max-height:100%;width:100%;display: block;overflow:hidden;">
                            <div class=" no-caption">



                               



                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
<div class="">
<div class="clearfix"></div>
<div class="">



            <div class="mycover" style="height:auto;width:100%;background:cover;">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="home">

                          <div class="image view view-first" style="max-height:100%;width:100%;display: block;overflow:hidden;">
                            <div class="mask no-caption">
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>


                    </div>


                </div>
            </div>








            <div class="" style="width:90%;margin-left:auto;margin-right:auto;margin-top:-50px;">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12" id="">
                        <div class="thumbnail" style="height:50px;">
                            <div class="image view view-first" style="height:200px;">

                                <form class="form-horizontal form-label-left">

                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                      <input type="text" class="form-control" data-inputmask="'mask': '99/99/9999'">
                                      <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                      <input type="text" class="form-control" data-inputmask="'mask' : '(999) 999-9999'">
                                      <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                      <input type="text" class="form-control" data-inputmask="'mask': '99-999999'">
                                      <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                      <input type="text" class="form-control" data-inputmask="'mask' : '****-****-****-****-****-***'">
                                      <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                  </div>

                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                      <button type="submit" class="btn btn-success">Submit</button>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>


                <div class="row">

















        <div class="" role="main">

          <div class="">

            
            <div class="clearfix"></div>

            <div class="">
              <div class="col-md-12 col-sm-12 col-xs-12" id="mypagecard">
                <div class="x_panel">
                  

                  <div class="x_content">

                    <div class="col-md-7 col-sm-7 col-xs-12">
                      <div class="product-image">
                        <pre> <?php echo $hotel->hotelroomdetails; ?> </pre>
                        <img src="<?php echo $hotel->hotelroomimage; ?>" alt="" />
                      </div>

                      <?php require_once 'includes/body/productreviews/reserve.php'; ?>
                      
                    </div>

                    <div class="col-md-5 col-sm-5 col-xs-12" style="border:0px solid #e5e5e5;">

                      <h1 class=""><?php echo $hotel->hotelname; ?></h1>

                      <p><?php echo $hotel->hotellocation; ?></p>
                      <br />

                      <br />

                      <div class="">
                        <div class="product_price">
                          <h1 class="price">Ksh <?php echo number_format($hotel->hotelroomprice, 2); ?></h1>
                          <span class="price-tax"><?php echo $hotel->hotelroompriceduration; ?></span>
                          <br>
                        </div>
                      </div>

                      <div class="">
                        <button type="button" class="btn btn-default btn-lg">Reserve</button>
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





























                </div>
            </div>


        <!-- /page content -->








            <!-- End to do list -->





</div>

</div>
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
<?php
}
?>
<?php require_once 'includes/footer/footer.php'; ?>
