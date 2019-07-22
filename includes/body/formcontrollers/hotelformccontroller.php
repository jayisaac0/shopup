<?php
if(isset($_POST['posthotelroom']))
{
	$user_id = strip_tags(trim(stripslashes(htmlentities($_POST['user_id']))));
    $user_name = strip_tags(trim(stripslashes(htmlentities($_POST['user_name']))));
	$hotelname = strip_tags(trim(stripslashes(htmlentities($_POST['hotelname']))));
	$hotellocation = strip_tags(trim(stripslashes(htmlentities($_POST['hotellocation']))));
	$hotelroomdetails = strip_tags(trim(stripslashes(htmlentities($_POST['hotelroomdetails']))));
	$hotelroomprice = strip_tags(trim(stripslashes(htmlentities($_POST['hotelroomprice']))));
	$hotelroompriceduration = strip_tags(trim(stripslashes(htmlentities($_POST['hotelroompriceduration']))));
	$hotelroomimage = @strip_tags(trim(stripslashes(htmlentities($_POST['hotelroomimage']))));

    if($user_id == "") { $error[] = "Provide user_id"; }
	else if($user_name == "") { $error[] ="Provide user_name"; }
	else if($hotelname == "") { $error[] = "Provide hotelname"; }
	else if($hotellocation == "") { $error[] = "Provide hotellocation"; }
	else if($hotelroomdetails == "") { $error[] = "Provide hotelroomdetails"; }
	else if($hotelroomprice == "") { $error[] = "Provide hotelroomprice"; }
	else if($hotelroompriceduration == "") { $error[] = "Provide hotelroompriceduration"; }
	else if(empty($_FILES['hotelroomimage']['name']) === true) { $error[] = "Provide product image!"; }

    else
    {


        $allowed = array('jpg', 'png', 'jpeg', 'gif');

        $file_name = $_FILES['hotelroomimage']['name'];
        @$file_extn = strtolower(end(explode('.', $file_name)));
        $file_tmp = $_FILES['hotelroomimage']['tmp_name'];
        if (in_array($file_extn, $allowed) === true)
        {

            $file_path = 'uploads/hotelimages/' . substr(md5(time()), 0, 20) . '.' . $file_extn;
            move_uploaded_file($file_tmp, $file_path);

            try
            {
                if($auth_user->addehotelrooms($user_id, $user_name, $hotelname, $hotellocation, $hotelroomdetails, $hotelroomprice, $hotelroompriceduration, $file_path))
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
