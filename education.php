<?php
$page_title = "Education |";
$content = "View and get everything related to education eg. Books.";
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




<div class="col-md-2 col-sm-2 col-xs-12" data-spy="affix" data-offset-top="205">
    <div class="x_panel" id="mypagecard" style="height:;">
        <div class="x_title">
            <h2>SHOP MENU  <small>Float left</small></h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">


            <div class="col-md-12 col-sm-12">
                <div class="thumbnail" style="height:auto;">
                    <div class="" style="height:auto;">
                            <div class="bs-example" data-example-id="simple-jumbotron">
                            <img src="images/media.jpg" alt="img"  style="max-height:250px;width:100%;"/>
                                    
                            </div>
                    </div>
                    <div class="caption">
                        <p><a href="product">View</a> Snow and Ice Incoming for the South</p>
                    </div>
                </div>

                <center><h3><?php echo $shop->shopname; ?></h3></center>
                <center><h3><a href="log-in.php?url=<?php echo base64_encode('contact/'.$shop->user_name); ?>">Contact</a></h3></center>
                <center><p><b><?php echo $shop->user_name; ?></b> <b style="float:right;">Discount: 15%</b></p></center>
                <?php require_once 'includes/body/forms/addtocycle.php'; ?>
            </div>


            <?php
            $x = 1;

            do {
                ?>
            <div class="col-md-12 col-sm-12">
                <div class="thumbnail" style="height:300px;">
                    <div class="image view view-first" style="height:250px;">
                        <img style="width: 100%; display: block;" src="images/book.jpg" alt="image" style="height:250px;width:100%;"/>
                        <div class="mask">
                            <p>Your Text</p>
                            <div class="tools tools-bottom">
                                <a href="#">Ksh 50000.00<i class="fa fa-link"></i></a><br />
                                <a href="#">Order now<i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="caption">
                        <p><a href="product">View</a> Snow and Ice Incoming for the South</p>
                    </div>
                </div>
            </div>
            <?php
            $x++;
        } while ($x <= 3);
        ?>

            <div class="clearfix"></div>
        </div>
    </div>
</div>













<?php

    $stmt = $auth_user->runQuery("SELECT * FROM education WHERE `user_name` = '$user' GROUP BY `productcategory` ");
    $stmt->execute(array());
    $education=$stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($education as $education) {
        ?>

<div class="col-md-5 col-sm-5 col-xs-12">




    <div class="x_panel" id="mypagecard" style="height:;">
        <div class="x_title">
            <h2></i> Category: <?php echo $education->productcategory; ?></h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="col-xs-3">
                <!-- required for floating -->
                <!-- Nav tabs -->
                <ul class="nav nav-tabs tabs-left">
                    <li class="active"><a href="#<?php echo $education->productcategory; ?>home" data-toggle="tab">Product</a>
                    </li>
                    <li><a href="#<?php echo $education->productcategory; ?>profile" data-toggle="tab">Profile</a>
                    </li>
                    <li><a data-toggle="tab"></a>
                    </li>
                    <li><a href="list.php?user=<?php echo $education->user_name; ?>&amp;list=<?php echo $education->productcategory; ?>" ><?php echo $education->productcategory; ?> List</a>
                    </li>
                </ul>
            </div>
            <div class="col-xs-9" style="height:350px;">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="<?php echo $education->productcategory; ?>home">

                        <div class="image view view-first" style="max-height:290px;width:100%;display: block;overflow:hidden;">
                          <img style="max-height:100%;width:100%;margin-left:auto;margin-right:auto;display: block;" src="<?php echo $education->productimage; ?>" alt="image" />
                          <div class="mask no-caption">
                            <div class="tools tools-bottom">
                              <a><?php echo $education->producttitle; ?></a><br />
                              <a><?php echo $shop->currency.' '; ?><?php echo number_format($education->productprice, 2); ?></a>
                            </div>
                          </div>
                        </div>
                        <div class="caption">
                                    <h3><?php echo $education->productcategory; ?></h3>
                            </div>

                    </div>
                    <div class="tab-pane" id="<?php echo $education->productcategory; ?>profile">
                            <p class="lead">Profile tab</p>
                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                        synth. Cosby sweater eu banh mi, qui irure terr.</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

</div>

    <?php

}
?>    















<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="">
            <div class="col-md-12" id="mypagecard">
                <div class="x_panel">
                    <div class="x_content">
                        <div class="row">
                            <p>Media gallery design emelents</p>


                            <?php
                            $x = 1;

                            do {
                                ?>
                            <div class="col-md-3 col-sm-3">
                                <div class="thumbnail" style="height:300px;">
                                    <div class="image view view-first" style="height:250px;">
                                        <img style="width: 100%; display: block;" src="images/book1.png" alt="image" style="height:250px;width:100%;"/>
                                        <div class="mask">
                                            <p>Your Text</p>
                                            <div class="tools tools-bottom">
                                                <a href="#">Ksh 50000.00<i class="fa fa-link"></i></a><br />
                                                <a href="#">Order now<i class="fa fa-pencil"></i></a>
                                                <a href="#"><i class="fa fa-times"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <p><a href="product.php">View</a> Snow and Ice Incoming for the South</p>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $x++;
                        } while ($x <= 4);
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
  </body>
</html>
