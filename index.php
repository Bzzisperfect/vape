<?php
$namesList[0]="Yuen Wo ping";
$namesList[1]="Gofrey Darrow";
$namesList[2]="Hugo Weaving";
echo "Perviy ellement massiva".$namesList[0]."hr";
for ($i=0; $i<count($namesList); $i++)
	echo $namesList[$i]."<br>";

$array1 ['0'] = 100;
$array1 ['1'] = 10;
$array1 ['2'] = 'text';
$array1 ['3'] = 'true';
$array1 ['1'] = 1050;
$array1 ['5'] = 'qw';
print '<pre>';
print_r($array1);
print '</pre>';
$array2 ['0'] = 200;
$array2 ['1'] = 20;
$array2 ['2'] = 'text2';
$array2 ['3'] = 'true2';
$array2 ['1'] = 2050;
$array2 ['5'] = 'cool12';
print '<pre>';
print_r($array2);
print '</pre>';
print_r($array1+$array2);
?>