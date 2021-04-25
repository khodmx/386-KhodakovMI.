<?php
   echo '<br>Task 1.1 : ';
   echo strtoupper ('php');
   echo '<br>Task 1.2 : ';
   echo strtolower('PHP');
   echo '<br>Task 1.3 : ';
   echo ucfirst('london');
   echo '<br>Task 1.4 : ';
   echo lcfirst('London');
   echo '<br>Task 1.5 : ';
   echo ucwords('london is the capital of great britain');
   echo '<br>Task 1.6 : ';
   echo ucfirst(strtolower('LONDON'));
   echo '<br>Task 2.1 : ';
   echo strlen('html css php');
   echo '<br>Task 2.2 : ';
   $password = "123456";
   if ((strlen($password)>5) & (strlen($password)<10)) {
       echo 'Пароль подходит';
   } else {
       echo 'Придумайте другой пароль';
   }
   echo '<br>Task 3.1 : ';
   echo '<br>';
   echo substr("html css php", -14, 4);
   echo '<br>';
   echo substr("html css php", -7, 3);
   echo '<br>';
   echo substr("html css php", -3);
   echo '<br>Task 3.2 : ';
   echo substr('xyzabc',-3 );
   echo '<br>Task 3.3 : ';
   $str = 'http://google.com';
   if (substr($str, 0, 7) === 'http://') {
   echo 'да';
   } else {
   echo 'нет';
   }
   echo '<br>Task 3.4 : ';
   $str = 'https://google.com';
   if (substr($str, 0, 7) === 'http://' || substr($str, 0, 8) === 'https://') {
   echo 'да';
   } else {
   echo 'нет';
   }
   echo '<br>Task 3.5 : ';
   $str = 'yellow.png';
   if (substr($str, -4) === '.png') {
   echo 'да';
   } else {
   echo 'нет';
   }
   echo '<br>Task 3.6 : ';
   $str = 'yellow.jpg';
   $format = substr($str, -4);
   if ($format === '.png' || $format === '.jpg') {
   echo 'да';
   } else {
   echo 'нет';
   }
   echo '<br>Task 3.7 : ';
   $str = 'abcde';
   $name = strlen($str);
   if ($name > 5) {
   echo substr($str, -1) . '...';
   } else {
   echo $str;
   }
   echo '<br>Task 4.1 : ';
   $str = '31.12.2013';
   echo str_replace('.', '-', $str);
   echo '<br>Task 4.2 : ';
   echo str_replace(['a','b','c'],[1,2,3],'abc');
   echo '<br>Task 4.3 : ';
   $str = '1a2b3c4b5d6e7f8g9h0';
   echo str_replace([1, 2, 3, 4, 5, 6, 7, 8, 9, 0], '', $str);
   echo '<br>Task 5.1 : ';
   $str = 'aaabbbccc';
   echo strtr($str, ['a' => 1, 'b' => 2, 'c' => 3]);
   echo '<br>';
   $str = 'aaabbbccc';
   echo strtr($str, 'abc', '123');
   echo '<br>Task 6.1 : ';
   $str = '1234567890';
   echo substr_replace($str, '!!!', 2, 5);
   echo '<br>Task 7.1 : ';
   $str = 'abc abc abc';
   echo strpos($str, 'b');
   echo '<br>Task 7.2 : ';
   $str = 'abc abc abc';
   echo strrpos($str, 'b');
   echo '<br>Task 7.3 : ';
   $str = 'abc abc abc';
   echo strpos($str,'b', 3);
   echo '<br>Task 7.4 : ';
   $str = 'aaa aaa aaa aaa aaa';
   $first = strpos($str, ' ');
   echo strpos($str, ' ', $first + 1);
   echo '<br>Task 7.5 : ';
   $str = 'ab..cd';
   if (strpos($str, '..') !== false) {
   echo 'есть';
   } else {
   echo 'нет';
   }
   echo '<br>Task 7.6 : ';
   $str = 'https://rtk.ru';
   if (strpos($str, 'http://') === 0) {
   echo 'да';
   } else {
   echo 'нет';
   }
   echo '<br>Task 8.1 : ';
   $str = 'html css php';
   $name = explode(' ', $str);
   echo $name[0];
   echo ' ';
   echo $name[1];
   echo ' ';
   echo $name[2];
   echo '<br>Task 8.2 : ';
   $name = ['"html", "css", "php"'];
   $str = implode($name, ',');
   echo($str);
   echo '<br>Task 8.3 : ';
   $date = "2013-12-31";
   $name = explode('-', $date);
   echo $name[2].'.'.$name[1].'.'.$name[0];
   echo '<br>Task 9.1 : ';
   $str = '1234567890';
   var_dump(str_split($str, 2));
   echo '<br>Task 9.2 : ';
   $str = '1234567890';
   var_dump (str_split($str, 1));
   echo '<br>Task 9.3 : ';
   $str = '1234567890';
   $name = str_split($str, 2);
   echo implode('-', $name);
   echo '<br>Task 10.1 : ';
   $str = ' abc ';
   echo trim($str);
   echo '<br>Task 10.2 : ';
   $str = '/php/';
   echo trim($str, '/');
   echo '<br>Task 10.3 : ';
   $str = 'слова слова слова';
   echo rtrim($str, '.') . '.';   
   echo '<br>Task 11.1 : ';
   echo strrev('12345');
   echo '<br>Task 11.2 : ';
   $str = 'level';
   if ($str === strrev($str)) {
   echo 'True';
   } else {
   echo 'False';
   }
   echo '<br>Task 12.1 : ';
   $str = 'xyzabc';
   echo str_shuffle($str);
   echo '<br>Task 12.2 : ';
   $str = 'abcdefghijklmnopqrstuvwxyz';
   echo substr(str_shuffle($str), 0, 6);
   echo '<br>Task 13.1 : ';
   $str = '12345678';
   echo number_format($str, 0,' ', ' ');
   echo '<br>Task 14.1 : ';
   $num = 'x';
   for ($i = 0;$i<=9;$i++){
   echo str_repeat('x',$i).'<br>';
   }
   echo '<br>Task 14.2 : ';
   for ($i = 0;$i<=9;$i++){
   echo str_repeat($i, $i).'<br>';
   }
   echo '<br>Task 15.1 : ';
   echo strip_tags('html, <b>php</b>, js');
   echo '<br>Task 15.2 : ';
   $str = strip_tags('<b>abc</b>, <i>def</i>, <p>ghi</p>', '<b><i>');
   echo htmlspecialchars($str);
   echo '<br>Task 15.3 : ';
   echo htmlspecialchars('html, <b>php</b>, js');
   echo '<br>Task 16.1 : ';
   echo '<br>';
   echo ord ('a');
   echo '<br>';
   echo ord ('b');
   echo '<br>';
   echo ord ('c');
   echo '<br>';
   echo ord (' ');
   echo '<br>Task 16.3 : ';
   echo chr(33);
   echo '<br>Task 16.4 : ';
   $str = chr(mt_rand(65, 90));
   echo ($str);
   echo '<br>Task 16.5  : ';
   $str = '';
   $len = 122;
   for($i=22; $i<=$len; $i++)
   {
   $str .= chr(mt_rand(97, 122));
   }
   echo $str;
   echo '<br>Task 16.6 : ';
   $l = 'X';
   if (ord($l)< 91){
   echo 'Большая буква'; }
   else {
   echo 'Маленькая буква';
   }
   echo '<br>Task 17.1 : ';
   echo strchr('ab-cd-ef', '-cd-ef' ); 
   echo '<br>Task 17.2 : ';
   echo strrchr('ab-cd-ef','-ef' );
   echo '<br>Task 18.1 : ';
   echo strstr('ab--cd--ef', '--cd--ef');
   echo '<br>Доп задача №1  : ';
   $name = explode('_', 'var_test_text');
   echo $name[0];
   echo ucfirst($name[1]); 
   echo ucfirst($name[2]);
   echo '<br>Доп задача №2 : ';
   $arr = ['16', '23', '34', '47', '54', '103'];
   foreach ($arr as $item) {
   if ($item[0] == 3 || $item[1] == 3 || $item[2] == 3) {
   echo $item . '<br>';
   }
   }
   ?>