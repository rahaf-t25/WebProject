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
    <title>Online Quizzes</title>
</head>
<body>
    <title>Online Quizzes</title>
    <style>
  <?php include "css/style.css" ?>
</style>
</head>
<body>
    <h1>Welcome to online quiz system</h1>
    <div id="main-wrapper">
        <center><h2>Registration Form</h2>
            <img src="images/quiz.jpg" class="quizimage">
        
        </center>

    

    <form class="myform" action="Registration.php" method="POST">
       
         <label id="lable-email" for="email">Username: </label>
         <input class="inputevalues" id="username" type="text" name="username" placeholder="Email"><br>
         <span class="errors"></span>
         <label id="lable-pass" for="password">Password: </label>
         <input class="inputevalues" id="password" type="password" name="password" placeholder="Password"><br>
         <label id="lable-pass" for="password">Confirm Password: </label>
         <input class="inputevalues" id="passwordcon" type="password" name="passwordconf" placeholder="Confirm password"><br>
         <button name="signup" type="submit" value="Registrar" id="reg_btn">Registrar</button>
         <a href="login.php"><input type="button" value="login" id="login_btn"></a>







    </form>

    <?php





if(isset($_POST['signup']))
{
    
    $username 		= $_POST['username'];
    $password 	= $_POST['password'];
    $passwordconfi 	= $_POST['passwordconf'];

    if($password==$passwordconfi)
    {

        $query = "select * from user_registration where username ='$username'";

         $query_run = mysqli_query($conn,$query);
         if($query_run)
		 {
		 if(mysqli_num_rows($query_run)>0)
		 {
		echo '<p class="bg-danger msg-block">This username Already exists.. Please try another username!</p>';
         }
						 else
						 {
   
							$query = "insert into user_registration (username,password,confipassword) VALUES('$username','$password','$passwordconfi')";
							$query_run = mysqli_query($conn,$query);
							if($query_run)
							{
								echo '<script type="text/javascript">alert("User Registered.. Welcome")</script>';
								$_SESSION['username'] = $username;
                                $_SESSION['password'] = $password;
                                header( "Location: homepage.php");
							}
							else
							{
								echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later</p>';
                            }
                            
                            mysqli_close($conn);
    
						}





    }

   
    
}

}

?>
</div>
</body>
</html>