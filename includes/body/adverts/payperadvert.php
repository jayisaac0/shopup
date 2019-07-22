<?php
if(isset($_POST['postadvert']))
{
    $user_id = strip_tags(trim(stripslashes(htmlentities($_POST['user_id']))));
    $user_name = strip_tags(trim(stripslashes(htmlentities($_POST['user_name']))));
    $adverttitle = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['adverttitle'])))));
    $advertdetails = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['advertdetails'])))));
    $advertimage = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['advertimage'])))));
    $advertisingterms = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['advertisingterms'])))));


    if($user_id == "") { $error[] = "Provide user_id"; }
    else if($user_name == "") { $error[] ="Provide user_name"; }
    else if($adverttitle == "") { $error[] = "Provide adverttitle"; }
    else if($advertdetails == "") { $error[] = "Provide advertdetails"; }
    else if(empty($_FILES['advertimage']['name']) === true) { $error[] = "Provide car image!"; }
    else if($advertisingterms == "") { $error[] = "Provide advertisingterms"; }
    else
    {
        $allowed = array('jpg', 'png', 'jpeg', 'gif');
        $file_name = $_FILES['advertimage']['name'];
        @$file_extn = strtolower(end(explode('.', $file_name)));
        $file_tmp = $_FILES['advertimage']['tmp_name'];
        if (in_array($file_extn, $allowed) === true)
        {
            $file_path = 'uploads/paidadvertsimages/' . substr(md5(time()), 0, 20) . '.' . $file_extn;
            move_uploaded_file($file_tmp, $file_path);

            try
            {
                if($auth_user->createpaidadvert($user_id, $user_name, $adverttitle, $advertdetails, $file_path, $advertisingterms))
                {


                    ?>
                        <div class="alert alert-success" >
                            <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo 'Product posted!'; ?>
                        </div>
                    <?php
                            //Destroy the advertisement KEY and destroy entery !!!

                            $stmt = $auth_user->runQuery("SELECT * FROM `advertlog` WHERE user_id=:user_id  ");
                            $stmt->execute(array(':user_id'=>$user_id ));
                            $row=$stmt->fetch(PDO::FETCH_ASSOC);

                            if($row['user_id']==$user_id AND $row['advert_key']==$url ) {
                                echo "ALL IS FINE"; 
                                $advertlog_id = $row['advertlog_id'];
                                $user_id = $row['user_id'];
                                $advert_transaction_tracking_id = $row['advert_transaction_tracking_id'];
                                $advert_key = $row['advert_key'];

                                    try
                                    {

                                        $stmt = $auth_user->runQuery("DELETE FROM `advertlog` WHERE `advertlog_id`='$advertlog_id' ");
                                        $stmt->bindparam(":advertlog_id", $advertlog_id);
                                        $stmt->execute();
                                        echo '<script type="text/javascript"> window.location = "success" </script>';
                                        return $stmt;
                                    }
                                    catch(PDOException $e)
                                    {
                                        //echo $e->getMessage();
                                    }


                            }else{
                                echo "ERROR";

                            }


                                        

                }

            }catch(PDOException $e)
                {
                    echo $e->getMessage();
                }
        }
    }
}

?>