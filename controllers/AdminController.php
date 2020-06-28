<?php 

class AdminController extends AdminBase  {
	public function actionLogin()
	{
		$login='';
		$password='';

		if (isset($_POST['submit'])) {
			$login=$_POST['login'];
			$password=$_POST['password'];

			$errors=false;

			//proveryayem
			$userId = One::checkUserData($login, $password);
			if ($userId == false) {
				$errors[]='Неправильный пароль или email';
			}
			else {
				One::auth($userId);
				header("Location: /admin/");
			}
		}

		require_once(ROOT.'/views/site/login.php');

		return true;
	}
	public function actionAdmin() {
		self::checkAdmin();
		require_once (ROOT.'/views/admin/index.php');
		return true;
	}
}




?>