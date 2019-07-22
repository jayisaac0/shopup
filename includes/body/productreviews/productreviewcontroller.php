<?php
    if(isset($_POST['postreview']))
    {
        $user_id = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['user_id'])))));
        $user_name = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['user_name'])))));
        $shopowner = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['shopowner'])))));
        $message = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['message'])))));
        $actualproduct = strip_tags(trim(stripslashes(htmlentities(htmlspecialchars($_POST['actualproduct'])))));

        if($user_id == "") { $error[] = "Provide user id"; }
        else if($user_name == "") { $error[] = "Provide user_name"; }
        else if($shopowner == "") { $error[] = "Provide shopowner"; }
        else if($message == "") { $error[] = "Provide message"; }
        else if($actualproduct == "") { $error[] = "Provide actualproduct"; }
        else
        {
            try
            {
                if($auth_user->postcommentreview($user_id, $user_name, $shopowner, $message, $actualproduct))
                {
                    ?>
                        <div class="alert alert-success" >
                            <i class="glyphicon glyphicon-warning-sign"></i> &nbsp;
                            <?php echo 'Message sent';
                            echo '<script type="text/javascript">
                                window.location = "'.$_SERVER['HTTP_REFERER'].'"
                                </script>';
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
