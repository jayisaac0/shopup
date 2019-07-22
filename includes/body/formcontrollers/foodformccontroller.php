<?php
if(isset($_POST['postsnack']))
{
	$user_id = strip_tags(trim(stripslashes(htmlentities($_POST['user_id']))));
    $user_name = strip_tags(trim(stripslashes(htmlentities($_POST['user_name']))));
	$snackname = strip_tags(trim(stripslashes(htmlentities($_POST['snackname']))));
	$snackprice = strip_tags(trim(stripslashes(htmlentities($_POST['snackprice']))));
	$snackimage = @strip_tags(trim(stripslashes(htmlentities($_POST['snackimage']))));
	$snackdetails = strip_tags(trim(stripslashes(htmlentities($_POST['snackdetails']))));


    if($user_id == "") { $error[] = "Provide user_id"; }
	else if($user_name == "") { $error[] ="Provide user_name"; }
	else if($snackname == "") { $error[] = "Provide snackname"; }
	else if($snackprice == "") { $error[] = "Provide snackprice"; }
	else if(empty($_FILES['snackimage']['name']) === true) { $error[] = "Provide car image!"; }
	else if($snackdetails == "") { $error[] = "Provide snackdetails"; }
    else
    {


        $allowed = array('jpg', 'png', 'jpeg', 'gif');

        $file_name = $_FILES['snackimage']['name'];
        @$file_extn = strtolower(end(explode('.', $file_name)));
        $file_tmp = $_FILES['snackimage']['tmp_name'];
        if (in_array($file_extn, $allowed) === true)
        {

            $file_path = 'uploads/snackimages/' . substr(md5(time()), 0, 20) . '.' . $file_extn;
            move_uploaded_file($file_tmp, $file_path);

            try
            {
                if($auth_user->addsnack($user_id, $user_name, $snackname, $snackprice, $file_path, $snackdetails))
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
