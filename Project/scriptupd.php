<?php
include 'Classes/Content_type.php';
//header("Content-type:json/application");//явное указание для браузера json 
$vars = http_build_query($_POST); // Конвертируем все полученные данные с формы (для JSON не подойдет)
// в строку application/x-www-form-urlencoded:
  echo htmlspecialchars($_SERVER["PHP_SELF"])."<br>";
echo "Данные переданные на сервер:<br>"."ID".$_POST['ID']."<br>"."Тип данных:".$_POST["content_type"]."<br>"
."Название:".$_POST["name"]."<br>"
."Описание:".$_POST["descriptions"]."<br>"
."Партнер:".$_POST["partner"]."<br>"
."Год_создания:".$_POST["year_create"]."<br><br>";
echo "Данные, переданные в JSON:<br>";
$rez=json_encode($_POST);
echo $rez."<br>";
 $f=new Content($_POST["content_type"]);
 $f->UPDATE($_POST);
?>