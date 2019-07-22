<?php
$page_title = "Farming |";
$content = "View and get everything related to farming";
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
        <?php require_once 'navigation.php'; ?>
        <style type="text/css"> .mycover{ background: url(images/farm3.jpg) no-repeat center center fixed;  -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; } </style>
        <div class="right_col" role="main">







            <div class="mycover" style="min-height:650px;width:100%;background:cover;">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        <div class="image  view-first" style="max-height:100%;width:100%;display: block;overflow:hidden;">
                            <div class=" no-caption">



                                <div class="" style="width:60%;margin-left:auto;margin-right:auto;">
                                    <div class="" id="" style="height:;">
                                        <div class="">
                                            <h2 class="center green">SHOP NAME: <?php echo $shop->shopname; ?> </h2>
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
                                                                <h3 style="color:red;"><?php echo $shop->shopname; ?></h3>
                                                                <p style="color:red;"><b><?php echo $shop->user_name; ?></b></p>
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








            <div class=""  style="background:green;">

                <div class="mycover" style="width:100%;background:cover;">
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

                <div class="row" style="margin-top:-100px;width:90%;margin-left:auto;margin-right:auto;background:#CDFFB8;">

                    <?php
                    $x = 1;

                    do {
                        ?>

                    <div class="col-md-3 col-sm-3">
                        <div class="" style="height:300px;">
                            <div class="image view view-first" style="height:200px;">
                            <center><img  class="img-circle profile_img" src="images/farm2.jpg" alt="image" style="height:150px;width:150px;"/></center>
                            </div>
                            <h3><center>Our rooms</center></h3>
                        </div>
                        <div>
                            <p><center>We have created a fictional band website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo cons</center></p>
                        </div>
                        <br /><br />
                    </div>
                    <?php
                    $x++;
                } while ($x <= 4);
                ?>



                    
                    <div class="col-md-12 col-sm-12">
                        <div class="" style="max-height:300px;">
                            <div class="image view view-first col-md-6 col-sm-6" style="height:auto;">
                                <center><img  class="" src="images/farm.jpg" alt="image" style="height:100%;width:100%;"/></center>

                            </div>
                            <div class=" col-md-6 col-sm-6">
                                <h1><center>Our rooms</center></h1><br />
                                <p style="padding:5%;">
                                    <center>
                                        We have created a fictional band website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </center>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">                            
                                <h1><center>...</center></h1>
                                <a href="farmproducts/<?php echo $shop->user_name; ?>"><h1><center>View our products</center></h1></a><br />


                                <?php

                                    $stmt = $auth_user->runQuery("SELECT * FROM farming WHERE `user_name` = '$user'  ");
                                    $stmt->execute(array());
                                    $farming=$stmt->fetchAll(PDO::FETCH_OBJ);
                                    foreach ($farming as $farming) {
                                        ?>
                                            <div class="col-md-3 col-sm-3">
                                                <div class="thumbnail" style="height:300px;">
                                                    <div class="image view view-first" style="height:200px;">
                                                        <img style="width: 100%; display: block;" src="<?php echo $farming->farmproductimage; ?>" alt="<?php echo $farming->farmproduct; ?>" style="height:250px;width:100%;"/>
                                                        <div class="mask">
                                                            <p>Your Text</p>
                                                            <div class="tools tools-bottom">
                                                                <a><?php echo $shop->currency.' '; ?><?php echo number_format($farming->farmproductprice, 2); ?><i class="fa fa-link"></i></a><br />
                                                                <a>Order now<i class="fa fa-pencil"></i></a>
                                                                <a><i class="fa fa-times"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mask">
                                                            <p><?php echo $farming->farmproduct; ?></p>
                                                            <div class="tools tools-bottom">
                                                                <a><?php echo $shop->currency.' '; ?><?php echo number_format($farming->farmproductprice, 2); ?></a><br />
                                                            </div>
                                                        </div>
                                                    <div class="caption">
                                                        <p>
                                                        <button class="btn btn-primary">View</button>
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
