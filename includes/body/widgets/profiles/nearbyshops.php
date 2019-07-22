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
                                ON      `users`.`user_id`=`shops`.`user_id` LIMIT 6
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
<?php require_once 'header.php'; ?>

                    </tbody>
                </table>
                <a href="fullcycle">View all</a>
                <!-- end recent activity -->
            </div>

        </div>
    </div>
</div>