<?php

class WordCheck{
    public $word;
    function __construct($word){
        $this-> word = $word;
    }

    function firstletter($word){
        $this->word = $word;
        $first= $word[0];
        return "This First letter is: ".$first;
}
     function lastletter($word){
        $this->word = $word;
        $last= $word[-1];
        return "This Last letter is: ".$last;
 
}

function palindrome(){
    $word = $this-> word;
    $reverse= strrev($word);
    if ($reverse == $word){
        return True;
    } else{
        return False;
    }
}

}
$Palindromecheck= new WordCheck("nissin");
// var_dump($Palindromecheck->palindrome());
// var_dump($Palindromecheck->word);
// echo $Palindromecheck ->lastletter;

?>