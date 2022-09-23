<?php

#area property

#function to calculate area

#setter and getter methods

class Shape {
    //area property delecration 
    public $area = 0;

    //methods
    public function setArea($a){
        $this->area = $a;
    }

    public function getArea(){
        
        echo "Areaasadfsfd:" . $this->area;
    }

    public function calcArea(){
        $area = 0;
        echo "Deez nuts!!!!!";
    }
}


$obj = new Shape;

print_r($obj);

// $obj->calcArea();

$obj->getArea();
$obj->setArea(5);
$obj->getArea();


?>