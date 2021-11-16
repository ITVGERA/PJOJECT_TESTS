<?php
include 'Classes/serials.php';
include 'Classes/films.php';
include 'Classes/db.php';
header("Content-type:json/application");//явное указание для браузера json 
$d=new DataBase( "127.0.0.1","root","","testbd_");
$conn=$d->connect();
$response = array(
    'status'=>false,
    'message'=>'EMPTY_RESULT'
);
// $vals=array//------нужно для теста 
// (
//     'name'=>"Testing",
//     'descriptions'=>"Hello my dear",
//     'partner'=>"partnerTesting",
//     'year_create'=>"1999-01-01"
// );
// $valf=array
// (
//     'name'=>"TestingFilms",
//     'descriptions'=>"Hello my dearFilm",
//     'partner'=>"partnerTesting",
//     'year_create'=>"2001-01-01"
// );
//------------------get прочтение в JSON
// if(isset($_GET["films"]))
// {
//     $id = $_GET["films"];
//     $f=new Films($conn);
//     $rez=json_encode($f->read($id));//вывод по id
// }
// if(isset($_GET["serials"]))
// {
//     $id = $_GET["serials"];
//     $f=new Serials($conn);
//     $rez=json_encode($f->read($id));//вывод по id  
// }
// if(!empty($rez) && $rez != 'false'){

//     echo $rez;
//     //var_dump($rez);

// }else{
//     echo json_encode($response);

// }
//------------------get прочтение в JSON
//------------------set установка POST
$body = file_get_contents('php://input');
if (!empty($body)) {
    $data = json_decode(urldecode($body), true);
    //var_export($data);
}
if(!isset($data["content_type"]) || ($data["content_type"]!='serial' && $data["content_type"]!='film'))
{
    echo json_encode($response);
    die();
}
if  (
    !isset($data["name"])||
    !isset($data["descriptions"])||
    !isset($data["partner"])||
    !isset($data["year_create"])
    )
    {
        echo json_encode($response);
        die();
    }
if($data["content_type"]=="film")  
    $content_obj=new Films($conn);
elseif($data["content_type"]=="serial")
$content_obj=new Serials($conn);

    $rez=json_encode($content_obj->set($data));
   
    echo $rez;
//------------------set установка POST
//var_dump($rez);
// //-----------serials

// $s=new Serials($conn);
// //$s->read(1);//вывод по id
// //$s=new Serials($conn);//запись нового сериала
// //$s->set($val);
// $s->countrows();
// //-----------serials

//-----------films

// $f=new Films($conn);
// //$f->read(14654);//вывод по id
// //$s=new Serials($conn);//запись нового сериала
// //$f->set($val);
// $f->countrows();//вывод кол-во фильмов
// //-----------films

?>