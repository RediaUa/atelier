<?php
require_once ROOT.'/models/File.php';
require_once ROOT.'/models/Order_Service.php';
require_once ROOT.'/models/Model.php';
require_once ROOT.'/models/Catalog.php';
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
                $errors[] = 'Потрібно встановити ціну!';
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
public function actionCatalog($category = null, $id = null){
        if($id != null){
            $model = new Model();
            $resultOfDelete = $model->delete($id);
            if($resultOfDelete){
                if($category != 0){
                    header("Location: /admin/catalog/$category");
                }
                else{
                    header("Location: /admin/catalog");
                }
            }
            else{
                echo "Помилка видалення!";
            }

        }
    $catalog = new Catalog();
    $models = $catalog->getModels($category);
    require_once ROOT.'/views/admin/catalog.php';
    return true;
}

public function actionAddModel($id_category){
        $id_category = (int)$id_category;
        if(isset($_POST['submit'])){
            $title = $_POST['title'];
            $desc = $_POST['desc'];
            $img = $_FILES['image'];

            if(!empty($title) && !empty($desc) && !empty($img)){
                $file = new File($img);
                if($file->upload()){
                    $model = new Model($title, $desc, $file->getPath(), $id_category);
                    $result = $model->save();
                }
                else{
                    $errors[] = 'Зображення не загружене! Спробуйте ще раз';
                }
            }
            else{
                $errors[] = 'Заповніть всі поля';
            }

        }

        require_once ROOT.'/views/admin/addModel.php';
        return true;


}

}