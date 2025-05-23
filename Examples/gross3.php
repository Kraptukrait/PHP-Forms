<!DOCTYPE html>
<html>
<head>
    <title>Getting started with PHP: Lesson 3</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <h1>Additional tax from gross value</h1>

    <p>
        <?php
        $gross_price = 185.70;
        $result = ($gross_price / 116) * 100;
        echo "With a gross price of " . $gross_price . " $ results in a net price of " . round($result, 2) . " $";
        ?>
    </p>

</body>
</html>
