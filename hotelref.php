<?php
$page_title = "Hotel rooms | ";
$content = "View rooms and book.";
?>

<?php require_once 'header.php'; ?>
<?php require_once 'navigation.php'; ?>
<?php
    if(isset($_GET['user'])) {
    $user = $_GET['user'];
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

    <div class="container body" style="margin-top:60px;">
      <div class="main_container">







<style type="text/css">
    .mycover{
        background: url(images/media.jpg) no-repeat center center fixed;
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



                                <div class="" style="width:60%;margin-left:auto;margin-right:auto;">
                                    <div class="x_panel" id="mypagecard" style="height:;">
                                        <div class="x_title">
                                            <h2>SHOP NAME: <?php echo $shop->shopname; ?> </h2>
                                            <ul class="nav navbar-right panel_toolbox">
                                                <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="#">Settings 1</a>
                                                        </li>
                                                        <li><a href="#">Settings 2</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">
                                            <div class="col-sm-3 col-md-3 col-xs-12">
                                                <!-- required for floating -->
                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs tabs-left">
                                                    <li class="active"><a href="#home" data-toggle="tab">Product</a>
                                                    </li>
                                                    <li><a href="#profile" data-toggle="tab">Profile</a>
                                                    </li>
                                                    <li><a href="#messages" data-toggle="tab">Messages</a>
                                                    </li>
                                                    <li><a href="#settings" data-toggle="tab">Settings</a>
                                                    </li>
                                                    <li><a href="log-in.php?url=<?php echo base64_encode('contact/'.$shop->user_name); ?>">Contact</a>
                                                    </li>
                                                    <li><a data-toggle=""><?php require_once 'includes/body/forms/addtocycle.php'; ?></a>
                                                        </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-9 col-md-9 col-xs-12" style="height:350px;">
                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="home">
                                                        <div class="image view view-first" style="height:340px;width:auto;display: block;overflow:hidden;background:url('<?php echo $shop->profileimage; ?>') no-repeat;background-size:cover;">
                                                          <img src="<?php echo $shop->profileimage; ?>" alt="img"  style="height:100px;width:100px;border-radius:100px;"/>
                                                                <h3><?php echo $shop->shopname; ?></h3>
                                                                <p><b><?php echo $shop->user_name; ?></b></p>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>

                                </div>



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

                <?php

                $stmt = $auth_user->runQuery("SELECT * FROM hotels WHERE `user_name` = '$user' ");
                $stmt->execute(array());
                $hotels=$stmt->fetchAll(PDO::FETCH_OBJ);
                foreach ($hotels as $hotel) {
                    ?>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="thumbnail" style="height:300px;">
                            <div class="image view view-first" style="height:250px;">
                                <img src="<?php echo $hotel->hotelroomimage; ?>" alt="<?php echo $hotel->hotelname; ?>" style="height:250px;width:100%; display: block;"/>
                                <div class="mask">
                                    <p><?php echo $hotel->hotellocation; ?></p>
                                    <p><?php echo $hotel->hotelroomdetails; ?></p>
                                    <a href="reserve/<?php echo $shop->user_name; ?>/<?php echo $hotel->hotels_id; ?>"><button class="btn btn-primary">View details</button></i></a><a ><button class="btn btn-primary">Reserve</button></i></a>
                                    <div class="tools tools-bottom">
                                        <a><?php echo $shop->currency.' '; ?><?php echo number_format($hotel->hotelroomprice, 2); ?></a><br />
                                        <a><?php echo $hotel->hotelroompriceduration; ?></a><br />
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h4><?php echo $hotel->hotelname; ?> <span style="float:right;"><?php echo $shop->currency.' '; ?><?php echo number_format($hotel->hotelroomprice, 2); ?></span></h4>
                            </div>
                        </div>
                    </div>

                    <?php
                }
                ?>


                </div>
            </div>


        <!-- /page content -->








            <!-- End to do list -->





</div>

</div>
</div>

    <?php require_once 'includes/body/statistics/statistics.php'; ?>


    </div>






    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClic->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress    <script src="vendors/nprogress/nprogress.js"></script>
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
