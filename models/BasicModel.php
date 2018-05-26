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
        $this->dbo = new Db(require_once ROOT.'/config/db_params.php');
    }

    /**
     * Create new record
     */
    public function create( $data ) {
        //@TODO: Implement this
    }

    /**
     * Read record
     *
     * @param   int Record ID
     *
     * @return  object
     */
    public function load( $id ) {
        $sql = 'SELECT * FROM `' . $this->tableName .
            '` WHERE `'.$this->primaryKey.'`='.(int)$id; //!

        return $this->dbo->setQuery($sql)->getResult($this);
    }

    /**
     * Save record state to db
     *
     * @return bool
     */
    public function save() {
        //@TODO: Implement this
    }

    /**
     * Delete record from DB
     */
    public function delete() {
        //@TODO: Implement this
    }

    /**
     * Get list of records
     *
     * @return array
     */
    public function getList() {
        $sql = 'SELECT * FROM `' . $this->tableName . '`';

        return $this->dbo->setQuery($sql)->getList(get_class($this));
    }
}

