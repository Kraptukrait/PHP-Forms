<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/newstyles.css">
    <title>PHP Form 3</title>
    <meta charset="UTF-8">
</head>

<body>
    <div class="container">
        <h1>Your Registration</h1>
        <br>
        <h3>We have received the following information</h3>
        <p>
         <?php
         header('Content-Type: text/html; charset=UTF-8');
         echo "Driving School: " . $_POST['DrivingSchool'] . "<br> City: " . $_POST['City'] . "<br>";
         echo "Student Number: " . $_POST['StudentNumber'] . "<br>";
         echo "Name: " . $_POST['Name'] . "<br>";
         echo "Exam Type: " . $_POST['Type'] . "<br>";
         echo "Exam Date: " . $_POST['date'] . " " . $_POST['time'];
         ?>
        </p>
    </div>
</body>

</html>
