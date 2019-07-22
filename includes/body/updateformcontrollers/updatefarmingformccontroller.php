

<?php
if(isset($_POST['updatefarmproduct']))
{
    $farmproduct = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['farmproduct'])))));
    $farmproductcategory = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['farmproductcategory'])))));
    $farmproductprice = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['farmproductprice'])))));
    $farmproductdetails = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['farmproductdetails'])))));
    $farming_id;


	if($farmproduct == "") { $error[] = "Provide farmproduct"; }
    else if($farmproductcategory == "") { $error[] = "Provide farmproductcategory"; }
    else if($farmproductprice == "") { $error[] = "Provide farmproductprice"; }
    else if($farmproductdetails == "") { $error[] = "Provide farmproductdetails"; }

    else
    {

        try
        {
            $user_id = $_SESSION['user_session'];

            $stmt = $auth_user->runQuery("UPDATE `farming` SET `farmproduct`=:farmproduct, `farmproductcategory`=:farmproductcategory, `farmproductprice`=:farmproductprice, `farmproductdetails`=:farmproductdetails WHERE `farming_id`= '$farming_id' ");


            $stmt->bindparam(":farmproduct", $farmproduct);
            $stmt->bindparam(":farmproductcategory", $farmproductcategory);
            $stmt->bindparam(":farmproductprice", $farmproductprice);
            $stmt->bindparam(":farmproductdetails", $farmproductdetails);
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
