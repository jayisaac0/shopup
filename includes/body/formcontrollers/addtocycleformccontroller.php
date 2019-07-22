<?php
if(isset($_POST['addtocyclebutton']))
{
    try
    {

    $stmt = $auth_user->runQuery("SELECT user_id, user FROM businesscycle WHERE user_id=:user_id AND user=:user");
    $stmt->execute(array(':user_id'=>$user_id, ':user'=>$user  ));
    $row=$stmt->fetch(PDO::FETCH_ASSOC);
    if($row['user_id']==$user_id AND $row['user']==$user) {
        echo "Found"; 
    }else{
        if($auth_user->addtocycle($user_id, $user))
        {
            ?>
                
                    <?php 
                    echo '<script type="text/javascript">
                    window.location = "'.$_SERVER['HTTP_REFERER'].'"
                    </script>';
                     ?>
                
            <?php
        }        
    }





    }catch(PDOException $e)
        {
            echo $e->getMessage();
        }
}

?>
