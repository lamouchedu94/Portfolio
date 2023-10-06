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
$user_id = 1;
$result->execute(array($user_id));
$info = $result->fetch();

$sql = "SELECT * FROM Projects WHERE user_id=$user_id";
$result = $conn->query($sql);
// $result = $conn->prepare($sql);
// $result->execute(array(1));
$tabProjects = [];

foreach ($result as $row) {
    array_push($tabProjects, $row);
}

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
            <!-- <div>
                <img class="pp" src="/img/kisspng-the-legend-of-zelda-the-minish-cap-the-legend-of-zelda-link-png-file-5a79869f03d344.7265453615179137590157.png" width="200" height="200">
            </div> -->
            <div><h2> <?=$info['firstname'], " ", $info['lastname'];?> </h2></div><a href="tel:+"></a>

            <nav class="menu">
                <div class="option"><h4><a href="./index.php">Home</a></h4></div>
                <div class="option"><h4><a href="./Projects.php">My Projects</a></h4></div>
                <div class="option"><h4><a href="./aboutMe.php">About Me</a></h4></div>
                <!-- <ul class="menuContent">
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./Projects.php">My Projects</a></li>
                    <li><a href="./header.php">About Me</a></li>
                </ul> -->
            </nav>
            

        </header>