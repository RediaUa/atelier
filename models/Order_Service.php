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

    public function __construct($name = null, $surname = null, $phone = null, $description = null,  $file_path = null, $id_service = null)
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
public  function getOrders(){
        $sql = "SELECT o.id, o.name, o.surname, o.phone, o.date, s.title, o.status FROM $this->tableName o JOIN Services s ON o.id_service = s.id;";
        $result = $this->dbo->query($sql)->fetchAll(PDO::FETCH_CLASS);
    if ($result){
        return $result;
    }
    return false;
}
public function getOrder($id){
    $sql = "SELECT * FROM $this->tableName WHERE id = $id;";
    $result = $this->dbo->query($sql)->fetchObject();
    if ($result){
        return $result;
    }
    return false;
}
public function applyOrder($id, $price, $status){
        $sql = "UPDATE $this->tableName SET price = $price, status = $status WHERE id = $id;";
        $result = $this->dbo->query($sql);
        return $result;
}
}