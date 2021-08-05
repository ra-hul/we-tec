<?php

require_once('../model/dbConfig.php');
require_once('../model/productModel.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>

    <?php
    $q = intval($_GET['q']);

    $result = getProductForAJAX($q);

    echo "<table>
<tr>
<th>Product Name</th>
<th>Product Type</th>
<th>Manufacturer</th>
<th>Remaining Stock</th>
<th>MRP</th>
</tr>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['p_name'] . "</td>";
        echo "<td>" . $row['p_type'] . "</td>";
        echo "<td>" . $row['manufacturer'] . "</td>";
        echo "<td>" . $row['stock'] . "</td>";
        echo "<td>" . $row['mrp'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>