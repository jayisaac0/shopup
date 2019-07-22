<?php
$page_title = "General shop | ";
$content = "Want a shop with everything you can think of? Look no further.";
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


        <style type="text/css"> .mycover{ background: url(images/tour.jpg) no-repeat center center fixed;  -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; } </style>
        <div class="right_col" role="main">

                <div class="mycover" style="min-height:;width:100%;background:cover;">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="home">
                            <div class="image  view-first" style="max-height:100%;width:100%;display: block;overflow:hidden;">
                                <div class=" no-caption">



                                    <div class="" style="width:60%;margin-left:auto;margin-right:auto;">
                                        <div class="x_panel" id="mypagecard" style="height:;">
                                            <div class="x_title">
                                                <h2>SHOP NAME: <?php echo $shop->shopname; ?> <small>Float left</small></h2>
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
                                                        <li><a  data-toggle=""><?php require_once 'includes/body/forms/addtocycle.php'; ?></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-9 col-md-9 col-xs-12" style="height:350px;">
                                                    <!-- Tab panes -->
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="home">
                                                            <div class="image view view-first" style="max-height:270px;width:100%;display: block;overflow:hidden;">
                                                              <img style="max-height:100%;width:100%;display: block;" src="images/beauty.jpg" alt="image" />
                                                                        <h3>Dell latitutde laptop</h3>
                                                                        <p><b>Price: Ksh 34000.00</b> <b style="float:right;">Discount: 15%</b></p>
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

                <div class="row" style="margin-top:-;width:98%;margin-left:auto;margin-right:auto;">


                    <div class="col-md-12 col-sm-12">
                        <div style="height:300px;">
                            <div class="image view view-first" style="height:auto;">
                                <h3><center><?php echo $shop->shopname; ?></center></h3>
<nav class="navbar navbar-default">
 <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#category-menu" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="category-menu" style="z-index:2px !important;position:top;">
    <?php
        $stmt = $auth_user->runQuery("SELECT * FROM generalshop WHERE `user_name`='$user' GROUP BY productcategory DESC");
        $stmt->execute(array());
        $generalshop=$stmt->fetchAll(PDO::FETCH_OBJ);
        foreach ($generalshop as $generalshop) {
            ?>
                <ul class="navbar-nav" style="padding:0px 1px;margin:0px;">
                    <a href="categories/<?php echo $shop->user_name ?>/<?php echo base64_encode($generalshop->productcategory); ?>"  style="text-decoration:none;padding:1px 7px;color:#000000 !important;">
                        <li class="w3-animate-zoom btn light-grey w3-padding-4" style="width:100%;box-shadow:1px 1px 1px 1px grey;">
                            <?php echo $generalshop->productcategory; ?>
                        </li>
                    </a>
                </ul>

            <?php
        }
    ?>
    </div>
</nav>

                            </div>








                            <!-- page content -->
                                        <div class="col-md-12" id="mypagecard">
                                        <nav class="navbar navbar-default">


                                            <div class="x_panel">
                                                <div class="x_content">
                                                    <div class="row">




                                <?php

                                $stmt = $auth_user->runQuery("SELECT * FROM generalshop WHERE `user_name` = '$user' ");
                                $stmt->execute(array());
                                $generalshop=$stmt->fetchAll(PDO::FETCH_OBJ);
                                foreach ($generalshop as $generalshop) {
                                    ?>

                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <div class="thumbnail" style="height:300px;">
                                            <div class="image view view-first" style="height:250px;">
                                                <img style="width: 100%; display: block;" src="<?php echo $generalshop->productimage; ?>" alt="image" style="height:250px;width:100%;"/>
                                                <div class="mask">
                                                    <div class="tools tools-bottom">
                                                        <a ><?php echo $shop->currency.' '; ?><?php echo number_format($generalshop->productprice, 2); ?></a><br />
                                                        <a class="btn-primary" href="cart/<?php echo $shop->user_name; ?>/<?php echo $generalshop->generalshop_id; ?>">Order now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h2> <?php echo $generalshop->productname; ?> <span style="float:right;"><a href="shopsproduct/<?php echo $shop->user_name; ?>/<?php echo $generalshop->generalshop_id; ?>">View</a></span></h2>
                                            </div>
                                        </div>
                                    </div>

                                    <?php

                                }
                                ?>


                                                    </div>
                                                </div>
                                            </div>
                                    <!-- /page content -->





                        </div>
                    </div>
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
