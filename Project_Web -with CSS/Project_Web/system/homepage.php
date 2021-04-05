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
    <title>home page</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="main-wrapper">
		<center><h2>Mathematics Lessons and Quizzes</h2></center>
        <center><h3>Welcome <?php echo $_SESSION['username']; ?>
<br>



        <?php

        $userName = $_SESSION['username'];
        $result =  mysqli_query($conn, "SELECT next_lesson FROM user_registration WHERE username = '$userName'");
        $row = mysqli_fetch_array($result);
        $next_lesson = $row['next_lesson'];
        if($next_lesson === '1'){
            echo " your next lesson is :$next_lesson";

        }

        if($next_lesson === '2'){
            echo " your next lesson is :$next_lesson";


        }

        if($next_lesson === '3'){
            echo " your next lesson is :$next_lesson";


        }
  

        $conn->close();
        ?>










        </h3></center>
		
		
				<!-- <button class="logout_button" type="submit">Log Out</button>	 -->
			
		
    </div>
    <form>
    
    <h2>List of lessons:</h2>
    <a href="lesson1.php"><input class="lessons" type="button" value="Lesson#1:Evaluating Absolute Values" id="lesson1_btn"></a>
    <a href="lesson2.php"><input class="lessons" type="button" value="Lesson#2:Linear Equation" id="lesson2_btn"></a>
    <a href="lesson3.php"><input class="lessons" type="button" value="Lesson#3:Linear Systems With Two Variables" id="lesson3_btn"></a>
    <br><br>
    <h2>Your Quizzes History: </h2>
    <a href="Last.php"><button name="logout" class="history_button" type="button"> History </button></a>	
   <br><br>
   <a href="Registration.php"><button name="logout" class="logout_button" type="submit">Log Out</button></a>	
   <?php
   if(isset($_POST['logout']))
   {
       session_destroy();
       header( "Location: Registration.php");
   }

    ?>
</form>
</body>
</html>