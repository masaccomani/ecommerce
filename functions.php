<?php 

use \Hcode\Model\User;

function formatPrice($vlprice)
{
	if(!$vlprice > 0) $vlprice = 0;
	
	return number_format($vlprice, 2, ",", ".");
}

function formatDate($date)
{
	return date('d/m/Y', strtotime($date));
}

function checkLogin($inadmin = true)
{
	return User::checkLogin($inadmin);
}

function getUserName()
{
	$user = User::getFromSession();
	return $user->getdesperson();
}

function post($key)
{
	return str_replace("'", "", $_POST[$key]);
}
function get($key)
{
	return str_replace("'", "", $_GET[$key]);
}

 ?>