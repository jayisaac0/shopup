<?php
$page_title = "Dashboard | ";
$content = "View full services analytics";
?>
<?php require_once 'includes/head/panelheader.php'; ?>
<?php require_once 'database/loginsession.php'; ?>
<?php require_once 'includes/body/premiumcheck/premiumcheck.php' ?>

    <div class="container body">
      <div class="main_container">
       
            <?php require_once 'includes/head/panel.php'; ?>
            <!-- top navigation -->
            <?php require_once 'includes/head/topPanelNav.php'; ?>
            <?php

                $stmt = $auth_user->runQuery("
                        SELECT *
                        FROM  `users`
                        JOIN  `shops`
                        ON    `users`.`user_id`=`shops`.`user_id`
                        WHERE   `shops`.`user_id` = '$user_id'
                    ");
                $stmt->execute(array());
                $users=$stmt->fetchAll(PDO::FETCH_OBJ);
                foreach ($users as $user ) {
                    ?>

            
        <div class="right_col" role="main">
          <div class="">
            <div class="row top_tiles">

              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12" id="mypagecard">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-caret-square-o-right"></i></div>
                                    <?php

                                        $stmt = $auth_user->runQuery("
                                                SELECT *
                                                FROM    `users`
                                                JOIN    `shops`
                                                ON      `users`.`user_id`=`shops`.`user_id`
                                                JOIN    `businesscycle`
                                                ON      `users`.`user_name`=`businesscycle`.`user`
                                                WHERE   `shops`.`user_id` = '$user_id'
                                            ");
                                        $stmt->execute(array());
                                        $users=$stmt->fetchAll(PDO::FETCH_OBJ);
                                        foreach ($users as $user ) {
                                            (int)$customernumber=1;
                                            @$customers += $customernumber;
                                            }
                                        ?>

                  <div class="count"><?php echo @$customers; ?></div>
                  <h3>Customers</h3>
                  <p><a href="contacts">Customers</a></p>
                </div>
              </div>

              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12" id="mypagecard">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-comments-o blue"></i></div>
                        <?php
                            $stmt = $auth_user->runQuery(" SELECT * FROM  `messages` WHERE  `shopowner` = '$user->user_name' AND `shopname`='$user->shopname' ");
                            $stmt->execute(array());
                            $messages=$stmt->fetchAll(PDO::FETCH_OBJ);
                            foreach ($messages as $message) {
                                (int)$customernumber=1;
                                @$mails += $customernumber;
                            }
                        ?>

                  <div class="count"><?php echo @$mails; ?></div>
                  <h3>Messages</h3>
                  <p><a href="inbox">View messages</a></p>
                </div>
              </div>

              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12" id="mypagecard">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-comments-o green"></i></div>
                        <?php
                            $stmt = $auth_user->runQuery(" SELECT * FROM  `messages` WHERE  `shopowner` = '$user->user_name' AND `shopname`='$user->shopname' AND `viewed`='1' ");
                            $stmt->execute(array());
                            $messages=$stmt->fetchAll(PDO::FETCH_OBJ);
                            foreach ($messages as $message) {
                                (int)$customernumber=1;
                                @$readmails += $customernumber;
                            }
                        ?>

                  <div class="count"><?php echo @$readmails; ?></div>
                  <h3>Read Messages</h3>
                  <p><a href="inbox">View messages</a></p>
                </div>
              </div>

              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12" id="mypagecard">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-comments-o red"></i></div>
                        <?php
                            $stmt = $auth_user->runQuery(" SELECT * FROM  `messages` WHERE  `shopowner` = '$user->user_name' AND `shopname`='$user->shopname' AND `viewed`='0' ");
                            $stmt->execute(array());
                            $messages=$stmt->fetchAll(PDO::FETCH_OBJ);
                            foreach ($messages as $message) {
                                (int)$customernumber=1;
                                @$unreadmails += $customernumber;
                            }
                        ?>

                  <div class="count"><?php echo @$unreadmails; ?></div>
                  <h3>Unread Messages</h3>
                  <p><a href="inbox">View messages</a></p>
                </div>
              </div>

            </div>

            <div class="row">
              <div class="col-md-12" id="mypagecard">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Transaction Summary <small>Weekly progress</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-9 col-sm-12 col-xs-12">
                      <div class="demo-container" style="height:280px">
                        <div id="chart_plot_02" class="demo-placeholder"></div>
                      </div>
                      <div class="tiles">
                        <div class="col-md-4 tile">
                          <span>User shop visits</span>

                              <?php
                                  $stmt = $auth_user->runQuery(" SELECT * FROM  `pageviews` WHERE  `shopname`='$user->shopname'  ");
                                  $stmt->execute(array());
                                  $pageviews=$stmt->fetchAll(PDO::FETCH_OBJ);
                                  foreach ($pageviews as $pageviews) {
                                      (int)$pagevisits=1;
                                      @$pv += $pagevisits;
                                  }
                              ?>

                          <h2><?php echo @$pv; ?> Views</h2>
                          <span class="sparkline11 graph" style="height: 160px;">
                               <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                          </span>
                        </div>
                        <div class="col-md-4 tile">
                          <span>Gneral shop visits</span>
                              <?php
                                  $stmt = $auth_user->runQuery(" SELECT * FROM  `offpageviews` WHERE  `shopname`='$user->shopname' AND `shopid`='$user->shops_id'  ");
                                  $stmt->execute(array());
                                  $offpageviews=$stmt->fetchAll(PDO::FETCH_OBJ);
                                  foreach ($offpageviews as $offpageview) {
                                      ?>
                                          <h2><?php echo $offpageview->allcount; ?> Views</h2>
                                      <?php
                                  }
                              ?>

                          <span class="sparkline22 graph" style="height: 160px;">
                                <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                          </span>
                        </div>
                        <div class="col-md-4 tile">
                          <span>Percentage popularty</span>
                          <?php
                                @$per = ( ($pv/$offpageview->allcount )/($pv+$offpageview->allcount) * 100 );

                          ?>
                          <h2><?php echo number_format($per, 2).'%'; ?></h2>
                          <span class="sparkline11 graph" style="height: 160px;">
                                 <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                          </span>
                        </div>
                      </div>

                    </div>




                    <div class="col-md-3 col-sm-12 col-xs-12">
                      <div>
                        <div class="x_title">
                          <h2>Top shops</h2>
                          <div class="clearfix"></div>
                        </div>

                        <ul class="list-unstyled top_profiles scroll-view">

                        <?php
                            $stmt = $auth_user->runQuery("
                                    SELECT *
                                    FROM    `users`
                                    JOIN    `shops`
                                    ON      `users`.`user_id`=`shops`.`user_id`
                                    WHERE   `shops`.`typeofbusiness` = '$user->typeofbusiness' 
                                    LIMIT 5
                                ");
                            $stmt->execute(array());
                            $users=$stmt->fetchAll(PDO::FETCH_OBJ);
                            foreach ($users as $user ) {
                            ?>
                                <li class="media event" >
                                    <a class="pull-left border-aero profile_thumb">
                                        <i class="fa fa-user aero"></i>
                                    </a>
                                    <div class="media-body">
                                        <a class="title" href="<?php echo $user->typeofbusiness; ?>/<?php echo $user->user_name; ?>"><?php echo $user->shopname; ?></a>
                                        <p>[<?php echo $user->first_name.' '; ?><?php echo $user->middle_name.' '; ?><?php echo $user->last_name.' '; ?>]</p>
                                        <p> <small><?php echo number_format('124534534'); ?> Recomendations</small></p>



                                    </div>
                                </li>    
                            <?php   
                          } 
                        ?>

                        </ul>
                      </div>
                    </div>


                  </div>
                </div>
              </div>
            </div>







            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12" id="mypagecard">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Shop viewers</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <?php
                        $stmt = $auth_user->runQuery("SELECT * FROM  `pageviews` JOIN `users` ON `users`.`user_id`=`pageviews`.`user_id` WHERE  `shopname`='$user->shopname' ORDER BY `timeviewed` DESC LIMIT 5 ");
                        $stmt->execute(array());
                        $pageviews=$stmt->fetchAll(PDO::FETCH_OBJ);
                        foreach ($pageviews as $pageview) {
                        ?>
                            <article class="media event">
                              <a class="">
                                <img src="<?php echo $pageview->profileimage; ?>" alt="" style="height:50px;width:50px;" class="pull-left date " />
                              </a>
                              <div class="media-body">
                                <a class="title" href="#"><?php echo $pageview->user_name; ?></a>
                                <p><?php echo $pageview->first_name.' '; ?><?php echo $pageview->middle_name.' '; ?><?php echo $pageview->last_name; ?> [<?php echo $pageview->country; ?>, <?php echo $pageview->userlocation; ?>]</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                              </div>
                            </article>                        
                        <?php
                        }
                    ?>

                  </div>
                </div>
              </div>

             
            <div class="col-md-6 col-sm-6 col-xs-12" id="mypagecard">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Daily active users <small>Sessions</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <div class="bs-example" data-example-id="simple-jumbotron">
                    <div class="jumbotron">
                          <center><b class="blue"><h1>VISIT</h1></b></center>
                          <?php
                                @$per = ($pv/$offpageview->allcount )/($pv+$offpageview->allcount) * 100;
                          ?><br /><br />
                          <center><b class="red"><h1><?php echo number_format($per, 2).'%'; ?></h1></b></center>

                    </div>
                  </div>

                </div>
              </div>
            </div>
         

            </div>
          </div>
        </div>
        <!-- /page content -->
<?php   
} 
?>


      </div>
    </div>


    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>


  </body>
</html>