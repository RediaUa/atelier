<?php
include_once ROOT.'/models/File.php';
include_once ROOT . '/models/Order_Service.php';
include_once ROOT.'/models/Service.php';
class ServiceController
{
    public function actionService(){
        require_once ROOT."/views/site/services.php";
        return true;
    }

    public function actionOrderService(){
        $result = null;
        $errors = [];
        $serviceObject = new Service();
        $services = $serviceObject->getServices();

        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $phone = $_POST['phone'];
            $desc = $_POST['description'];
            $img = $_FILES['image'];
            $id_service = $_POST['service'];

            if(!empty($name) && !empty($surname) && !empty($phone) && !empty($desc) && !empty($img)){
                $file = new File($img);
                if($file->upload()){
                    $order = new Order_Service($name, $surname, $phone,
                        $desc, $file->getPath(), $id_service);

                    $result =  $order->save();
                }
                else{
                    $errors[] = 'Файл не загружен! Попробуйте еще раз';
                }
            }
            else{
                $errors[] = 'Заполните все поля';
            }

        }


        require_once ROOT."/views/site/order_service.php";
        return true;
    }


}