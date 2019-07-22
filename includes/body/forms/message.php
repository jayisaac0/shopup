<?php require_once 'includes/body/formcontrollers/messageformccontroller.php'; ?>
<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" role="form" method="POST">

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Subject<span class="required">*</span>
        </label>
            <input type="hidden" id="user_id" name="user_id" value="<?php echo $userRow['user_id']; ?>">
            <input type="hidden" id="user_name" name="user_name" value="<?php echo $userRow['user_name']; ?>"> 
            <input type="hidden" id="shopname" name="shopname" value="<?php echo $shop->shopname; ?>">    
            <input type="hidden" id="shopowner" name="shopowner" value="<?php echo $shop->user_name; ?>">     
        <input type="text" id="last-name" name="subject" required="required" class="form-control col-md-7 col-xs-12">
    </div>
    <div class="form-group">
        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Message<span class="required">*</span></label>
        <textarea id="middle-name" required="required" class="form-control col-md-7 col-xs-12" rows="20" type="text" name="message"></textarea>
    </div>

    <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-1">
            <button type="submit" name="messagepost" class="btn btn-success">Send message</button>
        </div>
    </div>
    <div class="ln_solid"></div>
</form>
