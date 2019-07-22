<div class="col-md-6 col-sm-6 col-xs-12">

    <div class="x_panel" id="" style="height:;">

        <div class="x_content">
            <div class="col-sm-3 col-md-3 col-xs-12">
                <!-- required for floating -->
                <!-- Nav tabs -->
                <ul class="nav nav-tabs tabs-left">
                    <li class="active"><a href="#1home" data-toggle="tab">Product</a>
                    </li>
                    <li><a href="#profile" data-toggle="tab">About</a>
                    </li>
                    
                    <li><a href="contact/<?php echo $shop->user_name; ?>" >Contact</a>
                    </li>
                    <li>
                    <li><a data-toggle=""><?php require_once 'includes/body/forms/addtocycle.php'; ?></a>
                    </li>
                    </li>
                </ul>
            </div>
            <div class="col-sm-9 col-md-9 col-xs-12" style="height:325px;">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="1home">
                        
                            <div class="bs-example" data-example-id="simple-jumbotron">
                            <img src="<?php echo $carscover->bannerimage; ?>" alt="img"  style="max-height:300px;width:100%;"/>
                            </div>

                    </div>
                    <div class="tab-pane" id="profile">
                            <p class="lead">About <?php echo $shop->shopname; ?></p>
                        <p><?php echo $carscover->aboutshop; ?></p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

</div>