<?php
if(isset($_POST['posteducation']))
{
	$producttitle = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['producttitle'])))));
	$productcategory = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['productcategory'])))));
	$productprice = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['productprice'])))));
	$productdetails = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['productdetails'])))));
    $education_id;


	if($producttitle == "") { $error[] = "Provide producttitle"; }
	else if($productcategory == "") { $error[] = "Provide productcategory"; }
	else if($productprice == "") { $error[] = "Provide productprice"; }
	else if($productdetails == "") { $error[] = "Provide productdetails"; }
    else
    {

        try
        {
            $user_id = $_SESSION['user_session'];

            $stmt = $auth_user->runQuery("UPDATE `education` SET `producttitle`=:producttitle,  `productcategory`=:productcategory,  `productprice`=:productprice, `productdetails`=:productdetails WHERE `education_id`= '$education_id' ");



            $stmt->bindparam(":producttitle", $producttitle);
            $stmt->bindparam(":productcategory", $productcategory);
            $stmt->bindparam(":productprice", $productprice);
            $stmt->bindparam(":productdetails", $productdetails);
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
