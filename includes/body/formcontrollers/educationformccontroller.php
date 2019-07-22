<?php
if(isset($_POST['posteducation']))
{
	$user_id = strip_tags(trim(stripslashes(htmlentities($_POST['user_id']))));
    $user_name = strip_tags(trim(stripslashes(htmlentities($_POST['user_name']))));
	$producttitle = strip_tags(trim(stripslashes(htmlentities($_POST['producttitle']))));
	$productcategory = strip_tags(trim(stripslashes(htmlentities($_POST['productcategory']))));
	$productprice = strip_tags(trim(stripslashes(htmlentities($_POST['productprice']))));
	$productimage = @strip_tags(trim(stripslashes(htmlentities($_POST['productimage']))));
	$productdetails = strip_tags(trim(stripslashes(htmlentities($_POST['productdetails']))));


    if($user_id == "") { $error[] = "Provide user_id"; }
	else if($user_name == "") { $error[] ="Provide user_name"; }
	else if($producttitle == "") { $error[] = "Provide producttitle"; }
	else if($productcategory == "") { $error[] = "Provide productcategory"; }
	else if($productprice == "") { $error[] = "Provide bookprice"; }
	else if(empty($_FILES['productimage']['name']) === true) { $error[] = "Provide product image!"; }
	else if($productdetails == "") { $error[] = "Provide productdetails"; }
    else
    {


        $allowed = array('jpg', 'png', 'jpeg', 'gif');

        $file_name = $_FILES['productimage']['name'];
        @$file_extn = strtolower(end(explode('.', $file_name)));
        $file_tmp = $_FILES['productimage']['tmp_name'];
        if (in_array($file_extn, $allowed) === true)
        {

            $file_path = 'uploads/educationimages/' . substr(md5(time()), 0, 20) . '.' . $file_extn;
            move_uploaded_file($file_tmp, $file_path);

            try
            {
                if($auth_user->addeducation($user_id, $user_name, $producttitle, $productcategory, $productprice, $file_path, $productdetails))
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
