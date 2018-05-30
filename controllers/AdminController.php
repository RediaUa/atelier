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
        $status = false;
       if(isset($_POST['status'])){
           if($_POST['status'] == 'false'){
               $status = false;
           }
           else if($_POST['status'] == 'true'){
               $status = true;
           }
       }
        $orders = $order_service->getOrders($status);
        require_once ROOT.'/views/admin/services.php';
        return true;
    }

    public function actionApplyOrder($id){
        $order_service = new Order_Service();
        $status = 0;;
        $errors = [];
        if(isset($_POST['submit'])){
            if($_POST['price'] == '' || null){
                $errors[] = 'Установите цену!';
            }
            else if(isset($_POST['status'])){
                $status = $_POST['status'];
            }
            if(empty($errors)){
                $result = $order_service->applyOrder($id, $_POST['price'], $status);
            }
        }
        $order = $order_service->getOrder($id);
        require_once ROOT.'/views/admin/order.php';
        return true;
}

}