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
<?php
    if(isset($_GET['id'])) {
    $id = $_GET['id'];


?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">



            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12" id="mypagecard">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Message</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">



                    <div class="row">
                      <div class="col-sm-12 mail_view">

                        <div class="inbox-body" >

                        <?php
                            $stmt = $auth_user->runQuery(" 
                                                    SELECT * 
                                                    FROM  `messages` 
                                                    WHERE  `messages_id` = '$id'  
                                                    ");
                            $stmt->execute(array());
                            $messages=$stmt->fetchAll(PDO::FETCH_OBJ);
                            foreach ($messages as $message) {
                            ?>                        
                          <div class="mail_heading row">
                            <div class="col-md-8">
                              <div class="btn-group">
                                <h2><button class="btn btn-lg btn-primary" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Trash"><i class="fa fa-trash-o"></i></button>

                                <a href="inbox"><button class="btn btn-lg btn-primary" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Trash"><i class="fa fa-back">Back to inbox</i></button></a></h2>
                              </div>
                            </div>
                            <div class="col-md-4 text-right">
                              <p class="date"> <?php echo $message->timeposted; ?></p>
                            </div>
                            <div class="col-md-12">
                              <h4>SUBJECT: <?php echo $message->subject; ?></h4>
                            </div>
                          </div>
                          <div class="sender-info">
                            <div class="row">
                              <div class="col-md-12">
                                <strong>FROM: <?php echo $message->user_name; ?></strong><br />
                                 TO: <strong><?php echo $message->shopowner; ?></strong>
                              </div>
                            </div>
                          </div><br />
                          <div class="view-mail">
                            <p><?php echo $message->message; ?></p>
                          </div>
                        <form class="form-horizontal"  role="form" method="POST" data-parsley-validate enctype="multipart/form-data">
                            <div class="attachment">
                                <p> <h3>Reply</h3> </p>
                                
                                    <div class="form-group">
                                        <label class="control-label col-md-1 col-sm-1 col-xs-12" for="first-name">Subject<span class="required">*</span>
                                        </label>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input type="text" id="cateringservice" required="required"  name="cateringservice" required="required" class="form-control col-md-12 col-sm-12 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-1 col-sm-1 col-xs-12" for="first-name">Message<span class="required">*</span>
                                        </label>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <textarea type="text" id="cateringservice" name="cateringservice" required="required" class="form-control col-md-12 col-sm-12 col-xs-12" required="required"  rows="10"></textarea>
                                        </div>
                                    </div>
                                
                            </div>
                            <div class="btn-group">
                                <button type="submit" id="messagereply" name="messagereply" class="btn btn-success" ><i class="fa fa-reply"></i> Reply</button>
                            </div>
                        </form>
                        <?php
                            //Mark message as read 
                            $stmt = $auth_user->runQuery("SELECT * FROM messages WHERE `messages_id`='$id'");
                            $stmt->execute(array());
                            $messages=$stmt->fetchAll(PDO::FETCH_OBJ);
                            if($stmt->rowCount() == 1)
                            {
                                try
                                {
                                    $id = $_GET['id'];
                                    $stmt = $auth_user->runQuery("UPDATE messages SET `viewed`=1 WHERE `messages_id`='$id' ");
                                    $stmt->bindparam("1", $viewed);
                                    $stmt->execute();
                                    return $stmt;
                                }
                                catch(PDOException $e)
                                {
                                    echo $e->getMessage();
                                }  
                            }
                        ?>


                            <?php
                            }
                        ?>
                        </div>
                      </div>
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