<?php
$login = new USER();
if($login->is_loggedin()!="")
{
    ?>
<?php require_once 'productreviewform.php'; ?>

    <?php
}else
{
    ?>
    <a href="log-in.php?url=<?php echo base64_encode('car/'.$user.'/'.$id.''); ?>" class=" col-md-12 col-sm-12 col-xs-12">
        <div class="w3-btn  w3-padding-large w3-blue w3-animate-zoom w3-center btn btn-lg btn-primary">
            Log in to post review
        </div>
    </a>
    <?php
}
?>

<?php require_once 'posts.php'; ?>