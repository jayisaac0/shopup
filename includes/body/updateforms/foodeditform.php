<?php require_once 'includes/body/updateformcontrollers/updatefoodformccontroller.php'; ?>

<?php
    $stmt = $auth_user->runQuery("SELECT * FROM food WHERE `food_id`='$food_id' ");
    $stmt->execute(array());
    $food=$stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($food as $food) {
        ?>


<form class="form-horizontal"  role="form" method="POST" data-parsley-validate enctype="multipart/form-data">
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
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Food/snack name <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="hidden" id="user_id" name="user_id" value="<?php echo $userRow['user_id']; ?>" />
            <input type="hidden" id="user_name" name="user_name" value="<?php echo $userRow['user_name']; ?>" />
            <input type="hidden" id="food_id" name="food_id" value="<?php echo $food->food_id; ?>" />
            <input type="text" id="snackname" name="snackname" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $food->snackname; ?>" />
        </div>
    </div>



    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Food/snack price<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="snackprice" name="snackprice" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $food->snackprice; ?>"  />
        </div>
    </div>


    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Food/snack details<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <textarea type="file" id="snackdetails" name="snackdetails" rows="6" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $food->snackdetails; ?>" ></textarea>
        </div>
    </div>


    </div>



    <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <a href="products"><button class="btn btn-primary" type="button">Back</button></a> 
            <button class="btn btn-primary" type="reset">Reset</button>
            <button type="submit" id="postsnack" name="postsnack" class="btn btn-success">Submit</button>
        </div>
    </div>
</form>
        <?php
    }
?>