<?php
namespace components;

class Db
{
    protected static $connection = null;

    static function getInstance($params){
      if(!isset(self::$connection)){
          self::$connection = new \PDO($params['dsn'], $params['user'], $params['password']);
      }
      return self::$connection;
  }
}