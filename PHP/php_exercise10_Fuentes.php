<?php

class circle{
    public $pi=3;
    function circumference($radius){

        $circumference=2 * $this -> pi * $radius;
        echo $circumference;

    }
    function area($radius){
        $area=$this-> pi *($radius *$radius);
        echo $area;
    }
    function diameter($radius){
        $diameter= 2 * $radius;
        echo $diameter;
    }
}

$result= new circle();
$radius= 10;
echo "The circle with a radius of ".$radius;
echo " has a diameter of ";
echo 2* $radius;
echo " with its circumference at ";
$result-> circumference($radius);
echo " and area of  ";
$result -> area($radius);
echo ".";

//  radius, diameter, circumference and area
// The circle witha ridius of --- has a diameter of --
//  with its circumference at --- and area of ---
?>