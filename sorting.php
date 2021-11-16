<?php
// $n=0;
// $a=array();
// for($i=0;$i<10;$i++)
// {
// $n=rand(-100,100);
// array_push($a,$n);
// }
// $b=$a;
// print_r($a);
// echo "<br>";
// print_r($b);
// echo "<br>";
// $start = microtime(true);
// asort($a);
// //print_r($a);
// echo "<br>";
// $time = microtime(true) - $start;
// // echo $time;
// $start1 = microtime(true);
// // перебираем массив
// for ($j = 0; $j < count($b) - 1; $j++){
//     for ($i = 0; $i < count($b) - $j - 1; $i++){
//         // если текущий элемент больше следующего
//         if ($b[$i] > $b[$i + 1]){
//             // меняем местами элементы
//             $tmp_var = $b[$i + 1];
//             $b[$i + 1] = $b[$i];
//             $b[$i] = $tmp_var;
//         }
//     }
// }
// $time1 = microtime(true) - $start1;
// echo "1:".$time."<br>2:".$time1."<br>";
// echo  phpinfo();
// header("Content-type:json/application");//явное указание для браузера json 
// $json = file_get_contents('https://journal.bsuir.by/api/v1/portal/employeeSchedule?employeeId=530583');

// $array = json_decode($json);

// // $urlPoster=array();
// // foreach ($array as $value) { 
// //     $urlPoster[]=$value->urlPoster;
// // }

// print_r($array);
// $regexp = "/к[а-яё]т/ui";

// // строки, к которым мы будем по очереди применять регулярку
// $lines = [
//   'рыжий кот',
//   'рыжий крот',
//   'кит и кот'
// ];

// foreach ($lines as $line) {
//     echo "Строка: $line<br>";

//     // сюда будет помещено первое
//     // совпадение с шаблоном
//     $match = [];
//     if (preg_match_all($regexp, $match,PREG_SET_ORDER)) {
//         echo "+ Найдено слово '{$match[0][0]}'<br>";
//     } else {
//         echo "- Ничего не найдено<br>";
//     }
// }
$a=0;
$b=0;
$c=++$a&&++$b;
echo "a: ".$a."b: ".$b."c: ".$c ;
?>