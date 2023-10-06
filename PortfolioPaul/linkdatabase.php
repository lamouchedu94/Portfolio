<?php
$servername = "localhost";
$username = "paul";
$password = "3UhyXkth";

// try {
  $conn = new PDO("mysql:host=$servername;dbname=Portfolio", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "SELECT * FROM Me";
  $result = $conn->query($sql);

  // echo "Connected successfully";
// } catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
// }
?>