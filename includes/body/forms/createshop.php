<?php require_once 'includes/body/formcontrollers/createshopformccontroller.php'; ?>
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
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Shop name <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="hidden" id="user_id" name="user_id" value="<?php echo $userRow['user_id']; ?>">
            <input type="hidden" id="user_name" name="user_name" value="<?php echo $userRow['user_name']; ?>">
            <input type="text" id="shopname" name="shopname" required="required" class="form-control col-md-7 col-xs-12">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Shop key<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="shopkey" name="shopkey" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo md5(time()); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Type of business</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <select class="select2_single form-control" name="typeofbusiness" id="typeofbusiness" tabindex="-1">
                <option type=""></option>
                <option value="shop">Shop</option>
                <option value="cars">Cars</option>
                <option value="catering">Catering</option>
                <option value="consultancy">Consultancy</option>
                <option value="cosmetics">Cosmetics</option>
                <option value="education">Education</option>
                <option value="farming">Farming</option>
                <option value="food">Food</option>
                <option value="generalshop">General shop</option>
                <option value="health">Health</option>
                <option value="hotels">Hotels</option>
            </select>
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
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Phone number<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="phonenumber" name="phonenumber" required="required" class="form-control col-md-7 col-xs-12" />
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Identification number<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="idnumber" name="idnumber" required="required" class="form-control col-md-7 col-xs-12" />
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Country<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="country" name="country" required="required" class="form-control col-md-7 col-xs-12" />
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Town<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="town" name="town" required="required" class="form-control col-md-7 col-xs-12" />
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Exact business location<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="exactbusinesslocation" name="exactbusinesslocation" required="required" class="form-control col-md-7 col-xs-12" />
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Seller's known popular name<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="popularname" name="popularname" required="required" class="form-control col-md-7 col-xs-12" />
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
            <button type="submit" id="createshop" name="createshop" class="btn btn-success">Submit</button>
        </div>
    </div>
</form>
