<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= 'Новая страница'?></title>
</head>
<body>
    <?php

    $var = 5; // про кавычки
    echo "Hello wolrld - $var"; //Hello wolrld - 5
    echo "Hello wolrld - \$var"; //Hello wolrld - $var
    echo "Hello wolrld - \"$var\""; //Hello wolrld - "5"  //экранирование
    echo "Hello wolrld - {$var}3"; //Hello wolrld - 53


    ?>
</body>
</html>


<?php
/*
 *
 *
 *
 *
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
 echo 'Главный скрипт<br>'; // подключать файлы include or require
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



