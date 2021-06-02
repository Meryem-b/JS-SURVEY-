<!DOCTYPE html>
<html> 
    <head>
        <meta charset="utf-8"> 
<?php  
if($submitted){
    session_start();
     $connection =mysqli_connect("mysql.itu.edu.tr","db23983","7X7xcrRL5y","db23983");
}
mysqli_query($connection, "INSERT INTO survey (q1,q1t,q2) VALUES ($q1,'$q1t',$q2);");
};
?>

<script>
function box(val){
 var element=document.getElementById('textbox');
 if(val==0)
   element.style.display='block';
 else  
   element.style.display='none';
}
function f2(n,color)
{
    document.getElementById("l"+n).style.color=color;
}

</script> 

 </head>
 <body>
 <h3>Survey</h3>
 <form method="post">
    <ol>
        <li>Did you find your coffee? If not, why?</li>
        <input type="radio" id="q1" value="1" checked>
        <label for="q11">yes</label>
        <input type="radio" id="q2" value="0">
        <label for="q12">No</label>
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
