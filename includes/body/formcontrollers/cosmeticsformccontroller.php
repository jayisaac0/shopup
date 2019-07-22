<?php
if(isset($_POST['postcosmetic']))
{
    $user_id = strip_tags(trim(stripslashes(htmlentities($_POST['user_id']))));
    $user_name = strip_tags(trim(stripslashes(htmlentities($_POST['user_name']))));
    $cosmeticname = strip_tags(trim(stripslashes(htmlentities($_POST['cosmeticname']))));
    $cosmeticprice = strip_tags(trim(stripslashes(htmlentities($_POST['cosmeticprice']))));
    $cosmeticdetails = strip_tags(trim(stripslashes(htmlentities($_POST['cosmeticdetails']))));
    $newcosmetic = strip_tags(trim(stripslashes(htmlentities($_POST['newcosmetic']))));
    $cosmeticcolors = strip_tags(trim(stripslashes(htmlentities($_POST['cosmeticcolors']))));
    $cosmeticmanufacturer = strip_tags(trim(stripslashes(htmlentities($_POST['cosmeticmanufacturer']))));
    $cosmeticimage = @strip_tags(trim(stripslashes(htmlentities($_POST['cosmeticimage']))));
    $cosmeticoffer = strip_tags(trim(stripslashes(htmlentities($_POST['cosmeticoffer']))));


    if($user_id == "") { $error[] = "Provide user_id"; }
    else if($user_name == "") { $error[] = "Provide user_name"; }
    else if($cosmeticname == "") { $error[] = "Provide cosmeticname"; }
    else if($cosmeticprice == "") { $error[] = "Provide cosmeticprice"; }
    else if($cosmeticdetails == "") { $error[] = "Provide cosmeticdetails"; }
    else if($newcosmetic == "") { $error[] = "Provide newcosmetic"; }
    else if($cosmeticcolors == "") { $error[] = "Provide cosmeticcolors"; }
    else if($cosmeticmanufacturer == "") { $error[] = "Provide cosmeticmanufacturer"; }
    else if(empty($_FILES['cosmeticimage']['name']) === true) { $error[] = "Provide cosmetic image!"; }
    else if($cosmeticoffer == "") { $error[] = "Provide cosmetic offer"; }

    else
    {


        $allowed = array('jpg', 'png', 'jpeg', 'gif');

        $file_name = $_FILES['cosmeticimage']['name'];
        @$file_extn = strtolower(end(explode('.', $file_name)));
        $file_tmp = $_FILES['cosmeticimage']['tmp_name'];
        if (in_array($file_extn, $allowed) === true)
        {

            $file_path = 'uploads/cosmeticimages/' . substr(md5(time()), 0, 20) . '.' . $file_extn;
            move_uploaded_file($file_tmp, $file_path);

            try
            {
                if($auth_user->addcosmetic($user_id, $user_name, $cosmeticname, $cosmeticprice, $cosmeticdetails, $newcosmetic, $cosmeticcolors, $cosmeticmanufacturer, $file_path, $cosmeticoffer))
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
