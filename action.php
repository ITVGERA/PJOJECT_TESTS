<?php

$firstname = "не определено";
$lastname = "не определен";
$sex = "не определен";
$age = "не определен";
if(isset($_POST["firstname"]))
{
  
    $firstname = $_POST["firstname"];
}
if(isset($_POST["lastname"]))
{
  
    $lastname = $_POST["lastname"];
}
if(isset($_POST["sex"]))
{
  
    $sex = $_POST["sex"];
}
if(isset($_POST["age"]))
{
  
    $age = $_POST["age"];
}
echo "Имя: $firstname <br> Фамилия: $lastname <br> Пол: $sex <br> Возраст: $age";
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "testbd_";
//--------------------------------------MYSQLI
// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// if (!$conn) 
// {
//   die("Connection failed: " . mysqli_connect_error());
// }
// echo "<br>Connected successfully<br>";
// mysqli_set_charset($conn, "utf8mb4");
// // Check connection
// if ($conn->connect_error)
//  {
//   die("Connection failed: " . $conn->connect_error);
// }
// $sql = "INSERT Users(FirstName, LastName, Sex, Age) VALUES ('$firstname','$lastname', '$sex', '$age');";
// $result = $conn->query($sql);
// if ($result->num_rows > 0) 
// {
//     echo "Данные добавлены";
//   }
// $conn->close();
//--------------------------------------MYSQLI

//--------------------------------------PDO
try {
    $conn = new PDO("mysql:host=localhost;dbname=testbd_", "root", "");
$sql = "INSERT Users(FirstName, LastName, Sex, Age) VALUES (?,?, ?, ?);";
$stmt = $conn->prepare($sql);
     $prepered = array( $firstname,$lastname, $sex, $age);
 $stmt->execute($prepered);
 $affectedRowsNumber = $stmt->lastInsertId();
echo "<br>В таблицу Users добавлено строк: $affectedRowsNumber";

$sth = null; 
$dbh = null;
}
 catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
//--------------------------------------PDO
?>