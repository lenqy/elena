<!-- Create a class named Calculator that has the following methods and properties :
number_list – a property that accepts an array of numbers. 
Add – a method that adds the numbers inside the number_list 
Subtract – a method that subtracts the first two numbers inside the number_list property 
Divide – a method that adds the numbers inside the number_list property and divides it by the number of items inside the number_list 
Factorial – a method that returns the factorial of each number inside the number_list 
Prime – a method that returns an array of all prime numbers inside the number_list If no prime numbers are found, the method will return an empty array. -->

<?php
class Calculator {
    public $number_list = array();

        function __construct($number_list){
            $this->number_list= $number_list;
        }

    public function Add() 
    {
        $result = 0;
        for($i = 0; $i < count($this->number_list); $i++)
        {
            $result += (int) $this->number_list[$i];
        }
        return $result;
    }
    
    public function Subtract()
    {
        $subtract = (int) $this->number_list[0] - (int) $this->number_list[1];
        return $subtract;
    }

    public function Divide() 
    {
        $result = 0;
        for($i = 0; $i < count($this->number_list); $i++)
        {
            $result += (int) $this->number_list[$i];
        }
        $result = $result / count($this->number_list);
        return $result;
    }
    public function Factorial()
    { 
        $result = 1;
        for($i = 0; $i < count($this->number_list); $i++)
        {
            $result *= (int) $this->number_list[$i];
        }
        return $result;
    }

    public function Prime()
    {
        $notPrimeNumbers = false; 
        $result = array();
        for($i = 0; $i < count($this->number_list); $i++)
        {
            if($this->number_list[$i] % 2 == 0)
                $notPrimeNumbers = true;

            if($this->number_list[$i] % 2 != 0)
               array_push($result, $this->number_list[$i]);    
        }
        if(count($result) < 1 && $notPrimeNumbers) {
        return $result;
        }
        else {
        return $result;
        }
    }
}
// $mycalc = new Calculator(array(1,2,3,4,4,5,6,7)); 
// echo $mycalc-> add(); 
// echo "</br>";
// echo $mycalc-> Subtract();
// echo "</br>";
// echo $mycalc-> Divide(); 
// echo "</br>";
// echo $mycalc-> Factorial();
// echo "</br>";
// print_r($mycalc-> Prime());
?>