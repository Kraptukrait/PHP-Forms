<!DOCTYPE html>
<html>
<head>
    <title>Getting started with PHP: Lesson 3</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <h1>Value added tax from gross value</h1>

    <p>
        <?php
        $gross_price = 116;
        $VAT_rate = 0.16;
        $result = $gross_price - $gross_price / (1 + $VAT_rate);
        echo $gross_price . " $ contain " . round($result, 2) . " $ Value added tax";
        ?>
    </p>

</body>
</html>
