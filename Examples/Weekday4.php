<!DOCTYPE html>
<html>
<head>
    <title>Example Weekday 4</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <h1>Count elements in the array with count()</h1>

    <p>
        <?php
        $day = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
        $numberofdays = date("w"); // day of the week (0 = Sunday, 1 = Monday, etc.)
        echo "Today is $day[$numberofdays].<br>";
        
        $numberofelements = count($day);
        echo "The week has $numberofelements days.\n";
        ?>
    </p>

</body>
</html>
