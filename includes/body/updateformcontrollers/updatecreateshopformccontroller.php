 <?php
if(isset($_POST['createshop']))
{
	$phonenumber = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['phonenumber'])))));
	$country = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['country'])))));
	$town = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['town'])))));
	$exactbusinesslocation = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['exactbusinesslocation'])))));
	$popularname = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['popularname'])))));
    @$orderbutton = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['orderbutton'])))));
    $currency = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['currency'])))));
    $user_id;


	if($phonenumber == "") { $error[] = "Provide phonenumber"; }
	else if($country == "") { $error[] = "Provide country"; }
	else if($town == "") { $error[] = "Provide town"; }
	else if($exactbusinesslocation == "") { $error[] = "Provide exactbusinesslocation"; }
	else if($popularname == "") { $error[] = "Provide popularname"; }
    else if($currency == "") { $error[] = "Please enter your prefered currency"; }
    else
    {

        try
        {
            $stmt = $auth_user->runQuery("UPDATE `shops` SET `phonenumber`=:phonenumber, `country`=:country,  `town`=:town,  `exactbusinesslocation`=:exactbusinesslocation,  `popularname`=:popularname, `orderbutton`=:orderbutton, `currency`=:currency  WHERE `user_id`= '$user_id' ");

            $stmt->bindparam(":phonenumber", $phonenumber);
            $stmt->bindparam(":country", $country);
            $stmt->bindparam(":town", $town);
            $stmt->bindparam(":exactbusinesslocation", $exactbusinesslocation);
            $stmt->bindparam(":popularname", $popularname);
            $stmt->bindparam(":orderbutton", $orderbutton);
            $stmt->bindparam(":currency", $currency);
            $stmt->execute();
            ?>
                <div class="alert alert-success">
                    <i class="glyphicon glyphicon-warning-sign"></i> &nbsp;
                    <?php echo 'Updated';
                    echo '<script type="text/javascript"> window.location = "createshop.php" </script>';
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
