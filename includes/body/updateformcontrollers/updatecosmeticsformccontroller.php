<?php
if(isset($_POST['postcosmetic']))
{
	$cosmeticname = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['cosmeticname'])))));
	$cosmeticprice = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['cosmeticprice'])))));
	$cosmeticdetails = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['cosmeticdetails'])))));
	$newcosmetic = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['newcosmetic'])))));
	$cosmeticcolors = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['cosmeticcolors'])))));
	$cosmeticmanufacturer = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['cosmeticmanufacturer'])))));
	$cosmeticoffer = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['cosmeticoffer'])))));
    $cosmetics_id;

	if($cosmeticname == "") { $error[] = "Provide cosmeticname"; }
	else if($cosmeticprice == "") { $error[] = "Provide cosmeticprice"; }
	else if($cosmeticdetails == "") { $error[] = "Provide cosmeticdetails"; }
	else if($newcosmetic == "") { $error[] = "Provide newcosmetic"; }
	else if($cosmeticcolors == "") { $error[] = "Provide cosmeticcolors"; }
	else if($cosmeticmanufacturer == "") { $error[] = "Provide cosmeticmanufacturer"; }
	else if($cosmeticoffer == "") { $error[] = "Provide cosmeticoffer"; }
    else
    {
 

    try
    {
        $user_id = $_SESSION['user_session'];

        $stmt = $auth_user->runQuery("UPDATE `cosmetics` SET `cosmeticname`=:cosmeticname,  `cosmeticprice`=:cosmeticprice,  `cosmeticdetails`=:cosmeticdetails,  `newcosmetic`=:newcosmetic,  `cosmeticcolors`=:cosmeticcolors,  `cosmeticmanufacturer`=:cosmeticmanufacturer,  `cosmeticoffer`=:cosmeticoffer  WHERE `cosmetics_id`= '$cosmetics_id' ");

        $stmt->bindparam(":cosmeticname", $cosmeticname);
        $stmt->bindparam(":cosmeticprice", $cosmeticprice);
        $stmt->bindparam(":cosmeticdetails", $cosmeticdetails);
        $stmt->bindparam(":newcosmetic", $newcosmetic);
        $stmt->bindparam(":cosmeticcolors", $cosmeticcolors);
        $stmt->bindparam(":cosmeticmanufacturer", $cosmeticmanufacturer);
        $stmt->bindparam(":cosmeticoffer", $cosmeticoffer);
        $stmt->execute();
            ?>
                <div class="alert alert-success"  style = "padding:1px;margin:1px;">
                    <i class="glyphicon glyphicon-warning-sign"></i> &nbsp;
                    <?php echo 'Updated';
                    echo '<script type="text/javascript"> window.location = "products.php" </script>';
                    ?>


                </div>
            <?php       

        return $stmt;
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }


        


    }

}


?>
