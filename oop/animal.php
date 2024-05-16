<?php
class animal{
    public $name;
    public $leg = 4;
    public $coldBlooded = "No";

    public function __construct($string)
    {
        $this->name = $string;
    }

}
?>