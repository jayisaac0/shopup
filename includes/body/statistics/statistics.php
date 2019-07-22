<?php
	$login = new USER();
	if($login->is_loggedin()!="")
	{
		require_once 'pageviews.php';
		//echo "LOGGED";
	}else
	{
		require_once 'generalpageviews.php';
		//echo "NOT LOGGED";
	}

