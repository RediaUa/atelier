<?php
require_once ROOT.'/models/Catalog.php';


class SiteController
{
    public function actionIndex(){

        require_once ROOT."/views/site/index.php";
        return true;
    }

    public function actionCatalog($id_category){
        $catalog = new Catalog();
        $id_category = (int)$id_category;
        $models = $catalog->getModelByIdCategory($id_category);
        $category = $catalog->getCategoryById($id_category);
        require_once ROOT."/views/site/catalog.php";
        return true;
    }


}