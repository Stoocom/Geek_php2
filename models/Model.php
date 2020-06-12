<?php 
namespace models;

use services\Db;
use interfaces\ModelInterfaces;

abstract class Model implements ModelInterfaces
{
    protected $tableName;

    protected $db = null;

    public function __construct() {
        $this->db = new Db(); 
    }
    public function getById(int $id): array {

    }
    // public function getById(int $id) {
    //     $sql = "SELECT * FROM {$this->$tableName} WHERE id = {$id}";
    //     return $this->db->queryOne($sql);
    // }

    public function getAll() {
        $sql = "SELECT * FROM {$this->$tableName}";
        return $this->db->queryAll($sql);
    }

}

?>