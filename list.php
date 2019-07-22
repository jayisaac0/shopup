<?php require_once 'header.php'; ?>
<?php require_once 'navigation.php'; ?>
<?php
    if(isset($_GET['user'])) {
    $user = $_GET['user'];
    $list = $_GET['list'];
?>





<div class="container body" style="margin-top:60px;">
    <div class="main_container">
        <?php require_once 'navigation.php'; ?>

                <div class="row" style="margin-top:-;width:98%;margin-left:auto;margin-right:auto;">


                    <div class="col-md-12 col-sm-12">
                        <div class="" style="height:300px;">
                            <div class="image view view-first" style="height:auto;">
                                <h3><center><?php echo $list; ?></center></h3>
                            </div>
      






                            <!-- page content -->
                                        <div class="col-md-12" id="mypagecard">
                                            <div class="x_panel">
                                                <div class="x_content">
                                                    <div class="row">
                                                        <p>Featured products |</p>



                                        <?php

                                            $stmt = $auth_user->runQuery("SELECT * FROM education WHERE `user_name`='$user' AND `productcategory`='$list' ");
                                            $stmt->execute(array());
                                            $education=$stmt->fetchAll(PDO::FETCH_OBJ);
                                            foreach ($education as $education) {
                                            ?>

                                            <div class="col-md-2 col-sm-2">
                                                <div class="thumbnail" style="height:300px;">
                                                    <div class="image view view-first" style="height:250px;">
                                                        <img style="width: 100%; display: block;" src="<?php echo $education->productimage; ?>" alt="image" style="height:250px;width:100%;"/>
                                                        <div class="mask">
                                                            <div class="tools tools-bottom">
                                                                <a href="#">Ksh <?php echo number_format($education->productprice, 2); ?></a><br />
                                                                <a href="#">Order now</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="caption">
                                                        <h4><center><?php echo $education->producttitle; ?></center></h4>
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
  </body>
</html>
