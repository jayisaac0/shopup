<?php
$shopname = $shop->shopname;
$shopowner = $shop->user_name;
$shopid = $shop->shops_id;


    $stmt = $auth_user->runQuery("SELECT shopname, shopowner, shopid, allcount FROM offpageviews WHERE shopid=:shopid AND shopname=:shopname ");
    $stmt->execute(array(':shopid'=>$shopid, ':shopname'=>$shopname ));
    $row=$stmt->fetch(PDO::FETCH_ASSOC);

    if($row['shopid']==$shopid) {
        //echo 'Found';
        //update page count

        $totaloffpagecount = $row['allcount'];
        $allcount = $totaloffpagecount + 1;

            try
            {
                $stmt = $auth_user->runQuery("UPDATE `offpageviews` SET `allcount`=:allcount WHERE `shopid`= '$shopid' ");
                $stmt->bindparam(":allcount", $allcount);
                $stmt->execute();
                return $stmt;
            }
            catch(PDOException $e)
            {
                echo $e->getMessage();
            }
                          
    }
    else
    {
    	//echo 'Not found';
    	try
		{
		    if($auth_user->Recodeoffpageviews($shopname, $shopowner, $shopid))
		    {

		    }

		}
		catch(PDOException $e)
		{
		    //echo $e->getMessage();
		}

    }



