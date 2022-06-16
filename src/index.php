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

<form action="process.php" method="post">
<br>
<div style="text-align: left;">
    <label for="instructor"><b>Who is the course instructor?</b></label>
        <input type="text" name="instructor" placeholder="Example: 'Dr. John Gator'"> <br>
        <br>

        <div style="text-align: left;">
    <label for="email"><b>Instructor Email?</b></label>
        <input type="text" name="email" placeholder="Example: 'johngator@ufl.edu'"> <br>
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

    <br><hr>
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
    <input type="checkbox" name="q4[]" value="map">
    <label for="map"> Course mapping (evaluation and alignment of learning goals)</label><br>
    <input type="checkbox" name="q4[]" value="style">
    <label for="style"> Styled Module pages in Canvas</label><br>
    <input type="checkbox" name="q4[]" value="studio">
    <label for="studio"> Original lectures/presentations recorded in professional studio environment </label><br>
    <br><hr>

    <br>
    <b>Are there any other particular concerns or course development needs that you would like the Instructional Design team to help implement? Please include these in the space below:</b><br><br>
    <input type="text" name="needs" placeholder="Canvas tutorials, video production considerations, increasing student engagement, etc.">
    
    <br><hr>

<div style="text-align: center;"><input type="submit" value="Submit" /> <input type="reset" value="Reset" /></div>
</form>



</body>



