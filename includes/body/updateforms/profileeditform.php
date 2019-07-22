<?php require_once 'includes/body/updateformcontrollers/profileeditformccontroller.php'; ?>
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
        <label class="control-label " for="first_name">First name<span class="required">*</span>
        </label>
        <div class="">
            <input type="text" id="first_name" name="first_name" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $userRow['first_name']; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label " for="middle_name">Middle name<span class="required">*</span>
        </label>
        <div class="">
            <input type="text" id="middle_name" name="middle_name" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $userRow['middle_name']; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label " for="last_name">Last name<span class="required">*</span>
        </label>
        <div class="">
            <input type="text" id="last_name" name="last_name" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $userRow['last_name']; ?>">
        </div>
    </div>
    <div class="form-group">
        
        <div class="radio">
                <input type="radio" class="flat"  value="male" id="gender" name="gender">
        </div>
        <label class="control-label">Male </label>
        <div class="radio">
                <input type="radio" class="flat"  value="female" id="gender" name="gender">
        </div>
        <label class="control-label">Female </label>
    </div>


    <div class="form-group">
        <label class="control-label" for="yearofbirth">Year of birth<span class="required" />*</span>
        </label>
        <div class="">
            <input type="text" id="yearofbirth" name="yearofbirth" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $userRow['yearofbirth']; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label" for="userphonenumber">User phone number<span class="required">*</span>
        </label>
        <div class="">
            <input type="text" id="userphonenumber" name="userphonenumber" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $userRow['userphonenumber']; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label" for="userphonenumber">Country<span class="required">*</span>
        </label>
        <div class="">
            <input type="text" id="country" name="country" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $userRow['country']; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label" for="userlocation">User location<span class="required">*</span>
        </label>
        <div class="">
            <input type="text" id="userlocation" name="userlocation" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $userRow['userlocation']; ?>">
        </div>
    </div>
    
    <div class="form-group">
        <label class="control-label" for="profileimage">Profile image<span class="required">*</span>
        </label>
        <div class="">
            <input type="file" id="profileimage" name="profileimage" required="required" class="form-control col-md-7 col-xs-12" />
        </div>
    </div>
    </div>

    <div class="form-group">
        <div class="">
            <button class="btn btn-primary" type="button">Cancel</button>
            <button class="btn btn-primary" type="reset">Reset</button>
            <button type="submit" id="updateuserprofile" name="updateuserprofile" class="btn btn-success">Submit</button>
        </div>
    </div>
</form>

