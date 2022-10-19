<?php
class strings{
    public $str;

    // public function __construct($str) {
    // $this->str = $str;

function NumberofChars(){
    return strlen($this->str);
}
function RemoveSpecialChars(){
    return preg_replace('/[^A-Za-z0-9\-<>? ]/ ', '', $this->str); 
}
function GroupStrInto(){

    
}
function FindCharOccurence(){
    foreach (count_chars($this->str, 1) as $chars => $equivalent) {
        print chr($chars) . " occurred a number of $equivalent times in the string." . "<br>"; 
    }

}
function ReplaceChar($firstreplacement, $secondreplacement){
    return str_replace($firstreplacement, $secondreplacement, $this->str);
}

}

$str = new strings();
$str->str="nissin";
// echo "String:".$str->str;
// echo "</br>";
// echo "NumberOfChars:" .$str->NumberofChars();
// echo "</br>";
// echo "RemovingSpecialCharacters:" .$str->RemoveSpecialChars();
// echo "</br>";
// echo "FindCharOccurence:" . $str->FindCharOccurence();
// echo "</br>";
// echo "ReplaceChar:" .$str->ReplaceChar("s","n");
?>