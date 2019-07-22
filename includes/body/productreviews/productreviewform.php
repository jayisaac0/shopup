<?php require_once 'productreviewcontroller.php'; ?>
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
        <label class="control-label col-md-12 col-sm-12 col-xs-12" for="last-name">Write your review here if you have ever used this product<span class="required">*</span>
        </label>


        <input type="hidden" id="user_id" name="user_id" value="<?php echo $userRow['user_id']; ?>">
        <input type="hidden" id="user_name" name="user_name" value="<?php echo $userRow['user_name']; ?>">
        <input type="hidden" id="shopowner" name="shopowner" value="<?php echo $user; ?>">
        <input type="hidden" id="actualproduct" name="actualproduct" value="<?php echo $id; ?>">


        <div class="col-md-12 col-sm-12 col-xs-12">
            <textarea type="text" id="message" name="message" required="required" class="form-control col-md-12 col-xs-12" rows="6" ></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <button class="btn btn-primary btn-lg" type="reset">Reset</button>
            <button type="submit" id="hidden" name="postreview" class="btn btn-success btn-lg">Submit</button>
        </div>
    </div>
</form>