<?php

require_once('../model/dbConfig.php');
require_once('../model/orderModel.php');


if (isset($_POST['del'])) {
    $id = $_POST['del'];
    if (!deleteOrder($id)) {
        echo "Can't Reject";
        echo  $id;
        return;
    } else {
        header('location: ../view/orders.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <table border="1px solid black" align="center">
        <thead>
            <tr>
                <th>Order No</th>
                <th>Customer ID</th>
                <th>Order Value</th>
                <th>Shipping Method</th>
                <th>Shipping Address</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>

        <?php $orders = getAllorders(); ?>
        <?php for ($i = 0; $i < count($orders); $i++) { ?>
            <tr>
                <td> <?php echo $orders[$i]['oid']; ?></td>
                <td> <?php echo $orders[$i]['cid']; ?></td>
                <td> <?php echo $orders[$i]['o_value']; ?></td>
                <td> <?php echo $orders[$i]['ship_method']; ?></td>
                <td> <?php echo $orders[$i]['ship_address']; ?></td>
                <td>
                    <form action="../Controller/orderProcess.php" method="post"> <button type="submit" name="del">Reject</button>
                        <input type="hidden" name="del" value="<?php echo $orders[$i]['oid']; ?>">
                    </form>
                </td>
            </tr>
        <?php } ?>

    </table>
</body>

</html>