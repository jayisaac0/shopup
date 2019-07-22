<?php require_once 'includes/body/updateformcontrollers/updatecreateshopformccontroller.php'; ?>
    <?php
        if(isset($error))
        {
            foreach($error as $error)
            {
                 ?>
                 <div class="alert alert-danger">
                    <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                 </div>
                 <?php
            }
        }
    ?>
<?php
    $stmt = $auth_user->runQuery("
                        SELECT *
                        FROM    `users`
                        JOIN    `shops`
                        ON      `users`.`user_id`=`shops`.`user_id`
                        WHERE   `shops`.`user_id` = '$user_id'
                         ");
    $stmt->execute(array());
    $shops=$stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($shops as $shop) {
        ?>
        <center>
            
                <div class="col-md-12 col-sm-12 col-xs-12 profile_left">
                    <div class="profile_img">
                        
                    </div>
                    <h3><?php echo $shop->user_name; ?></h3>
                    <ul class="list-unstyled user_data">
                        <li><i class="fa fa-user-marker user-profile-icon"></i><?php echo $shop->shopname; ?></li>
                        <li><i class="fa fa-map-marker user-profile-icon"></i><?php echo $shop->typeofbusiness; ?></li>
                        <li><i class="fa fa-contact-marker user-phone-icon"></i><?php echo $shop->phonenumber; ?></li>
                        <li><i class="fa fa-map-marker user-profile-icon"></i><?php echo $shop->country; ?> - <?php echo $shop->town; ?> [ <?php echo $shop->exactbusinesslocation; ?> ]</li>
                        <li><i class="fa fa-map-marker user-profile-icon"></i><?php echo $shop->popularname; ?></li>

                    </ul>
                    <br />
                </div>


        </center>



<form class="form-horizontal"  role="form" method="POST" data-parsley-validate enctype="multipart/form-data">

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-12 col-xs-3" for="first-name"><span class="required"></span>
        </label>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <input type="hidden" id="user_id" name="user_id" value="<?php echo $userRow['user_id']; ?>" />
            <input type="hidden" id="user_name" name="user_name" value="<?php echo $userRow['user_name']; ?>" />
            <input type="hidden" id="user_id" name="user_id" value="<?php echo $shop->user_id; ?>" />
        </div>
    </div>


    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Phone number<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="phonenumber" name="phonenumber" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $shop->phonenumber; ?>" />
        </div>
    </div>


    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Country<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="country" name="country" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $shop->country; ?>" />
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Town<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="town" name="town" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $shop->town; ?>" />
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Exact business location<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="exactbusinesslocation" name="exactbusinesslocation" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $shop->exactbusinesslocation; ?>" />
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Seller's known popular name<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="popularname" name="popularname" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $shop->popularname; ?>" />
        </div>
    </div>





    <?php

        if($shop->typeofbusiness == "generalshop" OR $shop->typeofbusiness == "cosmetics" OR $shop->typeofbusiness == "food" ){
            ?>
            <a data-toggle="tooltip" data-placement="top" title="Create order button to be able to get bulky orders and also accept onlime payments" body="GOOD">
            <div class="form-group">
                <label class="control-label col-md-10 col-sm-10 col-xs-12" for="last-name"><center>Do you want a shopup order button? (<b class="red">Recommended for large shops expecting to sell countrywide *</b>)</center><span class="required"></span>
                </label>
            </div>
                        <span  aria-hidden="true"></span>
            </a> 
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Yes</label>
                <div class="radio">
                        <input type="radio" class="flat"  value="yes" id="orderbutton" content="orderbutton" />
                </div>
                <label class="control-label col-md-3 col-sm-3 col-xs-12">No</label>
                <div class="radio">
                        <input type="radio" class="flat"  value="no" id="orderbutton" name="orderbutton" />
                </div>
            </div>
            <?php
        }

    ?>

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Currency <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="currency" name="currency" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $shop->currency; ?>" />
        </div>
    </div>







    <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <a href="products"><button class="btn btn-primary" type="button">Back</button></a> 
            <button class="btn btn-primary" type="reset">Reset</button>
            <button type="submit" id="createshop" name="createshop" class="btn btn-success">Submit</button>
        </div>
    </div>
</form>
        <?php
    }
?>