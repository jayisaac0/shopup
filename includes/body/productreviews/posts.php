<ul id="" class=" list-unstyled msg_list" role="menu">
<?php
    $stmt = $auth_user->runQuery("
                     SELECT *
                        FROM    `users` 
                        JOIN    `productreviews`
                        ON      `users`.`user_name`=`productreviews`.`user_name`
                        WHERE   `productreviews`.`shopowner` = '$user' AND `productreviews`.`actualproduct`='$id' ORDER BY timeposted DESC LIMIT 8
                        ");
    $stmt->execute(array());
    $productreviews=$stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($productreviews as $productreview) {
        ?>
        <li>
            <a>
                <span class="image">
                    <img src="<?php echo $productreview->profileimage; ?>" alt="<?php echo $productreview->user_name; ?>"  class="thumbnail" style="width:70px;height:80px;"/>
                </span>
                <span>
                    <span class="blue" style="font-weight:bold;">  <?php echo $productreview->first_name.' '; ?><?php echo $productreview->middle_name.' '; ?><?php echo $productreview->last_name; ?></span>
                    <span class="time blue"><?php echo $productreview->timeposted; ?></span>
                </span>
                <span class="message" style="font-size:13px;">
                    <?php echo $productreview->message; ?>
                </span>
            </a>
        </li>
        <?php
    }
?>  


</ul>

<a href="javascript::" data-toggle="modal" data-target=".bs-example-modal-lg">View all</a>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

        <div class="x_title">
            <h2><i class="fa fa-folder"></i> FULL REVIEWS </h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a href="javascript::"  data-dismiss="modal" style="padding:0px;margin:0px;"><img src="images/icons/close.png" alt="" /> </a></li>
            </ul>
            <div class="clearfix"></div>
        </div>




            <ul id="" class=" list-unstyled msg_list" role="menu">
            <?php
                $stmt = $auth_user->runQuery("
                                 SELECT *
                                    FROM    `users` 
                                    JOIN    `productreviews`
                                    ON      `users`.`user_name`=`productreviews`.`user_name`
                                    WHERE   `productreviews`.`shopowner` = '$user' AND `productreviews`.`actualproduct`='$id' ORDER BY timeposted DESC
                                    ");
                $stmt->execute(array());
                $productreviews=$stmt->fetchAll(PDO::FETCH_OBJ);
                foreach ($productreviews as $productreview) {
                    ?>
                    <li>
                        <a>
                            <span class="image">
                                <img src="<?php echo $productreview->profileimage; ?>" alt="<?php echo $productreview->user_name; ?>"  class="thumbnail" style="width:70px;height:80px;"/>
                            </span>
                            <span>
                                <span class="blue" style="font-weight:bold;">  <?php echo $productreview->first_name.' '; ?><?php echo $productreview->middle_name.' '; ?><?php echo $productreview->last_name; ?></span>
                                <span class="time blue"><?php echo $productreview->timeposted; ?></span>
                            </span>
                            <span class="message" style="font-size:13px;">
                                <?php echo $productreview->message; ?>
                            </span>
                        </a>
                    </li>
                    <?php
                }
            ?>  
            </ul>

        </div>
    </div>
</div>