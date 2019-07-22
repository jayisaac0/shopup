<?php
$shopname = $shop->shopname;
$shopowner = $shop->user_name;
$shopid = $shop->shops_id;
$user_name = $userRow['user_name'];
$user_id = $userRow['user_id'];



    $stmt = $auth_user->runQuery("SELECT shopname, shopowner, user_name, user_id FROM pageviews WHERE user_id=:user_id AND shopname=:shopname ");
    $stmt->execute(array(':user_id'=>$user_id, ':shopname'=>$shopname ));
    $row=$stmt->fetch(PDO::FETCH_ASSOC);

    if($row['shopname']==$shopname AND $row['user_id']==$user_id) {
        //echo 'Found';
    }
    else
    {
    	//echo 'Not found';
    	try
		{
		    if($auth_user->Recodepageviews($shopname, $shopowner, $shopid, $user_name, $user_id))
		    {

		    }

		}
		catch(PDOException $e)
		{
		    //echo $e->getMessage();
		}

    }



