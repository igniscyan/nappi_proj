<?php
$course_name = $_POST["course_name"];

//Preparing connection
if(isset($_POST['course_code'])){
    $course_code = $_POST['course_code'];
}
$conn = new mysqli('db', 'root', 'root', 'assignment');

//Check if connection is working
if($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
}

//Prepare SQL Insert statement
$query = "DELETE FROM courses WHERE course_code = '$course_code'";

//Execute query
$conn->query($query);

//Close connection
$conn->close();

//Redirect to main page
header("Location: /index.php");
?>