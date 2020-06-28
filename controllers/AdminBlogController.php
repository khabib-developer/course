<?php 

class AdminBlogController extends AdminBase 
{
	public function actionIndex() 
	{
		self::checkAdmin();

		$blogList = One::getAllBlogs();

		require_once (ROOT.'/views/admin_blogs/index.php');
		return true;
	}
	public function actionDelete($id)
	{
		self::checkAdmin();

		if (isset($_POST['submit'])) {
			One::deleteBlogById($id);
			header("Location: /admin/blogs");
		}

		require_once (ROOT.'/views/admin_blogs/delete.php');
		return true;
	} 
	public function actionCreate() 
	{
		 // Проверка доступа
        self::checkAdmin();

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $options['title'] = $_POST['title'];
            $options['title_uz'] = $_POST['title_uz'];
			$options['short_content'] = $_POST['short_content'];
			$options['short_content_uz'] = $_POST['short_content_uz'];
			$options['content'] = $_POST['content'];
			$options['content_uz'] = $_POST['content_uz'];

            // Флаг ошибок в форме
            $errors = false;

            // При необходимости можно валидировать значения нужным образом
            if (!isset($options['title']) && empty($options['title'])) {
                $errors[] = 'Заполните поля';
            }

            if ($errors == false) {
                // Если ошибок нет
                // Добавляем новый товар
                $id = One::createBlog($options);
                // Если запись добавлена
                if ($id) {
                    // Проверим, загружалось ли через форму изображение
                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        // Если загружалось, переместим его в нужную папке, дадим новое имя
                        move_uploaded_file($_FILES["image"]["tmp_name"], ROOT."/template/assets/img/blog_{$id}.jpg");
                    }
                };
                // Перенаправляем пользователя на страницу управлениями товарами
                header("Location: /admin/blogs");
            }
        }

        // Подключаем вид
        require_once(ROOT.'/views/admin_blogs/create.php');
        return true;
	}
	public function actionUpdate($id) 
	{
		self::checkAdmin();	
		$blog = One::getBlog($id);
		if (isset($_POST['submit'])) {
			$options['title'] = $_POST['title'];
			$options['short_content'] = $_POST['short_content'];
			$options['content'] = $_POST['content'];
			$options['title_uz'] = $_POST['title_uz'];
			$options['short_content_uz'] = $_POST['short_content_uz'];
			$options['content_uz'] = $_POST['content_uz'];
			One::updateBlogById($id, $options);
			// if () {
			// 	if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
			// 			move_uploaded_file($_FILES["image"]["tmp_name"], ROOT."/temolate/assets/img/blog_{$id}.jpg");
			// 	}
			// 	header("Location: /admin/blogs");
			// }

			
		}
		require_once (ROOT.'/views/admin_blogs/update.php');
		return true;
	}











}






?>