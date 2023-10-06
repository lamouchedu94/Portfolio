<?php
$servername = "localhost";
$username = "paul";
$password = "3UhyXkth";

// try {
  $conn = new PDO("mysql:host=$servername;dbname=Portfolio", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "SELECT * FROM Me WHERE id=?";
  $result = $conn->prepare($sql);
$result->execute(array(1));
$info = $result->fetch();

//   echo $info['firstname'];
//   foreach ($result as $row) {
//     echo $row["firstname"];
//   }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css" />
    <title>Portfolio</title>
</head>

<body>
    <header>
            <div>
                <img class="pp" src="/img/kisspng-the-legend-of-zelda-the-minish-cap-the-legend-of-zelda-link-png-file-5a79869f03d344.7265453615179137590157.png" width="200" height="200">
            </div>
            <div class="NameMenu">
                <div><?php echo $info['firstname']?><?php echo $info['lastname']?></div><a href="tel:+"></a>
                <nav class="menu">
                    <div class="info">menu</div>
                    <ul class="menuContent">
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="./Projects.php">My Projects</a></li>
                        <li><a href="./header.php">About Me</a></li>
                    </ul>
                </nav>
            </div>

        </header>