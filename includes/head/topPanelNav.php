  <style type="text/css"> textarea{resize:none;}</style>
<div class="top_nav">
  <div class="nav_menu" id="mypagecard">
    <nav>
      <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <li class="">
          <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <img src="<?php echo $userRow['profileimage']; ?>" alt=""><?php echo $userRow['user_name']; ?>
            <span class=" fa fa-angle-down"></span>
          </a>
          <ul class="dropdown-menu dropdown-usermenu pull-right">
            <li><a href="profile"> Profile</a></li>
            <li>
            <li><a href="javascript:;">Help</a></li>
            <li><a href="logout.php?logout=true"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
          </ul>
        </li>
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
        <li role="presentation" class="dropdown">
          <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-envelope-o"></i>
                <?php
                    $stmt = $auth_user->runQuery(" SELECT * FROM  `messages` WHERE  `shopowner` = '$user->user_name' AND `shopname`='$user->shopname' AND `viewed`='0' ");
                    $stmt->execute(array());
                    $messages=$stmt->fetchAll(PDO::FETCH_OBJ);
                    foreach ($messages as $message) {
                        (int)$customernumber=1;
                        @$dashboardunreadmails += $customernumber;
                    }
                ?>
            <span class="badge bg-green"><?php echo @$dashboardunreadmails; ?></span>
          </a>
          <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                <?php
                    $stmt = $auth_user->runQuery(" SELECT * FROM  `messages` WHERE  `shopowner` = '$user->user_name' AND `shopname`='$user->shopname' ORDER BY timeposted DESC LIMIT 150 ");
                    $stmt->execute(array());
                    $messages=$stmt->fetchAll(PDO::FETCH_OBJ);
                    foreach ($messages as $message) {
                        if($message->viewed == 0){
                    ?>
                        <li>
                          <a href="message/<?php echo $message->messages_id; ?>">
                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                            <span>
                              <span><?php echo $message->user_name; ?></span>
                              <span class="time"><?php echo $message->timeposted; ?></span>
                            </span>
                            <span class="message">
                              Subject: <?php echo substr($message->subject, 0, 23); ?>...
                            </span>
                          </a>
                        </li>
                    <?php
                        }
                    }
                ?>
                </li>
            <?php   
        } 
    ?>

      </ul>
    </nav>
  </div>
</div>