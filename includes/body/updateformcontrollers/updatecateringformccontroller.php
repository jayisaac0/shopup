<?php
if(isset($_POST['postcateringservice']))
{
	$cateringservice = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['cateringservice'])))));
	$cateringserviceprice = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['cateringserviceprice'])))));
    $catering_id;

	if($cateringservice == "") { $error[] = "Provide cateringservice"; }
	else if($cateringserviceprice == "") { $error[] = "Provide cateringserviceprice"; }
    else
    {

        try
        {

            $stmt = $auth_user->runQuery("UPDATE `catering` SET `cateringservice`=:cateringservice, `cateringserviceprice`=:cateringserviceprice  WHERE `catering_id`= '$catering_id' ");

            $stmt->bindparam(":cateringservice", $cateringservice);
            $stmt->bindparam(":cateringserviceprice", $cateringserviceprice);
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
