<?php
$page_title = "Cars | View our large collection of cars";
$content = "View our large collection of cars in shops around the globe";
?>
<?php require_once 'header.php'; ?>
<?php require_once 'navigation.php'; ?>
<?php
if(isset($_GET['user'])) {
$user = $_GET['user'];
?>

    <?php
        $stmt = $auth_user->runQuery(" SELECT * FROM `users` JOIN `shops` ON `users`.`user_id`=`shops`.`user_id` WHERE `shops`.`user_name` = '$user' ");
        $stmt->execute(array());
        $shops=$stmt->fetchAll(PDO::FETCH_OBJ);
        foreach ($shops as $shop) {
        ?>
            <?php
                $stmt = $auth_user->runQuery("SELECT * FROM carscover WHERE `user_name` = '$shop->user_name' ");
                $stmt->execute(array());
                $carscover=$stmt->fetchAll(PDO::FETCH_OBJ);
                foreach ($carscover as $carscover) {
                    ?>
                        
                <div class="container body" style="margin-top:60px;">
                    <div class="main_container">
                        <div class="right_col" role="main" style="background:<?php echo $carscover->backgroundcolor; ?>;">
                            <div class="">
                                <div class="clearfix"></div>
                                <div class="">
                                    <?php require_once 'includes/body/widgets/cars/profile.php'; ?>
                                    <?php require_once 'includes/body/widgets/cars/banner.php'; ?>         
                                    <?php require_once 'includes/body/widgets/cars/carlist.php'; ?> 
                                    <?php require_once 'includes/body/widgets/cars/cars.php'; ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                        <?php require_once 'includes/body/statistics/statistics.php'; ?>

                </div>
                
            <script src="vendors/jquery/dist/jquery.min.js"></script>
            <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
            <script src="vendors/fastclick/lib/fastclick.js"></script>
            <script src="vendors/nprogress/nprogress.js"></script>
            <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
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