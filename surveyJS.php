<!DOCTYPE html>
<html> 
    <head>
        <meta charset="utf-8"> 
        <?php
          include 'connect.php';
        extract($_POST);
        if($submitted){
            session_start();
        
          mysqli_query($connection,"INSERT INTO survey (q1,q1t,q2) VALUES ($q1,'$q1t',$q2);");
        };
     
      ?>
      <script>
     function f(n,colors){
         document.getElementById("l"+n).style.color=colors;
     };
     function g(val){
 var x=document.getElementById('textt');
 if(val==0)
   x.style.display='block';
 else  
   x.style.display='none';
}
     </script>
     </head>
 <body>
 <h3>Survey</h3>
 <form method="post">
    <ol>
        <li>Did you find your coffee? If not, why?</li>
        <input type="radio" onchange='g(this.value);' name="q1" value=1 >Yes
        <input type="radio" onchange='g(this.value);' name="q1" value=0>No
        <input type="text" name="q1t" id="textt" style='display:none;'/>
   
   
    <br><br>
    <li> would you recommend the website to your friends?</li>
    <input type="radio" id="q21" name="q2" value="1" onchange="f2(21,'green'); f2(25,'black');">
    <label id="121" for="q21"> very unlikely</label>

    <input type="radio" id="q22" name="q2" value="2" onchange="f2(21, 'black'); f2(25, 'black');">
    <label id="122" for="q22"> very unlikely</label>

    <input type="radio" id="q23" name="q2" value="3" onchange="f2(21,'green'); f2(25,'black');">
    <label id="123" for="q23"> very unlikely</label>


    <input type="radio" id="q24" name="q2" value="4" onchange="f2(21, 'black'); f2(25, 'black');">
    <label id="124" for="q24"> very unlikely</label>

    <input type="radio" id="q25" name="q2" value="5" onchange="f2(25, 'green'); f2(21, 'black');">
    <label id="125" for="q25"> very unlikely</label>
    </ol>   
    <input type="submit" name="submitted" value="Submit">
    </form>
    </body>
</html>   
