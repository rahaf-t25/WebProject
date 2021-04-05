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
    <title>Login</title>
</head>
<body>
    <title>Login</title>
    <style>
  <?php include "css/style.css" ?>
</style>
</head>
<body>
    <h1>Welcome to online quiz system</h1>
    <div id="main-wrapper">
        <center><h2>Login Form</h2>
            <!-- <img src="images/quiz.jpg" class="quizimage"> -->
        
        </center>

    

    <form class="myform" action="login.php" method="POST">
         <label id="lable-user" for="user">Username: </label>
         <input class="inputevalues" id="username" type="text" name="username" placeholder="Enter Your Email" require><br>
         <label id="lable-pass" for="password">Password: </label>
         <input class="inputevalues" id="password" type="password" name="password" placeholder="Enter Your Password" require><br>
         <button name="signin" type="submit" value="login" id="signin_btn">Login</button>
         <a href="Registration.php"><input type="button" value="back" id="back_btn"></a>

    </form>

    <?php
			if(isset($_POST['signin']))
			{
				@$username=$_POST['username'];
				@$password=$_POST['password'];
				$query = "select * from user_registration where username='$username' and password='$password' ";
				//echo $query;
				$query_run = mysqli_query($conn,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
				{
					if(mysqli_num_rows($query_run)>0)
					{
					$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					
					$_SESSION['username'] = $username;
					$_SESSION['password'] = $password;
					
					header( "Location: homepage.php");
					}
					else
					{
						echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Database Error")</script>';
				}
			}
			else
			{
			}
		?>
</div>
</body>
</html>