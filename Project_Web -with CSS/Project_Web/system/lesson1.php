<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson1: Evaluating absolute values</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1 id="main-wrapper">Evaluating Absolute Values</h1>
<form>
    <div class="boxed">
    
        <p>During your math escapade, you may come across this symbol:<br><br>
            <p class="equation">|x|<br><br></p>
            those lines indicate that we have the absolute value of x.<br><br>
            let's learn what a number's absolute value is by looking at a number line:<br><br>
            <img class="imgc" src="images/Capture.PNG"><br><br>
            The absolute value of a number is basically how far away that number is from 0. Because of this, the absolute value must always be positive since it measures distance. x is x units away from 0, so |x|=x. Similarly, -x is x units away from 0, so |-x|=x.
            <br><br>
            Basically, take the positive of the value between the two lines.<br><br>
            <hr>
            Let’s try some examples:<br><br>
            <p class="equation">|5| = 5 <br>
            |-4| = 4<br>
            -|-2| = -2<br><br></p>
            Notice how the anser is -2 in the third example Because of the (-) before the absolute value.<br><br>
             <hr>
            Now, let's work on some larger problems:<br><br>
            <p class="equation">|2+3| = 5<br>
            |4(2)+5| =13<br>
            |3-2(2)|=1<br>
            2+|-4|=6<br><br></p>
            Notice how we needed to simplify the inside of the absolute value before we could take the positive of the number.<br><br>
            <hr>
            We can also give a strict mathematical/formula definition for absolute value. It is,<br><Br> 
            <img class="imgc" src="images/Capture2.PNG"><br><br>
            This tells us to look at the sign of p
            and if it’s positive we just drop the absolute value bar. If p
            is negative we drop the absolute value bars and then put in a negative in front of it.

            So, let’s see a couple of quick examples. <br><br>
            <p class="equation">
            4|=4 because 4≥0 <br>
            |−8|=−(−8)=8 because −8<0 <br>
            |0|=0 because 0≥0 <br> <br>
            </p>
        
            Note that these give exactly the same value as if we’d used the geometric interpretation.<br><br>
            One way to think of absolute value is that it takes a number and makes it positive. In fact, we can guarantee that,<br><br>
            <p class="equation">|p| >= 0</p><br>
            regardless of the value of p.<br><Br>
            We do need to be careful however to not misuse either of these definitions. For example, we can’t use the definition on<Br><br>
                <p class="equation">|-x|<br><Br></p>
            because we don’t know the value of x.Also, don’t make the mistake of assuming that absolute value just makes all minus signs into plus signs. In other words, don’t make the following mistake,<Br><br>
                <p class="equation">|4x−3|≠4x+3<br><br></p>
            This just isn’t true! If you aren’t sure that you believe that then plug in a number for x. For example, if x = −1 we would get,<br><br>
            <p class="equation">7=|−7|=|4(−1)−3|≠4(−1)+3=−1<br><br></p>
            There are a couple of problems with this. First, the numbers are clearly not the same and so that’s all we really need to prove that the two expressions aren’t the same. There is also the fact however that the right number is negative and we will never get a negative value out of an absolute value! That also will guarantee that these two expressions aren’t the same.<br><br>
            The definitions above are easy to apply if all we’ve got are numbers inside the absolute value bars. However, once we put variables inside them we’ve got to start being very careful.<Br><br>
            It’s now time to start thinking about how to solve equations that contain absolute values. Let’s start off fairly simple and look at the following equation.<br><br>
            <p class="equation">|p| = 4<br><br></p>
            Now, if we think of this from a geometric point of view this means that whatever p is it must have a distance of 4 from the origin. Well there are only two numbers that have a distance of 4 from the origin, namely 4 and -4. So, there are two solutions to this equation,<Br><Br>
                <p class="equation">p = -4 or p =4 <br><Br></p>
            Now, if you think about it we can do this for any positive number, not just 4. So, this leads to the following general formula for equations involving absolute value.<br><Br>
                <p class="equation">if |p| = b, b>0  then p= -b or p= b <Br><br></p>
                
            
        </p>

        <hr>

     <p>Now that we are done with the lesson, let's test your knowledge!</p>
        <a href="quize1.php"><button type="button" class="button">Quiz#1</button></a> 
        <!--   <form method="" action="<?php echo base_url();?>index.php/Questions/quizdisplay">

         <input type="submit" value="Quiz#1">
  
        </form> -->
         
    
    </div>
</form>
</body>
</html>
