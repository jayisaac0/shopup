<?php require_once 'includes/head/panelheader.php'; ?>
<?php require_once 'database/loginsession.php'; ?>
<?php require_once 'includes/body/premiumcheck/premiumcheck.php' ?>

    <div class="container body">
      <div class="main_container">
        
            <?php require_once 'includes/head/panel.php'; ?>
            <!-- top navigation -->
            <?php require_once 'includes/head/topPanelNav.php'; ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">


            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12"  id="mypagecard">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Customer circle</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      Trusted circle
                    </p>
					
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>User name</th>
                          <th>Name</th>
                          <th>email</th>
                          <th>Phone number</th>
                          <th>Start date</th>
                          <th>User</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                            $stmt = $auth_user->runQuery("
                                    SELECT *
                                    FROM    `users`
                                    JOIN    `shops`
                                    ON      `users`.`user_id`=`shops`.`user_id`
                                    JOIN    `businesscycle`
                                    ON      `users`.`user_name`=`businesscycle`.`user`
                                    WHERE   `shops`.`user_id` = '$user_id'
                                ");
                            $stmt->execute(array());
                            $users=$stmt->fetchAll(PDO::FETCH_OBJ);
                            foreach ($users as $user ) {
                                ?>
                                <tr>
                                <td><?php echo $user->user_name; ?></td>
                                <td><?php echo $user->first_name.' '; ?><?php echo $user->middle_name.' '; ?><?php echo $user->last_name; ?></td>
                                <td><?php echo $user->user_email; ?></td>
                                <td><?php echo $user->userphonenumber; ?></td>
                                <td>2011/04/25</td>
                                <td>
                                    <article class="media event">
                                      <a class="">
                                        <img src="<?php echo $user->profileimage; ?>" alt="" style="height:50px;width:50px;" class="pull-left date " />
                                      </a>
                                    </article> 
                                </td>
                                </tr>
                                <?php
                                }
                            ?>
                      </tbody>
                    </table>
					
					
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>


      </div>
    </div>

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.php5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>

    

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>

  </body>
</html>