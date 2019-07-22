<?php
if(isset($_POST['posthotelroom']))
{
	$hotelname = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['hotelname'])))));
	$hotellocation = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['hotellocation'])))));
	$hotelroomdetails = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['hotelroomdetails'])))));
	$hotelroomprice = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['hotelroomprice'])))));
	$hotelroompriceduration = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['hotelroompriceduration'])))));
    $hotels_id;


	if($hotelname == "") { $error[] = "Provide hotelname"; }
	else if($hotellocation == "") { $error[] = "Provide hotellocation"; }
	else if($hotelroomdetails == "") { $error[] = "Provide hotelroomdetails"; }
	else if($hotelroomprice == "") { $error[] = "Provide hotelroomprice"; }
	else if($hotelroompriceduration == "") { $error[] = "Provide hotelroompriceduration"; }
    else
    {


    try
    {
        $stmt = $auth_user->runQuery("UPDATE `hotels` SET `hotelname`=:hotelname, `hotellocation`=:hotellocation, `hotelroomdetails`=:hotelroomdetails, `hotelroomprice`=:hotelroomprice, `hotelroompriceduration`=:hotelroompriceduration WHERE `hotels_id`= '$hotels_id' ");


        $stmt->bindparam(":hotelname", $hotelname);
        $stmt->bindparam(":hotellocation", $hotellocation);
        $stmt->bindparam(":hotelroomdetails", $hotelroomdetails);
        $stmt->bindparam(":hotelroomprice", $hotelroomprice);
        $stmt->bindparam(":hotelroompriceduration", $hotelroompriceduration);
            ?>
                <div class="alert alert-success"  style = "padding:1px;margin:1px;">
                    <i class="glyphicon glyphicon-warning-sign"></i> &nbsp;
                    <?php echo 'Updated';
                    echo '<script type="text/javascript"> window.location = "products.php" </script>';
                    ?>


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

}


?>
