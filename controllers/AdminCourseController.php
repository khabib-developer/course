<?php 

/**
 */
class AdminCourseController extends AdminBase
{
	
	public function actionIndex() 
	{
		self::checkAdmin();

		$coursesList = One::getAllCourses();

		require_once (ROOT.'/views/admin_courses/index.php');
		return true;
	}
	public function actionCreate() 
	{
		self::checkAdmin();
		// $course = One::getCourse($id);
		// $plan = One::getCoursePlan($id);
		if (isset($_POST['submit'])) {
			$options['name'] = $_POST['name'];
			$options['title'] = $_POST['title'];
			$options['for_who'] = $_POST['for_who'];
			$options['short_content'] = $_POST['short_content'];
			$options['result'] = $_POST['result'];
			$options['content'] = $_POST['content'];
			$options['res'] = $_POST['res'];
			$options['plan'] = $_POST['plan'];
			$options['name_uz'] = $_POST['name_uz'];
			$options['title_uz'] = $_POST['title_uz'];
			$options['for_who_uz'] = $_POST['for_who_uz'];
			$options['short_content_uz'] = $_POST['short_content_uz'];
			$options['result_uz'] = $_POST['result_uz'];
			$options['content_uz'] = $_POST['content_uz'];
			$options['res_uz'] = $_POST['res_uz'];
			$options['plan_uz'] = $_POST['plan_uz'];
			$id = One::createCourse($options);
			if ($id) {
                    // Проверим, загружалось ли через форму изображение
                   if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        // Если загружалось, переместим его в нужную папке, дадим новое имя
                        move_uploaded_file($_FILES["image"]["tmp_name"], ROOT."/template/assets/img/course_{$id}.jpg");
                    }
            };
			header("Location: /admin/courses");	
		}
		require_once (ROOT.'/views/admin_courses/create.php');
		return true;
	}

	public function actionUpdate($id)
	{
		self::checkAdmin();
		$course = One::getCourse($id);
		$plan = One::getCoursePlan($id);
		if (isset($_POST['submit'])) {
			$options['name'] = $_POST['name'];
			$options['title'] = $_POST['title'];
			$options['for_who'] = $_POST['for_who'];
			$options['short_content'] = $_POST['short_content'];
			$options['result'] = $_POST['result'];
			$options['content'] = $_POST['content'];
			$options['res'] = $_POST['res'];
			$options['plan'] = $_POST['plan'];
			$options['name_uz'] = $_POST['name_uz'];
			$options['title_uz'] = $_POST['title_uz'];
			$options['for_who_uz'] = $_POST['for_who_uz'];
			$options['short_content_uz'] = $_POST['short_content_uz'];
			$options['result_uz'] = $_POST['result_uz'];
			$options['content_uz'] = $_POST['content_uz'];
			$options['res_uz'] = $_POST['res_uz'];
			$options['plan_uz'] = $_POST['plan_uz'];
			One::updateCourse($id,$options);

			// header("Location: /admin/courses");	
		}
		require_once (ROOT.'/views/admin_courses/update.php');
		return true;
	}

	public function actionDelete($id)
	{
		self::checkAdmin();
		if (isset($_POST['submit'])) {
			One::deleteCourseById($id);
			header("Location: /admin/courses");
		}
		require_once (ROOT.'/views/admin_courses/delete.php');
		return true;
	}
	
	public function actionUpdateTheme($id)
	{
		self::checkAdmin();
		$plan = One::getCoursePlan($id);
		if (isset($_POST['submit'])) {
			foreach ($plan as $plans) {
				$title[$plans['id']] = $_POST['name_'.$plans['id']];
				$title[$plans['id'].'_uz'] = $_POST['name_uz'.$plans['id']];
			}
			One::updateNewTheme($id, $title, $plan);		
		}
		require_once (ROOT.'/views/admin_courses/courseTheme.php');
		return true;
	}
	public function actionCreateTheme($id)
	{
		self::checkAdmin();
		$plan = One::getCoursePlan($id);
		if (isset($_POST['plus'])) {
			$new_theme = $_POST['new_theme'];
			$new_theme_uz = $_POST['new_theme_uz'];
			One::createNewTheme($id, $new_theme, $new_theme_uz);
		}
		require_once (ROOT.'/views/admin_courses/createNewTheme.php');
		return true;
	}
	public function actionDeleteTheme($id)
	{
		self::checkAdmin();
		if (isset($_POST['submit'])) {
			One::deleteThemeById($id);
			header("Location: /admin/courses");
		}
		require_once (ROOT.'/views/admin_courses/deleteTheme.php');
		return true;
	}
	
}









?>