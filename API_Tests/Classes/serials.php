<?php
//include 'interface';
class Serials  {
 // Свойства
 public $name;
 public $descriptions;
 public $partner;
 public $year_create;
 public $id;
 public $conn;

 function __construct($conn)
 {
  $this->conn = $conn; 
 }

 // Methods
function delete($id)
{
  $st=array(
    'status'=>false
  );
  $sql="DELETE from serials where id =$id";
  $stmt = $this->conn->prepare($sql);
  $stmt->execute();
  $count = $stmt->rowCount();

if($count =='0'){
    echo "Failed !";
    return $st;
}
else{
   $st['status']=true;
   echo "Success  !";
   return $st;
}
  //print_r($data);
  //var_dump($data);
 // return $data;
}
 // Methods
 function update($newdata)
{
  $st=array(
    'status'=>false
  );
  $sql="UPDATE serials
    SET name='$newdata[name]', 
    description ='$newdata[descriptions]', 
    partner ='$newdata[partner]', 
    created ='$newdata[year_create]' 
    where id =$newdata[ID]";
  $stmt = $this->conn->prepare($sql);
  $stmt->execute();
  $count = $stmt->rowCount();

if($count =='0'){
    echo "Failed !";
    return $st;
}
else{
   $st['status']=true;
   echo "Success  !";
   return $st;
}
  //print_r($data);
  //var_dump($data);
 // return $data;
}
 public function read($id)
  {
   
    $sql="SELECT * FROM serials where id ='$id'";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    $data= $stmt->fetch();
    //print_r($data);
    //var_dump($data);
    return $data;
}
public function GetAll()
  {
   
    $sql="SELECT * FROM serials order by id desc";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    $data= $stmt->fetchAll();
    //print_r($data);
    //var_dump($data);
    return $data;
}
public function set($serial) 
{
  try {
$sql = "INSERT serials(name, description, partner, created) VALUES (?,?, ?, ?);";

$stmt = $this->conn->prepare($sql);
     $prepered = array($serial['name'],$serial['descriptions'],$serial['partner'],$serial['year_create']);
 $stmt->execute($prepered);
 $lastid=$this->conn->lastInsertId();
 return $this->read($lastid);
 //$rz=json_encode();

$sth = null; 
$dbh = null;
}
 catch (PDOException $e)
 {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
}
function countrows()
{
  $sql="SELECT count(*) FROM serials";
  $stmt = $this->conn->prepare($sql);
  $stmt->execute();
  $data= $stmt->fetch()[0];
  var_dump($data);
  echo"Всего записей:".$data;
}
}
?>