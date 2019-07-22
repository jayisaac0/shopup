<?php
$page_title = "Category | ";
$content = "Health medicine categiries";
?>

<?php require_once 'header.php'; ?>
<?php require_once 'navigation.php'; ?>

    <div class="container body" style="margin-top:60px;">
      <div class="main_container">


        <!-- top navigation -->








<?php require_once 'navigation.php'; ?>


        <style type="text/css"> .mycover{ background: url(images/tour.jpg) no-repeat center center fixed;  -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; } </style>
                <div class="mycover" style="min-height:650px;width:100%;background:cover;">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="home">
                            <div class="image view view-first" style="max-height:100%;width:100%;display: block;overflow:hidden;">
                                <div class=" no-caption">

                                    <div class="" style="width:90%;margin-left:auto;margin-right:auto;">
                         


                                        <div class="col-md-4 col-sm-4 " data-spy="affix" data-offset-top="205">
                                            <div class="x_panel" id="mypagecard" style="height:;">
                                                <div class="x_title">
                                                    <h2>Categories  <small>Float left</small></h2>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="x_content">
                                                    <div class="" style="height:350px;">
                                                        <!-- Tab panes -->
                                                                
                                                                <ul>

                                                              <?php
                                                              $x = 1;

                                                              do {
                                                                  ?>
                                                                  <li><a href="category.php">williamsburg carles</a></li>
                                                                  <?php
                                                                  $x++;
                                                              } while ($x <= 12);
                                                              ?>

                                                                </ul>

                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="col-md-8 col-sm-8 ">
                                            <div class="x_panel" id="mypagecard" style="height:;">
                                                <div class="x_title">
                                                    <h2>SHOP NAME: Shopup <small>Float left</small></h2>
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
                                                    <div class="col-xs-12" style="height:350px;">
                                                        <!-- Tab panes -->
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="home">
                                                                <img src="../images/med1.jpg" alt="img"  style="max-height:270px;width:90%;margin-left:auto;margin-right:auto;"/>
                                                                <h3>Dell latitutde laptop</h3>
                                                                <p><b>Price: Ksh 34000.00</b> <b style="float:right;">Discount: 15%</b></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>





                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>



        <!-- /top navigation -->

        <!-- page content -->
<div class="right_col" role="main">
<div class="clearfix"></div>





<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="" style="width:80%;margin-left:auto;margin-right:auto;">


            <div class="col-md-12 col-sm-12"  id="mypagecard" >
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
                                        <b><a href="product">View</a>Cough syrup</b><br />
                                    <div class="image view view-first" style="height:220px;">
                                        <img style="width: 100%; display: block;" src="../images/med.jpg" alt="image" style="height:250px;width:100%;"/>
                                        <div class="mask">
                                            <p>Your Text</p>
                                            <div class="tools tools-bottom">
                                                <a href="#">Ksh 50000.00</a><br />
                                                <a href="#">Order now</a>
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
                      } while ($x <= 25);
                      ?>


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








    <!-- jQuery -->
    <script src="production/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="production/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="production/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="production/vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="production/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="production/vendors/iCheck/icheck.min.js"></script>

    <script src="production/build/js/custom.min.js"></script>
	
  </body>
</html>