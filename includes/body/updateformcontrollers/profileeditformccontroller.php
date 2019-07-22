<?php
if(isset($_POST['updateuserprofile']))
{
    
    $first_name = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['first_name'])))));
    $middle_name = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['middle_name'])))));
    $last_name = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['last_name'])))));
    @$gender = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['gender'])))));
    $yearofbirth = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['yearofbirth'])))));
    $userphonenumber = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['userphonenumber'])))));
    $country = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['country'])))));
    $userlocation = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['userlocation'])))));
    $profileimage = @strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['profileimage'])))));



    if($first_name == "") { $error[] = "Provide first_name"; }
    else if($middle_name == "") { $error[] = "Provide middle_name"; }
    else if($last_name == "") { $error[] = "Provide last_name"; }
    else if($gender == "") { $error[] = "Provide gender"; }
    else if($yearofbirth == "") { $error[] = "Provide yearofbirth"; }
    else if($userphonenumber == "") { $error[] = "Provide userphonenumber"; }
    else if($country == "") { $error[] = "Provide country"; }
    else if($userlocation == "") { $error[] = "Provide userlocation"; }
    else if(empty($_FILES['profileimage']['name']) === true) { $error[] = "Provide profile image!"; }
    
    else
    {

        $allowed = array('jpg', 'png', 'jpeg', 'gif');

        $file_name = $_FILES['profileimage']['name'];
        $file_extn = @strtolower(end(explode('.', $file_name)));
        $file_tmp = $_FILES['profileimage']['tmp_name'];
        if (in_array($file_extn, $allowed) === true)
        {

            $file_path = 'uploads/profileimages/' . substr(md5(time()), 0, 20) . '.' . $file_extn;
            unlink($userRow['profileimage']);

            move_uploaded_file($file_tmp, $file_path);

            try
            {
                if($auth_user->updateuserprofile($first_name, $middle_name, $last_name, $gender, $yearofbirth, $userphonenumber, $country, $userlocation, $file_path))
                {
                    ?>
                        <div class="alert alert-success"  style = "padding:1px;margin:1px;">
                            <i class="glyphicon glyphicon-warning-sign"></i> &nbsp;
                            <?php echo 'Profile Updated!';
                            echo '<script type="text/javascript"> window.location = "profile.php" </script>';
                            ?>


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
