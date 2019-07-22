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
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel" id="mypagecard">
<div class="x_title">
<h2><i class="fa fa-users"></i> My cycle</h2>
<div class="clearfix"></div>
</div>
<div class="x_content">


    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
        <ul id="" class="list-unstyled msg_list" role="menu">
            <?php

                $stmt = $auth_user->runQuery("
                        SELECT *
                        FROM    `businesscycle`
                        JOIN    `shops`
                        ON      `businesscycle`.`user`=`shops`.`user_name`
                        JOIN    `users`
                        ON      `businesscycle`.`user`=`users`.`user_name`
                        WHERE   `businesscycle`.`user_id`='$user_id'
                         ");
                $stmt->execute(array());
                $businesscycle=$stmt->fetchAll(PDO::FETCH_OBJ);
                foreach ($businesscycle as $businesscycle) {
                    ?>
                        <li style="padding-left:20px;">
                            <a href="<?php echo $businesscycle->typeofbusiness; ?>/<?php echo $businesscycle->user_name; ?>">
                                <span class="image"><img src="<?php echo $businesscycle->profileimage; ?>" alt="<?php echo $businesscycle->user; ?>" /></span>
                                <span>
                                    <span><?php echo $businesscycle->user; ?></span>
                                </span>
                                <span class="message">
                                    <?php echo $businesscycle->shopname; ?>
                                </span>
                            </a>
                        </li>
                    <?php

                }
            ?>    
        </ul>
    </div>



<div class="col-md-5 col-sm-5 col-xs-12">
    <div class="profile_title">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <h2>Nearby businesses</h2>
        </div>
    </div>
    




    <div class="" role="tabpanel" data-example-id="togglable-tabs">
 
        <div id="myTabContent" class="tab-content">
            <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                <!-- start recent activity -->
                <table class="data table table-striped no-margin">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Shop name</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
                        $stmt = $auth_user->runQuery("
                                SELECT *
                                FROM    `users`
                                JOIN    `shops`
                                ON      `users`.`user_id`=`shops`.`user_id`
                            ");
                        $stmt->execute(array());
                        $users=$stmt->fetchAll(PDO::FETCH_OBJ);
                        foreach ($users as $user ) {
                            if(strtolower($user->exactbusinesslocation) == strtolower($userRow['userlocation']))
                            {
                            ?>
                                <tr>
                                    <td>

                                    <div class="image view view-first" style="width:70px;height:70px;border-radius:70px;">
                                        <img src="<?php echo $user->profileimage; ?>" alt="img"  style="width:70px;height:70px;border-radius:70px;"/>
                                        <div class="mask">
                                            <div class="tools tools-bottom">
                                                <a href="<?php echo $user->typeofbusiness; ?>/<?php echo $user->user_name; ?>">Visit</a><br />
                                            </div>
                                        </div>
                                    </div>

                                    </td>
                                    <td>
                                        <?php echo $user->shopname; ?><br />
                                        you are a great programmer Joshua . this product will m ake you a millionare in a short while .HANG IN THERE<br />
                                        <p>
                                            <b>Business location: <i><?php echo $user->exactbusinesslocation; ?></i></b>
                                            <b style="float:right;color:blue;">Owner: <i><?php echo $user->popularname; ?></i></b>
                                        </p>
                                    </td>
                                </tr>
                            <?php                                
                            }

                            }
                        ?>


                    </tbody>
                </table>
                <!-- end recent activity -->
            </div>


        </div>
    </div>
</div>

    <div class="col-md-4 col-sm-4 col-xs-12 profile_left">

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">

                <div class="item active">
                    <div class="col-md-12 col-sm-12 col-xs-12 " id="mypagecard">
                        <div class="x_panel">
                            <img src="<?php echo $userRow['profileimage']; ?>" alt="" style="width:100%;max-height:350px;" />
                            <div class="x_content">
                                <div class="bs-example " data-example-id="simple-jumbotron">
                                    <div class="jumbotron ">
                                        <h3>You can have a look at your paid adverts here. See total views</h3><br />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            <?php
                $stmt = $auth_user->runQuery(" SELECT * FROM `paidadverts` WHERE `user_id`='$user_id'
                    ");
                $stmt->execute(array());
                $paidadverts=$stmt->fetchAll(PDO::FETCH_OBJ);
                foreach ($paidadverts as $paidadvert) {
                                              
                 ?>
                    <div class="item">
                        <div class="col-md-12 col-sm-12 col-xs-12 " id="mypagecard">
                          <div class="x_panel">
                          <img src="<?php echo $paidadvert->advertimage; ?>" alt="" style="width:100%;" />
                            <div class="x_content">
                              <div class="bs-example " data-example-id="simple-jumbotron">
                                <div class="jumbotron ">
                                    <?php echo $paidadvert->advertdetails; ?><br />
                                    <a>http://www.exploreeducation.com/ref/?647476783</a>
                                    <hr />
                                    <b>
                                        <b>Duration: <i>5 days</i></b>
                                        <b style="float:right;color:blue;">Status: <i class="green">Visible</i><i class="red">Visible</i></b>
                                    </b>
                                </div>
                                <div class="dropdown dropup docs-options">
                                    <button type="button" class="btn btn-primary btn-block dropdown-toggle" id="toggleOptions" data-toggle="dropdown" aria-expanded="true">
                                        View advert statistics
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu col-md-12 col-sm-12 col-xs-12" aria-labelledby="toggleOptions" role="menu">
                                        <li role="presentation">
                                            <label class="checkbox-inline">
                                                <h5><i class="fa fa-clock-o"></i> DATE POSTED: <?php echo $paidadvert->timeposted; ?></h5>
                                            </label>
                                        </li>
                                        <li role="presentation">
                                            <label class="checkbox-inline">
                                                <h5><i class="fa fa-clock-o"></i>  DATE POSTED: <?php echo $paidadvert->timeposted; ?></h5>
                                            </label>
                                        </li>
                                        <li role="presentation">
                                            <label class="checkbox-inline">
                                                <h5><i class="glyphicon glyphicon-eye-open"></i> VIEWS: 2345</h5>
                                            </label>
                                        </li>
                                        <li role="presentation">
                                            <label class="checkbox-inline">
                                                <h5><i class="glyphicon glyphicon-eye-open"></i> responsive</h5>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>                
                 <?php
                }
            ?>




            </div>
            <a class=" carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            </a>
        </div>








             




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