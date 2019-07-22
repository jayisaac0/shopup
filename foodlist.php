<?php
$page_title = "Food and snacks list |";
$content = "View all the types of snacks we make and sell and select from the wide variety";
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

    <div class="container body" style="margin-top:60px;">
      <div class="main_container">






<div class="right_col" role="main">
<div class="">
<div class="clearfix"></div>
<div class="">





<div class="col-md-3 col-sm-3 col-xs-12" data-spy="affix" data-offset-top="205">
    <div class="x_panel" id="mypagecard" style="height:;">
        <div class="x_title">
            <h2>SHOP MENU  <small>Float left</small></h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">

            <div class="col-md-12 col-sm-12" style="min-height:350px;">
                <!-- Tab panes -->
                    <div class="tab-pane active col-md-12 col-sm-12">
                        <div class="image view view-first" style="height:250px;">
                            <img src="images/fast1.jpg" alt="image" style="height:100%;width:100%; display: block;"/>

                            <div class="mask">
                                <p>Your Text</p>
                                <div class="tools tools-bottom">
                                    <a href="#">Ksh 50000.00<i class="fa fa-link"></i></a><br />
                                    <a href="#">Order now<i class="fa fa-pencil"></i></a>
                                    <a href="#"><i class="fa fa-times"></i></a>
                                </div>
                            </div>
                        </div>
                        <h3><?php echo $shop->shopname; ?></h3>
                                    <p><b><?php echo $shop->user_name; ?></b> <b style="float:right;">Discount: 15%</b></p>
                    </div>
                   
                    


            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>












              

<div class="col-md-9 col-sm-9 col-xs-12">

    <div class="x_panel" id="mypagecard" style="height:;">
        <div class="x_title">
            <h2></i> SHOP NAME: Shopup <small>Float left</small></h2>
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
                    <li class="active"><a href="#home" data-toggle="tab">Create order</a>
                    </li>
                    <li><a href="#profile" data-toggle="tab">Profile</a>
                    </li>
                    <li><a href="#messages" data-toggle="tab">Messages</a>
                    </li>
                    <li><a href="#settings" data-toggle="tab">Settings</a>
                    </li>
                    <li><a href="log-in.php?url=<?php echo base64_encode('contact/'.$shop->user_name); ?>" data-toggle="">Contact</a>
                    </li>
                    <li><a  data-toggle=""><?php require_once 'includes/body/forms/addtocycle.php'; ?></a>
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

                    <div class="tab-pane" id="profile">
                            <p class="lead">Profile tab</p>
                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                        synth. Cosby sweater eu banh mi, qui irure terr.</p>
                    </div>
                    <div class="tab-pane" id="messages">



                          <div class="image view view-first" style="max-height:270px;width:100%;display: block;overflow:hidden;">
                            <img style="max-height:100%;width:100%;display: block;" src="images/media.jpg" alt="image" />
                            <div class="mask no-caption">
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p><strong>Image Name</strong>
                            </p>
                            <p>Snow and Ice Incoming</p>
                          </div>

                    </div>
                    <div class="tab-pane" id="settings">Settings Tab.</div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

</div>

            


<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="">
            <div class="col-md-12" id="mypagecard">
                <div class="x_panel">
                    <div class="x_content">
                        <div class="row">



                <?php

                $stmt = $auth_user->runQuery("SELECT * FROM food WHERE `user_name` = '$user' ");
                $stmt->execute(array());
                $food=$stmt->fetchAll(PDO::FETCH_OBJ);
                foreach ($food as $food) {
                    ?>
                            <div class="col-md-3 col-sm-3">
                                <div class="thumbnail" style="height:300px;">
                                    <div class="image view view-first" style="height:200px;">
                                        <img style="width: 100%; display: block;" src="<?php echo $food->snackimage; ?>" alt="<?php echo $food->snackname; ?>" style="height:200px;width:100%;"/>
                                        <div class="mask">
                                            <p><?php echo $food->snackname; ?></p>
                                            <div class="tools tools-bottom">
                                                <a><?php echo $shop->currency.' '; ?><?php echo number_format($food->snackprice, 2); ?></a><br />
                                                <a href="fcart/<?php echo $shop->user_name; ?>/<?php echo $food->food_id; ?>" class="btn btn-primary">Order now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mask">
                                            <h4><?php echo $food->snackname; ?></h4>
                                            <div class="tools tools-bottom">
                                                <a><?php echo $shop->currency.' '; ?><?php echo number_format($food->snackprice, 2); ?></a>
                                            </div>
                                        </div>
                                    <div class="caption" style="padding:0px;margin:0px;">
                                        <p style="padding:0px;margin:0px;"><a href="fooddetails/<?php echo $food->user_name ?>/<?php echo $food->food_id; ?>" class="btn btn-primary">View</a> <a href="product" style="float:right;font-size:20px;"><?php echo $shop->currency.' '; ?><?php echo number_format($food->snackprice, 2); ?></a></p>
                                    </div>
                                </div>
                            </div>

                    <?php
                }
                ?>

                            


                        </div>
                    </div>
                </div>
            </div>
        </div>
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
  </body>
</html>