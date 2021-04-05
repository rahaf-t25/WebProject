<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Quiz#2</title>
	<style>
	.correct{
		border: 1px solid red;
		background-color:red;
	}
    </style>
    <script src="quiz2.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  </head>
  <body>
    <div id="quiz-time-left"></div>
    <h1 id="main-wrapper">Quiz#2:Linear Equation</h1>
    <form name="form" id="questions" action="quizz22.php" method="post" >
      <h3>1. 3(x+5)=2(-6-x)-2x ?</h3>
      <input type="radio" name="q1" value="a" />a. x=27/7<br />
      <input type="radio" name="q1" value="b" /><label>b. x=-27/7</label><br />
      <input type="radio" name="q1" value="c" />c. x=-27<br />

      <h3>2. 4x-7(2-x) = 3x+2 ?</h3>
      <input type="radio" name="q2" value="a" />a. x=16<br />
      <input type="radio" name="q2" value="b" /><label>b. x=2</label><br />
      <input type="radio" name="q2" value="c" />c. x=-16<br />

      <h3>3. 2(w+3)-10 = 6(32-3w) ?</h3>
      <input type="radio" name="q3" value="a" />a. w=49/5<br />
      <input type="radio" name="q3" value="b" /><label>b. w=64/5</label><br />
      <input type="radio" name="q3" value="c" />c. w=196<br />

      <h3>4. 8(2+3z)+1 = z-10(z+1) ?</h3>
      <input type="radio" name="q4" value="a" />a. z=-27 <br />
      <input type="radio" name="q4" value="b" /><label>b. z=-9/11</label><br />
      <input type="radio" name="q4" value="c" />c. No solution<br />

      <h3>5. 8(2+3z)+1 = z-10(z+1) ?</h3>
      <input type="radio" name="q5" value="a" />a. z=-27<br />
      <input type="radio" name="q5" value="b" /><label>b.  z=-9/11 </label><br />
      <input type="radio" name="q5" value="c" />c. No solution<br />

      
      <br />
      <input type="submit" id="sendA" value="Submit" class="button"  /> 
      <br />
      <a href="lesson1.php"><button type="button" class="button">Go Back</button></a> 
      <input id="reset-button" type="reset" name="reset" class="button" value="Reset">
      <a href="quizs2.html"><button type="button" class="button">Check solution</button></a> 

      <div>

      <p id="p"></p>

    </form>

  </body>
</html>