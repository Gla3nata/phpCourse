 <?php function sum($a,$b) {
 return $a+$b;
 }
 function subtraction($a,$b) {
 return $a-$b;
 }
 function multiplication($a,$b) {
 return $a*$b;
 }
 function division($a,$b) {
 if($b==0){
 return "на 0 делить нельзя";
 } return $a/b;
 }

echo mathOperation(10,2,"+");

function mathOperation($a, $b, $operation) {
    switch ($operation) {
        case "+":
            return sum($a,$b);
        case "-":
            return subtraction($a,$b);
        case "/":
            return division($a,$b);
        case "*":
            return multiplication($a,$b);
        default:
            echo "<h3>Поломка</h3>";
    }
}
?>