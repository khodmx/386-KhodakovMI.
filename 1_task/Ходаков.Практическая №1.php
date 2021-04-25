 <?php
echo '<br>Task 1 : ';
$a = 3;
$b = 4;
function sum($a, $b)
{
    $result = $a + $b;
    return $result;
}
echo sum($a, $b);
echo '<br>Task 2 : ';
$a = 5;
$b = 2;
function dif($a, $b)
{
    $result = $a - $b;
    return $result;
}
echo dif($a, $b);
echo '<br>Task 3 : ';
$a = 3;
$b = 4;
$c = 5;
function mult($a, $b, $c)
{
    $result = $a * $b * $c;
    return $result;
}
echo mult($a, $b, $c);
echo '<br>Task 4 : ';
$a = 6;
function root($a)
{
    $result = sqrt($a);
    return $result;
}
echo root($a);
 echo '<br>Task 6 : ';
 $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
 var_dump($arr);
 echo '<br>Task 7 : ';
 $arr2 = ["tea" => "drink", "food" => "chicken"];
 var_dump($arr2);
 echo '<br>Task 8 : ';
 function name($str)
 {
     $a = explode(" ", $str);
     $b = substr($a[1], 0, 1);
     $c = substr($a[2], 0, 1);

     echo $a[0]. " ". $b. ".". $c. ".";
 }
 name("Ходаков Mаксим Uгоревич");


