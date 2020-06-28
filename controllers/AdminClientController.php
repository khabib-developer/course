<?php 

class AdminClientController extends AdminBase
{
	public function actionIndex()
    {
        // Проверка доступа
        self::checkAdmin();

        // Получаем список заказов
        $ordersList = One::getOrdersList();

        // Подключаем вид
        require_once(ROOT.'/views/admin_clients/index.php');
        return true;
    }
    public function actionView($id)
    {
    	   // Проверка доступа
        self::checkAdmin();

        // Получаем данные о конкретном заказе
        $orders = One::getOrderById($id);
        // Подключаем вид
        require_once(ROOT.'/views/admin_clients/view.php');
        return true;
    }
    public function actionDelete($id)
    {
    	self::checkAdmin();
    	if (isset($_POST['submit'])) {
    		One::deleteOrderById($id);
    		header("Location: /admin/clients");
    	}
    	require_once(ROOT.'/views/admin_clients/delete.php');
        return true;
    }



}







?>