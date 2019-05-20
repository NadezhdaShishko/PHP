<?php
    $num1 = (int)$_POST['num1'];
    $num2 = (int)$_POST['num2'];
    $else = "<h3> Число не удовлетворяет условию. </h3>" . "<h3><a href= 'calc_2.html'> Вернуться </a></h3>";
    if(isset($_POST[summ])) {
        if (is_numeric($_POST['num1']) && is_numeric($_POST['num2'])) {
            $result = $num1 + $num2;
            $res = "<h3>" .$num1. " + " .$num2. " = " .$result. "</h3>";
            echo "<h3><a href= 'calc_2.html'> Вернуться </a></h3>";
        } else {
            unset($_POST['summ']);
            unset($_POST['num1']);
            unset($_POST['num2']);
            echo $else;
        }
    }
    if(isset($_POST[sub])) {
        if (is_numeric($_POST['num1']) && is_numeric($_POST['num2'])) {
            $result = $num1 - $num2;
            $res = "<h3>" .$num1. " - " .$num2. " = " .$result. "</h3>";
            echo "<h3><a href= 'calc_2.html'> Вернуться </a></h3>";
        } else {
            unset($_POST['sub']);
            unset($_POST['num1']);
            unset($_POST['num2']);
            echo $else;
        }
    }
    if(isset($_POST[mult])) {
        if (is_numeric($_POST['num1']) && is_numeric($_POST['num2'])) {
            $result = $num1 * $num2;
            $res = "<h3>" .$num1. " * " .$num2. " = " .$result. "</h3>";
            echo "<h3><a href= 'calc_2.html'> Вернуться </a></h3>";
        } else {
            unset($_POST['mult']);
            unset($_POST['num1']);
            unset($_POST['num2']);
            echo $else;
        }
    }
    if(isset($_POST[div])) {
        if (is_numeric($_POST['num1']) && is_numeric($_POST['num2'])) {
            if($num2 == 0) 
                $result = "На ноль делить нельзя!";
            else 
            $result = $num1 / $num2;
            $res = "<h3>" .$num1. " / " .$num2. " = " .$result. "</h3>";
            echo "<h3><a href= 'calc_2.html'> Вернуться </a></h3>";
        } else {
            unset($_POST['div']);
            unset($_POST['num1']);
            unset($_POST['num2']);
            echo $else;
        }
    }
?>

<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <title>Калькулятор</title>
</head>
<body>
    <div class="container">
        <h2>Результат вычислений:</h2>
        <h3><?= $res ?></h3>
    </div>
</body>
</html>