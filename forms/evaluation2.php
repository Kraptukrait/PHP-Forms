<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/newstyles.css">
    <title>PHP Form 2</title>
    <meta charset="UTF-8">
</head>

<body>
    <div class="container">
        <h1>Your Data</h1>
        <br>
        <h3>We have received the following information</h3>
        <p>
         <?php
         header('Content-Type: text/html; charset=UTF-8');
         echo "Your Name: " . $_POST['Name'] . "<br> Address: " . $_POST['Address'] . "<br>";
         echo "City: " . $_POST['City'] . "<br>";
         echo "Car Brand: " . $_POST['CarBrand'] . "<br>";
         echo "Your Desired License Plate: " . $_POST['DesiredLicensePlate'];
         ?>
        </p>
    </div>
</body>

</html>
