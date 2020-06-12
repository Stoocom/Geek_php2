<pre>
<?php
use models\User;
use models\Product;
use services\Autoloader;

require $_SERVER['DOCUMENT_ROOT'] . "/services/Autoloader.php";
spl_autoload_register([new Autoloader(), 'loadClass']);
// function __autoload($classname) {
//     $autoloader = new Autoloader();
//     $autoloader->loadClass($classname);
// };

$userOne = new User;
$productOne = new Product;
//$productTwo = new interfaces\ModelInterfaces;

function foo (ModelInterfaces $object) {
    var_dump($object->getById());
}

var_dump($userOne);
var_dump($productOne);
//var_dump($productTwo);