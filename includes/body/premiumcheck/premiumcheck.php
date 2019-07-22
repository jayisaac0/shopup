<?php

    $stmt = $auth_user->runQuery("SELECT user_id, shopname, premium FROM shops WHERE user_id=:user_id ");
    $stmt->execute(array(':user_id'=>$user_id));
    $row=$stmt->fetch(PDO::FETCH_ASSOC);

    if($row['user_id']==$user_id) {
        //$error[] = " You already own ! ".  $row['shopname']; 
    }
    
    else
    {
        //$error[] = " You dont own any shop yet ! "; 
        //echo 'You dont own any shop yet';
        //redirect to pagesite
        echo '<script type="text/javascript"> window.location = "pagesite.php" </script>';
        die();
    }

    if($row['premium'] == "0"){
        //$error[] = " You hahe no premiun privilages ! "; 
        //echo 'Not premium';
        //redirect to pagesite
        echo '<script type="text/javascript"> window.location = "pagesite.php" </script>';
        die();
    }


?>