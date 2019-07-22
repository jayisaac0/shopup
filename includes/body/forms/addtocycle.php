<?php
$login = new USER();
if($login->is_loggedin()!="")
{
?>
<?php

    if(strtolower($shop->user_name) == strtolower($userRow['user_name']) ){
        //echo "This is me";

            ?>
                <button type="submit" class="btn btn-primary btn-lg" name="deletefromcyclebutton" value="Remove" >My shop</button>
            <?php

    }else {
        //echo "This is not me";

            ?>
            <?php
                $stmt = $auth_user->runQuery("SELECT user_id, user FROM businesscycle WHERE user_id=:user_id AND user=:user ");
                $stmt->execute(array(':user_id'=>$user_id, ':user'=>$user ));
                $row=$stmt->fetch(PDO::FETCH_ASSOC);
                if($row['user_id']==$user_id AND $row['user']==$user) {
                    ?>
                        <form class="form-horizontal"  role="form" method="POST" data-parsley-validate enctype="multipart/form-data">
                            <?php require_once 'includes/body/formcontrollers/deletefromcycleformccontroller.php'; ?>
                            <?php
                                if(isset($error))
                                {
                                    foreach($error as $error)
                                    {
                                         ?>
                                         <div class="alert alert-danger" style = "">
                                            <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                                         </div>
                                         <?php
                                    }
                                }
                            ?>
                        <input type="submit" class="btn btn-primary btn-lg" name="deletefromcyclebutton" value="Remove" />
                        </form> 
                    <?php
                }else{
                    ?>
                        <form class="form-horizontal"  role="form" method="POST" data-parsley-validate enctype="multipart/form-data">
                            <?php require_once 'includes/body/formcontrollers/addtocycleformccontroller.php'; ?>
                            <?php
                                if(isset($error))
                                {
                                    foreach($error as $error)
                                    {
                                         ?>
                                         <div class="alert alert-danger" style = "">
                                            <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                                         </div>
                                         <?php
                                    }
                                }
                            ?>
                        <input type="submit" class="btn btn-primary btn-lg" name="addtocyclebutton" value="Add to cycle" />
                        </form> 
                    <?php
                }
            ?>

            <?php


    }


}
?>