function check(){
    var q1=document.querySelector('input[name="q1"]:checked');
    var q2=document.querySelector('input[name="q2"]:checked');
    var q3=document.querySelector('input[name="q3"]:checked');
    var q4=document.querySelector('input[name="q4"]:checked');
    var q5=document.querySelector('input[name="q5"]:checked');

    if(q1 != null){
        
    }else{
        document.getElementById("error1").innerHTML = "You need to select an answer!";
    }

    if(q2 != null){
        
    }else{
        document.getElementById("error2").innerHTML = "You need to select an answer!";
    }

    if(q3 != null){
        
    }else{
        document.getElementById("error3").innerHTML = "You need to select an answer!";
    }

    if(q4 != null){
        
    }else{
        document.getElementById("error4").innerHTML = "You need to select an answer!";
    }

    if(q5 != null){
        
    }else{
        document.getElementById("error5").innerHTML = "You need to select an answer!";
    }
}