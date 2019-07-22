<?php
if(isset($_POST['postcar']))
{
	$carname = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['carname'])))));
	$carprice = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['carprice'])))));
	$carmodel = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['carmodel'])))));
	$cardetails = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['cardetails'])))));
	$cartype = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['cartype'])))));
	$carcolors = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['carcolors'])))));
	$carmanufacturer = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['carmanufacturer'])))));
    $cars_id;

	if($carname == "") { $error[] = "Provide carname"; }
	else if($carprice == "") { $error[] = "Provide carprice"; }
	else if($carmodel == "") { $error[] = "Provide carmodel"; }
	else if($cardetails == "") { $error[] = "Provide cardetails"; }
	else if($cartype == "") { $error[] = "Provide cartype"; }
	else if($carcolors == "") { $error[] = "Provide carcolors"; }
	else if($carmanufacturer == "") { $error[] = "Provide carmanufacturer"; }
    else
    {

 
        try
        {
            $user_id = $_SESSION['user_session'];

            $stmt = $auth_user->runQuery("UPDATE `cars` SET `carname`=:carname,  `carprice`=:carprice,  `carmodel`=:carmodel,  `cardetails`=:cardetails,  `cartype`=:cartype,  `carcolors`=:carcolors,  `carmanufacturer`=:carmanufacturer WHERE `cars_id`= '$cars_id' ");


            $stmt->bindparam(":carname", $carname);
            $stmt->bindparam(":carprice", $carprice);
            $stmt->bindparam(":carmodel", $carmodel);
            $stmt->bindparam(":cardetails", $cardetails);
            $stmt->bindparam(":cartype", $cartype);
            $stmt->bindparam(":carcolors", $carcolors);
            $stmt->bindparam(":carmanufacturer", $carmanufacturer);
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
