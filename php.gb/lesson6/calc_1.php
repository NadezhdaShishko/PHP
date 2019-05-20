<?php
function clearData($data, $type='i') {
    switch($type) {
        case 'i': return $data*1; break;
        case 's': return trim(strip_tags($data)); break;
    }
}

$result = "";

if(($_GET['num1'] != '') && ($_GET['operation']!= '') && ($_GET['num2'] != '')) {
    $num1 = clearData($_GET['num1']);
    $num2 = clearData($_GET['num2']);
    $operation = clearData($_GET['operation'], 's');
    $result = "$num1 $operation $num2 = ";

    switch ($operation) {
        case '+':
            $result .= $num1 + $num2;
            break;
        case '-':
            $result .= $num1 - $num2;
            break;
        case '*':
            $result .= $num1 * $num2;
            break;
        case '/':
            if($num2 == 0) 
                $result = "На ноль делить нельзя!";
            else 
            $result .= $num1 / $num2;
            break;
        default:
            $result = 'Такой арифметической операции нет!';
    }
} else { 
    $result = "Введите число!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title> Calculator </title>
    <link rel="stylesheet" href='css/style.css'/>
</head>

<body>
    <div class="container">
        <h2>Калькулятор</h2>
        <form class="calc1" method='GET'>
            <input type="text" name="num1" value="<?=$num1?>" placeholder="Введите первое число">
            <select name="operation">
                <option <?php if ($operation == "+") echo "selected"?> value="+">+</option>
                <option <?php if ($operation == "-") echo "selected"?> value="-">-</option>
                <option <?php if ($operation == "*") echo "selected"?> value="*">*</option>
                <option <?php if ($operation == "/") echo "selected"?> value="/">/</option>
            </select>
            <input type="text" name="num2" value="<?=$num2?>" placeholder="Введите второе число">
            <input type="submit" value="Посчитать">
        </form>
        <div class="result">
            <?php
            if($result){
                echo '<h2>'.$result.'</h2>';
            }
            ?>
        </div>
    </div>
    
</body>
</html>