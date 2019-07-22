<?php require_once 'includes/body/formcontrollers/cosmeticsformccontroller.php'; ?>
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
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Cosmetic name <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="hidden" id="user_id" name="user_id" value="<?php echo $userRow['user_id']; ?>">
            <input type="hidden" id="user_name" name="user_name" value="<?php echo $userRow['user_name']; ?>">
            <input type="text" id="cosmeticname" name="cosmeticname" required="required" class="form-control col-md-7 col-xs-12">
        </div>
    </div>


    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Cosmetic price<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="cosmeticprice" name="cosmeticprice" required="required" class="form-control col-md-7 col-xs-12" />
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Cosmetic details<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <textarea type="text" id="cosmeticdetails" name="cosmeticdetails" required="required" rows="5" class="form-control col-md-7 col-xs-12" ></textarea>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">New arrival </label>
        <div class="radio">
                <input type="radio" class="flat"  value="newcosmetic" id="newcosmetic" name="newcosmetic">
        </div>
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Featured cosmetic </label>
        <div class="radio">
                <input type="radio" class="flat"  value="featuredcosmetic" id="newcosmetic" name="newcosmetic">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Cosmetic colors</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="tags_1" name="cosmeticcolors" type="text" class="tags form-control" value="" />
            <div id="suggestions-container" style="position: relative; float: left; width: 100%; margin: 10px;"></div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Cosmetic anufacturer<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="cosmeticmanufacturer" name="cosmeticmanufacturer" required="required" class="form-control col-md-7 col-xs-12" />
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Cosmetic image<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="file" id="cosmeticimage" name="cosmeticimage" required="required" class="form-control col-md-7 col-xs-12" />
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Cosmetic offer<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="cosmeticoffer" name="cosmeticoffer" required="required" class="form-control col-md-7 col-xs-12" />
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
            <button type="submit" id="postcosmetic" name="postcosmetic" class="btn btn-success">Submit</button>
        </div>
    </div>
</form>
