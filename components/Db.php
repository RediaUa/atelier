<?php
namespace components;

class Db
{
    protected $connection = null;
    protected $statement = null;

  public function __construct(array $params)
  {
      $this->connection = new \PDO($params['dsn'], $params['user'], $params['password']);

  }
    public function setQuery($sql) {
        if($this->connection){
            $this->statement = $this->connection->query($sql);
        }

        return $this;
    }

    /**
     * Get result
     *
     * @param   Target object
     *
     * @return  Object
     */
    public function getResult(&$target) {

        if($this->statement){
            $this->statement->setFetchMode( \PDO::FETCH_INTO, $target );
            $result = $this->statement->fetch( \PDO::FETCH_INTO );
        } else {
            $result = null;
        }

        return $result;
    }

    /**
     * Get results
     *
     * @param string    Class name
     *
     * @return array
     */
    public function getList($targetClass = '\stdClass') {

        if($this->statement){
            $this->statement->setFetchMode( \PDO::FETCH_CLASS, $targetClass);
            $result = $this->statement->fetchAll(\PDO::FETCH_CLASS);
        } else {
            $result = [];
        }

        return $result;
    }
}