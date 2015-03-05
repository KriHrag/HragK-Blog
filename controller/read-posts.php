<?php

require_once(__DIR__ . "/../model/config.php");

$query = "SELECT * FROM posts";
$result = $_SESSION["connection"]->query($query);

if($result){
    while($row = mysqli_fetch_array($result)) {
        echo "<div class='post' style='border: 5px solid black; border-radius: 20px; width: 50%; margin: auto; margin-bottom: 10px; '>";
        echo "<h2 class='text'>" . $row['title'] . "</h2>";
        echo "<br />";
        echo "<p class='text'>" . $row['post'] . "</h1>";
        echo "<br />";
        echo "</div>";
    }
}

//added color to my text and desighned kind of my blog