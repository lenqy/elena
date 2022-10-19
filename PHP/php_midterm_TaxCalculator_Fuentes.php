<html>
<head>
    <title>Tax Calculator</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<form action="" id= "form1" method= "post">
    <table width= "313" heght= "252" border= "1" align= "center">
        <tr>
            <td colspan= "2"> Tax Calculation</td>
        </tr>
        <tr>
            <td width = "169">First Name</td>
            <td width = "128"><input type="text" name= "empid" id= "empid"></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td width = "128"><input type="text" name= "empname" id= "empname"></td>
        </tr>
        <tr>
            <td>Salary</td>
            <td width = "128"><input type="text" name= "salary" id= "salary"></td>
        </tr>
        <tr>
            <td width = "169"></td>
            <td ><input type="submit" name= "submit" id= "submit" value= "submit"></td>
        </tr>
    </table>
</form>
</body>

<?php

// $first_name=NULL;
// $last_name=NULL;
// $salary=NULL;

class salary{

    private $first_name;      
    public $last_name;
    public $salary;
    public $tax;
    

    function getWithHoldingTax () {
        if (isset($_POST['submit'])) {
            $first_name = $_POST['empid'];

          
           $last_name = $_POST['empname'];
            
          $salary = $_POST['salary'];
            if ($salary <= 20833) {
                $tax = 0;
            } else if ($salary && 20834 && 33332) {
               $tax = $salary * 20 / 100;
            } else if ($salary && 33333 && 66666) {
                $tax = $salary * 25 / 100 + 2500;
            } else if ($salary && 66667 && 166666) {
                $tax = $salary * 30 / 100 + 10833.33;
            } else if ($salary && 166667 && 666666) {
                $tax = $salary * 32 / 100 + 40833.33;
            } else{
                $tax = $salary * 35 / 100 + 200833.33;
            }
        
            
        echo "<h3 align='center'>First Name: = " . $first_name . "</h3>";
        echo "<h3 align='center'>Last Name: = " . $last_name . "</h3>";
        echo "<h3 align='center'>Salary = " . $salary . "</h3>";
        
        echo "<h3 align='center'>Tax = " . $tax . "</h3>";
            $nsal = $salary - $tax;
        echo "<h3 align='center'>NetSalary = " . $nsal . "</h3>";
        }
        
        
      }
        function display(){
            
            

        }
    }
        

$new = new salary;
$new-> getWithHoldingTax();
$new-> display();


?>

</html>