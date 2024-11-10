<?php 
include "conne.php";

if(isset($_POST['submit'])){
$name= $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$course= $_POST['course'];

$sql="INSERT INTO `student_details` (`id`, `name`, `email`, `phone`, `course`) VALUES ('', ' $name', '$email', '$phone', '$course');";

$result= mysqli_query($conn,$sql);

if($result){
    echo "Data inserted successfully";
}else{
    die(mysqli_error($conn));
}

}

?>





