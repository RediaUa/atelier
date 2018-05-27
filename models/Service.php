<?php


class Service extends  BasicModel
{
    public $tableName = 'Services';
    private $title;
    public  function getServices(){
        return $this->dbo->query("SELECT * FROM $this->tableName")->fetchAll(PDO::FETCH_CLASS);
    }


}