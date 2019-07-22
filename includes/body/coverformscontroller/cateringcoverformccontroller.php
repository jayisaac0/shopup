<?php
if(isset($_POST['postcateringcover']))
{
    $user_id = strip_tags(trim(stripslashes(htmlentities($_POST['user_id']))));
    $user_name = strip_tags(trim(stripslashes(htmlentities($_POST['user_name']))));
    $bannerimage = @strip_tags(trim(stripslashes(htmlentities($_POST['bannerimage']))));
    $about = strip_tags(trim(stripslashes(htmlentities($_POST['about']))));
	$servicedelivery = strip_tags(trim(stripslashes(htmlentities($_POST['servicedelivery']))));
    $backgroundcolor = strip_tags(trim(stripslashes(htmlentities($_POST['backgroundcolor']))));
   	$containercolor = strip_tags(trim(stripslashes(htmlentities($_POST['containercolor']))));


    if($user_id == "") { $error[] = "Provide user_id"; }
    else if($user_name == "") { $error[] = "Provide user_name"; }
    else if(empty($_FILES['bannerimage']['name']) === true) { $error[] = "Provide banner image!"; }
    else if($about == "") { $error[] = "Provide about"; }
	else if($servicedelivery == "") { $error[] = "Provide servicedelivery"; }
    else if($backgroundcolor == "") { $error[] = "Provide background color "; }
	else if($containercolor == "") { $error[] = "Provide containercolor"; }

    else
    {


        $allowed = array('jpg', 'png', 'jpeg', 'gif');

        $file_name = $_FILES['bannerimage']['name'];
        @$file_extn = strtolower(end(explode('.', $file_name)));
        $file_tmp = $_FILES['bannerimage']['tmp_name'];
        if (in_array($file_extn, $allowed) === true)
        {


                $stmt = $auth_user->runQuery("SELECT user_id, user_name FROM cateringcover WHERE user_id=:user_id ");
                $stmt->execute(array(':user_id'=>$user_id));
                $row=$stmt->fetch(PDO::FETCH_ASSOC);

                if($row['user_id']==$user_id) {
                    echo "Found"; 
                }else{

                        try
                        {

                            $file_path = 'uploads/covercateringimages/' . substr(md5(time()), 0, 20) . '.' . $file_extn;
                            move_uploaded_file($file_tmp, $file_path);

                            if($auth_user->addcateringcover($user_id, $user_name, $file_path, $about, $servicedelivery, $backgroundcolor, $containercolor))
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
