<?php require_once 'headersession.php'; ?>
<?php require_once 'database/loginsession.php'; ?>
<?php
$page_title = "Create shop | View our large collection of cars";
$content = "View our large collection of cars in shops around the globe";
?>
<?php require_once 'header.php'; ?>
<?php require_once 'navigation.php'; ?>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
            <?php require_once 'includes/body/formcontrollers/createshopformccontroller.php'; ?>
                



<?php

    $stmt = $auth_user->runQuery("SELECT user_id, user_name, shopname, premium FROM shops WHERE user_id=:user_id ");
    $stmt->execute(array(':user_id'=>$user_id));
    $row=$stmt->fetch(PDO::FETCH_ASSOC);

    if($row['user_id']==$user_id) {
        $error[] = " You already own a shop ! ".$row['shopname']. '<br /> <a class="to_register">MAKE PAYMENTS ABOVE</a>'; 
    }
    else
    {
        $error[] = " You dont own any shop yet ! "; 
        //echo 'You dont own any shop yet';
        //redirect to pagesite
        //echo '<script type="text/javascript"> window.location = "pagesite.php" </script>';
        //die();
        
        ?>

                <form class="form-horizontal"  role="form" method="POST" data-parsley-validate enctype="multipart/form-data">
                <h1>Create shop</h1>

<div>
    <input type="" id="user_id" name="user_id" value="<?php echo $userRow['user_id']; ?>">
    <input type="" id="user_name" name="user_name" value="<?php echo $userRow['user_name']; ?>">
    <input type="text" id="shopname" placeholder="Shop name " name="shopname" required="required" class="form-control ">
</div>
<div>
    <input type="hidden" id="shopkey" name="shopkey" required="required" class="form-control " value="<?php echo md5(time()); ?>">
</div>
<div>
    <label class="control-label">Select Type of business</label>
    <select class="select2_single form-control" name="typeofbusiness" id="typeofbusiness" tabindex="-1">
        <option type=""></option>
        <!--<option type="disabled">Select type of business</option>-->
        <option value="cars">Automotives</option>
        <option value="catering">Catering</option>
        <option value="consultancy">Consultancy</option>
        <!--<option type="disabled">Cosmetics</option>-->
        <option value="education">Education</option>
        <option value="farming">Farming</option>
        <option value="food">Food</option>
        <!--<option value="generalshop">General shop</option>-->
        <option type="disabled">Health</option>
        <option value="hotels">Hotels</option>
    </select>
</div>
<div>
    <input type="text" id="phonenumber" placeholder="Phone number" name="phonenumber" required="required" class="form-control " />
</div>
<div>
    <input type="text" id="idnumber" placeholder="Identification number" name="idnumber" required="required" class="form-control " />
</div>
<div>
    <input type="text" id="country" placeholder="Country" name="country" required="required" class="form-control" />
</div>
<div>
    <input type="text" id="town" placeholder="Town" name="town" required="required" class="form-control" />
</div>
<div>
    <input type="text" id="exactbusinesslocation" placeholder="Exact business location" name="exactbusinesslocation" required="required" class="form-control" />
</div>
<div>
    <input type="text" id="popularname" name="popularname" placeholder="Seller's known popular name" required="required" class="form-control" />
</div>
<div>
    <button class="btn btn-primary" type="reset">Reset</button>
    <button type="submit" id="createshop" name="createshop" class="btn btn-success">Submit</button>
</div>

                </form>

<div class="clearfix"></div>
        <?php
    }

    if($row['premium'] == "0"){
        $error[] = " You have no premiun privilages ! "; 
        //create subscription buttons below
        ?>
            <form action="mpesa/pesapal-iframe.php" method="post">
            <h1>Subscribe</h1>
            <div  class="thumbnail caption">
                <table>
                    <tr>
                        <!--<td>Amount:</td>-->
                        <td><input type="hidden" name="amount" value="350" />
                        <!--(in Kshs)-->
                        </td>
                    </tr>
                    <tr>
                        <!--<td>Type:</td>-->
                        <td><input type="hidden" name="type" value="MERCHANT" readonly="readonly" />
                        <!--(leave as default - MERCHANT)-->
                        </td>
                    </tr>
                    <tr>
                        <!--<td>Description:</td>-->
                        <td><input type="hidden" name="description" value="Subscription" /></td>
                    </tr>
                    <tr>
                        <!--<td>Reference:</td>-->
                        <td><input type="hidden" name="reference" value="<?php echo $userRow['user_id']; ?>" />
                        <!--(the Order ID )-->
                        </td>
                    </tr>
                    <tr>
                        <!--<td>Shopper's First Name:</td>-->
                        <td><input type="hidden" name="first_name" value="<?php echo $userRow['first_name']; ?>" /></td>
                    </tr>
                    <tr>
                        <!--<td>Shopper's Last Name:</td>-->
                        <td><input type="hidden" name="last_name" value="<?php echo $userRow['last_name']; ?>" /></td>
                    </tr>
                    <tr>
                        <!--<td>Shopper's Email Address:</td>-->
                        <td><input type="hidden" name="email" value="<?php echo $userRow['user_email']; ?>" /></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="alert alert-warning alert-dismissible" role="" style="width:100%;">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <strong><a style="cursor:pointer;">Mobile payment! </a></strong> Only for East Africa.
                            </div>
                            <center><h2>Mobile payments</h2></center>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Make Payment" style="background:url('images/mpesa.jpg') ;width:100%;" class="btn-lg" />
                        </td>
                    </tr>
                </table>
                </div>
            </form>
        <?php
    }else{
        $error[] = " You have premiun privilages ! "; 
        //echo 'Not premium';
        //echo '<script type="text/javascript"> window.location = "pagesite.php" </script>';
        //die();
    }

    if ($row['user_id'] == $user_id && $row['premium'] == "1" ){
    $error[] = " You have a shop and have premium privilagges ! "; 
    echo 'Shop and premium';
    echo '<script type="text/javascript"> window.location = "dashboard.php" </script>';
    //die();
    }

?>



    <?php
        if(isset($error))
        {
            foreach($error as $error)
            {
                 ?>
                 <div class="alert alert-success" style = "">
                    <i class="glyphicon glyphicon-lock"></i> &nbsp; <?php echo $error; ?>
                 </div>
                 <?php
            }
        }
    ?>



            </section>
        </div>









        <div id="register" class="animate form registration_form">
            <section class="login_content">
                <form>
                <h1>Create Account</h1>
                    <div>
                        <input type="text" class="form-control" placeholder="Username" required="" />
                    </div>
                    <div>
                        <input type="email" class="form-control" placeholder="Email" required="" />
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Password" required="" />
                    </div>
                    <div>
                        <a class="btn btn-default submit" href="index.php">Submit</a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="separator">
                        <p class="change_link">Already a member ?
                            <a href="#signin" class="to_register"> Back </a>
                        </p>
                        <div class="clearfix"></div>
                        <br />
                    </div>
                </form>
            </section>
        </div>

      </div>
    </div>
<?php require_once 'includes/footer/footer.php'; ?>
