<?php
$servername = "localhost";
$username = "root"; // For MYSQL the predifined username is root
$password = ""; // For MYSQL the predifined password is " "(blank)
$db = "online_quiz";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);


// Check connection

 if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
}

echo "";

?>