<!DOCTYPE html>
<html> 
<head>
    <title>Getting started with PHP: Lesson 3</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <h1>Value added tax from net value</h1>

    <p>
        <?php
        $net_price = 100;
        $VAT_rate = 0.19;
        $result = $net_price * $VAT_rate;
        echo $result;
        ?>
    </p>

</body>
</html>
