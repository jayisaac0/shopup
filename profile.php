<?php
$page_title = "Home | Welcome to shopup";
$content = "Login and be part of our community";
?>
<?php require_once 'header.php'; ?>
<?php require_once 'database/loginsession.php'; ?>
<?php require_once 'navigation.php'; ?>

<div class="container body" style="margin-top:60px;">
<div class="main_container">

<!-- page content -->
<div class="right_col" role="main">
<div class="">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel" id="mypagecard">
<div class="x_title">
<h2>User Profile</h2>
<div class="clearfix"></div>
</div>
<div class="x_content">

<?php require_once 'includes/body/widgets/profiles/userprofile.php'; ?>


<?php require_once 'includes/body/widgets/profiles/nearbyshops.php'; ?>

<div class="col-md-4 col-sm-4 col-xs-12 profile_left">
<a class="btn btn-success col-md-12 col-sm-12"><i class="fa fa-edit m-right-xs"></i>Update Profile</a>
<!-- start skills -->
<?php require_once 'includes/body/updateforms/profileeditform.php'; ?>
<!-- end of skills -->
</div>

</div>
</div>
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
<script src="vendors/jquery/dist/jquery.min.js"></script>
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="vendors/fastclick/lib/fastclick.js"></script>
<script src="vendors/nprogress/nprogress.js"></script>
<script src="vendors/raphael/raphael.min.js"></script>
<script src="vendors/morris.js/morris.min.js"></script>
<script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<script src="vendors/moment/min/moment.min.js"></script>
<script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<?php require_once 'includes/footer/footer.php'; ?>
</body>
</html>