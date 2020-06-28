<?php 

class SiteController
{	
	public function actionIndex()
	{
		$courses = array();
		$courses = One::getAllCourses();
		$name = '';
		$phone = '';
		if (isset($_POST['submit'])) {
			$errors = false;
			$name = $_POST['name'];
			$phone = $_POST['phone'];
			if (strlen($name) == '') {
				$errors['name'] = 'Поле обязательно к заполнению';
			}
			if (strlen($phone) != 17 ) {
				$errors['phone'] = 'Неверный номер';
			}
			if ($errors == false) {
				$result = One::register($name, $phone);
				if ($result) {
					$success = "Forma uspeshno otpravleno";
				}
			}
		}
		require_once (ROOT.'/views/site/index.php');
		return true;
	}
	
	public function actionAbout()
	{
		require_once (ROOT.'/views/site/about-us.php');
		return true;
	}
	public function actionCarera()
	{
		if (isset($_POST['submit'])) {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$yourself = $_POST['message'];

			$errors = false;
			if (strlen($name) == '') {
				$errors['name'] = 'Имя не должно быть короче 3-х символов';
			}
			if (strlen($email) == '') {
				$errors['email'] = 'Введите валидный email';
			}
			if (strlen($phone) != 17 ) {
				$errors['phone'] = 'Неверный номер';
			}
			// if (!isset($_POST['file']) && empty($_POST['file'])) {
			// 	$errors['file'] = 'Резюме';
			// }
			if ($errors == false) {
				echo $name.'|'.$phone.'|'.$email;

				$theme = false;
				$message = false;
				$id = One::registerWithResume($name, $phone, $email, $yourself, $theme, $message);
				if ($id) {
                    // Проверим, загружалось ли через форму изображение
                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        // Если загружалось, переместим его в нужную папке, дадим новое имя
                        move_uploaded_file($_FILES["image"]["tmp_name"], ROOT."/template/assets/img/blog_{$id}.jpg");
                    }
                };
			}
		}
		require_once (ROOT.'/views/site/carera.php');
		return true;
	}
	public function actionContacts()
	{
		if (isset($_POST['submit'])) {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$theme = $_POST['theme'];
			$message = $_POST['message'];

			$errors = false;
			if (strlen($name) == '') {
				$errors['name'] = 'Имя не должно быть короче 3-х символов';
			}
			if (strlen($email) == '') {
				$errors['email'] = 'Введите валидный email';
			}
			if (strlen($message) == '') {
				$errors['message'] = 'Поле обязательно к заполнению';
			}
			if ($errors == false) {
				$phone = false;
				$yourself = false;
				$result = One::register($name, $phone, $email, $yourself, $theme, $message);
			}
		}
		require_once (ROOT.'/views/site/contacts.php');
		return true;
	}
	public function actionCourses()
	{
		$courses = array();
		$courses = One::getAllCourses();
		require_once (ROOT.'/views/site/courses.php');
		return true;
	}
	public function actionBlogs()
	{
		$blogs = array();
		$blogs = One::getAllBlogs();
		require_once (ROOT.'/views/site/blog.php');
		return true;
	}
	public function actionCourse_view($id)
	{
		$coursePlan = array();
		$coursePlan = One::getCoursePlan($id);
		$courseView = array();
		$courseView = One::getCourse($id);
		$name = '';
		$phone = '';
		if (isset($_POST['submit'])) {
			$errors = false;
			$name = $_POST['name'];
			$phone = $_POST['phone'];
			if (strlen($name) == '') {
				$errors['name'] = 'Поле обязательно к заполнению';
			}
			if (strlen($phone) != 17 ) {
				$errors['phone'] = 'Неверный номер';
			}
			if ($errors == false) {
				$result = One::register($name, $phone);
				if ($result) {
					$success = "Forma uspeshno otpravleno";
				}
			}
		}
		require_once (ROOT.'/views/site/html-css.php');
		return true;
	}
	public function actionBlog_view($id)
	{
		$blogView = array();
		$blogView = One::getBlog($id);
		require_once (ROOT.'/views/site/blog_view.php');
		return true;
	}

/************************************UZZZZZZZZZZZZZ**********************/
	public function actionIndex_uz()
	{	
		$courses = array();
		$courses = One::getAllCourses();
		$name = '';
		$phone = '';
		if (isset($_POST['submit'])) {
			$errors = false;
			$name = $_POST['name'];
			$phone = $_POST['phone'];
			if (strlen($name) == '') {
				$errors['name'] = 'Поле обязательно к заполнению';
			}
			if (strlen($phone) != 17 ) {
				$errors['phone'] = 'Неверный номер';
			}
			if ($errors == false) {
				$result = One::register($name, $phone);
				if ($result) {
					$success = "Forma uspeshno otpravleno";
				}
			}
		}
		require_once (ROOT.'/views/site/index_uz.php');
		return true;
	}
	public function actionAbout_uz()
	{
		require_once (ROOT.'/views/site/about-us_uz.php');
		return true;
	}
	public function actionCourses_uz()
	{
		$courses = array();
		$courses = One::getAllCourses();
		require_once (ROOT.'/views/site/courses_uz.php');
		return true;
	}
	public function actionBlogs_uz()
	{
		$blogs = array();
		$blogs = One::getAllBlogs();
		require_once (ROOT.'/views/site/blogs.php');
		return true;
	}
	public function actionCourse_view_uz($id)
	{
		$coursePlan = array();
		$coursePlan = One::getCoursePlan($id);
		$courseView = array();
		$courseView = One::getCourse($id);
		require_once (ROOT.'/views/site/html-css_uz.php');
		return true;
	}
	public function actionBlog_view_uz($id)
	{
		$blogView = array();
		$blogView = One::getBlog($id);
		// print_r($blogView);
		require_once (ROOT.'/views/site/blog_uz.php');
		return true;
	}
	public function actionCarera_uz()
	{
		if (isset($_POST['submit'])) {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$yourself = $_POST['message'];

			$errors = false;
			if (strlen($name) == '') {
				$errors['name'] = 'Имя не должно быть короче 3-х символов';
			}
			if (strlen($email) == '') {
				$errors['email'] = 'Введите валидный email';
			}
			if (strlen($phone) != 17 ) {
				$errors['phone'] = 'Неверный номер';
			}
			// if (!isset($_POST['file']) && empty($_POST['file'])) {
			// 	$errors['file'] = 'Резюме';
			// }
			if ($errors == false) {

				$theme = false;
				$message = false;
				$id = One::registerWithResume($name, $phone, $email, $yourself, $theme, $message);
				if ($id) {
                    // Проверим, загружалось ли через форму изображение
                    if (is_uploaded_file($_FILES["file"]["tmp_name"])) {
                        // Если загружалось, переместим его в нужную папке, дадим новое имя
                        move_uploaded_file($_FILES["file"]["tmp_name"], ROOT."/temolate/assets/img/{$id}.docs");
                    }

                };
			}
		}
		require_once (ROOT.'/views/site/carera_uz.php');
		return true;
	}
	public function actionContacts_uz()
	{
		if (isset($_POST['submit'])) {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$theme = $_POST['theme'];
			$message = $_POST['message'];

			$errors = false;
			if (strlen($name) == '') {
				$errors['name'] = 'Имя не должно быть короче 3-х символов';
			}
			if (strlen($email) == '') {
				$errors['email'] = 'Введите валидный email';
			}
			if (strlen($message) == '') {
				$errors['message'] = 'Поле обязательно к заполнению';
			}
			if ($errors == false) {
				$phone = false;
				$yourself = false;
				$result = One::register($name, $phone, $email, $yourself, $theme, $message);
			}
		}
		require_once (ROOT.'/views/site/contacts_uz.php');
		return true;
	}

}

?>