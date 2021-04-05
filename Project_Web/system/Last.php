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
    <title>Test</title>
    <style>
        h1 {
            text-align: center;
            color: rgb(0, 10, 66);
        }
        
        p {
            text-align: center;
            color: rgb(201, 34, 34);
            font-size: 14x;
        }
        
        .score-box {
            margin-left: 48%;
        }
        
        .score {
            position: absolute;
            width: 50px;
            height: 50px;
            line-height: 20px;
            border-radius: 50%;
            background-color: #2e6868;
            color: #ffffff;
        }
        
        .score p {
            color: wheat;
        }
        
        .score-box ul {
            padding: 10px 0px 0px 0px;
            list-style: none;
            margin-left: 60px;
            font-size: 16px;
            color: black;
        }
        
        .quiz-box {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            text-align: center;
        }
        
        .quiz h1 {
            color: rgb(58, 0, 0);
        }
        
        .quiz p {
            margin-left: 150px;
            align-self: center;
            padding: 50px;
            font-size: 20px;
            background-color: #243f79;
            border-radius: 50%;
            color: #ffffff;
            text-align: center;
            width: 50px;
            height: 50px;
        }
    </style>
</head>

<body>

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
     
</body>

</html>

