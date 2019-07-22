<div class="col-md-2 col-sm-2 col-xs-12 contentscreenhide" data-spy="affix" data-offset-top="205">
    <div class="x_panel" id="mypagecard" >
        <div class="x_title">
            <h2 style="padding:0px;margin:0px;">
                  <a href="profile" class="user-profile "  style="padding:0px;margin:0px;">
                    <img src="images/icons/profile.ico" alt=""  style="padding:0px;margin:0px;" tooltip="top" />
                  </a>
                  Welcome home
            </h2>

            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in thumbnail " id="tab_content1" aria-labelledby="home-tab">
                        <img src="<?php echo $userRow['profileimage']; ?>" alt="" />
                    </div>
                    <b class="blue"><center><?php echo $userRow['first_name'].' '; ?><?php echo $userRow['middle_name'].' '; ?><?php echo $userRow['last_name'].' '; ?></center></b>
                    <b><center>( <?php echo $userRow['user_name']; ?> )</center></b>
                </div>
            </div>
        </div>
    </div>
    copyright &copy <?php echo date('Y'); ?>

  <style>.affix {top: 45px;}</style>
<div style="margin:0px auto;padding:0px;" class="nav nav-pills nav-stacked " data-spy="affix" data-offset-top="205"  id="mypagecard" >
<!-- Insert to your webpage where you want to display the carousel -->
<div id="amazingcarousel-container-1" style="background:#FFFFFF;">
    <div id="amazingcarousel-1" style="display:none;position:relative;width:100%;max-width:240px;margin:0px auto 0px;">
        <div class="amazingcarousel-list-container">
            <ul class="amazingcarousel-list">
            <?php
                $stmt = $auth_user->runQuery(" SELECT * FROM `paidadverts` 
                    ");
                $stmt->execute(array());
                $paidadverts=$stmt->fetchAll(PDO::FETCH_OBJ);
                foreach ($paidadverts as $paidadvert) {
                    ?>
                    <li class="amazingcarousel-item col-md-12 col-sm-12">
                        <div class="amazingcarousel-item-container">
                            <div class="w3-card-4">
                                <a href="<?php echo $paidadvert->advertimage; ?>" title="<?php echo $paidadvert->advertdetails; ?> "  class="html5lightbox" data-group="amazingcarousel-1">
                                <img src="<?php echo $paidadvert->advertimage; ?>"  alt="<?php echo $paidadvert->advertdetails; ?>" style="width:100%;" data-toggle="tooltip" data-placement="right" title="Advertisement" />
                                </a>
                            </div>
                            <a href="<?php echo $paidadvert->paidadverts_id; ?>" style="text-decoration:none;"><b style="color:blue;"><?php echo $paidadvert->adverttitle.' '; ?></b><b style="color:red;"> </b></a>
                        </div>
                    </li>
                    <?php
                }
            ?>
            </ul>
        </div>
    </div>
</div>
<!-- End of body section HTML codes -->
</div>
</div>