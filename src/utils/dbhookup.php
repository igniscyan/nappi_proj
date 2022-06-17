<?php // This is where we're going to initialize our DB. 

// create a new mysqli interface, "db" is the bound location of our database (docker does this automatically), root and root are the user and pass. Assignment is the db,
//and we're letting php know what port the databse lives on in the "DB" ip address. 

$mysqli = new mysqli("db", "root", "root", "assignment", 3306);

if($mysqli -> connect_error){
    die("connection failed" . $mysqli->connect_error);
}
$tableName = 'courses';
$columns = ['course_instructor', 'instructor_email', 'course_code', 'course_level', 'course_taught', 'course_period', 'course_mapping', 'course_modules', 'course_recorded', 'course_comments'];
$fetchData = fetch_data($mysqli, $tableName, $columns);
function fetch_data($mysqli, $tableName, $columns) {
    
    //Ensure connection successful, ensure parameters are correctly provided. 
    if(empty($mysqli)){
        $msg = "DB Failed to connect";
    }
    elseif (empty($columns) || !is_array($columns)) {
        $msg = "Columns name must be defined in an indexed array";
    }
    elseif(empty($tableName)){
        $msg = "Table Name is empty";
    }
    //Checks above passed, proceed
    else {
        //Separate the column names into a pretty list.
        $columnName = implode(", ", $columns);
        $query = "SELECT " .$columnName." FROM $tableName"." ORDER BY course_code DESC";
        $result = $mysqli->query($query);


        if($result == true) {
            if ($result-> num_rows > 0) {
                $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
                $msg = $row;
            }
            else {
                $msg = "No Data Found"; 
            }
        }

        else {
            $msg= mysqli_error($mysqli);
        }

        return $msg;

    }
}
