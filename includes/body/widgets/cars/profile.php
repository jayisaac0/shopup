<div class="col-md-3 col-sm-3 col-xs-12" data-spy="affix" data-offset-top="205">
    <div class="x_panel" id="mypagecard" >
        <div class="x_title">
            <h2><i class="fa fa-bars"></i> Tabs <small>Float left</small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                    </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                        <p>
                            <div class="tab-pane active" id="home">
                                <div class="bs-example" data-example-id="simple-jumbotron">
                                <center><img src="<?php echo $shop->profileimage; ?>" alt="img" style="max-height:250px;width:100%;"/></center>
                                        <h3><?php echo $shop->shopname; ?></h3>
                                        <p><b><?php echo $shop->user_name; ?></b></p>
                                </div>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>