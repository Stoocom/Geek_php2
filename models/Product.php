<?php 
namespace models;

class Product extends Model
{
    protected $id; 
    protected $name;
    protected $description;
    protected $price;
    protected $category_id = 1;

    protected $tableName = "products";

    public function getTableName(): string {
        return "products";
    }

    public function getCategoryId() {
        return $this->category_id;
    }
    public function setCategoryId($category_id) {
        $this->category_id = $category_id;
        return $this;
    }


}
?>