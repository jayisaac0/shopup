<?php
$page_title = "HOME | ";
$content = "Welcome to the shopin site where you advance your business beyond its limits";
?>
<?php require_once 'header.php'; ?>



<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
    background-image: url('images/tour.jpg');
    min-height: 100%;
    background-position: center;
    background-size: cover;
}
</style>



<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
<div class="tab-content">
<div class="image view-first" style="max-height:100%;width:100%;display: block;overflow:hidden;">
<div class="no-caption">
<div class="" style="width:100%;margin-top:5px;">
<div class="" >
<div class="x_title  navbar navbar-fixed-top">
    <h2>SHOP NAME| </h2>

    <?php
        $login = new USER();
        if($login->is_loggedin()!="")
        {
            ?>
            <a href="home" style="float:right;"><b style="font-size:18px;">Home</b></a>
            <?php
        }else
        {
            ?>
            <a href="log-in.php?url=<?php echo base64_encode('home'); ?>" style="float:right;"><b style="font-size:18px;">Home</b></a>
            <?php
        }
    ?>

    <div class="clearfix"></div>
</div>
<div class="x_content" style="margin-top:60px;">


    <div class="col-sm-12 col-md-12 col-xs-12" style="overflow-y:;max-height:;">
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="1home">
                <div class="image view-first" style="max-height:auto;width:100%;margin-left:auto;margin-right:auto;">
                    <center><h1 style="color:#FFFFFF;">Shopup</h1></center><br /><br />
                    <center><p style="font-size:18px;color:#FFFFFF;padding-left: 40%;"><b>Search...</b> </p></center><br /><br />
                    <center>
                        <p>
                           
                            <div class="media-left" style = "background:;">
                                <?php require_once 'includes/searchengine/searchbar.php'; ?>
                            </div>
                            <div class="col-sm-3 col-md-3 col-xs-12 w3-card-12"  id="results"></div>
                        </p>
                    </center>
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
    

	








  </body>
</html>