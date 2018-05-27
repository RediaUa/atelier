<?php
use components\Db;

abstract class BasicModel
{
    /**
     * Basic Model Class
     * @package Mindk\Framework\Models

    /**
     * @var string  DB Table name
     */
    protected $tableName = '';

    /**
     * @var string  DB Table primary key
     */
    protected $primaryKey = 'id';

    /**
     * @var null
     */
    protected $dbo = null;

    /**
     * Model constructor.

     */
    public function __construct()
    {
        $params = require_once ROOT.'/config/db_params.php';
        $this->dbo = Db::getInstance($params);
    }


}

