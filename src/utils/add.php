<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/header.php');

// We know our form submits via POST, so we're checking post for variable setting
if (isset($_POST)) {
    //We know POST has variables, proceed. 

    if (isset($_POST['instructor']) && isset($_POST['email']) && isset($_POST['coursename']) && isset($_POST['courselevel']) && isset($_POST['taught']) && isset($_POST['term']) && isset($_POST['service'])) {
        //This giant if statement is just checking if our non nulls are present. We need them to proceed so without them, we'll spit an error back. 
        $instructor = $_POST['instructor'];
        $email = $_POST['email'];
        $coursename = $_POST['coursename'];
        $courselevel = $_POST['courselevel'];
        $taught = $_POST['taught'];
        ($taught == 'yes') ? $taught = 1 : $taught = 0;
        $term = $_POST['term'];
        $service = $_POST['service'];
        if (strpos(json_encode($service),"map") !== false) {
            echo "Array contains map";
            $map = 1;
        }
        else{
            echo "Array doesn't contains the Name";
            $map = 0;
        }
        if (strpos(json_encode($service),"style") !== false) {
            echo "Array contains style";
            $style = 1;
        }
        else{
            echo "Array doesn't contains the Name";
            $style = 0;
        }
        if (strpos(json_encode($service),"studio") !== false) {
            echo "Array contains studio";
            $studio = 1;
        }
        else{
            echo "Array doesn't contains the Name";
            $studio = 0;
        }
        $comments = $_POST['comments'];
    } else {
        echo "Missing value, please ensure to fill all required values";
    }

    //we don't care if comments aren't present, so we won't do anything if these aren't present.
    if (isset($_POST['comments'])) {
        $comments = $_POST['comments'];
    }

    $query = "INSERT INTO courses (course_instructor, instructor_email, course_code, course_level, course_taught, course_period, course_mapping, course_modules, course_recorded, course_comments)
    VALUES ($instructor, $email, $coursename, $courselevel, $taught, $term, $map, $style, $studio, $comments)";
}

?>

<html>

<p> hemlo </p>

</html>