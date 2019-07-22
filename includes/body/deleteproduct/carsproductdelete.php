<?php //require_once 'includes/body/updateformcontrollers/updatecateringformccontroller.php'; ?>
<?php
    $stmt = $auth_user->runQuery("SELECT * FROM cars WHERE `cars_id`='$cars_id' ");
    $stmt->execute(array());
    $cars=$stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($cars as $car) {
        ?>



<div class="" role="main">
<h1><?php echo $car->carname; ?></h1> 
<div class="">
<div class="clearfix"></div>
<div class="">
<div class="col-md-12 col-sm-12 col-xs-12" id="mypagecard">
<div class="x_panel">


    <div class="x_content">
        <div class="col-md-7 col-sm-7 col-xs-12">
            <div class="product-image">
                <img src="<?php echo $car->carimage; ?>" alt="" />
            </div>
        </div>

        <div class="col-md-5 col-sm-5 col-xs-12" style="border:0px solid #e5e5e5;">
            <h1 class="">ARE YOU SURE YOU WANT TO DELETE?</h1>
            <br />
            <br />
            <div class="">
                <div class="product_price">
                    <div class="">









                    <form class="form-horizontal" role="form" method="POST" >
                            <?php
                                if(isset($_POST['removecarsproduct']))
                                {
                                    try
                                    {
                                        if($auth_user->deletecarsproduct($cars_id))
                                        {
                                            unlink($car->carimage);
                                            ?>
                                                <div class="alert alert-success"  style = "padding:1px;margin:1px;">
                                                    <?php echo 'Deleted!';
                                                    echo '<script type="text/javascript">
                                                        window.location = "products"
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


                            ?>

                        <div class="caption ">
                            <p style = "text-align:center;"><button class="btn btn-danger btn-lg" name = "removecarsproduct" >Confirm delete</button></p>
                        </div>
                    </form>
                    <a href="products"><button class="btn btn-success btn-lg" type="button">Back</button></a> 




                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>


</div>
</div>
</div>
</div>
</div>
<!-- /page content -->


        <?php
    }
?>