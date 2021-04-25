<?php
echo '<br>Task 1.1 : ';
$arr = ['g', 'h', 'z', 'k', 'l'];
echo count($arr);
echo '<br>Task 1.2 : ';
$arr = ['x', 'y', 'z'];
echo $arr[count($arr)-1];
echo '<br>Task 2.1 : ';
$arr = [1, 2, 3, 4, 5];
$result = in_array(3, $arr);
var_dump($result);
echo '<br>Task 3.1 : ';
$arr = [1, 2, 3, 4, 5];	
echo array_sum($arr);
echo '<br>Task 3.2 : ';
$arr = [1, 2, 3, 4, 5];
echo array_product($arr);
echo '<br>Task 3.3 : ';
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$sum = array_sum($arr);
$av = $sum/count($arr);
echo $av;
echo'<br>Task 4.1 : ';
$arr = range(1, 100);
print_r($arr);
echo '<br>Task 4.2 : ';
$arr = range('a', 'z');
print_r($arr);
echo '<br>Task 4.3 : ';
$arr = range(1, 9);
echo implode('-', $arr);
echo '<br>Task 4.4 : ';
$arr = range(1, 100);
echo array_sum($arr);
echo '<br>Task 4.5 : ';
$arr = range(1, 10);
echo array_product($arr);
echo '<br>Task 5.1 : ';
$arr1 = [1, 2, 3];
$arr2 = ['a', 'b', 'c'];
$res = array_merge($arr1, $arr2);
print_r($res);
echo '<br>Task 6.1 : ';
$arr = ['1', '2', '3', '4', '5'];
$res = (array_slice($arr, 1, 3));
print_r($res);
echo '<br>Task 7.1 : ';
$arr = [1, 2, 3, 4, 5];
array_splice($arr, 1,2);
print_r($arr);
echo '<br>Task 7.2 : ';
$arr = [1, 2, 3, 4, 5];
array_splice($arr, 6,0,[2,3,4]);
print_r($arr);
echo '<br>Task 7.3 : ';
$arr = [1, 2, 3, 4, 5];
array_splice($arr, 3, 0, ['a','b','c']);
print_r($arr);
echo '<br>Task 7.4 : ';
$arr = [1, 2, 3, 4, 5];
array_splice($arr, 1, 0, ['a','b']);
array_splice($arr, 6, 0, ['c']);
array_splice($arr, 8, 0, ['e']);
print_r($arr);
echo '<br>Task 8.1 : ';
$arr = ['a'=> 1, 'b' => 2, 'c'=> 3];
print_r(array_keys($arr));
echo '<br>';
print_r(array_values($arr));
echo '<br>Task 8.2 : ';
$keys = ['a' ,'b' ,'c'];
$val = ['1', '2', '3'];
$arr = array_combine($keys, $val);
print_r($arr);
echo '<br>Task 9.1 : ';
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
$result = array_flip($arr);
print_r($result);
echo '<br>Task 9.2 : ';
$arr = [1, 2, 3, 4, 5];
$arr = array_reverse($arr);
print_r($arr);
echo '<br>Task 10.1 : ';
$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
echo array_search('-', $arr);
echo '<br>Task 10.2 : ';
$arr = ['a','-','b','-','c','-','d'];
array_search('-',$arr);
array_splice($arr,1,1);
print_r($arr);
echo '<br>Task 11.1 : ';
$arr = ['a', 'b', 'c', 'd', 'e'];
$result = array_replace($arr, [0=>'!', 3=>'!!']);
print_r($result);
echo '<br>Task 12.1 : ';
$arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
sort($arr);
foreach ($arr as $key => $val) {
    echo "[" . $key . "] => " . $val . "\n";
}
echo '<br>';
$arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
rsort($arr);
foreach ($arr as $key => $val) {
    echo "[$key] => $val\n";
}
echo '<br>';
$arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
asort($arr);
foreach ($arr as $key => $val) {
    echo "[$key] => $val\n";
}
echo '<br>';
$arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
arsort($arr);
foreach ($arr as $key => $val) {
    echo "[$key] => $val\n";
}
echo '<br>';
$arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
ksort($arr);
foreach ($arr as $key => $val) {
    echo "[$key] => $val\n";
}
echo '<br>';
$arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
krsort($arr);
foreach ($arr as $key => $val) {
    echo "[$key] => $val\n";
}
echo '<br>';
function cmp($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}
$a = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
usort($a, 'cmp');
foreach ($a as $key => $value) {
    echo "[$key] => $value\n";
}
echo '<br>';
function cmp_function($a, $b) {
    if ($a == $b) return 0;
    return ($a > $b) ? -1 : 1;
}
$a = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
uksort($a, "cmp_function");
print_r($a);
echo '<br>';
$arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
natsort($arr);
print_r($arr);
echo '<br>Task 13.1 : ';
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
$key = array_rand($arr);
echo ($key);
echo '<br>Task 13.2 : ';
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
$key = array_rand($arr);
echo $arr[$key];
echo '<br>Task 14.1 : ';
$numbers = range(55, 77);
shuffle($numbers);
print_r($numbers);
echo '<br>Task 14.2 : ';
$arr = range(1,25);
shuffle($arr);
print_r($arr);
echo '<br>Task 14.3 : ';
$arr = range('a', 'z');
shuffle($arr);
print_r($arr);
echo '<br>Task 14.4 : ';
$arr = range('a', 'z');
shuffle($arr);
array_splice($arr,0,20);
echo implode('',$arr);
echo '<br>Task 15.1 : ';
$arr = ['a', 'b', 'c', 'b', 'a'];
print_r(array_unique($arr));
echo '<br>Task 16.1 : ';
$arr = [1, 2, 3, 4, 5];
echo array_shift($arr);
echo array_pop($arr);
echo '<br>Task 16.2 : ';
$arr = [1, 2, 3, 4, 5];
$num = array_unshift($arr, '0');
$num = array_push($arr, '6');
print_r($arr);
echo '<br>Task 16.3 : ';
$arr = [1, 2, 3, 4, 5, 6, 7, 8];
$str = '';
while (count($arr) > 0) {
$str .= array_shift($arr);
$str .= array_pop($arr);
}
echo $str;
echo '<br>Task 17.1 : ';
$arr = ['a', 'b', 'c'];
$arr = array_pad($arr, 6, '-');
print_r($arr);
echo '<br>Task 17.2 : ';
$arr = array_fill(0, 10, 'x');
print_r($arr);
echo '<br>Task 17.3 : ';
$arr = range(1, 20);
print_r(array_chunk($arr, 4));
echo '<br>Task 18.1 : ';
$arr = ['a', 'b', 'c', 'b', 'a'];
print_r(array_count_values($arr));
echo '<br>Task 19.1 : ';
$arr = [ 1, 2, 3, 4, 5 ];
$result = array_map('sqrt', $arr);
print_r($result);
echo '<br>Task 19.2 : ';
$arr = '<b>php</b>, <i>html</i>'; 
echo strip_tags($arr);
echo '<br>Task 19.3 : ';
$arr = [' a ', ' b ', ' с '];
$arr = array_map('trim', $arr);
print_r($arr);
echo '<br>Task 20.1 : ';
$arr1 = array (1, 2, 3, 4, 5);
$arr2 = array (3, 4, 5, 6, 7);
$result = array_intersect($arr1, $arr2);
print_r($result);
echo '<br>Task 20.2 : ';
$arr1 = array (1, 2, 3, 4, 5);
$arr2 = array (3, 4, 5, 6, 7);
$result = array_diff($arr1, $arr2);
$result1 = array_diff($arr2, $arr1);
$result = array_merge($result, $result1);
print_r($result);
echo '<br>Доп задача №1 : ';
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
echo array_sum($arr);
echo '<br>Доп задача №2: ';
$let = range('a', 'z');
$num = range(1, 26);
$arr = array_combine($let, $num);
print_r($arr);
echo '<br>Доп задача №3 : ';
$arr = range(1, 9);
print_r(array_chunk($arr, 3));
echo '<br>Доп задача №4 : ';
$arr = [1, 2, 4, 5, 5];
$arr = array_unique($arr);
rsort($arr);
echo $arr[1];
?>