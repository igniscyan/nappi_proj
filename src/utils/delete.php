<?php
$course_name = $_POST["course_name"];

//Prepare connection
//This is probably a hint for how we'll be using it on the server, but, 
//On the docker instance it's $db to connect. Let's keep this commented out for future Anthony and Brandon. 
// $conn = new mysqli('$_SERVER', 'root', 'root', 'assignment');


if(isset($_POST['course_code'])){
    $course_code = $_POST['course_code'];
}
$conn = new mysqli('db', 'root', 'root', 'assignment');

//Check connection working
if($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
}

//Prepare SQL Insert statement
//Right idea, but we need to use the PK instead. 
//We set our PK to be the course_code
//Additionally, we have to keep in mind this will be coming over from a POST request
//So let's get $course_code setup first
$query = "DELETE FROM courses WHERE course_code = $course_code";

//Execute query
$conn->query($query);

//Close connection
$conn->close();

//Redirect to main page
//I've never seen this before, was this in Albert's code
header("Location: index.php");
?>