<?php
class Content {
 // Свойства
 public $content_type;

 function __construct($content_type)
 {
  $this->content_type = $content_type; 
 }
 // Methods

function GETALL()///ПРосмотр всех
{
    $curl_sessions = curl_init(); 
    $var=array(
      'content_type'=>$this->content_type,
      'action'=>__FUNCTION__
    );
    $vars = http_build_query($var); // Конвертируем все полученные данные с формы (для JSON не подойдет)
$url = 'http://localhost/PJOJECT_TESTS/API_Tests/indexgetall.php';//сервер для обработки
//step2
curl_setopt($curl_sessions,CURLOPT_URL,$url);
curl_setopt($curl_sessions,CURLOPT_RETURNTRANSFER,true);
curl_setopt($curl_sessions,CURLOPT_HEADER, 0);
 $headers = array(
   
    'Content-Type: json/application',
   
  ); 
curl_setopt($curl_sessions, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl_sessions, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($curl_sessions, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl_sessions, CURLOPT_POST, 1);// Указываем, что у нас POST запрос:
curl_setopt($curl_sessions, CURLOPT_POSTFIELDS, $vars); // Добавляем данные для отправки:
//step3
$result=curl_exec($curl_sessions);

//step4
curl_close($curl_sessions);
//step5
echo "<br>Данные из таблицы $this->content_type в JSON :<br>";
echo $result;
}

function READ($id)//Просмотр по ID одного
{
    $curl_sessions = curl_init(); 
    
    echo __FUNCTION__;
    $var=array(
      'content_type'=>$this->content_type,
      'action'=>__FUNCTION__,
      'id'=>$id
    );
    $vars = http_build_query($var); // Конвертируем все полученные данные с формы (для JSON не подойдет)
$url = 'http://localhost/PJOJECT_TESTS/API_Tests/indexgetall.php';//сервер для обработки
//step2
curl_setopt($curl_sessions,CURLOPT_URL,$url);
curl_setopt($curl_sessions,CURLOPT_RETURNTRANSFER,true);
curl_setopt($curl_sessions,CURLOPT_HEADER, 0);
 $headers = array(
   
    'Content-Type: json/application',
   
  ); 
curl_setopt($curl_sessions, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl_sessions, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($curl_sessions, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl_sessions, CURLOPT_POST, 1);// Указываем, что у нас POST запрос:
curl_setopt($curl_sessions, CURLOPT_POSTFIELDS, $vars); // Добавляем данные для отправки:
//step3
$result=curl_exec($curl_sessions);

//step4
curl_close($curl_sessions);
//step5
echo "<br>Данные из таблицы $this->content_type в JSON :<br>";
echo $result;
}

function INSERT($obj)//Вставка в БД
{
    $curl_sessions = curl_init(); 
    $var=array(
      'action'=>__FUNCTION__,
    );
    $newdata=array_merge($obj,$var);
    $rez=json_encode($newdata);
    //step1
$curl_sessions = curl_init(); 
$url = 'http://localhost/PJOJECT_TESTS/API_Tests/indexgetall.php';//сервер для обработки
//step2
curl_setopt($curl_sessions,CURLOPT_URL,$url);
curl_setopt($curl_sessions,CURLOPT_RETURNTRANSFER,true);
curl_setopt($curl_sessions,CURLOPT_HEADER, false);
 $headers = array(
   
    'Content-Type: json/application',
  ); 
curl_setopt($curl_sessions, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl_sessions, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($curl_sessions, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl_sessions, CURLOPT_POST, 1);// Указываем, что у нас POST запрос:
curl_setopt($curl_sessions, CURLOPT_POSTFIELDS, urlencode($rez)); // Добавляем данные для отправки:
//step3
$result=curl_exec($curl_sessions);
$status = curl_getinfo($curl_sessions, CURLINFO_HTTP_CODE);

//step4
curl_close($curl_sessions);
//step5
echo "<br>Данные принятые в JSON:<br>";
echo $result;
}


function UPDATE($obj)//Обновление информации
{
    $curl_sessions = curl_init(); 
    $var=array(
      'action'=>__FUNCTION__,
    );
    $newdata=array_merge($obj,$var);
    print_r($newdata);
    $rez=json_encode($newdata);

    //step1
$curl_sessions = curl_init(); 
$url = 'http://localhost/PJOJECT_TESTS/API_Tests/indexgetall.php';//сервер для обработки
//step2
curl_setopt($curl_sessions,CURLOPT_URL,$url);
curl_setopt($curl_sessions,CURLOPT_RETURNTRANSFER,true);
curl_setopt($curl_sessions,CURLOPT_HEADER, false);
 $headers = array(
   
    'Content-Type: json/application',
  ); 
curl_setopt($curl_sessions, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl_sessions, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($curl_sessions, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl_sessions, CURLOPT_POST, 1);// Указываем, что у нас POST запрос:
curl_setopt($curl_sessions, CURLOPT_POSTFIELDS, urlencode($rez)); // Добавляем данные для отправки:
//step3
$result=curl_exec($curl_sessions);
$status = curl_getinfo($curl_sessions, CURLINFO_HTTP_CODE);

//step4
curl_close($curl_sessions);
//step5
echo "<br>Данные принятые в JSON:<br>";
echo $result;
}

function DELETE($id)//Удаление по ID одного
{
    $curl_sessions = curl_init(); 
    
    echo __FUNCTION__;
    $var=array(
      'content_type'=>$this->content_type,
      'action'=>__FUNCTION__,
      'id'=>$id
    );
    $vars = http_build_query($var); // Конвертируем все полученные данные с формы (для JSON не подойдет)
$url = 'http://localhost/PJOJECT_TESTS/API_Tests/indexgetall.php';//сервер для обработки
//step2
curl_setopt($curl_sessions,CURLOPT_URL,$url);
curl_setopt($curl_sessions,CURLOPT_RETURNTRANSFER,true);
curl_setopt($curl_sessions,CURLOPT_HEADER, 0);
 $headers = array(
   
    'Content-Type: json/application',
   
  ); 
curl_setopt($curl_sessions, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl_sessions, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($curl_sessions, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl_sessions, CURLOPT_POST, 1);// Указываем, что у нас POST запрос:
curl_setopt($curl_sessions, CURLOPT_POSTFIELDS, $vars); // Добавляем данные для отправки:
//step3
$result=curl_exec($curl_sessions);

//step4
curl_close($curl_sessions);
//step5
echo "<br>Данные из таблицы $this->content_type в JSON :<br>";
echo $result;
}
}
?>