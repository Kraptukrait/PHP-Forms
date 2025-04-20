<!DOCTYPE html>
<html>
<head>
    <title>Example Weekday 1</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <h1>Array in long form</h1>

    <p>
        <?php
        $day[0] = "Sunday";
        $day[1] = "Monday";
        $day[2] = "Tuesday";
        $day[3] = "Wednesday";
        $day[4] = "Thursday";
        $day[5] = "Friday";
        $day[6] = "Saturday";
        
        // Only output Wednesday
        echo $day[3];
        ?>
    </p>

</body>
</html>
