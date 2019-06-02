<?php
require '../engine/init.php';


if($_POST){ 
    
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $otziv = htmlspecialchars($_POST['otziv']);
    $chek = htmlspecialchars($_POST['chek']);
    $date = date("d.m.Y - H:i");
    
}

$INSERT_query = sprintf("INSERT INTO reviews (name, email, otziv, date) VALUES (\"%s\", \"%s\", \"%s\", \"%s\")", $name, $email, $otziv, $date);

$insert_query = mysqli_query($mysqli, $INSERT_query);

header('Location: ../index.php');

die;
    // if($chek == 'nobot'){
        
    //     if($name != '' AND $email != '' AND $otziv != ''){
    //         if (!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i", $email)){
    //             $err = 'Неверно введен е-mail.';
    //         }
            
    //         if(!$err){
    //             $massege = "<html><head></head><body> 
    //             Новый отзыв на сайте! <br><br> 
    //             <table width=100% border=0> 
    //             <tr><td width=10></td> 
    //             <td><b>".$name."</b> (".$email.")<br>".$date." 
    //             <br>".$otziv." 
    //             </td> 
    //             </tr></table><br> 
    //             </body></html>";
                
    //             $headers = "Content-type: text/html; charset=utf-8 \r\n";
    //             $headers .= "From: Мой сайт <admin@мой_сайт.ru>\r\n";
                
    //             if(mail("admin@мой_сайт.ru", "Новый отзыв с Вашего сайта", $massege, $headers)){
    //                 $err="Спасибо за отзыв".$name;
    //             } else {
    //                 $err='Ошибка в отправлении';
    //             }

                // $INSERT_query = sprintf ("INSERT INTO reviews.reviews (name, email, otziv, date) VALUES (\"%s\", \"%s\", \"%s\", \"%s\")", $name, $email, $otziv, $date);
                // $insert_query = mysqli_query($mysqli, $INSERT_query);
                
    //         }
    //     } else {
    //         $err = 'Вы заполнили не все поля!';
    //     }
    // } else {
    //     $err='Вы - робот :( ';
    // }
