<?php
error_reporting (0);
require_once('dbconfig.php');

class USER
{

	private $conn;

	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
    }

	public function runQuery($sql)
	{
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}

	public function register($uname,$umail,$upass)
	{
		try
		{
			$new_password = password_hash($upass, PASSWORD_DEFAULT);

			$stmt = $this->conn->prepare("INSERT INTO users(user_name,user_email,user_pass)
		                                               VALUES(:uname, :umail, :upass)");

			$stmt->bindparam(":uname", $uname);
			$stmt->bindparam(":umail", $umail);
			$stmt->bindparam(":upass", $new_password);

			$stmt->execute();

			return $stmt;
		}
		catch(PDOException $e)
		{
			//echo $e->getMessage();
		}
	}



	//create shop
	public function createshop($user_id, $user_name, $shopname, $shopkey, $typeofbusiness, $phonenumber, $idnumber, $country, $town, $exactbusinesslocation, $popularname)
	{
		try
		{

			$stmt = $this->conn->prepare("INSERT INTO shops(user_id, user_name, shopname, shopkey, typeofbusiness, phonenumber, idnumber, country, town, exactbusinesslocation, popularname)
		                                               VALUES(:user_id, :user_name, :shopname, :shopkey, :typeofbusiness, :phonenumber, :idnumber, :country, :town, :exactbusinesslocation, :popularname)");

			$stmt->bindparam(":user_id", $user_id);
			$stmt->bindparam(":user_name", $user_name);
			$stmt->bindparam(":shopname", $shopname);
			$stmt->bindparam(":shopkey", $shopkey);
			$stmt->bindparam(":typeofbusiness", $typeofbusiness);
			$stmt->bindparam(":phonenumber", $phonenumber);
			$stmt->bindparam(":idnumber", $idnumber);
			$stmt->bindparam(":country", $country);
			$stmt->bindparam(":town", $town);
			$stmt->bindparam(":exactbusinesslocation", $exactbusinesslocation);
			$stmt->bindparam(":popularname", $popularname);
			$stmt->execute();

			return $stmt;
		}
		catch(PDOException $e)
		{
			//echo $e->getMessage();
		}
	}

	//cosmetics add
	public function addcosmetic($user_id, $user_name, $cosmeticname, $cosmeticprice, $cosmeticdetails, $newcosmetic, $cosmeticcolors, $cosmeticmanufacturer, $cosmeticimage, $cosmeticoffer)
	{
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO cosmetics(user_id, user_name, cosmeticname, cosmeticprice, cosmeticdetails, newcosmetic, cosmeticcolors, cosmeticmanufacturer, cosmeticimage, cosmeticoffer)
			 VALUES(:user_id, :user_name, :cosmeticname, :cosmeticprice, :cosmeticdetails, :newcosmetic, :cosmeticcolors, :cosmeticmanufacturer, :cosmeticimage, :cosmeticoffer) ");

			$stmt->bindparam(":user_id", $user_id);
			$stmt->bindparam(":user_name", $user_name);
			$stmt->bindparam(":cosmeticname", $cosmeticname);
			$stmt->bindparam(":cosmeticprice", $cosmeticprice);
			$stmt->bindparam(":cosmeticdetails", $cosmeticdetails);
			$stmt->bindparam(":newcosmetic", $newcosmetic);
			$stmt->bindparam(":cosmeticcolors", $cosmeticcolors);
			$stmt->bindparam(":cosmeticmanufacturer", $cosmeticmanufacturer);
			$stmt->bindparam(":cosmeticimage", $cosmeticimage);
			$stmt->bindparam(":cosmeticoffer", $cosmeticoffer);
			$stmt->execute();

			return $stmt;
		}
			catch(PDOException $e)
		{
			//echo $e->getMessage();
		}
	}

	//car add
	public function addcar($user_id, $user_name, $carname, $carprice, $carmodel, $cardetails, $cartype, $carcolors, $carmanufacturer, $carimage)
	{
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO cars(user_id, user_name, carname, carprice, carmodel, cardetails, cartype, carcolors, carmanufacturer, carimage)
			 VALUES(:user_id, :user_name, :carname, :carprice, :carmodel, :cardetails, :cartype, :carcolors, :carmanufacturer, :carimage) ");

			$stmt->bindparam(":user_id", $user_id);
			$stmt->bindparam(":user_name", $user_name);
			$stmt->bindparam(":carname", $carname);
			$stmt->bindparam(":carprice", $carprice);
			$stmt->bindparam(":carmodel", $carmodel);
			$stmt->bindparam(":cardetails", $cardetails);
			$stmt->bindparam(":cartype", $cartype);
			$stmt->bindparam(":carcolors", $carcolors);
			$stmt->bindparam(":carmanufacturer", $carmanufacturer);
			$stmt->bindparam(":carimage", $carimage);
			$stmt->execute();

			return $stmt;
		}
			catch(PDOException $e)
		{
			//echo $e->getMessage();
		}
	}

	//catering add
	public function addcatering($user_id, $user_name, $cateringservice, $cateringserviceprice, $cateringserviceimage)
	{
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO catering(user_id, user_name, cateringservice, cateringserviceprice, cateringserviceimage)
			 VALUES(:user_id, :user_name, :cateringservice, :cateringserviceprice, :cateringserviceimage) ");


			$stmt->bindparam(":user_id", $user_id);
			$stmt->bindparam(":user_name", $user_name);
			$stmt->bindparam("cateringservice", $cateringservice);
			$stmt->bindparam("cateringserviceprice", $cateringserviceprice);
			$stmt->bindparam("cateringserviceimage", $cateringserviceimage);

			$stmt->execute();

			return $stmt;
		}
			catch(PDOException $e)
		{
			//echo $e->getMessage();
		}
	}

	//education add
	public function addeducation($user_id, $user_name, $producttitle, $productcategory, $productprice, $productimage, $productdetails)
	{
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO education(user_id, user_name, producttitle, productcategory, productprice, productimage, productdetails)
			 VALUES(:user_id, :user_name, :producttitle, :productcategory, :productprice, :productimage, :productdetails) ");


			$stmt->bindparam(":user_id", $user_id);
			$stmt->bindparam(":user_name", $user_name);
			$stmt->bindparam(":producttitle", $producttitle); 
			$stmt->bindparam(":productcategory", $productcategory); 
			$stmt->bindparam(":productprice", $productprice); 
			$stmt->bindparam(":productimage", $productimage); 
			$stmt->bindparam(":productdetails", $productdetails);
			$stmt->execute();

			return $stmt;
		}
			catch(PDOException $e)
		{
			//echo $e->getMessage();
		}
	}



	//hotel add
	public function addehotelrooms($user_id, $user_name, $hotelname, $hotellocation, $hotelroomdetails, $hotelroomprice, $hotelroompriceduration, $hotelroomimage)
	{
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO hotels(user_id, user_name, hotelname, hotellocation, hotelroomdetails, hotelroomprice, hotelroompriceduration, hotelroomimage)
			 VALUES(:user_id, :user_name, :hotelname, :hotellocation, :hotelroomdetails, :hotelroomprice, :hotelroompriceduration, :hotelroomimage) ");

			$stmt->bindparam(":user_id", $user_id);
			$stmt->bindparam(":user_name", $user_name);
			$stmt->bindparam(":hotelname", $hotelname);
			$stmt->bindparam(":hotellocation", $hotellocation);
			$stmt->bindparam(":hotelroomdetails", $hotelroomdetails);
			$stmt->bindparam(":hotelroomprice", $hotelroomprice);
			$stmt->bindparam(":hotelroompriceduration", $hotelroompriceduration);
			$stmt->bindparam(":hotelroomimage", $hotelroomimage);
			$stmt->execute();

			return $stmt;
		}
			catch(PDOException $e)
		{
			//echo $e->getMessage();
		}
	}




	//snack/food add
	public function addsnack($user_id, $user_name, $snackname, $snackprice, $snackimage, $snackdetails)
	{
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO food(user_id, user_name, snackname, snackprice, snackimage, snackdetails)
			 VALUES(:user_id, :user_name, :snackname, :snackprice, :snackimage, :snackdetails) ");


			$stmt->bindparam(":user_id", $user_id); 
			$stmt->bindparam(":user_name", $user_name); 
			$stmt->bindparam(":snackname", $snackname); 
			$stmt->bindparam(":snackprice", $snackprice); 
			$stmt->bindparam(":snackimage", $snackimage); 
			$stmt->bindparam(":snackdetails", $snackdetails);
			$stmt->execute();

			return $stmt;
		}
			catch(PDOException $e)
		{
			//echo $e->getMessage();
		}
	}



	//general shop product add
	public function addgeneralshopproduct($user_id, $user_name, $productname, $productprice, $productspecification, $productcategory, $productmanufacturer, $productimage)
	{
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO generalshop(user_id, user_name, productname, productprice, productspecification, productcategory, productmanufacturer, productimage)
			 VALUES(:user_id, :user_name, :productname, :productprice, :productspecification, :productcategory, :productmanufacturer, :productimage) ");

			$stmt->bindparam(":user_id", $user_id);
			$stmt->bindparam(":user_name", $user_name);
			$stmt->bindparam(":productname", $productname);
			$stmt->bindparam(":productprice", $productprice);
			$stmt->bindparam(":productspecification", $productspecification);
			$stmt->bindparam(":productcategory", $productcategory);
			$stmt->bindparam(":productmanufacturer", $productmanufacturer);
			$stmt->bindparam(":productimage", $productimage);
			$stmt->execute();

			return $stmt;
		}
			catch(PDOException $e)
		{
			//echo $e->getMessage();
		}
	}

	//farm product add
	public function addfarmproduct($user_id, $user_name, $farmproduct, $farmproductcategory, $farmproductprice, $farmproductimage, $farmproductdetails)
	{
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO farming(user_id, user_name, farmproduct, farmproductcategory, farmproductprice, farmproductimage, farmproductdetails)
			 VALUES(:user_id, :user_name, :farmproduct, :farmproductcategory, :farmproductprice, :farmproductimage, :farmproductdetails) ");


			$stmt->bindparam(":user_id", $user_id);
			$stmt->bindparam(":user_name", $user_name);
			$stmt->bindparam(":farmproduct", $farmproduct);
			$stmt->bindparam(":farmproductcategory", $farmproductcategory);
			$stmt->bindparam(":farmproductprice", $farmproductprice);
			$stmt->bindparam(":farmproductimage", $farmproductimage);
			$stmt->bindparam(":farmproductdetails", $farmproductdetails);
			$stmt->execute();

			return $stmt;
		}
			catch(PDOException $e)
		{
			//echo $e->getMessage();
		}
	}



	//Message add
	public function postmessage($user_id, $user_name, $shopname, $shopowner, $subject, $message)
	{
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO messages(user_id, user_name, shopname, shopowner, subject, message)
			 VALUES(:user_id, :user_name, :shopname, :shopowner, :subject, :message) ");


			$stmt->bindparam(":user_id", $user_id);
			$stmt->bindparam(":user_name", $user_name);
			$stmt->bindparam(":shopname", $shopname);
			$stmt->bindparam(":shopowner", $shopowner);
			$stmt->bindparam(":subject", $subject);
			$stmt->bindparam(":message", $message);

			$stmt->execute();

			return $stmt;
		}
			catch(PDOException $e)
		{
			//echo $e->getMessage();
		}
	}


	public function postcommentreview($user_id, $user_name, $shopowner, $message, $actualproduct)
	{
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO productreviews(user_id, user_name, shopowner, message, actualproduct)
			 VALUES(:user_id, :user_name, :shopowner, :message, :actualproduct) ");


			$stmt->bindparam(":user_id", $user_id);
			$stmt->bindparam(":user_name", $user_name);
			$stmt->bindparam(":shopowner", $shopowner);
			$stmt->bindparam(":message", $message);
			$stmt->bindparam(":actualproduct", $actualproduct);
			$stmt->execute();

			return $stmt;
		}
			catch(PDOException $e)
		{
			//echo $e->getMessage();
		}
	}

	/*============================================================
	*
	*Cart orders posts
	*
	*===============================================================
	*/

	//generalshopcart add
	public function postgeneralshopcart($user_id, $user_name, $shopname, $shopper, $shopperusername, $typeofbusiness, $qty, $product, $orderserialno, $desccription, $subtotal, $grouporder)
	{
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO generalshoporders(user_id, user_name, shopname, shopper, shopperusername, typeofbusiness, qty, product, orderserialno, desccription, subtotal, grouporder)
			 VALUES(:user_id, :user_name, :shopname, :shopper, :shopperusername, :typeofbusiness, :qty, :product, :orderserialno, :desccription, :subtotal, :grouporder) ");


			$stmt->bindparam(":user_id", $user_id);
			$stmt->bindparam(":user_name", $user_name);
			$stmt->bindparam(":shopname", $shopname);
			$stmt->bindparam(":shopper", $shopper);
			$stmt->bindparam(":shopperusername", $shopperusername);
			$stmt->bindparam(":typeofbusiness", $typeofbusiness);
			$stmt->bindparam(":qty", $qty);
			$stmt->bindparam(":product", $product);
			$stmt->bindparam(":orderserialno", $orderserialno);
			$stmt->bindparam(":desccription", $desccription);
			$stmt->bindparam(":subtotal", $subtotal);
			$stmt->bindparam(":grouporder", $grouporder);
			$stmt->execute();

			return $stmt;
		}
			catch(PDOException $e)
		{
			//echo $e->getMessage();
		}
	}


	//profile edit

	public function updateuserprofile($first_name, $middle_name, $last_name, $gender, $yearofbirth, $userphonenumber, $country, $userlocation, $profileimage)
	{
	    try
	    {
	        $user_id = $_SESSION['user_session'];

	        $stmt = $this->conn->prepare("UPDATE `users` SET `first_name`=:first_name, `middle_name`=:middle_name, `last_name`=:last_name, `gender`=:gender, `yearofbirth`=:yearofbirth, `userphonenumber`=:userphonenumber, `country`=:country, `userlocation`=:userlocation, `profileimage`=:profileimage WHERE `user_id`= '$user_id' ");

	        $stmt->bindparam(":first_name", $first_name);
	        $stmt->bindparam(":middle_name", $middle_name);
	        $stmt->bindparam(":last_name", $last_name);
	        $stmt->bindparam(":gender", $gender);
	        $stmt->bindparam(":yearofbirth", $yearofbirth);
	        $stmt->bindparam(":userphonenumber", $userphonenumber);
	        $stmt->bindparam(":country", $country);
	        $stmt->bindparam(":userlocation", $userlocation);
	        $stmt->bindparam(":profileimage", $profileimage);
	        $stmt->execute();

	        return $stmt;
	    }
	    catch(PDOException $e)
	    {
	        //echo $e->getMessage();
	    }
	}

	//created shop update
	public function updatecreatedshop($shopname, $typeofbusiness, $phonenumber, $idnumber, $country, $town, $exactbusinesslocation, $popularname, $orderbutton)
	{
	    try
	    {
	        $user_id = $_SESSION['user_session'];

	        $stmt = $this->conn->prepare("UPDATE `shops` SET `shopname`=:shopname,  `typeofbusiness`=:typeofbusiness,  `phonenumber`=:phonenumber,  `idnumber`=:idnumber,  `country`=:country,  `town`=:town,  `exactbusinesslocation`=:exactbusinesslocation,  `popularname`=:popularname,	`orderbutton`=:orderbutton WHERE `user_id`= '$user_id' ");

	        $stmt->bindparam(":shopname", $shopname);
	        $stmt->bindparam(":typeofbusiness", $typeofbusiness);
	        $stmt->bindparam(":phonenumber", $phonenumber);
	        $stmt->bindparam(":idnumber", $idnumber);
	        $stmt->bindparam(":country", $country);
	        $stmt->bindparam(":town", $town);
	        $stmt->bindparam(":exactbusinesslocation", $exactbusinesslocation);
	        $stmt->bindparam(":popularname", $popularname);
	        $stmt->bindparam(":orderbutton", $orderbutton);
	        $stmt->execute();

	        return $stmt;
	    }
	    catch(PDOException $e)
	    {
	        //echo $e->getMessage();
	    }
	}




	/*
	*COVERS
	*
	*/
	//cosmetics cover information

	public function addcosmeticcover($user_id, $user_name, $bannerimage, $backgroundcolor)
	{
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO cosmeticscover(user_id, user_name, bannerimage, backgroundcolor)
			 VALUES(:user_id, :user_name, :bannerimage, :backgroundcolor) ");

			$stmt->bindparam(":user_id", $user_id);
			$stmt->bindparam(":user_name", $user_name);
			$stmt->bindparam(":bannerimage", $bannerimage);
			$stmt->bindparam(":backgroundcolor", $backgroundcolor);
			$stmt->execute();

			return $stmt;
		}
			catch(PDOException $e)
		{
			//echo $e->getMessage();
		}
	}

	//cars cover information

	public function addcarscover($user_id, $user_name, $bannerimage, $backgroundcolor, $aboutshop)
	{
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO carscover(user_id, user_name, bannerimage, backgroundcolor, aboutshop)
			 VALUES(:user_id, :user_name, :bannerimage, :backgroundcolor, :aboutshop) ");

			$stmt->bindparam(":user_id", $user_id);
			$stmt->bindparam(":user_name", $user_name);
			$stmt->bindparam(":bannerimage", $bannerimage);
			$stmt->bindparam(":backgroundcolor", $backgroundcolor);
			$stmt->bindparam(":aboutshop", $aboutshop);
			$stmt->execute();

			return $stmt;
		}
			catch(PDOException $e)
		{
			//echo $e->getMessage();
		}
	}


	//catering cover
	public function addcateringcover($user_id, $user_name, $bannerimage, $about, $servicedelivery, $backgroundcolor, $containercolor)
	{
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO cateringcover(user_id, user_name, bannerimage, about, servicedelivery, backgroundcolor, containercolor)
			 VALUES(:user_id, :user_name, :bannerimage, :about, :servicedelivery, :backgroundcolor, :containercolor) ");

			$stmt->bindparam(":user_id", $user_id);
			$stmt->bindparam(":user_name", $user_name);
			$stmt->bindparam(":bannerimage", $bannerimage);
			$stmt->bindparam(":about", $about);
			$stmt->bindparam(":servicedelivery", $servicedelivery);
			$stmt->bindparam(":backgroundcolor", $backgroundcolor);
			$stmt->bindparam(":containercolor", $containercolor);
			$stmt->execute();

			return $stmt;
		}
			catch(PDOException $e)
		{
			//echo $e->getMessage();
		}
	}

	//catering cover
	public function addtocycle($user_id, $user)
	{
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO businesscycle(user_id, user)
			 VALUES(:user_id, :user) ");

			$stmt->bindparam(":user_id", $user_id);
			$stmt->bindparam(":user", $user);
			echo 'Done';
			$stmt->execute();

			return $stmt;
		}
			catch(PDOException $e)
		{
			//echo $e->getMessage();
		}
	}

	//hotels cover
	public function addhotelscover($user_id, $user_name, $bannerimage, $backgroundcolor, $articleonetitle, $articleoneimageurl, $articleonecontent, $articletwotitle, $articletwoimageurl, $articletwocontent, $articlethreetitle, $articlethreeimageurl, $articlethreecontent)
	{
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO hotelscover(user_id, user_name, bannerimage, backgroundcolor, articleonetitle, articleoneimageurl, articleonecontent, articletwotitle, articletwoimageurl, articletwocontent, articlethreetitle, articlethreeimageurl, articlethreecontent)
			 VALUES(:user_id, :user_name, :bannerimage, :backgroundcolor, :articleonetitle, :articleoneimageurl, :articleonecontent, :articletwotitle, :articletwoimageurl, :articletwocontent, :articlethreetitle, :articlethreeimageurl, :articlethreecontent) ");

			$stmt->bindparam(":user_id", $user_id); 
			$stmt->bindparam(":user_name", $user_name); 
			$stmt->bindparam(":bannerimage", $bannerimage); 
			$stmt->bindparam(":backgroundcolor", $backgroundcolor); 
			$stmt->bindparam(":articleonetitle", $articleonetitle); 
			$stmt->bindparam(":articleoneimageurl", $articleoneimageurl); 
			$stmt->bindparam(":articleonecontent", $articleonecontent); 
			$stmt->bindparam(":articletwotitle", $articletwotitle); 
			$stmt->bindparam(":articletwoimageurl", $articletwoimageurl); 
			$stmt->bindparam(":articletwocontent", $articletwocontent); 
			$stmt->bindparam(":articlethreetitle", $articlethreetitle); 
			$stmt->bindparam(":articlethreeimageurl", $articlethreeimageurl); 
			$stmt->bindparam(":articlethreecontent", $articlethreecontent);
			echo 'Done';
			$stmt->execute();

			return $stmt;
		}
			catch(PDOException $e)
		{
			//echo $e->getMessage();
		}
	}

	/*_______________________________________________________________________
    ||______________________________________________________________________||
	||																		||
	||																		||
	||Premium update 														||
	||																		||
	||______________________________________________________________________||
	||______________________________________________________________________||*/

	public function updatepremium($premium)
	{
		try
		{
			$user_id = $_SESSION['user_session'];
			$stmt = $this->conn->prepare("UPDATE `shops` SET `premium`=:1 WHERE `user_id`= '$user_id' ");
			$stmt->bindparam(":1", $premium);
			$stmt->execute();
			return $stmt;
		}
		catch(PDOException $e)
		{
			//echo $e->getMessage();
		}
	}



	/*_______________________________________________________________________
    ||______________________________________________________________________||
	||																		||
	||																		||
	||DELETE FUNCTIONS 														||
	||																		||
	||______________________________________________________________________||
	||______________________________________________________________________||*/




	//Delete from business cycle
	public function deletefromcircle($businesscycle_id)
	{
        try
        { 
            
            $stmt = $this->conn->prepare("DELETE FROM businesscycle WHERE `businesscycle_id`='$businesscycle_id' ");
            $stmt->bindparam(":businesscycle_id", $businesscycle_id);
            $stmt->execute();

            return $stmt;
        }
        catch(PDOException $e)
        {
            //echo $e->getMessage();
        }
	}

	public function deletehoteproduct($hotels_id)
	{
		try
		{

			$stmt = $this->conn->prepare("DELETE FROM `hotels` WHERE `hotels_id`='$hotels_id' ");

			$stmt->bindparam(":hotels_id", $hotels_id);
			$stmt->execute();

			return $stmt;
		}
		catch(PDOException $e)
		{
			//echo $e->getMessage();
		}
	}

	public function deletegeneralshopproduct($generalshop_id)
	{
		try
		{

			$stmt = $this->conn->prepare("DELETE FROM `generalshop` WHERE `generalshop_id`='$generalshop_id' ");

			$stmt->bindparam(":generalshop_id", $generalshop_id);
			$stmt->execute();

			return $stmt;
		}
		catch(PDOException $e)
		{
			//echo $e->getMessage();
		}
	}

	public function deletecarsproduct($cars_id)
	{
		try
		{

			$stmt = $this->conn->prepare("DELETE FROM `cars` WHERE `cars_id`='$cars_id' ");

			$stmt->bindparam(":cars_id", $cars_id);
			$stmt->execute();

			return $stmt;
		}
		catch(PDOException $e)
		{
			//echo $e->getMessage();
		}
	}

	public function deletefoodproduct($food_id)
	{
		try
		{

			$stmt = $this->conn->prepare("DELETE FROM `food` WHERE `food_id`='$food_id' ");

			$stmt->bindparam(":food_id", $food_id);
			$stmt->execute();

			return $stmt;
		}
		catch(PDOException $e)
		{
			//echo $e->getMessage();
		}
	}

	public function deletefarmproduct($farming_id)
	{
		try
		{

			$stmt = $this->conn->prepare("DELETE FROM `farming` WHERE `farming_id`='$farming_id' ");

			$stmt->bindparam(":farming_id", $farming_id);
			$stmt->execute();

			return $stmt;
		}
		catch(PDOException $e)
		{
			//echo $e->getMessage();
		}
	}

	public function deletecateringproduct($catering_id)
	{
		try
		{

			$stmt = $this->conn->prepare("DELETE FROM `catering` WHERE `catering_id`='$catering_id' ");

			$stmt->bindparam(":catering_id", $catering_id);
			$stmt->execute();

			return $stmt;
		}
		catch(PDOException $e)
		{
			//echo $e->getMessage();
		}
	}

	public function deletecosmeticproduct($cosmetics_id)
	{
		try
		{

			$stmt = $this->conn->prepare("DELETE FROM `cosmetics` WHERE `cosmetics_id`='$cosmetics_id' ");

			$stmt->bindparam(":cosmetics_id", $cosmetics_id);
			$stmt->execute();

			return $stmt;
		}
		catch(PDOException $e)
		{
			//echo $e->getMessage();
		}
	}

	public function deleteeducationproduct($education_id)
	{
		try
		{

			$stmt = $this->conn->prepare("DELETE FROM `education` WHERE `education_id`='$education_id' ");

			$stmt->bindparam(":education_id", $education_id);
			$stmt->execute();

			return $stmt;
		}
		catch(PDOException $e)
		{
			//echo $e->getMessage();
		}
	}

	/*_______________________________________________________________________
    ||______________________________________________________________________||
	||																		||
	||																		||
	||PAGE STATISTICS 														||
	||																		||
	||______________________________________________________________________||
	||______________________________________________________________________||*/

	//Page visits
	public function Recodepageviews($shopname, $shopowner, $shopid, $user_name, $user_id)
	{
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO pageviews(shopname, shopowner, shopid, user_name, user_id)
			 VALUES(:shopname, :shopowner, :shopid, :user_name, :user_id) ");

			$stmt->bindparam(":shopname", $shopname); 
			$stmt->bindparam(":shopowner", $shopowner); 
			$stmt->bindparam(":shopid", $shopid); 
			$stmt->bindparam(":user_name", $user_name); 
			$stmt->bindparam(":user_id", $user_id);
			$stmt->execute();

			return $stmt;
		}
			catch(PDOException $e)
		{
			//echo $e->getMessage();
		}
	}

	//off Page visits
	public function Recodeoffpageviews($shopname, $shopowner, $shopid)
	{
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO offpageviews(shopname, shopowner, shopid)
			 VALUES(:shopname, :shopowner, :shopid) ");

			$stmt->bindparam(":shopname", $shopname); 
			$stmt->bindparam(":shopowner", $shopowner); 
			$stmt->bindparam(":shopid", $shopid); 
			$stmt->execute();

			return $stmt;
		}
			catch(PDOException $e)
		{
			//echo $e->getMessage();
		}
	}






	public function createpaidadvert($user_id, $user_name, $adverttitle, $advertdetails, $advertimage, $advertisingterms)
    {
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO paidadverts(user_id, user_name, adverttitle, advertdetails, advertimage, advertisingterms)
			 VALUES(:user_id, :user_name, :adverttitle, :advertdetails, :advertimage, :advertisingterms) ");

			$stmt->bindparam(":user_id", $user_id); 
			$stmt->bindparam(":user_name", $user_name); 
			$stmt->bindparam(":adverttitle", $adverttitle); 
			$stmt->bindparam(":advertdetails", $advertdetails); 
			$stmt->bindparam(":advertimage", $advertimage); 
			$stmt->bindparam(":advertisingterms", $advertisingterms);
			$stmt->execute();

		    return $stmt;
		}
			catch(PDOException $e)
		{
			echo $e->getMessage();
		}
    }







	public function updateadvertlog($user_id, $advert_transaction_tracking_id, $advert_key)
    {
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO advertlog(user_id, advert_transaction_tracking_id, advert_key)
			 VALUES(:user_id, :advert_transaction_tracking_id, :advert_key) ");

			$stmt->bindparam(":user_id", $user_id);
			$stmt->bindparam(":advert_transaction_tracking_id", $advert_transaction_tracking_id);
			$stmt->bindparam(":advert_key", $advert_key);
			$stmt->execute();

		    return $stmt;
		}
			catch(PDOException $e)
		{
			echo $e->getMessage();
		}
    }

    public function updateadvertisementlog($user_id, $advert_transaction_tracking_id)
    {
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO advertisementlog(user_id, advert_transaction_tracking_id)
			 VALUES(:user_id, :advert_transaction_tracking_id) ");

			$stmt->bindparam(":user_id", $user_id);
			$stmt->bindparam(":advert_transaction_tracking_id", $advert_transaction_tracking_id);
			$stmt->execute();

		    return $stmt;
		}
			catch(PDOException $e)
		{
			echo $e->getMessage();
		}
    }

















	public function doLogin($uname,$umail,$upass)
	{
		try
		{
			$stmt = $this->conn->prepare("SELECT user_id, user_name, user_email, user_pass FROM users WHERE user_name=:uname OR user_email=:umail ");
			$stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowCount() == 1)
			{
				if(password_verify($upass, $userRow['user_pass']))
				{
					$_SESSION['user_session'] = $userRow['user_id'];
					return true;
				}
				else
				{
					return false;
				}
			}
		}
		catch(PDOException $e)
		{
			//echo $e->getMessage();
		}
	}

	public function is_loggedin()
	{
		if(isset($_SESSION['user_session']))
		{
			return true;
		}
	}

	public function redirect($url)
	{
		header("Location: $url");
	}

	public function doLogout()
	{
		session_destroy();
		unset($_SESSION['user_session']);
		return true;
	}
}
?>
