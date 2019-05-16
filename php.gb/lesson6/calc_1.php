<?php
function clearData($data, $type='i') {
    switch($type) {
        case 'i': return $data*1; break;
        case 's': return trim(strip_tags($data)); break;
    }
}

$result = "";

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $num1 = clearData($_POST['num1']);
    $num2 = clearData($_POST['num2']);
    $operation = clearData( $_POST['operation'], 's');
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
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title> Calculator </title>
</head>

<body>
    <div class="container">
        <h2>Калькулятор</h2>
        <form class="calc1" action="<? $_SERVER['PHP_SELF'] ?>" method='POST'>
            <input type="text" name="num1" placeholder="Введите первое число">
            <select name="operation">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="text" name="num2" placeholder="Введите второе число">
            <input type="submit" value="Посчитать">
        </form>

        <?php
        if($result){
            echo '<h2>'.$result.'</h2>';
        }
        ?>
    </div>
    
</body>
</html>