<?php
    if(isset($_POST['generalshopcartsubmit']))
    {
        $user_id = strip_tags(trim(stripslashes(htmlentities($_POST['user_id']))));
        $user_name = strip_tags(trim(stripslashes(htmlentities($_POST['user_name']))));
        $shopname = strip_tags(trim(stripslashes(htmlentities($_POST['shopname']))));
		$shopper = strip_tags(trim(stripslashes(htmlentities($_POST['shopper']))));
		$shopperusername = strip_tags(trim(stripslashes(htmlentities($_POST['shopperusername']))));
		$typeofbusiness = strip_tags(trim(stripslashes(htmlentities($_POST['typeofbusiness']))));
		$qty = strip_tags(trim(stripslashes(htmlentities($_POST['qty']))));
		$product = strip_tags(trim(stripslashes(htmlentities($_POST['product']))));
		$orderserialno = strip_tags(trim(stripslashes(htmlentities($_POST['orderserialno']))));
		$desccription = strip_tags(trim(stripslashes(htmlentities($_POST['desccription']))));
		$subtotal = strip_tags(trim(stripslashes(htmlentities($_POST['subtotal']))));
		$grouporder = strip_tags(trim(stripslashes(htmlentities($_POST['grouporder']))));



		try
		{
			$stmt = $auth_user->runQuery("INSERT INTO generalshoporders(user_id, user_name, shopname, shopper, shopperusername, typeofbusiness, qty, product, orderserialno, desccription, subtotal, grouporder)
			 VALUES(:user_id, :user_name, :shopname, :shopper, :shopperusername, :typeofbusiness, :qty, :product, :orderserialno, :desccription, :subtotal, :grouporder) ");


			$stmt->bindparam(":user_id", $user_id);
			$stmt->bindparam(":user_name", $user_name);
			$stmt->bindparam(":shopname", $shopname);
			$stmt->bindparam(":shopper", $shopper);
			$stmt->bindparam(":shopperusername", $shopperusername);
			$stmt->bindparam(":typeofbusiness", $typeofbusiness);
			$stmt->bindparam(":qty", $qty);
			$stmt->bindparam(":product", $product);
			$stmt->bindparam(":orderserialno", $orderserialno);
			$stmt->bindparam(":desccription", $desccription);
			$stmt->bindparam(":subtotal", $subtotal);
			$stmt->bindparam(":grouporder", $grouporder);
			?>
                        <div class="w3-btn w3-padding-large w3-blue w3-animate-zoom w3-center btn btn-lg btn-primary">
                            DONE
                        </div>
			<?php
			$stmt->execute();

			return $stmt;
		}
			catch(PDOException $e)
		{
			echo $e->getMessage();
		}				




    }

?>
