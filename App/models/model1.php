<?php
namespace App\models;
//require "../views/view1.php";
//require "../../index.php";
require "../../vendor/autoload.php";
use App\views\View1;
use Person;
use SplObjectStorage;
use WeakMap;

class Model1{

    public ?string $name;
   public function getView() : View1
   {
    return new View1();
   } 

  /* public function getPerson() 
   {
    return new Person();
   }*/

}

$m = new Model1();
$m-> name = "saeeed";
/*var_dump($m);
unset($m-> name);
echo "</br>";
var_dump($m);*/


$map = new WeakMap();
$map[$m] = "val";
var_dump($m);

unset($m);
echo "</br>";
var_dump($map);
?>