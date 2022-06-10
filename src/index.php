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
<div style="text-align: center;">
    <label for="instructor"><b>Who is the course instructor?</b></label>
        <input type="text" name="fname" placeholder="Example: 'John'"> <br>
        <br>
<div style="text-align: center;">
    <label for="coursename"><b>What is the course code?</b></label>
        <input type="text" name="coursename" placeholder="Example: 'ABC1234'"> <br><br>
</div>
    <hr>

    1. <b>Which of the following best describes the term <i>immersive technology</i>?</b><br><br>
    <select name="q1">
        <option value="ans1"> A device that displays visual media, such as a television or projector</option>
        <option value="ans2"> A book or magazine that has an imaginative or suspenseful story</option>
        <option value="ans3">A social media app that analyzes users' habits and is designed to be addictive</option>
        <option value="ans4"> A driving simulator that vibrates each time the player collides with an object</option>
    </select>

    <br><hr>
<br>
    2. <b>An educational technology company is planning to develop a product for immersive science learning in a digital classroom.<br>
        The goals for the project are for students to be able to interact with one another in real-time via avatars as well as manipulate objects in a simulated laboratory environment to conduct collaborative experiments.
        Which of the following immersive technologies would be the best medium for this idea?</b><br><br>
        <input type="radio" name="q2" value="ans1">
    <label for="ans1">Virtual Reality (VR)</label><br>
    <input type="radio" name="q2" value="ans2">
    <label for="ans2">Augmented Reality (AR)</label><br>
    <input type="radio" name="q2" value="ans3">
    <label for="ans3">Mixed Reality (MR)</label> <br>
    <br><hr>

    <br>
    3. <b>A middle-school history class in Florida was originally scheduled to take a field trip to St. Augustine for the purpose of learning about its historic landmarks, but unfortunately had to cancel due to limitations on physical travel.
        <br>Thankfully, the instructor was able to find the addresses of each location on Google Earth, and it even includes supplemental information like videos, media links, and related locations for each one.
        <br>The instructor decides to host a video conference with the class and facilitate a virtual tour of the city.
        <br><br>Which immersive medium can be observed in this activity?</b><br><br>
    <input type="radio" name="q3" value="ans1">
    <label for="ans1">Virtual Reality (VR)</label><br>
    <input type="radio" name="q3" value="ans2">
    <label for="ans2">Augmented Reality (AR)</label><br>
    <input type="radio" name="q3" value="ans3">
    <label for="ans3">Mixed Reality (MR)</label><br>
    <br><hr>

    <br>
    4. <b>A firefighter training academy is looking into new methods they can employ to fully prepare students with the skills they need to confront dangerous situations through the use of immersive learning.<br>
        They have developed a custom firehose controller that feels almost identical to real thing.
        They have also designed a head-mounted display that uses a camera to analyze the layout of any room the student is standing in.
        The program adds simulated fire which needs to be extinguished with the firehose controller.
        <br><br>This is an example of which immersive medium(s)? Check all that apply</b><br><br>
    <input type="checkbox" name="q4[]" value="ans1">
    <label for="ans1"> Virtual Reality (VR)</label><br>
    <input type="checkbox" name="q4[]" value="ans2">
    <label for="ans2"> Augmented Reality (AR)</label><br>
    <input type="checkbox" name="q4[]" value="ans3">
    <label for="ans3"> Mixed Reality (MR) </label><br>
    <br><hr>

    5. <b>Which of the following features can be observed most commonly amongst all three immersive mediums? Check all that apply.</b><br><br>
    <input type="checkbox" name="q5[]" value="ans1">
    <label for="ans1"> Head-mounted displays (HMDs)</label><br>
    <input type="checkbox" name="q5[]" value="ans2">
    <label for="ans2"> 360-degree images and range-of-motion</label><br>
    <input type="checkbox" name="q5[]" value="ans3">
    <label for="ans3"> Sensory isolation </label><br>
    <input type="checkbox" name="q5[]" value="ans4">
    <label for="ans3"> Powerful graphics and processing capabilities </label><br>
    <br><hr>

<div style="text-align: center;"><input type="submit" value="Submit Quiz" /> <input type="reset" value="Reset" /></div>
</form>



</body>



