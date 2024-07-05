<?php 
$num = 10;
echo $num;
?>
<br>
<?php
$num += 10;
echo $num;
?>
<br>
<?php 
$str = "Hello World $num"; // С двойными ковычками происходит преобразование переменной в ее содержимое. А с одинарными нет
echo $str;
?>
<br>
<?php 
$str2 = " 12p2p";
echo $str . $str2; // Конкатенация строк не плюс . а точка!!!
?>
<br>
<?php 
$bool = true;
$arr = [10, 'Hello World'];
echo $arr[1];
$null = null; //Пустота или нет значения

?>