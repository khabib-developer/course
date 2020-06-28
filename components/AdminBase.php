<?php 
/**
  * 
  */
abstract class AdminBase
{
	public static function checkAdmin()
	{
		$userId = One::checkLogged();
		$user = One::getUserById($userId);
		if ($user['role'] == 'admin') {
			return true;
		}
		
		die('Access denied');
	}
 	
 	
}

?>