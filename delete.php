<?php
    $conn=mysqli_connect('localhost','root','y19970613','stud');
    $id=$_POST['id'];
    $query="DELETE from students WHERE id=$id";
    if(mysqli_query($conn,$query)){
        echo "User Deleted sucsefuly";
    }else {
        echo "Not Deleted";
    }
    mysqli_close($conn);
?>