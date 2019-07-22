<?php
if(isset($_POST['postcarscover']))
{
    $user_id = strip_tags(trim(stripcslashes(htmlentities($_POST['user_id']))));
    $user_name = strip_tags(trim(stripcslashes(htmlentities($_POST['user_name']))));
    $bannerimage = @strip_tags(trim(stripcslashes(htmlentities($_POST['bannerimage']))));
    $backgroundcolor = strip_tags(trim(stripcslashes(htmlentities($_POST['backgroundcolor']))));
    $aboutshop = strip_tags(trim(stripcslashes(htmlentities($_POST['aboutshop']))));


    if($user_id == "") { $error[] = "Provide user_id"; }
    else if($user_name == "") { $error[] = "Provide user_name"; }
    else if(empty($_FILES['bannerimage']['name']) === true) { $error[] = "Provide banner image!"; }
    else if($backgroundcolor == "") { $error[] = "Provide background color "; }
    else if($aboutshop == "") { $error[] = "Provide about shop "; }
    else
    {


        $allowed = array('jpg', 'png', 'jpeg', 'gif');

        $file_name = $_FILES['bannerimage']['name'];
        @$file_extn = strtolower(end(explode('.', $file_name)));
        $file_tmp = $_FILES['bannerimage']['tmp_name'];
        if (in_array($file_extn, $allowed) === true)
        {


                $stmt = $auth_user->runQuery("SELECT user_id, user_name FROM carscover WHERE user_id=:user_id ");
                $stmt->execute(array(':user_id'=>$user_id));
                $row=$stmt->fetch(PDO::FETCH_ASSOC);

                if($row['user_id']==$user_id) {
                    echo "Found"; 
                }else{

                        try
                        {

                            $file_path = 'uploads/covercarsimages/' . substr(md5(time()), 0, 20) . '.' . $file_extn;
                            move_uploaded_file($file_tmp, $file_path);

                            if($auth_user->addcarscover($user_id, $user_name, $file_path, $backgroundcolor, $aboutshop))
                            {
                                ?>
                                    <div class="alert alert-success">
                                        <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo 'Posted!'; ?>
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


}


?>
