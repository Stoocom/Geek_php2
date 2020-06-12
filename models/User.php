<?php 
namespace models;
class User extends Model
{
    public $id;
    public $login;
    public $password;
    public $email;

    protected $tableName = "users";

    public function getTableName(): string {
        return "users";
    }
}
?>