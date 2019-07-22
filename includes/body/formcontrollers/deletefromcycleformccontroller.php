<?php
if(isset($_POST['deletefromcyclebutton']))
{
    try
    {

    $stmt = $auth_user->runQuery("SELECT businesscycle_id, user_id, user FROM businesscycle WHERE user_id=:user_id AND user=:user");
    $stmt->execute(array(':user_id'=>$user_id, ':user'=>$user ));
    $row=$stmt->fetch(PDO::FETCH_ASSOC);

        if($row['user_id']==$user_id AND $row['user']==$user) {
            
            try
            {   $businesscycle_id = $row['businesscycle_id'];
                if($auth_user->deletefromcircle($businesscycle_id)) 
                {
                    ?>
                        <div class="alert alert-success"  style = "padding:1px;margin:1px;">
                            <?php echo 'Deleted!';
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

        }else{
            echo "SORRY";    
        }


    }catch(PDOException $e)
        {
            echo $e->getMessage();
        }
}

?>
