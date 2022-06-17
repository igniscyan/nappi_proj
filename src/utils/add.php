<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/header.php');

//Checking post for variable setting
if (isset($_POST)) { 

    if (isset($_POST['instructor']) && isset($_POST['email']) && isset($_POST['coursename']) && isset($_POST['courselevel']) && isset($_POST['taught']) && isset($_POST['term']) && isset($_POST['service'])) {
    //This if statement is just checking if non nulls are present. We need them to proceed so without them, site will echo an error message.       
          $instructor = $_POST['instructor'];
        $email = $_POST['email'];
        $coursename = $_POST['coursename'];
        $courselevel = $_POST['courselevel'];
        $taught = $_POST['taught'];
        ($taught == 'yes') ? $taught = 1 : $taught = 0;
        $term = $_POST['term'];
        $service = $_POST['service'];
        //print_r($_POST['service']);
        if(in_array("map",$service)){
            $map=1;
        }
        else{
            $map=0;
        }
        if(in_array("style", $service)){
            $style = 1;
        }
        else{
            $style = 0;
        }

        if(in_array("studio", $service)){
            $studio = 1;
        }
        else{
            $studio = 0;
        }

        $comments = $_POST['comments'];
    } else {
        echo "Missing value, please ensure to fill all required values";
    }

    //Comments are not a required field, so form will still proceed if these aren't present.
    if (isset($_POST['comments'])) {
        $comments = $_POST['comments'];
    }

    $query = "INSERT INTO courses (course_instructor, instructor_email, course_code, course_level, course_taught, course_period, course_mapping, course_modules, course_recorded, course_comments) VALUES ('$instructor', '$email', '$coursename', '$courselevel', '$taught', '$term', '$map', '$style', '$studio', '$comments')";

if ($mysqli->query($query) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $query . "<br>" . $mysqli->error;
  }
    header("Location: /index.php");
}

?>

<html>

<p> Thanks! </p>

</html>