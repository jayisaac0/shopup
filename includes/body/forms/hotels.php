<?php require_once 'includes/body/formcontrollers/hotelformccontroller.php'; ?>
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
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Hote name<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="hidden" id="user_id" name="user_id" value="<?php echo $userRow['user_id']; ?>">
            <input type="hidden" id="user_name" name="user_name" value="<?php echo $userRow['user_name']; ?>">
            <input type="text" id="hotelname" name="hotelname" required="required" class="form-control col-md-7 col-xs-12">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Hotel location<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="hotellocation" name="hotellocation" required="required" class="form-control col-md-7 col-xs-12" />
        </div>
    </div>


    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Hotel room details<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <textarea type="text" id="hotelroomdetails" name="hotelroomdetails" required="required" class="form-control col-md-7 col-xs-12" rows="8"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Hotel room price<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="hotelroomprice" name="hotelroomprice" required="required" class="form-control col-md-7 col-xs-12" />
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Hotel room price duration<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="hotelroompriceduration" name="hotelroompriceduration" required="required" class="form-control col-md-7 col-xs-12" />
        </div>
    </div>
        <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Hotel room image<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="file" id="hotelroomimage" name="hotelroomimage" required="required" class="form-control col-md-7 col-xs-12" />
        </div>
    </div>



    <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <button class="btn btn-primary" type="button">Cancel</button>
            <button class="btn btn-primary" type="reset">Reset</button>
            <button type="submit" id="posthotelroom" name="posthotelroom" class="btn btn-success">Submit</button>
        </div>
    </div>
</form>
