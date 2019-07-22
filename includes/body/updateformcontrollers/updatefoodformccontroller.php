<?php
if(isset($_POST['postsnack']))
{
	$snackname = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['snackname'])))));
	$snackprice = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['snackprice'])))));
	$snackdetails = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['snackdetails'])))));
    $food_id;


	if($snackname == "") { $error[] = "Provide snackname"; }
	else if($snackprice == "") { $error[] = "Provide snackprice"; }
	else if($snackdetails == "") { $error[] = "Provide snackdetails"; }
    else
    {


    try
    {
        $stmt = $auth_user->runQuery("UPDATE `food` SET `snackname`=:snackname, `snackprice`=:snackprice, `snackdetails`=:snackdetails WHERE `food_id`= '$food_id' ");

        $stmt->bindparam(":snackname", $snackname); 
        $stmt->bindparam(":snackprice", $snackprice); 
        $stmt->bindparam(":snackdetails", $snackdetails);
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
