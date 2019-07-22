<?php require_once 'includes/body/updateformcontrollers/updatecateringformccontroller.php'; ?>
<?php
    $stmt = $auth_user->runQuery("SELECT * FROM catering WHERE `catering_id`='$catering_id' ");
    $stmt->execute(array());
    $catering=$stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($catering as $catering) {
        ?>

            <form class="form-horizontal"  role="form" method="POST" data-parsley-validate enctype="multipart/form-data" >

                <?php
                    if(isset($error))
                    {
                        foreach($error as $error)
                        {
                             ?>
                             <div class="alert alert-danger" style = "">
                                <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                             </div>
                             <?php
                        }
                    }
                ?>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Catering service <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="hidden" id="user_id" name="user_id" value="<?php echo $userRow['user_id']; ?>">
                        <input type="hidden" id="user_name" name="user_name" value="<?php echo $userRow['user_name']; ?>">
                        <input type="hidden" id="catering_id" name="catering_id" value="<?php echo $catering_id; ?>">
                        <input type="text" id="cateringservice" name="cateringservice" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $catering->cateringservice; ?>" />
                    </div>
                </div>


                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Catering service price<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="cateringserviceprice" name="cateringserviceprice" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $catering->cateringserviceprice; ?>"/>
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <a href="products"><button class="btn btn-primary" type="button">Back</button></a> 
                        <button class="btn btn-primary" type="reset">Reset</button>
                        <button type="submit" id="postcateringservice" name="postcateringservice" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>

        <?php
    }
?>