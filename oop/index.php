<?php
require_once('animal.php');
require_once('frog.php');
require_once('ape.php');

$object = new animal("Shaun");

echo " Nama Binatang : ".$object-> name. "<br>";
echo " Jumlah kaki : ".$object-> leg ."<br>";
echo " Berdarah Dingin : ". $object-> coldBlooded ."<br><br>";

$object2 = new Frog("Buduk");

echo "Nama Binatang : $object2->name <br>";
echo "Jumlah Kaki : $object2->leg <br>";
echo "Berdarah Dingin : $object2->coldBlooded <br>";
$object2->Jump();
echo "<br><br>";

$object3 = new Kera("Kera Sakti");

echo "Nama Binatang : $object3->name <br>";
echo "Jumlah Kaki : $object3->leg <br>";
echo "Berdarah Dingin : $object3->coldBlooded <br>";
$object3->Yell();



?>