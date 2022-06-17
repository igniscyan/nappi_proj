<?php // we need to be sure to include dbhookup in index, or else we don't actually have a DB connection!
include './header.php';
echo get_include_path();
?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="stylesheet.css">

    <title>Assignment 7: DIME II Final Project - ID Services Form</title>

</head>

<body>


    <h1>Assignment 7: DIME II Final Project</h1>
    <hr>
    <h2>Instructional Design Services Form</h2>
    <h3>Please enter information in the form below to let the Instructional Design team know some details about your course development needs.</h3>

    <form action="./utils/add.php" method="post">
        <br>
        <div style="text-align: left;">
            <label for="instructor"><b>Who is the course instructor?</b></label>
            <input type="text" name="instructor" placeholder="Example: 'Dr. John Gator'"> <br>
            <br>

            <div style="text-align: left;">
                <label for="email"><b>Instructor Email?</b></label>
                <input type="text" name="email" placeholder="Example: 'djgator@ufl.edu'"> <br>
                <br>

                <div style="text-align: left;">
                    <label for="coursename"><b>What is the course code?</b></label>
                    <input type="text" name="coursename" placeholder="Example: 'ABC1234'"> <br><br>
                </div>
                <hr>

                <b>Course Level?</b><br><br>
                <select name="courselevel">
                    <option value="ans1"> Undergraduate</option>
                    <option value="ans2"> Graduate</option>
                    <option value="ans3"> Independent Study/Research</option>
                    <option value="ans4"> Other</option>
                </select>

                <br>
                <hr>
                <br>
                <b>Has this course been taught in a previous term?</b><br><br>
                <input type="radio" name="taught" value="yes">
                <label for="yes">Yes</label><br>
                <input type="radio" name="taught" value="no">
                <label for="no">No</label><br>
                <hr>

                <b>When will this course be taught?</b><br><br>
                <select name="term">
                    <option value="Spring"> Spring</option>
                    <option value="Summer"> Summer</option>
                    <option value="Fall"> Fall</option>
                    <option value="Other"> Other</option>
                </select>

                <br>
                <b>Which of the following course development items would you like to see in your course? Check all that apply:</b><br><br>
                <input type="checkbox" name="service" value="map">
                <label for="map"> Course mapping (evaluation and alignment of learning goals)</label><br>
                <input type="checkbox" name="service" value="style">
                <label for="style"> Styled Module pages in Canvas</label><br>
                <input type="checkbox" name="service" value="studio">
                <label for="studio"> Original lectures/presentations recorded in professional studio environment </label><br>
                <br>
                <hr>

                <br>
                <b>Are there any other particular concerns or course development needs that you would like the Instructional Design team to help implement? Please include these in the space below:</b><br><br>
                <input type="text" name="comments" placeholder="Canvas tutorials, video production considerations, increasing student engagement, etc.">

                <br>
                <hr>

                <div style="text-align: center;"><input type="submit" value="Submit" /> <input type="reset" value="Reset" /></div>
    </form>

    <br>
    <a href="ERD.png" type="button" target="_blank" class="btn btn-primary">
        Download ERD
    </a><br>
    <hr>

    <div class="container" style="width:100%">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="table-responsive">
                    <table class="table table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <!-- <th>
                                    S.N
                                </th> -->
                                <th>Course Instructor</th>
                                <th>Instructor Email</th>
                                <th>Course Code</th>
                                <th>Course Level</th>
                                <th>Priorly Taught?</th>
                                <th>Course Period</th>
                                <th>Course Mapping?</th>
                                <th>Styled Module Pages?</th>
                                <th>Recorded Lectures?</th>
                                <th>Comments</th>
                                <!-- </tr> -->

                        </thead>
                        <tbody>
                            <?php
                                if(is_array($fetchData)){
                                    foreach($fetchData as $data) {
                                ?>
                                <tr>
                                    <td><?php echo $data['course_instructor']?></td>
                                    <td><?php echo $data['instructor_email']?></td>
                                    <td><?php echo $data['course_code']?></td>
                                    <td><?php echo $data['course_level']?></td>
                                    <td><?php echo $data['course_taught']?></td>
                                    <td><?php echo $data['course_period']?></td>
                                    <td><?php echo $data['course_mapping']?></td>
                                    <td><?php echo $data['course_modules']?></td>
                                    <td><?php echo $data['course_recorded']?></td>
                                    <td><?php echo $data['course_comments']?></td>
                                </tr>
                                <?php
                                    }} else{ 
                                ?>
                                <tr>
                                    <td colspan="12">
                                        <?php echo $fetchData; ?>
                                    </td>
                                <tr>
                                    <?php } ?>
                                <!-- </tr> -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</body>