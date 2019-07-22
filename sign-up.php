<?php
session_start();
require_once('database/class.user.php');
$user = new USER();

if($user->is_loggedin()!="")
{
  $user->redirect('home.php');
}

if(isset($_POST['btn-signup']))
{
  $uname = strip_tags($_POST['txt_uname']);
  $umail = strip_tags($_POST['txt_umail']);
  $upass = strip_tags($_POST['txt_upass']); 
  
  if($uname=="")  {
    $error[] = "provide username !";  
  }
  else if($umail=="") {
    $error[] = "provide email id !";  
  }
  else if(!filter_var($umail, FILTER_VALIDATE_EMAIL)) {
      $error[] = 'Please enter a valid email address !';
  }
  else if($upass=="") {
    $error[] = "provide password !";
  }
  else if(strlen($upass) < 6){
    $error[] = "Password must be atleast 6 characters"; 
  }
  else
  {
    try
    {
      $stmt = $user->runQuery("SELECT user_name, user_email FROM users WHERE user_name=:uname OR user_email=:umail");
      $stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
      $row=$stmt->fetch(PDO::FETCH_ASSOC);
        
      if($row['user_name']==$uname) {
        $error[] = "sorry username already taken !";
      }
      else if($row['user_email']==$umail) {
        $error[] = "sorry email id already taken !";
      }
      else
      {
        if($user->register($uname,$umail,$upass)){  
          $user->redirect('sign-up.php?joined');
        }
      }
    }
    catch(PDOException $e)
    {
      echo $e->getMessage();
    }
  } 
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <base href="http://localhost/newshopupSite/">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
  <?php require_once 'navigation.php'; ?>
    <div>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form class="form-signin" method="post" id="btn-signup">
                        <?php
      if(isset($error))
      {
        foreach($error as $error)
        {
           ?>
                     <div class="alert alert-danger">
                        <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                     </div>
                     <?php
        }
      }
      else if(isset($_GET['joined']))
      {
         ?>
                 <div class="alert alert-info">
                      <i class="glyphicon glyphicon-log-in"></i> &nbsp; Successfully registered <a href='log-in.php'>login</a> here
                 </div>
                 <?php
      }
      ?>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" name="txt_uname" id="txt_uname" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" name="txt_umail" id="txt_umail" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="txt_upass" id="txt_upass" placeholder="Password" required="" />
              </div>
              <div>
                            <div class="form-group">
              <button type="submit" class="btn btn-primary" name="btn-signup">
                  <i class="glyphicon glyphicon-open-file"></i>&nbsp;SIGN UP
                </button>
            </div>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="log-in.php?url=<?php echo base64_encode('home'); ?>" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

              </div>
            </form>
          </section>
        </div>

      </div>
    </div>
  </body>
</html>
