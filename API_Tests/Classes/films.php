<?php
//include 'interface.php';
class Films  {
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
 function read($id)
  {
   
    $sql="SELECT * FROM films where id ='$id'";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    $data= $stmt->fetch();
    //print_r($data);
    //var_dump($data);
    return $data;
}

// Methods
function delete($id)
{
  $st=array(
    'status'=>false
  );
  $sql="DELETE from films where id =$id";
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
  $sql="UPDATE films
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
public function GetAll()
  {
   
    $sql="SELECT  *  FROM films order by id desc";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    $data= $stmt->fetchAll();
    //print_r($data);
    //var_dump($data);
    return $data;
}
function set($films) 
{
  try {
$sql = "INSERT films(name, description, partner, created) VALUES (?,?, ?, ?);";

$stmt = $this->conn->prepare($sql);
     $prepered = array($films['name'],$films['descriptions'],$films['partner'],$films['year_create']);
 $stmt->execute($prepered);
 $lastid=$this->conn->lastInsertId();
 return $this->read($lastid);
 
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
  $sql="SELECT count(*) FROM films";
  $stmt = $this->conn->prepare($sql);
  $stmt->execute();
  $data= $stmt->fetch()[0];
  //var_dump($data);
  echo"Всего записей:".$data;
}
}
?>