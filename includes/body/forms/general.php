<?php require_once 'includes/body/formcontrollers/generalshopformccontroller.php'; ?>
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
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product name <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="hidden" id="user_id" name="user_id" value="<?php echo $userRow['user_id']; ?>">
            <input type="hidden" id="user_name" name="user_name" value="<?php echo $userRow['user_name']; ?>">
            <input type="text" id="productname" name="productname" required="required" class="form-control col-md-7 col-xs-12">
        </div>
    </div>



 
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Product price<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="productprice" name="productprice" required="required" class="form-control col-md-7 col-xs-12" />
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Product specification<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <textarea type="text" id="productspecification" name="productspecification" required="required" rows="5" class="form-control col-md-7 col-xs-12" ></textarea>
        </div>
    </div>


    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Product category<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="productcategory" name="productcategory" required="required" class="form-control col-md-7 col-xs-12" />
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Product manufacturer<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="productmanufacturer" name="productmanufacturer" required="required" class="form-control col-md-7 col-xs-12" />
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Product image<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="file" id="productimage" name="productimage" required="required" class="form-control col-md-7 col-xs-12" />
        </div>
    </div>




    <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <button class="btn btn-primary" type="button">Cancel</button>
            <button class="btn btn-primary" type="reset">Reset</button>
            <button type="submit" id="postgeneralshop" name="postgeneralshop" class="btn btn-success">Submit</button>
        </div>
    </div>
</form>
