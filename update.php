<?php
    $conn=mysqli_connect('localhost','root','y19970613','stud');

    $id=$_POST['id'];
    $fName=$_POST['fName'];
    $lName=$_POST['lName'];
    $age=$_POST['age'];
    $photo=$_POST['photo'];

    $query="SELECT * from students WHERE id='$id'";
    $result = $conn->query($query);
    if($result->num_rows ==1){
        $row=$result->fetch_assoc();
        $query="UPDATE students SET fName='$fName',lName='$lName',age='$age' WHERE id=$id";
        if(mysqli_query($conn,$query)){
            echo "Updated User $fName $lName age:$age";
        }else{
            echo "cant Update";
        }
    }else{
        echo "User Not found";
    }

?>