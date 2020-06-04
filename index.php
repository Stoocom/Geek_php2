<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lesson 2</title>
</head>
<body>

<pre>
<?php

// Задачи
// 1. Придумать класс, который описывает любую сущность из предметной области 
// интернет-магазинов: продукт, ценник, посылка и т.п.
// 2. Описать свойства класса из п.1 (состояние).
// 3. Описать поведение класса из п.1 (методы).
$basketArray = [
    "arrayOfIdProductsWithCounts" => [],
];

class Product {

    public $id;
    public $name;
    public $discription;
    public $brend;
    public $pricePerOne;
    protected $category;
    public $countryOfProduce;
    public $pathSmallImage;

    public function displayPreview() {
        echo "<div>
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
}

// 4. Придумать наследников класса из п.1. Чем они будут отличаться?

$stockOfAllProductArray = [
    "moto" => [ '99' => 1, '120' => 2, '121' => 1, '122' => 1  ],
    "accesuaru" => [ '151' => 2, '156' => 10, '170' => 5, '970' => 10]
];

class Moto extends Product {

    public $typeOfMoto;
    public $ecologicalClass;
    public $engineType;
    public $horsepower;
    public $isInStock;

    protected $category = 'moto';

    public function __construct( $id, $name, $discription, $brend, $pricePerOne, $category, $countryOfProduce, $pathSmallImage, $typeOfMoto, $ecologicalClass, $engineType, $horsepower) {
        parent::__construct($id, $name, $discription, $brend, $pricePerOne, $countryOfProduce, $pathSmallImage);
        $this->typeOfMoto = $typeOfMoto;
        $this->ecologicalClass = $ecologicalClass;
        $this->engineType = $engineType;
        $this->horsepower = $horsepower;
    }

    public function checkInStock($id) {
        if (array_key_exists($id, $stockOfAllProductArray[$category])) {
            echo 'На текущую дату'.date("Y-m-d").'в наличии '.$stockOfAllProductArray[$category][$id];
        } else {
            echo 'На текущую дату'.date("Y-m-d").'нет в наличии';
        }
    }

}

// 5. Что выведет выведет код на каждом шаге? Почему?

// class A {
//     public function foo() {
//     static $x = 0;
//     echo ++$x;
//     }   
// }
//     $a1 = new A();
//     $a2 = new A();
//     $a1->foo();
//     $a2->foo();
//     $a1->foo();
//     $a2->foo();

echo "<br>Ответ: Статические методы и свойства принадлежат классу, а не его экземплярам, поэтому вызов функции foo любого обьекта a1 или a2 приведет к вызову foo самого класса A, получим 1 2 3 4";
echo "<br>";

// class A {
//     public function foo() {
//         static $x = 0;
//         echo ++$x;
//     }
// }
// class B extends A {
// }
// $a1 = new A();
// $b1 = new B();
// $a1->foo(); 
// $b1->foo(); 
// $a1->foo(); 
// $b1->foo();


echo "<br>Ответ: Статические методы и свойства принадлежат классу, обьекты a1 и b1 созданы от разных классов, поэтому вызов функции foo обьекта a1 или b1 приведет к изменению их собственных статических x, получим 1 1 2 2";


// 6. Что выведет выведет код на каждом шаге? Почему?

class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A;
$b1 = new B;
$a1->foo(); 
$b1->foo(); 
$a1->foo(); 
$b1->foo(); 


?>

</body>
</html>