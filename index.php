<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= 'Самообучение' ?></title>
</head>
<!--<meta http-equiv="refresh" content=3> <!-- Refresh every 2 sec -->-->
<body bgcolor="#d3d3d3"><H1>
    <?php





    ?>
</H1></body>
</html>
<?php
/*
 *
 *
 *
 */

// /* // условный оператор if
//    if(/*условие*/){
//        //любой код
//    }
//    else{
//        //любой код
//    }; */

 /* // операторы сравнения // оно не выводится
    $x = 1;
    $y = '1';

    echo $x < $y; '<br>';
    echo $x <= $y; '<br>';
    echo $x > $y; '<br>';
    echo $x >= $y; '<br>';

    echo $x == $y; '<br>';
    echo $x != $y; '<br>';
    echo $x <> $y; '<br>';
    echo $x === $y; '<br>';
    echo $x !== $y; '<br>';

    echo $x <=> $y; '<br>';// возвращает числовое значение
 *
 * // поразрядные операторы
      echo ~45; // -46
 *
 * $var = 3;
        echo $var++; // 3 постфикс
        echo"<br>";
        echo $var++;// 4
        echo"<br>";
        echo ++$var; // 6 префиксная запись
 *
 *  // 4 - хитрый способ извлечения корня
        echo 16 ** 0.5;
 * // больше чем арифметика
    echo 4 ** 3; // 64 возведение в степень
    echo"<br>";
    echo 8 % 3;// 2 остаток от деления
    echo"<br>";
    echo (int) (8 % 3); //2 целая часть от деления
    echo"<br>";
 *
 * // оператор точка . конкатенация строк
    $num = 7;
    $num .= '+5';
    echo 'выводим на экран число ' . $num . ' другой текст' . '<br>'; // выводим на экран число 7+5 другой текст
    echo 'выводим на экран число ' , $num , ' другой текст'; // выводим на экран число 7+5 другой текст

 *
 *  class ConstClass{
             const NAME = 'str';
         }
         if(defined('ConstClass::POS')){
             echo 'Константа определена';
         }
         else {
             echo 'Константа НЕопределена'; // Константа НЕопределена
         }
 *
 *  class ConstClass{
             const NAME = 'str';
         }
         if(defined('ConstClass::NAME')){
             echo 'Константа определена';// Константа определена
         }
 *
 *   //служебные константы
    echo 'Путь к файлу: ' . __DIR__ . '<br>'; // Путь к файлу: C:\xampp\htdocs\php_training

    require_once '../lesson13/point.php';// указания относительного пути выйти на папку вверх и зайти в папку

 *
 *
 *  //служебные константы
    echo 'имя файла где написан скрипт' .  __FILE__ . '<br>';
    echo 'номер строки где произошел вызов LINE ' . __LINE__ . '<br>';
 *
 * // константы
    define('NUMBER', 'Hello World');
    echo NUMBER; // Hello World
    echo Number; // Warning

    echo constant('NUMBER'); // Hello World

// создание контастант на лету
    $num = mt_rand(1,10);// здесь какой то число рандомно создается
    $name = "VALUE($num)";//
    define($name, $num);//
    echo constant($name);//
 *
 *   class Point{
        public $x;
        public $y;
        public static $num = 120;

    }
echo Point::$num;// 120 -обращение к статической переменной
 *
 *  // области видимости
    class Point{
        public $x;
        private $y;
        protected $z;

    }
 *
 *    require 'point.php';

        $p1 = new Point;
        $p1->x=10;
        $p1->y=34;

       $p2 = new Point;
       $p2->x=3;
       $p2->y=10;
        // высчитать растояние между двумя точками
    $distance = sqrt(pow(($p2->x-$p1->x),2)
        +pow(($p2->y-$p1->y),2));
    echo $distance;
 *
 * echo pow(2,8); // 256
        echo sqrt(16);// 4
 *
 *  require 'point.php';

        $first = new Point;
        $first->x=3;
        $first->y=3;

        $second = clone $first;// клонирование
        $second->x=5;
        $second->y=5;

        echo "x: {$first->x}, y: {$first->y}"; // x: 3, y: 3
        echo "<br>";
        echo "x: {$second->x}, y: {$second->y}"; // x: 5, y: 5
 *
 * require 'point.php';

        $first = new Point;
        $first->x=3;
        $first->y=3;

        $second = $first;
        $second->x=5;
        $second->y=5;

        echo "x: {$first->x}, y: {$first->y}"; // x: 5, y: 5
        echo "<br>";
        echo "x: {$second->x}, y: {$second->y}"; // x: 5, y: 5
 *
 *  $first = $second = 2;
        $first = 3;
        echo $first . '<br>' . $second . '<br>'; // 3 2
 *
 *  $one = 5;
        $two = &$one;// ссылка
        $two = 3;// изменили вторую переменную и первая по ссылке изменилась
        echo '<br>' . $one; // 3 потому что применена ссылка
 *
 */  //require 'point.php'; */
 /* class Point{
                                public $x;
                                public $y;
                                 public static $num= 120; */
  /*
       $point1 = new Point();
       $point1->x = 13;
       $point1->y = 2;
       echo $point1->x;

    $point2 = new Point;
    $point2->x = 11;
    $point2->y = 47;
    echo $point2->x;

    unset($point2);//unset() удаляет перечисленные переменные.
    echo $point2->x;//ничего не выведется кроме ошибки

    echo Point::$num; // вызвали статик переменную
 */
/* // ceil округляет дробь к большему целому числу
    echo ceil(4.3); // 5
 *
     echo round(21.43893482, 2); // округление чисел до 2го знака после запятой

 *
 // явное приведение типов
    $float = 4.3;
    echo $number = (int)$float;// приведение к целому типу 4
    echo $number = (integer)$float;// приведение к целому типу 4
    echo $number = (bool)$float;// приведение к boolean
    echo $number = (boolean)$float;// приведение к boolean
    echo $number = (float)$float;// приведение к double
    echo $number = (double)$float;// приведение к double
    echo $number = (real)$float;// приведение к double
    echo $number = (string)$float;// приведение к строке
    echo $number = (array)$float;// приведение к массиву
    echo $number = (object)$float;// приведение к обьекту
 *
  echo true;// преобразуется в единицу
        echo false;// преобразется в пустую строку
 *
 // преобразование к логическому типу
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
 *
// преобразование к числу (неявное приведение типов)
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