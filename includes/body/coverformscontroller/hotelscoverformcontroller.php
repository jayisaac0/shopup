<?php
if(isset($_POST['posthotelscover']))
{
    $user_id = strip_tags(trim(stripcslashes(htmlentities($_POST['user_id']))));
    $user_name = strip_tags(trim(stripcslashes(htmlentities($_POST['user_name']))));
    $bannerimage = @strip_tags(trim(stripcslashes(htmlentities($_POST['bannerimage']))));
    $backgroundcolor = strip_tags(trim(stripcslashes(htmlentities($_POST['backgroundcolor']))));
    $articleonetitle = strip_tags(trim(stripslashes(htmlentities($_POST['articleonetitle']))));
    $articleoneimageurl = strip_tags(trim(stripslashes(htmlentities($_POST['articleoneimageurl']))));
    $articleonecontent = strip_tags(trim(stripslashes(htmlentities($_POST['articleonecontent']))));
    $articletwotitle = strip_tags(trim(stripslashes(htmlentities($_POST['articletwotitle']))));
    $articletwoimageurl = strip_tags(trim(stripslashes(htmlentities($_POST['articletwoimageurl']))));
    $articletwocontent = strip_tags(trim(stripslashes(htmlentities($_POST['articletwocontent']))));
    $articlethreetitle = strip_tags(trim(stripslashes(htmlentities($_POST['articlethreetitle']))));
    $articlethreeimageurl = strip_tags(trim(stripslashes(htmlentities($_POST['articlethreeimageurl']))));
    $articlethreecontent = strip_tags(trim(stripslashes(htmlentities($_POST['articlethreecontent']))));



    if($user_id == "") { $error[] = "Provide user_id"; }
    else if($user_name == "") { $error[] = "Provide user_name"; }
    else if(empty($_FILES['bannerimage']['name']) === true) { $error[] = "Provide banner image!"; }
    else if($backgroundcolor == "") { $error[] = "Provide background color "; }
    else if($articleonetitle == "") { $error[] = "Provide articleonetitle"; }
    else if($articleoneimageurl == "") { $error[] = "Provide articleoneimageurl"; }
    else if($articleonecontent == "") { $error[] = "Provide articleonecontent"; }
    else if($articletwotitle == "") { $error[] = "Provide articletwotitle"; }
    else if($articletwoimageurl == "") { $error[] = "Provide articletwoimageurl"; }
    else if($articletwocontent == "") { $error[] = "Provide articletwocontent"; }
    else if($articlethreetitle == "") { $error[] = "Provide articlethreetitle"; }
    else if($articlethreeimageurl == "") { $error[] = "Provide articlethreeimageurl"; }
    else if($articlethreecontent == "") { $error[] = "Provide articlethreecontent"; }

    else
    {


        $allowed = array('jpg', 'png', 'jpeg', 'gif');

        $file_name = $_FILES['bannerimage']['name'];
        @$file_extn = strtolower(end(explode('.', $file_name)));
        $file_tmp = $_FILES['bannerimage']['tmp_name'];
        if (in_array($file_extn, $allowed) === true)
        {


                $stmt = $auth_user->runQuery("SELECT user_id, user_name FROM hotelscover WHERE user_id=:user_id ");
                $stmt->execute(array(':user_id'=>$user_id));
                $row=$stmt->fetch(PDO::FETCH_ASSOC);

                if($row['user_id']==$user_id) {
                    echo "Found"; 
                }else{

                        try
                        {

                            $file_path = 'uploads/coverhotelsimages/' . substr(md5(time()), 0, 20) . '.' . $file_extn;
                            move_uploaded_file($file_tmp, $file_path);

                            if($auth_user->addhotelscover($user_id, $user_name, $file_path, $backgroundcolor, $articleonetitle, $articleoneimageurl, $articleonecontent, $articletwotitle, $articletwoimageurl, $articletwocontent, $articlethreetitle, $articlethreeimageurl, $articlethreecontent))
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
