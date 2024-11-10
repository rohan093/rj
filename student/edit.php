<?php 


if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $course= $_POST['course'];
    
    $sql="UPDATE `student_details` SET `phone` = '' WHERE `student_details`.`id` = ";
    
    $result= mysqli_query($conn,$sql);
    
    if($result){
        echo "Data updated  successfully";
    }else{
        die(mysqli_error($conn));
    }
    
    }


?>