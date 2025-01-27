<!DOCTYPE html>
<html>
    <head>
        <title>Marks</title>
        <meta charset="utf-8">
        <meta content="width-device-width">
        <style>
            input{
                display:block;
                width:10rem;
                height:2rem;

            }
            fieldset{
                width:fit-content;
                border-radius: 20px;
                background-color:rgb(220, 120, 70);
                margin-left: 600px;
            }
            #get{
                background-color: darkblue;
            }
            h3{
                text-align: center;
            }
            .head{
                color:blue;
            }
            #female{
                border-radius:20px;
            }
            #male{
                border-radius: 20px;
            }
        </style>
    </head>
    <body style="background-color:lightsalmon;">
        <h3 class="head"><U><I>STUDENT GRADES DETECTOR<I></U></h3 >
        <fieldset>
        <form method="POST" action="">
            enter your name :<input type="text" name="name" id="nam">
            enter your school:<input type="text"name="school"id="schol">
            enter your CAT marks:<input type="number"name="cat"id="cati" >
            enter your exam marks:<input type="number"name="exam"id="exam">
             FEMALE <input type="checkbox" id="female">
            MALE <input type="checkbox" id="male">
            <input type="submit" value="get grade" id="get">
        </fieldset>
        </form>
        <?php
        if($_SERVER['REQUEST_METHOD'] =='POST') 
        {
            $_name=$_POST['name'];
            $_school=$_POST['school'];
            $_cat=$_POST['cat'];
            $_exam=$_POST['exam'] ;
            $_total= $_cat+$_exam;
            $_grade;
            if($_total<=100 && $_total>=90)
                $_grade= 'A ';
            
            elseif($_total<=89 && $_total>=80)
             $_grade='B';
            
            elseif($_total<=79 && $_total>=70)
                $_grade='C';
            
            elseif($_total<=69 && $_total>=60)
            $_grade='D';
            
            elseif($_total<=59 && $_total>=50)
                $_grade='E';
            
            elseif($_total<=49 && $_total>=30)
            $_grade='F';
            
            else
            $_grade='s';
            
        
        echo "<table border='2'>
        <tr>
            <th>Student</th>
            <th>School</th>
            <th>CAT</th>
            <th>Exam</th>
            <th>Total</th>
            <th>Grade</th>
        </tr>
        <tr>
            <td>$_name</td>
            <td>$_school</td>
            <td>$_cat</td>
            <td>$_exam</td>
            <td>$_total</td>
            <td>$_grade</td>
        </tr>
    </table>";
    
 }
 
         ?>
    </body>
</html>