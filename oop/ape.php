<?php
require_once('animal.php');

class Kera extends animal
{
    public $leg = 2;

    public function Yell()
    {
        echo "Yell : Auooo";
    }
}
?>