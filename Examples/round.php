<!DOCTYPE html>
<html> 
<head>
    <title>Getting started with PHP: Lesson 3</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <h1>Round decimal places</h1>

    <p>
        <?php
        $net_price = 101.30;
        $VAT_rate = 0.16;
        $result = $net_price * $VAT_rate;
        echo round($result, 2);
        ?>
    </p>

</body>
</html>
