<?php
if(isset($_POST['postgeneralshop']))
{
	$productname = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['productname'])))));
	$productprice = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['productprice'])))));
	$productspecification = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['productspecification'])))));
	$productcategory = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['productcategory'])))));
	$productmanufacturer = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['productmanufacturer'])))));
    $generalshop_id;



	if($productname == "") { $error[] =  "Provide productname"; }
	else if($productprice == "") { $error[] =  "Provide productprice"; }
	else if($productspecification == "") { $error[] =  "Provide productspecification"; }
	else if($productcategory == "") { $error[] =  "Provide productcategory"; }
	else if($productmanufacturer == "") { $error[] =  "Provide productmanufacturer"; }
    else
    {

        try
        {
            $stmt = $auth_user->runQuery("UPDATE `generalshop` SET `productname`=:productname, `productprice`=:productprice, `productspecification`=:productspecification, `productcategory`=:productcategory, `productmanufacturer`=:productmanufacturer WHERE `generalshop_id`= '$generalshop_id' ");

            $stmt->bindparam(":productname", $productname);
            $stmt->bindparam(":productprice", $productprice);
            $stmt->bindparam(":productspecification", $productspecification);
            $stmt->bindparam(":productcategory", $productcategory);
            $stmt->bindparam(":productmanufacturer", $productmanufacturer);
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
