<?php
$page_title = "Health | ";
$content = "Do you really mind about your health?  stop here and make inquieries";
?>

<?php require_once 'header.php'; ?>
<?php require_once 'navigation.php'; ?>

    <div class="container body" style="margin-top:60px;">
      <div class="main_container">

<div class="right_col" role="main">
<div class="">
<div class="clearfix"></div>
<div class="">




<div class="col-md-2 col-sm-2 col-xs-12" data-spy="affix" data-offset-top="205">
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
                          <li><a href="category">williamsburg carles</a></li>
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












              

<div class="col-md-6 col-sm-6 col-xs-12">

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
            <div class="col-xs-3">
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
                    <li><a href="#1settings" data-toggle="tab">Settings</a>
                    </li>
                </ul>
            </div>
            <div class="col-xs-9" style="height:350px;">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        
                            <div class="bs-example" data-example-id="simple-jumbotron">
                            <img src="../images/med1.jpg" alt="img"  style="max-height:270px;width:100%;"/>
                                    <h3>Dell latitutde laptop</h3>
                                    <p><b>Price: Ksh 34000.00</b> <b style="float:right;">Discount: 15%</b></p>
                            </div>

                    </div>
                    <div class="tab-pane" id="profile">
                            <p class="lead">Profile tab</p>
                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                        synth. Cosby sweater eu banh mi, qui irure terr.</p>
                    </div>
                    <div class="tab-pane" id="messages">



                          <div class="image view view-first" style="max-height:270px;width:100%;display: block;overflow:hidden;">
                            <img style="max-height:100%;width:100%;display: block;" src="../images/media.jpg" alt="image" />
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

              


              



<div class="col-md-4 col-sm-4 col-xs-12" data-spy="affix" data-offset-top="205">
    <div class="x_panel" id="mypagecard" style="height:;">
        <div class="x_title">
            <h2>SHOP MENU  <small>Float left</small></h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div  style="height:350px;">
                <!-- Tab panes -->
                    

                      <?php
                      $x = 1;

                      do {
                          ?>
                            <div class="col-md-6 col-sm-6">
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
                      } while ($x <= 2);
                      ?>


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
                            <p>Media gallery design emelents</p>


                      <?php
                      $x = 1;

                      do {
                          ?>
                            <div class="col-md-2 col-sm-2">
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
                      } while ($x <= 5);
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