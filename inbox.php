<?php
$page_title = "Inbox |";
$content = "Thinking of mails? no think of bulk orders for you";
?>
<?php require_once 'includes/head/panelheader.php'; ?>
<?php require_once 'database/loginsession.php'; ?>
<?php require_once 'includes/body/premiumcheck/premiumcheck.php' ?>

    <div class="container body">
      <div class="main_container">
       
            <?php require_once 'includes/head/panel.php'; ?>
            <!-- top navigation -->
            <?php require_once 'includes/head/topPanelNav.php'; ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
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


            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12" id="mypagecard">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Shop inbox</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                        <button id="compose" class="btn btn-sm btn-success btn-block" type="button">ALL MESSAGES</button>

                      <div class="col-sm-12 col-md-12 mail_list_column">
                        <?php
                            $stmt = $auth_user->runQuery(" SELECT * FROM  `messages` WHERE  `shopowner` = '$user->user_name' AND `shopname`='$user->shopname' ORDER BY timeposted DESC LIMIT 150 ");
                            $stmt->execute(array());
                            $messages=$stmt->fetchAll(PDO::FETCH_OBJ);
                            foreach ($messages as $message) {
                                if($message->viewed == 0){
                            ?>
                                <a href="message/<?php echo $message->messages_id; ?>" >
                                  <div class="mail_list" style="background:#FFFFFF;">
                                    <div class="left">
                                      <i class="fa fa-circle red"></i> <i class="glyphicon glyphicon-user"></i>
                                    </div>
                                    <div class="right">
                                      <p><b><?php echo $message->user_name; ?> <small><?php echo $message->timeposted; ?></small></b>
                                      <b>Subject: <?php echo substr($message->subject, 0, 23); ?>...</b>
                                      <?php echo substr($message->message, 0, 70); ?>...</p>
                                    </div>
                                  </div>
                                </a>
                            <?php
                                }else if($message->viewed == 1){
                            ?>
                                <a href="message/<?php echo $message->messages_id; ?>" >
                                  <div class="mail_list" style="background:#F7F7F7;;">
                                    <div class="left">
                                      <i class="fa fa-circle green"></i> <i class="glyphicon glyphicon-user"></i>
                                    </div>
                                    <div class="right">
                                      <p><b><?php echo $message->user_name; ?> <small><?php echo $message->timeposted; ?></small></b>
                                      <b>Subject: <?php echo substr($message->subject, 0, 23); ?>...</b>
                                      <?php echo substr($message->message, 0, 70); ?>...</p>
                                    </div>
                                  </div>
                                </a>
                            <?php
                                }else{
                                    echo 'OOPS!';
                                }

                            }
                        ?>
                      </div>
                      <!-- /MAIL LIST -->

                      <!-- CONTENT MAIL -->



                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

      </div>
    </div>




<?php   
} 
?>


<?php require_once 'includes/footer/footer.php'; ?>