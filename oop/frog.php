<?php
require_once('animal.php');

class Frog extends animal
{
    public $leg = 4;

    public function Jump()
    {
        echo "Jump : Hop Hop";
    }
}
?>