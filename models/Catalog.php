<?php
/**
 * Created by PhpStorm.
 * User: temka
 * Date: 02.06.18
 * Time: 13:32
 */

class Catalog extends BasicModel
{
    public $tableName = 'Model';

    public function getModelByIdCategory($id){
        $sql = "SELECT * FROM $this->tableName WHERE id_category = $id";
        return $this->dbo->query($sql)->fetchAll(PDO::FETCH_CLASS);
    }
    public function getCategoryById($id){
        $sql = "SELECT * FROM Category WHERE id = $id";
        return $this->dbo->query($sql)->fetchObject();
    }




}