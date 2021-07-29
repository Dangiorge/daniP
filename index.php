<?php
    $conn=mysqli_connect('localhost','root','y19970613','stud');
    $fName=$_POST['fName'];
    $lName=$_POST['lName'];
    $age=$_POST['age'];
    $year=$_POST['year'];
    $semi=$_POST['semi'];
    $gender=$_POST['gender'];
    $comment=$_POST['comment'];
    
    $query="INSERT INTO students(fName,lName,age,gender,year,semi,comment) VALUE ('$fName','$lName','$age','$gender','$year','$semi','$comment');";
    if(mysqli_query($conn,$query)){
        $last_id = $conn->insert_id;
        echo "User Name $fName $lName 
                User Id $last_id
        ";
    }else {
        echo "Not Done";
    }
    mysqli_close($conn);
?>