<?php
$title = "Medicine sTOCK";
include('header.php');
require_once('../model/medicinestockmodel.php');
$data = getAllproduct();

?>
<td>
    <h2 align="center">Medicine Stock</h2>
    <table border="1px solid black" width='80%' align='center'>
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Product Type</th>
            <th>Manufacturer</th>
            <th>Stock</th>
            <th>MRP</th>

        </tr>
        <?php for ($i = 0; $i < count($data); $i++) { ?>
            <tr>
                <td><?= $data[$i]['p_id'] ?></td>
                <td><?= $data[$i]['p_name'] ?></td>
                <td><?= $data[$i]['p_type'] ?></td>
                <td><?= $data[$i]['manufacturer'] ?></td>
                <td><?= $data[$i]['stock'] ?></td>
                <td><?= $data[$i]['mrp'] ?></td>

            </tr>

        <?php } ?>


    </table>

</td>
</tr>
</table>
<fieldset>
    <?php
    include('footer.php');
    ?>