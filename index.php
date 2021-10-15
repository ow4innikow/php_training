<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= 'Новая страница'?></title>
</head>
<body>
    <?php

//

    $var = NULL; // 0.0  0 "0" '' NULL - это все будет false
    if($var){
        echo 'переменная $var рассматривается как true';
    }
    else {
        echo 'переменная $var рассматривается как false'; // эта часть сработала
    }

    $var = 'g' ; // все другое содержимое -  ТРУЕ
    if($var){
        echo 'переменная $var рассматривается как true';
    }
    else {
        echo 'переменная $var рассматривается как false';
    }



    ?>
</body>
</html>


<?php
/*
 *
 *
 *
 *
// преобразование к числу
    $str = '45.2';
    $number = $str - 12;
    echo $number; // 33.2
 *
 //проверка на целочисленность
      if(is_int(12.5))
        echo 'это интежер';
      else
          echo 'это НЕ интежер';
 *
  // gettype() проверяет тип переменной
    echo gettype(123); // integer
    echo gettype("123"); // string
    echo gettype(1.15); // double
    echo gettype(true); // boolean
 *
  $str = 'в';
    if(empty($str)) // empty() проверяет есть ли что то в строке
        echo 'строка пустая';
    else
        echo 'в строке что то есть';
 *
 $user = 'Ivan';
        if(isset($user)) // isset() проверяет инициализированна ли переменная
            echo 'переменная существует';
        else
            echo 'переменная НЕ существует';
 *
   $var = 5; // про кавычки
    echo "Hello wolrld - $var"; //Hello wolrld - 5
    echo "Hello wolrld - \$var"; //Hello wolrld - $var
    echo "Hello wolrld - \"$var\""; //Hello wolrld - "5"  //экранирование
    echo "Hello wolrld - {$var}3"; //Hello wolrld - 53
    echo "Hello wolrld - {$var} 3"; //Hello wolrld - 5 3
    echo `dir`; // можно управлять командами из операциооной системы
 *
 *типы данных в пхп
                boolean
                integer
                float
                string

                array
                object
                resourse
                NULL
 *
 echo 'Главный скрипт<br>'; // подключать файлы
        include 'second.php'; // require 'second.php';
        echo 'Главный скрипт<br>';
 *
    echo 9 + 3 - 4;
 *
    echo 'текущая дата и время ';
    echo date(DATE_RSS);
 *
    <title><?= 'новая страница'?></title>
 *
    echo  'Hello World';
 */



