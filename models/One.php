<?php 

class One {
	public static function getAllCourses()
	{

		$db = Db::getConnection();

		$courseList=array();

		$result = $db->query('
			SELECT id, title, for_who, short_content, result, title_uz, for_who_uz, short_content_uz, result_uz  FROM courses 
			ORDER BY id ASC
			');
		$i=0;
		while ($row = $result->fetch()) {
			$courseList[$i]['id']=$row['id'];
			$courseList[$i]['title']=$row['title'];
			$courseList[$i]['for_who']=$row['for_who'];
			$courseList[$i]['short_content']=$row['short_content'];
			$courseList[$i]['result']=$row['result'];
			$courseList[$i]['title_uz']=$row['title_uz'];
			$courseList[$i]['for_who_uz']=$row['for_who_uz'];
			$courseList[$i]['short_content_uz']=$row['short_content_uz'];
			$courseList[$i]['result_uz']=$row['result_uz'];
			$i++;
		}

		return $courseList;
	}
	public static function getAllBlogs() {
		$db = Db::getConnection();

		$blogList=array();

		$result = $db->query('
			SELECT id, title, short_content, content, title_uz, short_content_uz, content_uz FROM blogs ORDER	
			BY id ASC');
		$i=0;
		while ($row = $result->fetch()) {
			$blogList[$i]['id']=$row['id'];
			$blogList[$i]['title']=$row['title'];
			$blogList[$i]['short_content']=$row['short_content'];
			$blogList[$i]['content']=$row['content'];
			$blogList[$i]['title_uz']=$row['title_uz'];
			$blogList[$i]['short_content_uz']=$row['short_content_uz'];
			$blogList[$i]['content_uz']=$row['content_uz'];
			$i++;
		}
		return $blogList;
	}

	public static function getBlog($id) {
		$id=intval($id);

		if ($id) {
			$db=Db::getConnection();

			$result = $db->query('SELECT * FROM blogs WHERE id='.$id);
			$result->setFetchMode(PDO::FETCH_ASSOC);

			return $result->fetch();
		}
	}

	public static function getCourse($id) {
		$id=intval($id);

		if ($id) {
			$db=Db::getConnection();

			$result = $db->query('SELECT * FROM courses WHERE id='.$id);
			$result->setFetchMode(PDO::FETCH_ASSOC);

			return $result->fetch();
		}
	}

	public static function getCoursePlan($id) {
		$id=intval($id);

		if ($id) {
			$db=Db::getConnection();
			$plansList = array();
			$result = $db->query("SELECT id, title, title_uz FROM course_plan WHERE course_id = '$id' ORDER BY id ASC");
			// $result->setFetchMode(PDO::FETCH_ASSOC);
			$i=0;
			while ($row=$result->fetch()) {
				$plansList[$i]['id'] = $row['id'];
				$plansList[$i]['title'] = $row['title'];
				$plansList[$i]['title_uz'] = $row['title_uz'];
				$i++;
			}
			return $plansList;
		}
	}
	
	public static function getImage($id)
 	{
 		$noImage = 'bussine.jpg';
 		$path = '/template/assets/img/';
 		$pathToProductImage = $path.'blog_'.$id.'.jpg';
 		// if (file_exists($_SERVER['DOCUMENT_ROOT'].$pathToProductImage)) {
 		if (file_exists(ROOT.$pathToProductImage)) {
 			return $pathToProductImage;
 		}
 		return $path.$noImage;
 	}
 	public static function getCourseImage($id)
 	{
 		$noImage = 'pngguru.com.png';
 		$path = '/template/assets/img/';
 		$pathToProductImage = $path.'course_'.$id.'.png';
 		// if (file_exists($_SERVER['DOCUMENT_ROOT'].$pathToProductImage)) {
 		if (file_exists(ROOT.$pathToProductImage)) {
 			return $pathToProductImage;
 		}
 		return $path.$noImage;
 	}
	public static function register($name, $phone = false, $email = false, $yourself = false, $theme = false, $message = false) {
		$db = Db::getConnection();
		$sql='INSERT INTO client (name, phone, email, yourself, theme, message) VALUES (:name, :phone, :email, :yourself, :theme, :message)';
		$result = $db->prepare($sql);
		$result->bindParam(':name', $name, PDO::PARAM_STR);
		$result->bindParam(':phone', $phone, PDO::PARAM_STR);
		$result->bindParam(':email', $email, PDO::PARAM_STR);
		$result->bindParam(':yourself', $yourself, PDO::PARAM_STR);
		$result->bindParam(':theme', $theme, PDO::PARAM_STR);
		$result->bindParam(':message', $message, PDO::PARAM_STR);
		return $result->execute();
	}
	public static function registerWithResume($name, $phone = false, $email = false, $yourself = false, $theme = false, $message = false) {
		$db = Db::getConnection();
		$sql='INSERT INTO client (name, phone, email, yourself, theme, message) VALUES (:name, :phone, :email, :yourself, :theme, :message)';
		$result = $db->prepare($sql);
		$result->bindParam(':name', $name, PDO::PARAM_STR);
		$result->bindParam(':phone', $phone, PDO::PARAM_STR);
		$result->bindParam(':email', $email, PDO::PARAM_STR);
		$result->bindParam(':yourself', $yourself, PDO::PARAM_STR);
		$result->bindParam(':theme', $theme, PDO::PARAM_STR);
		$result->bindParam(':message', $message, PDO::PARAM_STR);
		if ($result->execute()) {
			return $db->lastInsertId();
		}
		return 0;
	}
	/*****************************ADmin_panel************************************/
	public static function checkUserData($login, $password) {
		$db = Db::getConnection();
		$sql = 'SELECT * FROM admins WHERE login = :login AND password ='.$password;
		$result = $db->prepare($sql);
		$result->bindParam(':login', $login, PDO::PARAM_INT);
		// $result->bindParam(':password', $password, PDO::PARAM_INT);
		$result->execute();
		$user = $result->fetch();
		// echo $login.' '.$password;
		if ($user) {
			return $user['id'];
		}
		return false;
	}
	public static function auth($userId) {
		$_SESSION['user']=$userId;
	}
	public static function checkLogged() {
		if (isset($_SESSION['user'])) {
			return $_SESSION['user'];
		}
		header("Location: /login/");
	}
	public static function getUserById($id) {
		if ($id) {
			$db=Db::getConnection();
			$sql='SELECT * FROM admins WHERE id = :id';
			$result=$db->prepare($sql);
			$result->bindParam(':id',$id,PDO::PARAM_INT);
			$result->setFetchMode(PDO::FETCH_ASSOC);
			$result->execute();

			return $result->fetch();
		}
	}
	public static function getOrdersList()
    {
        $db=Db::getConnection();
        $result = $db->query('SELECT id, name, phone, email, yourself, theme, message FROM client ORDER BY id DESC');
        $ordersList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $ordersList[$i]['id'] = $row['id'];
            $ordersList[$i]['name'] = $row['name'];
            $ordersList[$i]['phone'] = $row['phone'];
            $ordersList[$i]['email'] = $row['email'];
            $ordersList[$i]['yourself'] = $row['yourself'];
            $ordersList[$i]['theme'] = $row['theme'];
            $ordersList[$i]['message'] = $row['message'];
            $i++;
        }
        return $ordersList;
    }
    public static function createBlog($options)
 	{
 		// Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO blogs '
                . '(title, short_content, content, title_uz, short_content_uz, content_uz)'
                . 'VALUES '
                . '(:title, :short_content, :content, :title_uz, :short_content_uz, :content_uz)';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
        $result->bindParam(':short_content', $options['short_content'], PDO::PARAM_STR);
        $result->bindParam(':content', $options['content'], PDO::PARAM_STR);
        $result->bindParam(':title_uz', $options['title_uz'], PDO::PARAM_STR);
        $result->bindParam(':short_content_uz', $options['short_content_uz'], PDO::PARAM_STR);
        $result->bindParam(':content_uz', $options['content_uz'], PDO::PARAM_STR);
        if ($result->execute()) {
            // Если запрос выполенен успешно, возвращаем id добавленной записи
            return $db->lastInsertId();
        }
        // Иначе возвращаем 0
        return 0;
 	}

 	public static function deleteBlogById($id)
	{
		$db = Db::getConnection();
		$sql = 'DELETE FROM blogs WHERE id=:id';

		$result = $db->prepare($sql);
		$result->bindParam('id',$id,PDO::PARAM_INT);
		return $result->execute();
	}
	public static function updateBlogById($id, $options)
	{
 		// Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = "UPDATE blogs
            SET 
                title = :title, 
                short_content = :short_content, 
                content = :content, 
                title_uz = :title_uz, 
                short_content_uz = :short_content_uz, 
                content_uz = :content_uz
            WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
        $result->bindParam(':short_content', $options['short_content'], PDO::PARAM_STR);
        $result->bindParam(':content', $options['content'], PDO::PARAM_STR);
        $result->bindParam(':title_uz', $options['title_uz'], PDO::PARAM_STR);
        $result->bindParam(':short_content_uz', $options['short_content_uz'], PDO::PARAM_STR);
        $result->bindParam(':content_uz', $options['content_uz'], PDO::PARAM_STR);	
        return $result->execute();
 	}
 	public static function getOrderById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM client WHERE id = '.$id;

        $result = $db->prepare($sql);
       	$result->bindParam(':id', $id, PDO::PARAM_INT);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполняем запрос
        $result->execute();
        // Возвращаем данные
        return $result->fetch();
    }
    public static function getClientImage($id)
 	{
 		$noImage = 'courses.jpg';
 		$path = '/template/assets/img/';
 		$pathToProductImage = $path.$id.'.jpg';
 		// if (file_exists($_SERVER['DOCUMENT_ROOT'].$pathToProductImage)) {
 		if (file_exists(ROOT.$pathToProductImage)) {
 			return $pathToProductImage;
 		}
 		return $path.$noImage;
 	}
 	public static function deleteOrderById($id)
    {
        $db = Db::getConnection();
        $sql = 'DELETE FROM client WHERE id=:id';

        $result = $db->prepare($sql);
        $result->bindParam('id',$id,PDO::PARAM_INT);
        return $result->execute();
    }
    public static function updateCourse($id,$options)
 	{
 		// Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = 'UPDATE courses SET
                title = :title, 
                for_who = :for_who,
                short_content = :short_content, 
                result = :result, 
                content = :content,
                res = :res, 
                plan = :plan,  
                name = :name,
                title_uz = :title_uz, 
                for_who_uz = :for_who_uz,
                short_content_uz = :short_content_uz, 
                result_uz = :result_uz, 
                content_uz = :content_uz,
                res_uz = :res_uz, 
                plan_uz = :plan_uz,  
                name_uz = :name_uz
                WHERE id = :id';
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id',$id, PDO::PARAM_INT);
        $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
        $result->bindParam(':for_who', $options['for_who'], PDO::PARAM_STR);
        $result->bindParam(':short_content', $options['short_content'], PDO::PARAM_STR);
        $result->bindParam(':result', $options['result'], PDO::PARAM_STR);
        $result->bindParam(':content', $options['content'], PDO::PARAM_STR);
        $result->bindParam(':res', $options['res'], PDO::PARAM_STR);
        $result->bindParam(':plan', $options['plan'], PDO::PARAM_STR);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':title_uz', $options['title_uz'], PDO::PARAM_STR);
        $result->bindParam(':for_who_uz', $options['for_who_uz'], PDO::PARAM_STR);
        $result->bindParam(':short_content_uz', $options['short_content_uz'], PDO::PARAM_STR);
        $result->bindParam(':result_uz', $options['result_uz'], PDO::PARAM_STR);
        $result->bindParam(':content_uz', $options['content_uz'], PDO::PARAM_STR);
        $result->bindParam(':res_uz', $options['res_uz'], PDO::PARAM_STR);
        $result->bindParam(':plan_uz', $options['plan_uz'], PDO::PARAM_STR);
        $result->bindParam(':name_uz', $options['name_uz'], PDO::PARAM_STR);
        return $result->execute();
       
 	}

 	public static function updateNewTheme($id, $title, $plan) {
		$db = Db::getConnection();
		foreach ($plan as $plans) {
			$sql = 'UPDATE course_plan SET title = :title, title_uz = :title_uz WHERE id = :id';
			$result = $db->prepare($sql);
			$result->bindParam(':id',$plans['id'], PDO::PARAM_INT);
       	 	$result->bindParam(':title', $title[$plans['id']], PDO::PARAM_STR);
       	 	$result->bindParam(':title_uz', $title[$plans['id'].'_uz'], PDO::PARAM_STR);
       	 	$result->execute();
		}
	}
	public static function createNewTheme($id, $new_theme, $new_theme_uz) {
		$db = Db::getConnection();
		$sql = 'INSERT INTO course_plan (course_id, title, title_uz) VALUES (:course_id, :title, :title_uz)';
		$result = $db->prepare($sql);
		$result->bindParam(':course_id', $id, PDO::PARAM_INT);
        $result->bindParam(':title', $new_theme, PDO::PARAM_STR);
        $result->bindParam(':title_uz', $new_theme_uz, PDO::PARAM_STR);
        return $result->execute();
	}
 	public static function createCourse($options)
 	{
 		// Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = 'INSERT INTO courses (title, for_who, short_content, result, content, res, plan, name, title_uz, for_who_uz, short_content_uz, result_uz, content_uz, res_uz, plan_uz, name_uz) VALUES(:title, :for_who, :short_content, :result, :content, :res, :plan, :name, :title_uz, :for_who_uz, :short_content_uz, :result_uz, :content_uz, :res_uz, :plan_uz, :name_uz)';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
        $result->bindParam(':for_who', $options['for_who'], PDO::PARAM_STR);
        $result->bindParam(':short_content', $options['short_content'], PDO::PARAM_STR);
        $result->bindParam(':result', $options['result'], PDO::PARAM_STR);
        $result->bindParam(':content', $options['content'], PDO::PARAM_STR);
        $result->bindParam(':res', $options['res'], PDO::PARAM_STR);
        $result->bindParam(':plan', $options['plan'], PDO::PARAM_STR);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':title_uz', $options['title_uz'], PDO::PARAM_STR);
        $result->bindParam(':for_who_uz', $options['for_who_uz'], PDO::PARAM_STR);
        $result->bindParam(':short_content_uz', $options['short_content_uz'], PDO::PARAM_STR);
        $result->bindParam(':result_uz', $options['result_uz'], PDO::PARAM_STR);
        $result->bindParam(':content_uz', $options['content_uz'], PDO::PARAM_STR);
        $result->bindParam(':res_uz', $options['res_uz'], PDO::PARAM_STR);
        $result->bindParam(':plan_uz', $options['plan_uz'], PDO::PARAM_STR);
        $result->bindParam(':name_uz', $options['name_uz'], PDO::PARAM_STR);
       	if ($result->execute()) {
            // Если запрос выполенен успешно, возвращаем id добавленной записи
            return $db->lastInsertId();
        }
        // Иначе возвращаем 0
        return 0;
 	}

 	public static function deleteCourseById($id)
	{
		$db = Db::getConnection();
		$sql = 'DELETE FROM courses WHERE id=:id';
		$result = $db->prepare($sql);
		$result->bindParam('id',$id,PDO::PARAM_INT);
		return $result->execute();
	}
	public static function deleteThemeById($id)
	{
		$db = Db::getConnection();
		$sql = 'DELETE FROM course_plan WHERE id=:id';
		$result = $db->prepare($sql);
		$result->bindParam('id',$id,PDO::PARAM_INT);
		return $result->execute();
	}

}


 ?>