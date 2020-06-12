<pre>
<?php 
// Задание 1 Создать структуру классов ведения товарной номенклатуры.

abstract class Product
{ 
    public $id;
    public $name;
    public $pricePerOne;
    public $quantity;
    
    public function __construct( $id, $name, $pricePerOne, $quantity = 0){ 
        $this->id = $id;
        $this->name = $name;
        $this->pricePerOne = $pricePerOne;
        $this->quantity = $quantity;
    }

    abstract protected function getCommonCost();

}

class ITProduct extends Product
{ 
    public $pricePerOneITProduct;
    public function __construct( $id, $name, $quantity = 0, $pricePerOneITProduct){ 
        parent::__construct($id, $name, $quantity);
        $this->pricePerOneITProduct = $pricePerOneITProduct / 2;

    }

    public function getCommonCost() {
        if (isset($this->pricePerOneITProduct) && isset($this->quantity)) {
            return $this->pricePerOneITProduct * $this->quantity;
        }
        return "Сумму невозможно посчитать!";
    }

}

class IndustrialProduct extends Product
{ 
    public $pricePerOneIndustrialProduct;
    public function __construct( $id, $name, $quantity = 0, $pricePerOneIndustrialProduct){ 
        parent::__construct($id, $name, $quantity);
        $this->pricePerOneIndustrialProduct = $pricePerOneIndustrialProduct;

    }

    public function getCommonCost() {
        if (isset($this->pricePerOneITProduct) && isset($this->quantity)) {
            return $this->pricePerOneITProduct * $this->quantity;
        }
        return "Сумму невозможно посчитать!";
    }
}
class WeightedProduct extends IndustrialProduct
{ 
    public function __construct( $id, $name, $quantity = 0, $pricePerOneITProduct){ 
        parent::__construct($id, $name, $quantity);
        $this->pricePerOneITProduct = $pricePerOneITProduct / 2;

    }
    //public function getCommonCost() - метод передает через наследование
        
}