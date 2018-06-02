<?php


class Model extends BasicModel
{
    protected $tableName = 'Model';
    protected $title;
    protected $desc;
    protected $img;
    protected $id_category;
    public function __construct($title = null, $desc = null, $img = null, $id_category = null)
    {
        parent::__construct();
        $this->id_category = $id_category;
        $this->title = $title;
        $this->desc = $desc;
        $this->img = $img;
    }

    public function save()
    {
        $sql = "INSERT INTO $this->tableName (title, id_category, img, description)
       VALUES ('$this->title', '$this->id_category',
       '$this->img', '$this->desc');";
        $result =  $this->dbo->query($sql);
        if ($result){
            return true;
        }
        return false;

    }
    public function delete($id){
        $sql = "DELETE FROM $this->tableName WHERE id = id";
        $result =  $this->dbo->query($sql);
        if ($result){
            return true;
        }
        return false;
    }
}