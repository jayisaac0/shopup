<?php
if(isset($_POST['postfarmproduct']))
{
	$user_id = strip_tags(trim(stripslashes(htmlentities($_POST['user_id']))));
    $user_name = strip_tags(trim(stripslashes(htmlentities($_POST['user_name']))));
	$farmproduct = strip_tags(trim(stripslashes(htmlentities($_POST['farmproduct']))));
	$farmproductcategory = strip_tags(trim(stripslashes(htmlentities($_POST['farmproductcategory']))));
	$farmproductprice = strip_tags(trim(stripslashes(htmlentities($_POST['farmproductprice']))));
	$farmproductimage = @strip_tags(trim(stripslashes(htmlentities($_POST['farmproductimage']))));
	$farmproductdetails = strip_tags(trim(stripslashes(htmlentities($_POST['farmproductdetails']))));    


    if($user_id == "") { $error[] = "Provide user_id"; }
	else if($user_name == "") { $error[] ="Provide user_name"; }

	else if($farmproduct == "") { $error[] = "Provide farmproduct"; }
	else if($farmproductcategory == "") { $error[] = "Provide farmproductcategory"; }
	else if($farmproductprice == "") { $error[] = "Provide farmproductprice"; }
	else if(empty($_FILES['farmproductimage']['name']) === true) { $error[] = "Provide image!"; }
	else if($farmproductdetails == "") { $error[] = "Provide farmproductdetails"; }


    else
    {


        $allowed = array('jpg', 'png', 'jpeg', 'gif');

        $file_name = $_FILES['farmproductimage']['name'];
        @$file_extn = strtolower(end(explode('.', $file_name)));
        $file_tmp = $_FILES['farmproductimage']['tmp_name'];
        if (in_array($file_extn, $allowed) === true)
        {

            $file_path = 'uploads/farmingimages/' . substr(md5(time()), 0, 20) . '.' . $file_extn;
            move_uploaded_file($file_tmp, $file_path);

            try
            {
                if($auth_user->addfarmproduct($user_id, $user_name, $farmproduct, $farmproductcategory, $farmproductprice, $file_path, $farmproductdetails))
                {
                    ?>
                        <div class="alert alert-success" >
                            <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo 'Product posted!'; ?>
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
