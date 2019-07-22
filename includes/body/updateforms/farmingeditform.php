<?php require_once 'includes/body/updateformcontrollers/updatefarmingformccontroller.php'; ?>

<?php
    $stmt = $auth_user->runQuery("SELECT * FROM farming WHERE `farming_id`='$farming_id' ");
    $stmt->execute(array());
    $farming=$stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($farming as $farming) {
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
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Farm product <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="hidden" id="user_id" name="user_id" value="<?php echo $userRow['user_id']; ?>">
            <input type="hidden" id="user_name" name="user_name" value="<?php echo $userRow['user_name']; ?>">
            <input type="text" id="snackname" name="farmproduct" required="required" class="form-control col-md-7 col-xs-12">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Farm product category<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="farmproductcategory" name="farmproductcategory" required="required" class="form-control col-md-7 col-xs-12" />
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Farm product price<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="farmproductprice" name="farmproductprice" required="required" class="form-control col-md-7 col-xs-12" />
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Food productfarmproduct details<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <textarea type="file" id="farmproductdetails" name="farmproductdetails" rows="6" required="required" class="form-control col-md-7 col-xs-12" ></textarea>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <a href="products"><button class="btn btn-primary" type="button">Back</button></a> 
            <button class="btn btn-primary" type="reset">Reset</button>
            <button type="submit" id="updatefarmproduct" name="updatefarmproduct" class="btn btn-success">Submit</button>
        </div>
    </div>
</form>
        <?php
    }
?>