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
    <script type="text/javascript" src="javaScript/quizjava.js" defer></script>
    <script src="quiz3.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  </head>
  <body bgcolor="lightblue">
    <div id="quiz-time-left"></div>
    <h1 align=center>Quiz#1:Evaluating absolute values</h1>
    <form name="form" id="questions" action="quiz33.php" method="post" >
      <h3>1. 3x-y=7 /n 2x+3y=1 ?</h3>
      <input type="radio" name="q1" value="a" />a. x=2 and y=1<br />
      <input type="radio" name="q1" value="b" /><label>b. x=2 and y=-1</label><br />
      <input type="radio" name="q1" value="c" />c. x=22 and y=1<br />

      <h3>2. 2x+4y=-10 /n 6x+3y=6 ?</h3>
      <input type="radio" name="q2" value="a" />a. x=6 and y=-4<br />
      <input type="radio" name="q2" value="b" /><label>b. x=3 and y=-4</label><br />
      <input type="radio" name="q2" value="c" />c. x=10 and y=6<br />

      <h3>3. x-y=6 /n -2x+2y=1 ?</h3>
      <input type="radio" name="q3" value="a" />a. x=-12 y=1<br />
      <input type="radio" name="q3" value="b" /><label>b. No solution</label><br />
      <input type="radio" name="q3" value="c" />c. x=10 and y=4<br />

      <h3>4. 8(2+3z)+1 = z-10(z+1) ?</h3>
      <input type="radio" name="q4" value="a" />a. z=-27 <br />
      <input type="radio" name="q4" value="b" /><label>b. x=-4 and y=1</label><br />
      <input type="radio" name="q4" value="c" />c. x=-11 and y=-4<br />

      <h3>5. -2x+10y=2<br>5x-25y=3 ?</h3>
      <input type="radio" name="q5" value="a" />a. x=16 and y=0<br />
      <input type="radio" name="q5" value="b" /><label>b.  No solution </label><br />
      <input type="radio" name="q5" value="c" />c. x=-11 and y=-4<br />

      
      <br />
      <input type="submit" id="sendA" value="Submit" class="button"  /> 
      <br />
      <a align=right href="lesson1.php"><button type="button" class="button">Go Back</button></a> 
      <input id="reset-button" type="reset" name="reset" class="button" value="reset">
      <a align=right href="quizs.html"><button type="button" class="button">check solution</button></a> 

      <div>

    </form>

  </body>
</html>