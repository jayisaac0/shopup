<style type="text/css"> #mypagecard{box-shadow:0px 4px 4px 4px  grey;padding:5px;} </style>
<div class="col-md-3 left_col menu_fixed">
    <div class="left_col scroll-view" id="mypagecard">
        <div class="navbar nav_title" style="border: 0;">
            <a href="home" class="site_title"><i class="fa fa-home"></i> <span>Back home</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="<?php echo $userRow['profileimage']; ?>" alt="<?php echo $userRow['user_name']; ?>" class="img-circle profile_img" style="width:75px;height:75px;">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $userRow['user_name']; ?></h2>
            </div>
        </div>
        <!-- /menu profile quick info -->
        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu menu_fixed">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="dashboard">Dashboard</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="createshop">Create shop</a></li>
                            <li><a href="postproducts">Post products</a></li>
                            <li><a href="shopinformation">Shop information</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-desktop"></i>My shop<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="products">Products</a></li>
                            <li><a href="invoice">Invoice</a></li>
                            <li><a href="inbox">Inbox</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="tables">Tables</a></li>
                            <li><a href="circle">Customer circle</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="morisjs">Moris JS</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-book"></i> Contacts <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="contacts">Contacts</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small footer_fixed">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="logout.php?logout=true">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>
