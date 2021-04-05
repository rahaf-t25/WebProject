<?php
	session_start();
    require_once("dbconfig/conf.php");
    error_reporting(0);
	
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Congrats!!</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <form>

    <h1>CONGRATS!!! <?php echo $_SESSION['username']; ?> </h1>
  
    </br></br></br></br>
    <div class="containar">
        <h1> <?php

        $userName = $_SESSION['username'];
        $result =  mysqli_query($conn, "SELECT next_lesson FROM user_registration WHERE username = '$userName'");
        $row = mysqli_fetch_array($result);
        $next_lesson = $row['next_lesson'];
       

        if($next_lesson === '1' || $next_lesson === '2'  || $next_lesson === '3'  ){

            $de =  mysqli_query($conn, "SELECT Q1 FROM user_registration WHERE username = '$userName'");
            $row5 = mysqli_fetch_array($de);
            $Q1 = $row5['Q1'];

            $da =  mysqli_query($conn, "SELECT Q2 FROM user_registration WHERE username = '$userName'");
            $row6 = mysqli_fetch_array($da);
            $Q2 = $row6['Q2'];

            $daa =  mysqli_query($conn, "SELECT Q3 FROM user_registration WHERE username = '$userName'");
            $row8 = mysqli_fetch_array($daa);
            $Q3 = $row8['Q3'];


            $result4 =  mysqli_query($conn, "SELECT total FROM user_registration WHERE username = '$userName'");
            $row9 = mysqli_fetch_array($result4);
            $total = $row9['total'];




             echo "your Q1 Mark is 5/".$Q1;
             echo "<br> your Q2 Mark is 5/".$Q2;
             echo "<br> your Q3 Mark is 5/".$Q3;
             $sum_total = $Q1 + $Q2 + $Q3 ;

             echo "<br> your total is 15/" .$sum_total;

        }
  

        $conn->close();
        ?>
</h1>
    </div>
</form>
     
</body>

</html>

