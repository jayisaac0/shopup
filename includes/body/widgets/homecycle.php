<div class="col-md-2 col-sm-2  contentscreenhide">
    <div class="x_panel" id="mypagecard">
        <center><img src="images/logo.png" alt="logo" style="width:100%;" /></center>
        <div class="x_title">
            <h2>My business circle</h2>
            <div class="clearfix"></div>
        </div>


    </div>
        <style>.affix {top: 45px;}</style>
        <div style="margin:0px auto;padding:0px;background:#FFFFFF;width:100%;" class="nav nav-pills nav-stacked " data-spy="affix" data-offset-top="205"  id="mypagecard" >
            <div class="x_content">
                <ul class="list-unstyled msg_list">
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
                        <li>
                        <a href="<?php echo $businesscycle->typeofbusiness; ?>/<?php echo $businesscycle->user_name; ?>">
                            <span class="image"><img src="<?php echo $businesscycle->profileimage; ?>" alt="<?php echo $businesscycle->user; ?>" style="width:20px;height:20px;background:url('images/icons/name.ico') no-repeat;background-size:100%;" /></span><?php echo $businesscycle->shopname; ?>
                            </a>
                        </li>
                        <?php
                    }
                ?>
                </ul>
            </div>
        </div>
</div>