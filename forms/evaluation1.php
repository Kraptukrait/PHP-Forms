<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/newstyles.css">
    <title>PHP Form 1</title>
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
         echo "Your Name: " . $_POST['name'] . "<br> Email: " . $_POST['email'] . "<br>";
         echo "Department: " . $_POST['department'] . "<br> Location: " . $_POST['location'] . "<br>";
         echo "Floor: " . $_POST['floor'] . "<br> Room: " . $_POST['room'].  "<br><br>";
         echo " Your Concern: <br>";
         if (isset($_POST["issue1"])){
            echo $_POST["issue1"]."<br>\n";
        }
        if (isset($_POST["issue2"])){
            echo $_POST["issue2"]."<br>\n";
        }
        if (isset($_POST["issue3"])){
            echo $_POST["issue3"]."<br>\n";
        }
        if (isset($_POST["issue4"])){
            echo $_POST["issue4"]."<br>\n";
        }
        if (isset($_POST["issue5"])){
            echo $_POST["issue5"]."<br>\n";
        }
        if (isset($_POST["issue6"])){
            echo $_POST["issue6"]."<br>\n";
        }        
         ?>
        </p>
    </div>
</body>

</html>
