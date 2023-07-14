<?php 

include_once __DIR__ . '/indumento.php';

class cappello extends indumento {
        protected $name;

}

function __construct ($name){
    parent::__construct($material, $color, $size);
    $this->setName($name);
}

function setName($name){
    $this->name = $name;
}











?>