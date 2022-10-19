<?php
class Calculator {
    var $number_list = array(); 


    public function Add() 
    {
        $result = 0;
        for($i = 0; $i < count($this->number_list); $i++)
        {
            $result += (int) $this->number_list[$i];
        }
    }
    
    public function Subtract()
    {
        $result = (int) $this->number_list[0] - (int) $this->number_list[1];
    }
    public function Divide() 
    {
        $result = 0;
        for($i = 0; $i < count($this->number_list); $i++)
        {
            $result += (int) $this->number_list[$i];
        }
        $result = $result / count($this->number_list);
    }
    public function Factorial()
    { 
        $result = 1;
        for($i = 0; $i < count($this->number_list); $i++)
        {
            $result *= (int) $this->number_list[$i];
        }
    }

    public function Prime()
    {
        $notPrimeNumbers = false; 
        $result = array();
        for($i = 0; $i < count($this->number_list); $i++)
        {
            if($this->number_list[$i] < 2)
                $notPrimeNumbers = true;

            if($this->number_list[$i] % 2 == 0)
                array_push($result, $this->number_list[$i]);
            
        }

        if(count($result) < 1 && $notPrimeNumbers) echo $result;
        else echo 'Prime Numbers: ' . $result;
    }
}
$mycalc = new Calculator(array(1,2,7)); 
echo $mycalc-> add(); 
?>