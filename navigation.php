<style type="text/css">.navbar-nav {margin:0px 0px;}@media (max-width: 780px) {nav ul li .mycontentscreenhide {display:none;}ul li .mcontentscreenhide {display:none;}@media (max-width: 360px) {nav ul li .mycontentscreenhide {display:none;}}</style>
<nav class="navbar navbar-fixed-top" style="background:#CCCCCC;">


  <ul class="nav navbar-nav " style="width: 100%;">



        <?php
        $login = new USER();
        if($login->is_loggedin()!="")
        {
            ?>
                <li class="" style="width:;float:left;">
                  <a href="home" class="user-profile " >
                    <img src="images/icons/home.ico" alt="" />
                  </a>
                </li>
                <li class="" style="width:;float:left;">
                  <a href="profile" class="user-profile " >
                    <img src="images/icons/profile.ico" alt="" />
                  </a>
                </li>
                <li class="" style="width:;float:left;">
                  <a href="dashboard" class="user-profile" >
                    <img src="images/icons/shop.ico" alt="" />
                  </a>
                </li>



                <li class="" style="width:;float:left;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/icons/bscycle.ico" alt="" />
                  </a>
                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">

                            <?php

                                $stmt = $auth_user->runQuery("
                                        SELECT *
                                        FROM    `businesscycle`
                                        JOIN    `shops`
                                        ON      `businesscycle`.`user`=`shops`.`user_name`
                                        JOIN    `users`
                                        ON      `businesscycle`.`user`=`users`.`user_name`
                                        WHERE   `businesscycle`.`user_id`='$user_id'
                                        LIMIT 5
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
                            <a href="fullcycle"> <li style="padding-left:40%;"><center><b>View all</b></center> </li></a>


                </ul>
            </li>






            <?php
        }else
        {
            ?>
                <li class="" style="width:;float:left;">
                  <a href="log-in.php?url=<?php echo base64_encode('home'); ?>" class="user-profile " >
                    <img src="images/icons/home.ico" alt="" />
                  </a>
                </li>
                <li class="" style="width:;float:left;">
                  <a href="log-in.php?url=<?php echo base64_encode('profile'); ?>" class="user-profile " >
                    <img src="images/icons/profile.ico" alt="" />
                  </a>
                </li>
                <li class="" style="width:;float:left;">
                  <a href="log-in.php?url=<?php echo base64_encode('dashboard'); ?>" class="user-profile" >
                    <img src="images/icons/shop.ico" alt="" />
                  </a>
                </li>                        
            <?php
        }
        ?>










    <div class="nav navbar-nav navbar-right" style="float:right;">
    <li class="" style="padding: 0px;margin:0px;">
    <div class="mycontentscreenhide media-left" style = "background:#FDFFFE;height: 57px;padding: 0px;margin: 0px;">
      <?php require_once 'includes/searchengine/searchbar.php'; ?>
      <div style="left:0;margin-top:57px;margin-left:;position:absolute;background:#000000;" id="results" style=""></div>
    </div>
    </li>

        <?php
        $login = new USER();
        if($login->is_loggedin()!="")
        {
            ?>

            <li class="">
              <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <img src="<?php echo $userRow['profileimage']; ?>" alt="">
                <span class=" fa fa-angle-down"></span>
              </a>
              <ul class="dropdown-menu dropdown-usermenu pull-right">
                <li><a href="profile"> Profile</a></li>
                <li>
                  <a href="javascript:;">
                    <span class="badge bg-red pull-right">50%</span>
                    <span>Settings</span>
                  </a>
                </li>
                <li><a href="javascript:;">Help</a></li>
                <li><a href="logout.php?logout=true"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
              </ul>
            </li>

            <?php
        }
        ?>


    </div>

    
  </ul>


</nav>
  