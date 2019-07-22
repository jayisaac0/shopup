<?php
if(isset($_POST['postgeneralshop']))
{
	$user_id = strip_tags(trim(stripslashes(htmlentities($_POST['user_id']))));
    $user_name = strip_tags(trim(stripslashes(htmlentities($_POST['user_name']))));
	$productname = strip_tags(trim(stripslashes(htmlentities($_POST['productname']))));
	$productprice = strip_tags(trim(stripslashes(htmlentities($_POST['productprice']))));
	$productspecification = strip_tags(trim(stripslashes(htmlentities($_POST['productspecification']))));
	$productcategory = strip_tags(trim(stripslashes(htmlentities($_POST['productcategory']))));
	$productmanufacturer = strip_tags(trim(stripslashes(htmlentities($_POST['productmanufacturer']))));
	$productimage = @strip_tags(trim(stripslashes(htmlentities($_POST['productimage']))));


    if($user_id == "") { $error[] = "Provide user_id"; }
	else if($user_name == "") { $error[] ="Provide user_name"; }
	else if($productname == "") { $error[] = "Provide productname"; }
	else if($productprice == "") { $error[] = "Provide productprice"; }
	else if($productspecification == "") { $error[] = "Provide productspecification"; }
	else if($productcategory == "") { $error[] = "Provide productcategory"; }
	else if($productmanufacturer == "") { $error[] = "Provide productmanufacturer"; }
	else if(empty($_FILES['productimage']['name']) === true) { $error[] = "Provide product image!"; }
    else
    {


        $allowed = array('jpg', 'png', 'jpeg', 'gif');

        $file_name = $_FILES['productimage']['name'];
        @$file_extn = strtolower(end(explode('.', $file_name)));
        $file_tmp = $_FILES['productimage']['tmp_name'];
        if (in_array($file_extn, $allowed) === true)
        {

            $file_path = 'uploads/generalshopimages/' . substr(md5(time()), 0, 20) . '.' . $file_extn;
            move_uploaded_file($file_tmp, $file_path);

            try
            {
                if($auth_user->addgeneralshopproduct($user_id, $user_name, $productname, $productprice, $productspecification, $productcategory, $productmanufacturer, $file_path))
                {
                    ?>
                        <div class="alert alert-success"  style = "padding:1px;margin:1px;">
                            <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo 'posted!'; ?>
                        </div>
                    <?php
                }

            }catch(PDOException $e)
                {
                    echo $e->getMessage();
                }



        }


    }


}


?>
