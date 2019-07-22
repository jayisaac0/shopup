<?php
if(isset($_POST['postcateringservice']))
{
	$user_id = strip_tags(trim(stripslashes(htmlentities($_POST['user_id']))));
    $user_name = strip_tags(trim(stripslashes(htmlentities($_POST['user_name']))));
	$user_name = strip_tags(trim(stripslashes(htmlentities($_POST['user_name']))));
	$cateringservice = strip_tags(trim(stripslashes(htmlentities($_POST['cateringservice']))));
	$cateringserviceprice = strip_tags(trim(stripslashes(htmlentities($_POST['cateringserviceprice']))));
	$cateringserviceimage = strip_tags(trim(stripslashes(htmlentities($_POST['cateringserviceimage']))));



    if($user_id == "") { $error[] = "Provide user_id"; }
	else if($user_name == "") { $error[] ="Provide user_name"; }
	else if($cateringservice == "") { $error[] ="Provide cateringservice"; }
	else if($cateringserviceprice == "") { $error[] ="Provide cateringserviceprice"; }
	else if(empty($_FILES['cateringserviceimage']['name']) === true) { $error[] = "Provide car image!"; }

    else
    {


        $allowed = array('jpg', 'png', 'jpeg', 'gif');

        $file_name = $_FILES['cateringserviceimage']['name'];
        @$file_extn = strtolower(end(explode('.', $file_name)));
        $file_tmp = $_FILES['cateringserviceimage']['tmp_name'];
        if (in_array($file_extn, $allowed) === true)
        {

            $file_path = 'uploads/cateringimages/' . substr(md5(time()), 0, 20) . '.' . $file_extn;
            move_uploaded_file($file_tmp, $file_path);

            try
            {
                if($auth_user->addcatering($user_id, $user_name, $cateringservice, $cateringserviceprice, $file_path))
                {
                    ?>
                        <div class="alert alert-success"  style = "padding:1px;margin:1px;">
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
