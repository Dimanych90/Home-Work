<?php

// Задание 0

CONST TEST_CONSTANTA = 'asd';
$user_name = "Igor";


if (1 == 1) {
    echo 'hi';
}

echo '<hr>';
echo '<br>';

$name = 'Dimasic';       // задание №1
$age = 29;

echo 'Меня зовут' . ' ' . $name . '<br>' . 'Мне' . ' ' . $age . ' ' . 'лет.';

echo '<hr>';
echo '<br>';


echo '-"!|/\'"\\';

echo '<hr>';
echo '<br>';

// задание №2

const PICTURE = 80; //Всего сколько

const MARKERS = 23; //Фломастером

const PENC = 40; //Карандашом
const PAINT = PICTURE - PENC - MARKERS;

echo 'На школьной выставке' . ' ' . PICTURE . ' ' . 'рисунков.' . ' ' . MARKERS . ' ' . 'из них выполнены фломастерами,' . ' ' . PENC . ' ' . 'карандашами, а остальные — красками:' . ' ' . PAINT; //красками


echo '<hr>';
echo '<br>';

// задание №3

$age = 18;
if ($age >= 18 && $age <= 65) {
    echo "Вам еще работать и работать";
} elseif ($age > 65) {
    echo "Вам пора на пенсию";
} elseif ($age <= 17 && $age >= 1) {
    echo "Вам пока рано работать";
} else {
    echo 'Неизвестный возраст';
}

echo '<hr>';
echo '<br>';

// задание №4
$day = 7;
switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Это рабочий день <br>";
        break;
    case 6:
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
    'doors' => 5,
    'years' => 2015
];
$tayota = [
    'model' => 'camry',
    'speed' => 150,
    'doors' => 4,
    'years' => 2015
];
$opel = [
    'model' => 'insignia',
    'speed' => 139,
    'doors' => 4,
    'years' => 2016
];

$cars = ['bmw' => $bmw,
    'tayota' => $tayota,
    'opel' => $opel
];


foreach ($cars as $key => $value) {
    echo 'Car ' . $key . '<br>';
    echo implode(' ', $value) . '<br>';

}

echo '<hr>';
echo '<br>';

// задание №6
$rows = 10; // количество строк, tr
$cols = 10; // количество столбцов, td

echo '<table border="1">';


for ($tr = 1; $tr <= $rows; $tr++) {

    echo '<tr><td>' . $tr . '</td>';
    for ($td = 1; $td <= $cols; $td++) {
        if ($tr > 1) {
            $result = $td * $tr;
            if ($td % 2 === 0) {
                echo '<td>(' . $result . ')</td>';
            } elseif ($td % 2 !== 0) {
                echo '<td>[' . $result . ']</td>';
            } else
                echo '<td>' . $result . '</td>';
        } else {
            echo '<td>' . $td . '</td>';
        }
    }
    echo '</tr>';
}

echo '</table>';

?>