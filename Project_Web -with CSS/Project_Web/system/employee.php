<?php
	session_start();
    require_once("dbconfig/conf.php");
    error_reporting(0);
	
?>
<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>username</th>
<th>password</th>
<th>Q1</th>
<th>next_lesson</th>
</tr>
<?php
$servername = "localhost";
$username = "root"; // For MYSQL the predifined username is root
$password = ""; // For MYSQL the predifined password is " "(blank)
$db = "online_quiz";
// Create connection
$con = new mysqli($servername, $username, $password,$db);


// Check connection

 if ($con->connect_error) {

    die("Connection failed: " . $con->connect_error);
}

echo "";

$sql = "SELECT username ,password ,Q1 , next_lesson from user_registration";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo 
"<tr><td>" . $row["username"]. "</td><td>" . $row["password"]. "</td><td>" . $row["Q1"]. "</td><td>" . $row["next_lesson"]. "</td></tr>" ;
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>