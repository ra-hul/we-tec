<?php
$title = "Expenses"; 
include('header.php');
require_once('../Model/db.php');
require_once('../Model/productModel.php');

$connection = getConnection();
$productList = getAllProduct();
?>

<center>
    <a href="addexpense.html">Add Income and Expense</a>
</center>


<div id="main_content">
    <fieldset>
        <legend><b>Profit</b></legend>
        <?php
        echo "<table align=center width = 50% border=1 cellspacing=15% cellpadding=15%>
            <tr>
                <td>Month</td>
                <td>Income</td>
                <td>Expense</td>
                <td>Authorized By Admin</td>
                <td>Profit</td>
                <td>Action</td>
            </tr>";

        for($i = 0; $i < count($productList); $i++)
        {
            $profit = $productList[$i]['sellingPrice'] - $productList[$i]['buyingPrice'];
            echo "<tr>
                     <td>{$productList[$i]['name']}</td>
                     <td>{$productList[$i]['sellingPrice']}</td>
                     <td>{$productList[$i]['buyingPrice']}</td>
                     <td>{$productList[$i]['displayable']}</td>
                     <td>{$profit}</td>
                     <td> <a href='editexpense.php?id={$productList[$i]['id']}'> Edit</a> | <a href='deleteexpense.php?id={$productList[$i]['id']}'> Delete </a> </td>
                </tr>";
        }

        echo "</table>";
    ?>
</fieldset>
</div>
<?php
include('footer.php');
?>