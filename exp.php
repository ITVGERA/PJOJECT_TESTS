<?php
//I
//-----------------------------------------------------------------Процедурный подход подключения к БД на сервере
// $servername = "178.124.141.170";
// $username = "root";
// $password = "Ex1h7G";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password);

// // Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully<br>";
// mysqli_set_charset($conn, "utf8mb4");
// $sql = "SELECT * FROM itv2.films";
// $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) {
//   // output data of each row
//   while($row = mysqli_fetch_assoc($result)) {
//     //echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["description"]. "<br>";
//     print_r($row);
//      echo "<br><br>";
//   }
// } else {
//   echo "0 results";
// }

// mysqli_close($conn);
//-----------------------------------------------------------------Процедурный подход подключения к БД на сервере

//II
//-----------------------------------------------------------------ООП подход подключения к БД на localhost

// $servername = "127.0.0.1";
// $username = "root";
// $password = "";
// $dbname = "testbd_";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully<br>";
// mysqli_set_charset($conn, "utf8mb4");
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

//  $sql = "SELECT * FROM testbd_.films f;";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     print_r($row);
//     echo "<br><br>";
//   }
// } else {
//   echo "0 results";
// }
// $conn->close();
//-----------------------------------------------------------------ООП подход подключения к БД на localhost


// //III
// // //-----------------------------------------------------------------ООП подход подключения к БД на localhost и выдача данных из таблиц films and serials с парнером start и статусом 1
// $servername = "127.0.0.1";
// $username = "root";
// $password = "";
// $dbname = "testbd_";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully<br>";
// mysqli_set_charset($conn, "utf8mb4");
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

//  $sql = "SELECT * FROM testbd_.serials s
//  where partner like 'start' and status=1
//  union
//  select * from testbd_.films
//  where partner like 'start' and status=1";
// $result = $conn->query($sql);
// $rez=array();
// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     array_push($rez,$row);
//     //print_r($row);//вывод информации на экран
//    // echo "<br><br>";
//   }
//   //print_r($rez);
//   header("Content-type:json/application");//явное указание для браузера json 
// echo json_encode($rez);

// } else {
//   echo "0 results";
// }
// $conn->close();
// // //-----------------------------------------------------------------ООП подход подключения к БД на localhost

// // //IV
// // //-----------------------------------------------------------------ООП подход подключения к БД на localhost и изменение данных из таблиц films and serials с парнером mediateka и статусом 1 на статус 0
// $servername = "127.0.0.1";
// $username = "root";
// $password = "";
// $dbname = "testbd_";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully<br>";
// mysqli_set_charset($conn, "utf8mb4");
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

//  $sql = "UPDATE serials
//  SET status = 0
//  where partner = 'amediateka';";
// $result = $conn->query($sql);
// $rez=array();
// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     array_push($rez,$row);
//     //print_r($row);//вывод информации на экран
//    // echo "<br><br>";
//   }
//   //print_r($rez);
//   header("Content-type:json/application");//явное указание для браузера json 
// echo json_encode($rez);

// } else {
//   echo "0 results";
// }
// $conn->close();
// // //-----------------------------------------------------------------ООП подход подключения к БД на localhost

// //V
// //-----------------------------------------------------------------ООП подход подключения к БД на localhost и внесение данных в таблицу films с парнером test и статусом 1 
// $servername = "127.0.0.1";
// $username = "root";
// $password = "";
// $dbname = "testbd_";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully<br>";
// mysqli_set_charset($conn, "utf8mb4");
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

//  $sql = "DELETE FROM films
//  WHERE partner like 'Test';";
// $result = $conn->query($sql);
// $rez=array();
// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     array_push($rez,$row);
//     //print_r($row);//вывод информации на экран
//    // echo "<br><br>";
//   }
//   //print_r($rez);
//   header("Content-type:json/application");//явное указание для браузера json 
// echo json_encode($rez);

// } else {
//   echo "0 results";
// }
// $conn->close();
// //-----------------------------------------------------------------ООП подход подключения к БД на localhost
// //-----------------------------------------------------------------Форма регистрации
?>