<pre>
<?php 


interface ProductInterfaces

{
    public function getById(int $id): array;
    public function displayPreview();
    public function addToBasket();
}

abstract class Product implements ProductInterfaces
{
    public $id;
    public $name;
    public $discription;
    public $brend;
    public $pricePerOne;
    protected $category;
    public $countryOfProduce;
    public $pathSmallImage;

    public function displayPreview() {
        return "<div>
            <h1>$this->name</h1>ß
            <p>$this->discription</p>
            <img src='$this->pathSmallImage'>
            <p>$this->pathUrlSmall</p>
        </div>";
    }

    public function __construct( $id, $name, $discription, $brend, $pricePerOne, $category, $countryOfProduce, $pathSmallImage ){
        $this->id = $id;
        $this->name = $name;
        $this->discription = $discription;
        $this->brend = $brend;
        $this->pricePerOne = $pricePerOne;
        $this->category = $category;
        $this->countryOfProduce = $countryOfProduce;
        $this->pathSmallImage = $pathSmallImage;
    }
        
    public function addToBasket($id) {
        $basketArray['arrayOfIdProductsWithCounts'] = [$id => 0];
        $basketArray['arrayOfIdProductsWithCounts'][$id]++;  
    } 
    public function getById(int $id): array {
        $sql = "SELECT * FROM {$this->$tableName} WHERE id = {$id}";
        return $this->db->queryOne($sql);
    }

}

class Moto extends Product
{
    public $id;
    public $login;
    public $password;
    public $email;

    protected $category = "motocycles";

    public function getTableName(): string {
        return "motocycles";
    }
}
?>