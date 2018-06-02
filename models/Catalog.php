<?php


class Catalog extends BasicModel
{
    public $tableName = 'Model';

    public function getModelByIdCategory($id){
        $id = (int)$id;
        $sql = "SELECT * FROM $this->tableName WHERE id_category = $id";
        return $this->dbo->query($sql)->fetchAll(PDO::FETCH_CLASS);
    }
    public function getCategoryById($id){
        $sql = "SELECT * FROM Category WHERE id = $id";
        return $this->dbo->query($sql)->fetchObject();
    }
    public function getModels($id_category){
        $sql = "SELECT t.id, t.title, t.img, t.description FROM 
        $this->tableName t JOIN Category c ON t.id_category = c.id";
        if($id_category != null){
            $id_category = (int)$id_category;
            $sql = $sql . " WHERE c.id = $id_category";
        }
        $sql = $sql . " ORDER BY c.id";
        return $this->dbo->query($sql)->fetchAll(PDO::FETCH_CLASS);
    }




}