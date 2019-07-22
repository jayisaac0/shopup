
<?php require_once 'includes/body/formcontrollers/foodformccontroller.php'; ?>
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
            <input type="hidden" id="user_id" name="user_id" value="<?php echo $userRow['user_id']; ?>">
            <input type="hidden" id="user_name" name="user_name" value="<?php echo $userRow['user_name']; ?>">
            <input type="text" id="snackname" name="snackname" required="required" class="form-control col-md-7 col-xs-12">
        </div>
    </div>



    <!--<div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Male </label>
        <div class="radio">
                <input type="radio" class="flat" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> Option one. only select one option
        </div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Female</label>
        <div class="radio">
                <input type="radio" class="flat" value="option2" id="optionsRadios2" name="optionsRadios"> Option two. only select one option
        </div>
    </div>-->


    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Food/snack price<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="snackprice" name="snackprice" required="required" class="form-control col-md-7 col-xs-12" />
        </div>
    </div>



    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Food/snack image<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="file" id="snackimage" name="snackimage" required="required" class="form-control col-md-7 col-xs-12" />
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Food/snack details<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <textarea type="file" id="snackdetails" name="snackdetails" rows="6" required="required" class="form-control col-md-7 col-xs-12" ></textarea>
        </div>
    </div>


    </div>




    <!--<div class="control-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Input Tags</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="tags_1" type="text" class="tags form-control" value="" />
            <div id="suggestions-container" style="position: relative; float: left; width: 100%; margin: 10px;"></div>
        </div>
    </div>-->

    <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <button class="btn btn-primary" type="button">Cancel</button>
            <button class="btn btn-primary" type="reset">Reset</button>
            <button type="submit" id="postsnack" name="postsnack" class="btn btn-success">Submit</button>
        </div>
    </div>
</form>
