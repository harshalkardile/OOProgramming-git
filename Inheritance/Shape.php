<?php

class Shape{
    protected $length= 4;
    
    public function getArea()
    {
    return pow($this -> length, 2);
    }
}

class Square extends Shape {

}

class Triangle extends Shape {

}

echo (new Square)->getArea();