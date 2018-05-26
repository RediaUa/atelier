<?php

include ROOT.'/models/File.php';

class SiteController
{
    public function actionIndex(){

        require_once ROOT."/views/site/index.php";
        return true;
    }
    public function actionService(){
        require_once ROOT."/views/site/services.php";
        return true;
    }
    public function actionOrderService(){
        require_once ROOT."/views/site/order_service.php";
        return true;
    }

    public function  actionCreateOrderService(){
        $file = new File($_FILES['image']);
        if($file->upload()){
           //делаем запрос
        }
        return true;
    }

}