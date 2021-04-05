<?php
session_start();
ob_start();
require_once("dbconfig/conf.php");

$username = $_SESSION['username'];


$firs = $_POST['q1'];
$sec = $_POST['q2'];
$third = $_POST['q3'];
$forth = $_POST['q4'];
$fifth = $_POST['q5'];

$count = 0;
$total = 0;

if($firs === "b"){
$count++;
$total++;
}

if($sec === "b"){
$count++;
$total++;
}

if($third === "b"){
$count++;
$total++;
}

if($forth === "b"){
$count++;
$total++;
}

if($fifth === "b"){
$count++;
$total++;
}



$sql = "UPDATE user_registration SET Q3 = '$count', total = '$total', next_lesson = '3' WHERE username = '$username'";
if (mysqli_query($conn, $sql)) {
  $_SESSION['totalmark'] = $total;

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="styles/userMark.css">
 <link rel="stylesheet" href="css/style.css">
 <script src="https://kit.fontawesome.com/d2fa2e228d.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <form>




      <div class="child2">
        <div class="h1pdiv">
        <h1 class="congrats">congratulation</h1>
        <p class="first-p">
          <?php
           echo " your marks is 5/$count";
          ?>
        </p>

        </div>
        <a class="nextlesson" href="Last.php"><i class="fas fa-arrow-right"> congratulations!! your done!! See your History</i></a>
      </div>

    </form>
  </body>
</html>

