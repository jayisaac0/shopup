<div class="col-md-3 col-sm-3 col-xs-12 profile_left">
    <div class="profile_img">
        <div id="crop-avatar">
        <!-- Current avatar -->
        <img class="img-responsive avatar-view" src="<?php echo $userRow['profileimage']; ?>" alt="Avatar" title="Change the avatar">
        </div>
    </div>
    <h3><?php echo $userRow['user_name']; ?></h3>
    <ul class="list-unstyled user_data">
        <li><i class="fa fa-map-marker user-profile-icon"></i> 
            <?php echo $userRow['first_name']; ?> <?php echo $userRow['middle_name']; ?> <?php echo $userRow['last_name']; ?>
        </li>
        <li><i class="fa fa-briefcase user-profile-icon"></i> <?php echo $userRow['yearofbirth']; ?></li>
        <li><i class="fa fa-map-marker user-profile-icon"></i> <?php echo $userRow['userphonenumber']; ?></li>
        <li><i class="fa fa-briefcase user-profile-icon"></i> <?php echo $userRow['gender']; ?></li>
    </ul>
    <br />
    <!-- start skills -->
    <h4>Profile completion</h4>
    <ul class="list-unstyled user_data">
        <li>
            <p>User profile</p>
            <div class="progress progress_sm">
                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
            </div>
        </li>
    </ul>

   <a href="payperadd"><button class="btn btn-lg btn-primary">Pay to advertise</button></a>  
    <!-- end of skills -->
</div>