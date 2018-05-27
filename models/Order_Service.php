<?php
require_once ROOT.'/models/BasicModel.php';

class Order_Service extends BasicModel
{
    protected $tableName = 'Order_Service';
    private $name;
    private $surname;
    private $phone;
    private $description;
    private $file_path;
    private $date;
    private $id_service;

    public function __construct($name, $surname, $phone, $description,  $file_path, $id_service)
    {
        parent::__construct();
        $this->name = $name;
        $this->surname = $surname;
        $this->phone = $phone;
        $this->description = $description;
        $this->file_path = $file_path;
        $this->id_service = $id_service;
    }
    public function save()
{
      $sql = "INSERT INTO $this->tableName (name, surname, phone, description, img, id_service)
       VALUES ('$this->name', '$this->surname',
       '$this->phone', '$this->description', '$this->file_path', '$this->id_service');";
        $result =  $this->dbo->query($sql);
        if ($result){
            return true;
        }
        return false;

}

}