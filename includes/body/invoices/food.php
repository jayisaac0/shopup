<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12" id="mypagecard">
    <div class="x_panel">
      <div class="x_content">
        <h1 class="text-muted font-13 m-b-30">
            <center><?php echo $user->shopname; ?></center><br />
            <center>Orders</center>
        </h1>
			<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%"><thead>
            <tr>
              <th>Shopper username</th>
              <th>Order ID</th>
              <th>Office</th>
              <th>Time ordered </th>
              <th>Order cost</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
				<?php
				$stmt = $auth_user->runQuery("SELECT * FROM generalshoporders WHERE `shopname`='$user->shopname' GROUP BY `grouporder` ORDER BY `timeposted` DESC ");
				$stmt->execute(array());
				$generalshoporders=$stmt->fetchAll(PDO::FETCH_OBJ);
				foreach ($generalshoporders as $generalshoporders) {
				?>
				<tr>
                    <td><?php echo $generalshoporders->shopperusername; ?></td>
                    <td><?php echo $generalshoporders->grouporder; ?></td>
                    <td><?php echo $generalshoporders->orderserialno; ?></td>
                    <td><?php echo $generalshoporders->timeposted; ?></td>
                    <td>$<?php echo $generalshoporders->subtotal; ?></td>
                    <td>

                    <?php
                        $stmt = $auth_user->runQuery(" SELECT * FROM  `generalshoporders` WHERE  `orderfilled`='$generalshoporders->orderfilled' AND `generalshoporders_id`='$generalshoporders->generalshoporders_id' ");
                        $stmt->execute(array());
                        $generalshoporders=$stmt->fetchAll(PDO::FETCH_OBJ);
                        foreach ($generalshoporders as $generalshoporders) {
                            if($generalshoporders->orderfilled == 0){
                        ?>
                            <b><a href="order/<?php echo $generalshoporders->generalshoporders_id; ?>"> View</a></b>
                        <?php
                            }else if($generalshoporders->orderfilled == 1){
                        ?>
                            <b><a href="order/<?php echo $generalshoporders->generalshoporders_id; ?>" class="green"> Filled</a></b>
                        <?php
                            }else{
                                echo 'OOPS!';
                            }

                        }
                    ?>


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
