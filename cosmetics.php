<?php
$page_title = "Beauty and cosmetics |";
$content = "View featured and latst  beauty and cosmetics products here";
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
    $stmt = $auth_user->runQuery("SELECT * FROM cosmeticscover WHERE `user_name` = '$shop->user_name' ");
    $stmt->execute(array());
    $cosmeticscover=$stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($cosmeticscover as $cosmeticscover) {
        ?>
            

<div class="container body" style="margin-top:60px;">
    <div class="main_container">
        <?php require_once 'navigation.php'; ?>
        <style type="text/css"> .mycover{ background: url("<?php echo $cosmeticscover->bannerimage; ?>") no-repeat center center fixed;  -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; } </style>
        <div class="right_col" role="main" style="background:<?php echo $cosmeticscover->backgroundcolor; ?>;">





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
                                                        <li><a href="log-in.php?url=<?php echo base64_encode('contact/'.$shop->user_name); ?>">Contact</a>
                                                        </li>
                                                        <li><a data-toggle=""><?php require_once 'includes/body/forms/addtocycle.php'; ?></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-9 col-md-39col-xs-12" style="height:350px;">
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


                <div class="row" style="margin-top:auto;width:98%;margin-left:auto;margin-right:auto;">


                    <div class="col-md-12 col-sm-12">
                        <div class="" style="height:300px;">
                            <div class="image view view-first" style="height:auto;">
                                <h3><center><?php echo $shop->shopname; ?></center></h3>
                            </div>


                            <!-- page content -->
                                        <div class="col-md-12" id="mypagecard">
                                            <div class="x_panel">
                                                <div class="x_content">
                                                    <div class="row">
                                                        <p>Featured products |</p>




                                    <?php

                                        $stmt = $auth_user->runQuery("SELECT * FROM cosmetics WHERE `user_name` = '$user' ");
                                        $stmt->execute(array());
                                        $cosmetics=$stmt->fetchAll(PDO::FETCH_OBJ);
                                        foreach ($cosmetics as $cosmetic) {
                                            ?>
                                                <div class="col-md-3 col-sm-3">
                                                    <div class="thumbnail" style="height:300px;">
                                                        <div class="image view view-first" style="height:250px;">
                                                            <img style="width: 100%; display: block;" src="<?php echo $cosmetic->cosmeticimage; ?>" alt="image" style="height:250px;width:100%;"/>
                                                            <div class="mask">
                                                                <div class="tools tools-bottom">
                                                                <p>dhfj dfhj</p>
                                                                    <a style="cursor:pointer;"><?php echo $shop->currency.' '; ?><?php echo number_format($cosmetic->cosmeticprice, 2); ?></a><br />
                                                                    <a class="btn btn-primary right" style="cursor:pointer;" href="ccart/<?php echo $shop->user_name; ?>/<?php echo $cosmetic->cosmetics_id; ?>">Order now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="caption">
                                                            <p><a href="cosmetic/<?php echo $shop->user_name; ?>/<?php echo $cosmetic->cosmetics_id; ?>" class="btn btn-primary"  style="width:100%;">View</a> 
                                                            </p>
                                                            
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
