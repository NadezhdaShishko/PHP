<?php
/* 1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. 
Затем написать скрипт, который работает по следующему принципу:
a) Если $a и $b положительные, вывести их разность.
b) Если $а и $b отрицательные, вывести их произведение.
c) Если $а и $b разных знаков, вывести их сумму.
Ноль можно считать положительным числом. */
echo $br . '1) ' . $br;
    $br = '<br/>';

    $a = -7;
    $b = 5;

    if ($a >= 0 && $b >= 0) {
        echo ($a - $b) . $br;
    } elseif ($a < 0 && $b < 0) {
        echo ($a * $b) . $br;
    } else {
        echo ($a + $b) . $br;
    }

/* 2. Присвоить переменной $а значение в промежутке [0..15]. 
С помощью оператора switch организовать вывод чисел от $a до 15.*/

echo $br . '2) ' . $br;
    $a = rand( 0, 15 );
    echo '$a = ' . $a . $br;

    switch($a) {
        case 0: 
            echo $a . $br;
            $a++;
        case 1: 
            echo $a . $br;
            $a++;
        case 2: 
            echo $a . $br;;
            $a++;
        case 3: 
            echo $a . $br;;
            $a++;
        case 4: 
            echo $a . $br;;
            $a++;
        case 5: 
            echo $a . $br;;
            $a++;
        case 6: 
            echo $a . $br;;
            $a++;
        case 7: 
            echo $a . $br;;
            $a++;
        case 8: 
            echo $a . $br;;
            $a++;
        case 9: 
            echo $a . $br;;
            $a++;
        case 10: 
            echo $a . $br;;
            $a++;
        case 11: 
            echo $a . $br;;
            $a++;
        case 12: 
            echo $a . $br;;
            $a++;
        case 13: 
            echo $a . $br;;
            $a++;
        case 14: 
            echo $a . $br;;
            $a++;
        case 15: 
            echo $a . $br;
            break;
        default :
            echo "Такого числа нет!" . $br;
    }

/* 3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. 
Обязательно использовать оператор return.*/

echo $br . '3) ' . $br;
    echo 'a = ' . $a = rand(0, 10) . $br;
    echo 'b = ' . $b = rand(0, 10) . $br;


    function summ($a, $b) {
        return $a + $b;
    }
    echo 'Сумма a + b = ' . summ($a, $b) . $br;

    function sub($a, $b) {
        return $a - $b;
    }
    echo 'Разность a - b = ' . sub($a, $b) . $br;

    function mult($a, $b) {
        return $a * $b;
    }
    echo 'Произведение a * b = ' . mult($a, $b) . $br;

    function div($a, $b) {
        return ($b == 0) ? "На ноль делить нельзя!" : $a / $b;
    }
    echo 'Деление a / b = ' . div($a, $b) . $br;

/* 4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), 
где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. 
В зависимости от переданного значения операции выполнить одну из арифметических операций 
(использовать функции из пункта 3) и вернуть полученное значение (использовать switch).*/


echo $br . '4)' . $br;
    function mathOperation($arg1, $arg2, $operation){
        global $br;
        switch($operation){
                case 'сложение':
                    echo 'Результат сложения: ' . summ($arg1, $arg2) . $br;
                    break;
                case 'вычитание':
                    echo 'Результат вычитания: ' . sub($arg1, $arg2) . $br;
                    break;
                case 'умножение':
                    echo 'Результат умножения: ' . mult($arg1, $arg2) . $br;
                    break;
                case 'деление':
                    echo 'Результат деления: ' . div($arg1, $arg2) . $br;
                    break;
                default:
                    echo 'Такой арифметической операции нет!' . $br;
        }
    }
    mathOperation($a, $b, сложение);
    echo $br;
    mathOperation(20, 10, деление);

/* 6. С помощью рекурсии организовать функцию возведения числа в степень. 
Формат: function power($val, $pow), где $val – заданное число, $pow – степень.*/

echo $br .$br . '6)' . $br;

    function power($val, $pow) {
        if($pow > 0) {
            return $val * power($val, $pow-1);
        }
        return 1;
    }
    echo '2 в степени 4 = ' . power(2, 4);

/* 7. Написать функцию, которая вычисляет текущее время и возвращает его в формате 
с правильными склонениями, например: 22 часа 15 минут, 21 час 43 минуты.*/

echo $br .$br . '7)' . $br;

    $nowTime = getDate();
    $hours = $nowTime['hours'];
    $minutes = $nowTime['minutes'];

    function getWordTime($num) {

        if($num == 0 || $num == 11) {
            $endHours = 'часов';
            $wordMinutes = 'минут';
            return array($endHours, $wordMinutes);
        } elseif ((($num % 10)>=2) && (($num % 10)<=4)) {
            $endHours = 'часа';
            $wordMinutes = 'минуты';
            return array($endHours, $wordMinutes);
        } elseif (($num % 10) === 1) {
            $endHours = 'час';
            $wordMinutes = 'минута';
            return array($endHours, $wordMinutes);
        }
        $endHours = 'часов';
        $wordMinutes = 'минут';
        return array($endHours, $wordMinutes);
    }

    echo 'Текущее время: '.$hours.' '.getWordTime($hours)[0].' '.$minutes.' '.getWordTime($minutes)[1];
