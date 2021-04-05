<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
	<style>
	.correct{
		border: 1px solid red;
		background-color:red;
	}
    </style>
    <script src="quiz1.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  </head>
  <body bgcolor="lightblue">
    <div id="quiz-time-left"></div>
    <h1 align=center>Quiz#1:Evaluating absolute values</h1>
    <form name="form" id="questions" action="quiz11.php" method="post" >
      <h3>1. |2x-5|=9 ?</h3>
      <input type="radio" name="q1" value="a" />a. x=2 and x=-7<br />
      <input type="radio" name="q1" value="b" /><label>b. x=-2 and x=7</label><br />
      <input type="radio" name="q1" value="c" />c. x=9 and x=-9<br />

      <h3>2. |1-3t|=20 ?</h3>
      <input type="radio" name="q2" value="a" />a. t=19/3 and t=-7<br />
      <input type="radio" name="q2" value="b" /><label>b. t= -19/3 ,t=7</label><br />
      <input type="radio" name="q2" value="c" />c. t=20 and t=-20<br />

      <h3>3. |5y-8|=1 ?</h3>
      <input type="radio" name="q3" value="a" />a. y=-1 and y=1<br />
      <input type="radio" name="q3" value="b" /><label>b. y=-7/5 and y=9/5</label><br />
      <input type="radio" name="q3" value="c" />c. y=7/5 and y=9/5<br />

      <h3>4. |10x-3|=0 ?</h3>
      <input type="radio" name="q4" value="a" />a. x=-3/10 <br />
      <input type="radio" name="q4" value="b" /><label>b. x=3/10</label><br />
      <input type="radio" name="q4" value="c" />c. x=0<br />

      <h3>5. |5x+9|=-3?</h3>
      <input type="radio" name="q5" value="a" />a. x=3<br />
      <input type="radio" name="q5" value="b" /><label>b.  No solution </label><br />
      <input type="radio" name="q5" value="c" />c. x=-3<br />

      
      <br />
      <input type="submit" id="sendA" value="Submit" class="button"  /> 
      <br />
      <a align=right href="lesson1.php"><button type="button" class="button">Go Back</button></a> 
      <input id="reset-button" type="reset" name="reset" class="button" value="reset">
      <a align=right href="quizs1.html"><button type="button" class="button">check solution</button></a> 

      <div>

      <p id="p"></p>

    </form>

  </body>
</html>