<?php
    if(isset($_POST[summ])) {
        if (is_numeric($_POST['num1']) && is_numeric($_POST['num2'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $result = $num1 + $num2;
            $res = "<h3>" .$num1. " + " .$num2. " = " .$result. "</h3>";
            echo "<a href= 'calc_2.html'> Вернуться </a>";
        } else {
            unset($_POST['summ']);
            unset($_POST['num1']);
            unset($_POST['num2']);
            echo "<h4> Число не удовлетворяет условию. </h4>" . "<a href= 'calc_2.html'> Вернуться </a>";
        }
    }
    if(isset($_POST[sub])) {
        if (is_numeric($_POST['num1']) && is_numeric($_POST['num2'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $result = $num1 - $num2;
            $res = "<h3>" .$num1. " - " .$num2. " = " .$result. "</h3>";
            echo "<a href= 'calc_2.html'> Вернуться </a>";
        } else {
            unset($_POST['sub']);
            unset($_POST['num1']);
            unset($_POST['num2']);
            echo "<h4> Число не удовлетворяет условию. </h4>" . "<a href= 'calc_2.html'> Вернуться </a>";
        }
    }
    if(isset($_POST[mult])) {
        if (is_numeric($_POST['num1']) && is_numeric($_POST['num2'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $result = $num1 * $num2;
            $res = "<h3>" .$num1. " * " .$num2. " = " .$result. "</h3>";
            echo "<a href= 'calc_2.html'> Вернуться </a>";
        } else {
            unset($_POST['mult']);
            unset($_POST['num1']);
            unset($_POST['num2']);
            echo "<h4> Число не удовлетворяет условию. </h4>" . "<a href= 'calc_2.html'> Вернуться </a>";
        }
    }
    if(isset($_POST[div])) {
        if (is_numeric($_POST['num1']) && is_numeric($_POST['num2'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            if($num2 == 0) 
                $result = "На ноль делить нельзя!";
            else 
            $result = $num1 / $num2;
            $res = "<h3>" .$num1. " / " .$num2. " = " .$result. "</h3>";
            echo "<a href= 'calc_2.html'> Вернуться </a>";
        } else {
            unset($_POST['div']);
            unset($_POST['num1']);
            unset($_POST['num2']);
            echo "<h4> Число не удовлетворяет условию. </h4>" . "<a href= 'calc_2.html'> Вернуться </a>";
        }
    }
?>

<html>
<head>
    <title>Калькулятор</title>
</head>
<body>
    <div class="container">
        <h2>Результат вычислений:</h2>
        <?= $res ?>
    </div>
</body>
</html>