<?php
/**
 * Created by PhpStorm.
 * User: temka
 * Date: 25.05.18
 * Time: 20:24
 */



class File extends BasicModel
{
    const filePath = 'uploads/user_image_order_service/';
    private $tmp_name;
    private $error;
    private $type;
    public $path;
    public function __construct(array $file)
    {
        parent::__construct();
        $this->type = $file['type'];
        $this->tmp_name = $file['tmp_name'];
        $this->error = $file['error'];
        $this->path = self::filePath . uniqid() . md5($_SERVER['REQUEST_TIME']);
    }
    private function checkError(){
        var_dump($this->dbo);
        return !$this->error;
    }
    public function upload(){
        if($this->checkError()){
            return   move_uploaded_file($this->tmp_name, $this->path);
        }

        echo'error';
        return false;
    }
    public function save(){


    }
}