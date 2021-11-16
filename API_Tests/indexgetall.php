<?php
include 'Classes/serials.php';
include 'Classes/films.php';
include 'Classes/db.php';
header("Content-type:json/application");//явное указание для браузера json 
$d=new DataBase( "127.0.0.1","root","","itv2_local");
$conn=$d->connect();
$response = array(
    'status'=>false,
    'message'=>'EMPTY_RESULT'
);
$body = file_get_contents('php://input');
//var_dump($body);

if(strstr($body, 'INSERT')||strstr($body, 'UPDATE')) {
  
    $output = json_decode(urldecode($body), true);
    //  var_export($output);
  }
  else
  {
 parse_str($body, $output);
 //print_r($output);
  }
if($output['content_type']==='film')  
{
    //echo "Это добавиться в фильмы<br>";
    $content_obj=new Films($conn);
}
else
{   // echo "Это добавиться в сериалы<br>";
    $content_obj=new Serials($conn);
}
if($output['action']==='GETALL') 
{
    $rez=json_encode($content_obj->GetAll());
    echo $rez;
}   
elseif($output['action']==='READ')
{
$rez=json_encode($content_obj->read($output['id']));
    echo $rez;
}
elseif($output['action']==='INSERT')
{
    $rez=json_encode($content_obj->set($output));
    echo $rez;
}
elseif($output['action']==='UPDATE')
{
    $rez=json_encode($content_obj->update($output));
    echo $rez;
}
elseif($output['action']==='DELETE')
{
    $rez=json_encode($content_obj->delete($output['id']));
    echo $rez;
}
?>