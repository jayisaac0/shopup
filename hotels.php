<?php
$page_title = "Hotel | ";
$content = "View our large collection of cars in shops around the globe";
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


<style type="text/css"> .mycover{ background: url('<?php echo $hotelscover->bannerimage; ?>') no-repeat center center fixed; -webkit-background-size: cover -moz-background-size: cover; -o-background-size: cover; background-size: cover; } </style>




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
                          <div class="image view-first" style="max-height:100%;width:100%;display: block;overflow:hidden;">
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



<!-- page content -->

            <div class="" style="width:90%;margin-left:auto;margin-right:auto;margin-top:-200px;">
                <div class="row">
                    <div class="col-md-4 col-sm-4" >
                        <div class="thumbnail" style="min-height:340px;">
                            <div class="image view-first" style="height:200px;">
                                <img style="width:100%;height:200px; display: block;" src="<?php echo $hotelscover->articleoneimageurl; ?>" alt="image" style="height:250px;width:100%;"/>
                                <div class="mask">
                                    <p><?php echo $hotelscover->articleonetitle; ?></p>
                                </div>
                            </div>
                                <center><h3><?php echo $hotelscover->articleonetitle; ?></h3></center>
                                <center><p><?php echo substr($hotelscover->articleonecontent, 0, 150); ?></p></center>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4" >
                        <div class="thumbnail" style="min-height:340px;">
                            <div class="image view-first" style="height:200px;">
                                <img style="width:100%;height:200px; display: block;" src="<?php echo $hotelscover->articletwoimageurl; ?>" alt="image" style="height:250px;width:100%;"/>
                                <div class="mask">
                                    <p><?php echo $hotelscover->articletwotitle; ?></p>
                                </div>
                            </div>
                                <center><h3><?php echo $hotelscover->articletwotitle; ?></h3></center>
                                <center><p><?php echo substr($hotelscover->articletwocontent, 0, 150); ?></p></center>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4" >
                        <div class="thumbnail" style="min-height:340px;">
                            <div class="image view-first" style="height:200px;">
                                <img style="width:100%;height:200px; display: block;" src="<?php echo $hotelscover->articlethreeimageurl; ?>" alt="image" style="height:250px;width:100%;"/>
                                <div class="mask">
                                    <p><?php echo $hotelscover->articlethreetitle; ?></p>
                                </div>
                            </div>
                                <center><h3><?php echo $hotelscover->articlethreetitle; ?></h3></center>
                                <center><p><?php echo substr($hotelscover->articlethreecontent, 0, 150); ?></p></center>
                        </div>
                    </div>
                    
                </div>





                <div class="row" style="margin-top:100px;">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="thumbnail" style="min-height:340px;">
                            <div class="image view-first" style="height:200px;">
                                <center><img  class="img-circle profile_img" src="images/media.jpg" alt="image" style="height:150px;width:150px;"/></center>
                                
                            </div>
                                <h3><center><a href="hotelref/<?php echo $shop->user_name; ?>">View</a></center></h3>
                                <p><center>Snow and Ice Incoming for the South Snow and Ice Incoming for the South Snow and Ice Incoming for the South Snow and Ice Incoming for the South </center></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="thumbnail" style="min-height:340px;">
                            <div class="image view-first" style="height:200px;">
                                <center><img  class="img-circle profile_img" src="images/media.jpg" alt="image" style="height:150px;width:150px;"/></center>
                                
                            </div>
                                <h3><center>Send inquiery</center></h3>
                                <p><center>Please contact us bellow and we will leave a message for you in your inbox in the shortest time posible</center></p>
                                <center><h3><a href="contact/<?php echo $shop->user_name; ?>">Contact</a></h3></center>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="thumbnail" style="min-height:340px;">
                            <div class="image view-first" style="height:200px;">
                                <center><img  class="img-circle profile_img" src="images/media.jpg" alt="image" style="height:150px;width:150px;"/></center>
                                
                            </div>
                                <h3><center>Our rooms</center></h3>
                                <p><center>Snow and Ice Incoming for the South</center></p>
                        </div>
                    </div>
                </div>
                
            </div>
   







</div>

</div>
</div>


    <?php require_once 'includes/body/statistics/statistics.php'; ?>
    </div>





<div style="height:200px;background:#000000;width:100%;">
    <center>
        <i>&copy <?php echo date('Y'); ?></i>
    </center>
</div>

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
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