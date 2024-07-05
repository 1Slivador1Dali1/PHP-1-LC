<?php
$num = 10;
echo $num;
?>
<br>
<br>
<?php
$num += 10;
echo $num;
?>
<br>
<br>
<?php
$str = "Hello World $num"; // С двойными ковычками происходит преобразование переменной в ее содержимое. А с одинарными нет
echo $str;
?>
<br>
<br>
<?php
$str2 = " 12p2p";
echo $str . $str2; // Конкатенация строк не плюс . а точка!!!
?>
<br>
<br>
<?php
$bool = true;
$arr = [10, 'Hello World'];
echo $arr[1];
$null = null; //Пустота или нет значения
?>
<br>
<br>
<?php
function hello()
{
    echo 'Hello world!!!';
};

hello();
?>
<br>
<br>
<?php 
function ret()
{
    return 10;
};

echo $num += ret();
?>
<br>
<br>
<?php 
function argument($arg) {
    return 2024 - $arg;
};

echo argument(2001);
?>
<br>
<br>
<?php 
function pw($num1, $num2) {
    return $num1 ** $num2;
};
echo pw(2,3);
echo ' and ';
echo pow(2,2); // Зарезервированный метод(функции)
?>