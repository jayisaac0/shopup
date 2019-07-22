<?php
if(isset($_POST['postcar']))
{
    $user_id = strip_tags(trim(stripslashes(htmlentities($_POST['user_id']))));
    $user_name = strip_tags(trim(stripslashes(htmlentities($_POST['user_name']))));
	$carname = strip_tags(trim(stripslashes(htmlentities($_POST['carname']))));
	$carprice = strip_tags(trim(stripslashes(htmlentities($_POST['carprice']))));
	$carmodel = strip_tags(trim(stripslashes(htmlentities($_POST['carmodel']))));
	$cardetails = strip_tags(trim(stripslashes(htmlentities($_POST['cardetails']))));
	$cartype = strip_tags(trim(stripslashes(htmlentities($_POST['cartype']))));
	$carcolors = strip_tags(trim(stripslashes(htmlentities($_POST['carcolors']))));
	$carmanufacturer = strip_tags(trim(stripslashes(htmlentities($_POST['carmanufacturer']))));
	$carimage = @strip_tags(trim(stripslashes(htmlentities($_POST['carimage']))));




    if($user_id == "") { $error[] = "Provide user_id"; }
	else if($user_name == "") { $error[] = "Provide user_name"; }
    else if($carname == "") { $error[] = "Provide carname"; }
	else if($carprice == "") { $error[] = "Provide carprice"; }
	else if($carmodel == "") { $error[] = "Provide carmodel"; }
	else if($cardetails == "") { $error[] = "Provide cardetails"; }
	else if($cartype == "") { $error[] = "Provide cartype"; }
	else if($carcolors == "") { $error[] = "Provide carcolors"; }
	else if($carmanufacturer == "") { $error[] = "Provide carmanufacturer"; }
	else if(empty($_FILES['carimage']['name']) === true) { $error[] = "Provide car image!"; }

    else
    {


        $allowed = array('jpg', 'png', 'jpeg', 'gif');

        $file_name = $_FILES['carimage']['name'];
        @$file_extn = strtolower(end(explode('.', $file_name)));
        $file_tmp = $_FILES['carimage']['tmp_name'];
        if (in_array($file_extn, $allowed) === true)
        {

            $file_path = 'uploads/carimages/' . substr(md5(time()), 0, 20) . '.' . $file_extn;
            move_uploaded_file($file_tmp, $file_path);

            try
            {
                if($auth_user->addcar($user_id, $user_name, $carname, $carprice, $carmodel, $cardetails, $cartype, $carcolors, $carmanufacturer, $file_path))
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
