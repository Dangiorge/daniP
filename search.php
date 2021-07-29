<?php
    $conn=mysqli_connect('localhost','root','y19970613','stud');
    $id=$_POST['id'];
    $query="SELECT * from students WHERE id=$id";
    $result = $conn->query($query);
    if($result->num_rows ==1){
        $row=$result->fetch_assoc();
        echo "User with Name ". $row['fName']. ' ' .$row['lName'] ."is found";
    }else{
        echo "User Not found";
    }
?>