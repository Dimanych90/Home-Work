<?php
$name = 'Dimasic';       // задание №1
$age = 29;

echo 'Меня зовут'. ' '. $name .'<br>'. 'Мне'. ' '. $age . ' ' . 'лет.';

echo '<hr>';
echo '<br>';


echo '-"!|/';
echo "'";
echo '"';
echo '\\';

echo '<hr>';
echo '<br>';

// задание №2

const PICTURE = 80; //Всего сколько

const FLOM = 23; //Фломастером

const PENC = 40; //Карандашом

const PAINT = PICTURE - PENC - FLOM; //красками

echo PAINT;

echo '<hr>';
echo '<br>';

// задание №3

$age= 34;
if ($age >= 18 && $age <= 65
)
    echo "Вам еще работать и работать";
elseif ($age > 65)
    echo "Вам пора на пенсию";
elseif ($age <= 17 && $age >= 1)
    echo "Вам пока рано работать";
else
    echo 'Неизвестный возраст';

echo '<hr>';
echo '<br>';

// задание №4
$day = 7;
switch ($day) {
    case 1:
        echo "Это рабочий день <br>";
        break;
    case 2:
        echo "Это рабочий день <br>";
        break;
    case 3:
        echo "Это рабочий день <br>";
        break;
    case 4:
        echo "Это рабочий день <br>";
        break;
    case 5:
        echo "Это рабочий день <br>";
        break;
    case 6:
        echo 'Это выходной день <br>';
        break;
    case 7:
        echo 'Это выходной день <br>';
        break;
    default:
        echo 'Неизвестный день<br>';

}
echo '<hr>';
echo '<br>';

// задание №5
$bmw = [
    'model' => 'X5',
    'speed' => 120,
    'doors' => 5 ,
    'years' => 2015
];
$tayota = [
    'model' => 'camry',
    'speed' => 150,
    'doors' => 4 ,
    'years' => 2015
];
$opel = [
    'model' => 'insignia',
    'speed' => 139,
    'doors' => 4 ,
    'years' => 2016
];

$cars = array_merge($bmw,$tayota,$opel);  //не могу понять что не так, выводит только опель

echo '<pre>';
print_r($cars);

echo '<hr>';
echo '<br>';

// задание №6

for ('<table width="10" height="10">'; );



?>