<?php
/**
 * Created by PhpStorm.
 * User: temka
 * Date: 28.05.18
 * Time: 11:19
 */
require_once ROOT.'/models/Order_Service.php';
class AdminController
{
    public function actionIndex(){
        require_once ROOT.'/views/admin/index.php';
        return true;
    }

    public function actionOrderService(){
        $order_service = new Order_Service();
        $orders = $order_service->getOrders();
        require_once ROOT.'/views/admin/services.php';
        return true;
    }
    public function actionApplyOrder($id){
        $order_service = new Order_Service();
        $status = 0;
        if(isset($_POST['submit'])){
            if(isset($_POST['status'])){
                $status = $_POST['status'];
            }
            $result = $order_service->applyOrder($id, $_POST['price'], $status);
        }
        $order = $order_service->getOrder($id);
        require_once ROOT.'/views/admin/order.php';
        return true;
}

}