<?php
    if(isset($_POST['createshop']))
    {
        $user_id = strip_tags(trim(stripslashes(htmlentities($_POST['user_id']))));
        $user_name = strip_tags(trim(stripslashes(htmlentities($_POST['user_name']))));
        $shopname = strip_tags(trim(stripslashes(htmlentities($_POST['shopname']))));
        $shopkey = strip_tags(trim(stripslashes(htmlentities($_POST['shopkey']))));
        $typeofbusiness = strip_tags(trim(stripslashes(htmlentities($_POST['typeofbusiness']))));
        $phonenumber = strip_tags(trim(stripslashes(htmlentities($_POST['phonenumber']))));
        $idnumber = strip_tags(trim(stripslashes(htmlentities($_POST['idnumber']))));
        $country = strip_tags(trim(stripslashes(htmlentities($_POST['country']))));
        $town = strip_tags(trim(stripslashes(htmlentities($_POST['town']))));
        $exactbusinesslocation = strip_tags(trim(stripslashes(htmlentities($_POST['exactbusinesslocation']))));
        $popularname = strip_tags(trim(stripslashes(htmlentities($_POST['popularname']))));

        if($user_id == "") { $error[] = "Provide user id"; }
        else if($user_name == "") { $error[] = "Provide user_name"; }
        else if($shopname == "") { $error[] = "Provide shopname"; }
        else if($shopkey == "") { $error[] = "Provide shopkey"; }
        else if($typeofbusiness == "") { $error[] = "Provide typeofbusiness"; }
        else if($phonenumber == "") { $error[] = "Provide phonenumber"; }
        else if($idnumber == "") { $error[] = "Provide idnumber"; }
        else if($country == "") { $error[] = "Provide country"; }
        else if($town == "") { $error[] = "Provide town"; }
        else if($exactbusinesslocation == "") { $error[] = "Provide exactbusinesslocation"; }
        else if($popularname == "") { $error[] = "Provide popularname"; }
        else
        {
            try
            {

                $stmt = $auth_user->runQuery("SELECT shopname FROM shops WHERE shopname=:shopname ");
    			$stmt->execute(array(':shopname'=>$shopname));
    			$row=$stmt->fetch(PDO::FETCH_ASSOC);

                if($row['shopname']==$shopname) {
                    $error[] = "sorry shop name already in use !";
                }
                else
                {
                    if($auth_user->createshop($user_id, $user_name, $shopname, $shopkey, $typeofbusiness, $phonenumber, $idnumber, $country, $town, $exactbusinesslocation, $popularname))
                    {
                        ?>
                            <div class="alert alert-success"  style = "padding:1px;margin:1px;">
                                <i class="glyphicon glyphicon-warning-sign"></i> &nbsp;
                                <?php echo 'Shop created';
                                echo '<script type="text/javascript">
                                    window.location = "createshop.php"
                                    </script>';
                                ?>
                            </div>
                        <?php

                    }

                }






            }catch(PDOException $e)
                {
                    echo $e->getMessage();
                }
        }

    }

?>
