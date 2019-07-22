<?php
    if(isset($_POST['messagepost']))
    {
        $user_id = strip_tags(trim(stripslashes(htmlentities($_POST['user_id']))));
        $user_name = strip_tags(trim(stripslashes(htmlentities($_POST['user_name']))));
        $shopname = strip_tags(trim(stripslashes(htmlentities($_POST['shopname']))));
        $shopowner = strip_tags(trim(stripslashes(htmlentities($_POST['shopowner']))));
        $subject = strip_tags(trim(stripslashes(htmlentities($_POST['subject']))));
        $message = strip_tags(trim(stripslashes(htmlentities($_POST['message']))));

        if($user_id == "") { $error[] = "Provide user id"; }
        else if($user_name == "") { $error[] = "Provide user_name"; }
        else if($shopname == "") { $error[] = "Provide shopname"; }
        else if($shopowner == "") { $error[] = "Provide shopowner"; }
        else if($subject == "") { $error[] = "Provide subject"; }
        else if($message == "") { $error[] = "Provide message"; }
        else
        {
            try
            {
                if($auth_user->postmessage($user_id, $user_name, $shopname, $shopowner, $subject, $message))
                {
                    ?>
                        <div class="alert alert-success" >
                            <i class="glyphicon glyphicon-warning-sign"></i> &nbsp;
                            <?php echo 'Message sent';
                            //echo '<script type="text/javascript">
                                //window.location = "'.$_SERVER['HTTP_REFERER'].'"
                                //</script>';
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

?>
