<?php
$page_title = "Home | Welcome to shopup";
$content = "Login and be part of our community";
?>
<?php require_once 'header.php'; ?>

<?php require_once 'database/loginsession.php'; ?>
<?php require_once 'navigation.php'; ?>


    <div class="container body" style="margin-top:60px;">
        <div class="main_container">
            <div class="right_col" role="main">
                <div class="">
                    <div class="clearfix"></div>
                    <div class="">
                        <?php require_once 'includes/body/widgets/homeprofile.php'; ?>
                        <?php require_once 'includes/body/widgets/homeposts.php'; ?>
                        <?php require_once 'includes/body/widgets/homecycle.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="vendors/iCheck/icheck.min.js"></script>
    <script src="build/js/custom.min.js"></script>
    </body>
</html>
