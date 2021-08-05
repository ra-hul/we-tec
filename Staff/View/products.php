<?php
session_start();
if ($_SESSION['flag'] != true) {
    header('location: login.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>

<body>
    <?php include 'internalheader.php'; ?>

    <br>



    <?php require("../Controller/productCRUD.php"); ?>

    <br>
    <br>
    <br>


    <div class="wrapper">
        <details>
            <summary>
                Request A Product to Owner
            </summary>

            <table>
                <thead>
                    <tr>
                        <th>Product ID</th>
                        <th>Product Amount</th>
                        <th>Reason of request</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" name="" id=""></td>
                        <td><input type="text" name="" id=""></td>
                        <td><input type="text" name="" id=""></td>

                    </tr>
                </tbody>
            </table>
            <table>
                <tr>
                    <td>
                        <button type="submit">Save</button>
                    </td>
                </tr>
            </table>

        </details>
    </div>


    <div class="wrapper">
        <details>
            <summary>
                See Quality of products
            </summary>

            <table border="solid">
                <thead>
                    <tr>
                        <th>Product ID</th>
                        <th>BSTI Approval</th>
                        <th>WHO Approval</th>
                        <th>FDI Index</th>
                        <th>Effectiveness</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>Excellent</td>
                        <td>80%</td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>Safe</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>Yes</td>
                        <td>Partial</td>
                        <td>Safe</td>
                        <td>99%</td>
                    </tr>
                </tbody>
            </table>

        </details>
    </div>


    <br>
    <?php include 'internalfooter.php'; ?>
</body>

</html>