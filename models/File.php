<?php


require_once ROOT.'/models/BasicModel.php';
class File
{
    const filePath = 'uploads/user_image_order_service/';
    private $tmp_name;
    private $error;
    private $type;
    private $path;
    public function __construct(array $file)
    {
        $this->type = $file['type'];
        $this->tmp_name = $file['tmp_name'];
        $this->error = $file['error'];
        $this->path = self::filePath . uniqid() . md5($_SERVER['REQUEST_TIME']);
    }
    private function checkError(){
        return !$this->error;
    }
    public function upload(){
        if($this->checkError()){
            return   move_uploaded_file($this->tmp_name, $this->path);
        }

        return false;
    }
    public function getPath(){
        return $this->path;
    }
}