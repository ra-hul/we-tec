<?php

require_once('../model/dbConfig.php');
require_once('../model/productModel.php');

$name = $type = $man = "";

if (isset($_POST['save'])) {
    $data = array($_POST['p_name'], $_POST['p_type'], $_POST['Manufacturer'], $_POST['Stock'], $_POST['MRP']);
    if (($_POST['p_name'] == "" || $_POST['p_type'] == "" || $_POST['Manufacturer'] == "")) {
        echo "Please Fill all fields";
        return;
    }
    if (insertProduct($data)) {
        header('location: ../view/products.php');
    } else {
        echo "Insert Failed <br>";
        print_r($data);
        return;
    }
}

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];

    $row = mysqli_fetch_assoc(getProductById($id));

    $pid = $row['p_id'];
    $name = $row['p_name'];
    $type = $row['p_type'];
    $man = $row['manufacturer'];
    $stock = $row['stock'];
    $mrp = $row['mrp'];
}

if (isset($_POST['update'])) {
    $data = array($_POST['p_name'], $_POST['p_type'], $_POST['Manufacturer'], $_POST['Stock'], $_POST['MRP']);
    $id = $_POST['p_id'];

    if (updateProduct($id, $data)) {
        header('location: ../view/products.php');
    } else {
        echo "Update Failed <br>";
        print_r($data);
        return;
    }
}

if (isset($_POST['del'])) {
    $id = $_POST['del'];
    if (!deleteProduct($id)) {
        echo "Deletion Failed";
        echo  $id;
        return;
    } else {
        header('location: ../view/products.php');
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

    <div class="insert" align="center">
        <form action="../Controller/productCRUD.php" method="post">
            <h3>Product Input</h3>
            <table>
                <thead>

                    <tr>
                        <th>Product Name</th>
                        <th>Product Type</th>
                        <th>Manufacturer</th>
                        <th>Stock Remaining</th>
                        <th>MRP</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" name="p_name" value="<?php echo $name ?>" id=""></td>
                        <td><input type="text" name="p_type" value="<?php echo $type ?>" id=""></td>
                        <td><input type="text" name="Manufacturer" value="<?php echo $man ?>" id=""></td>
                        <td><input type="number" name="Stock" value="<?php echo $stock ?>" id=""></td>
                        <td><input type="number" name="MRP" value="<?php echo $mrp ?>" id=""></td>
                        <td><input type="hidden" type="number" name="p_id" value="<?php echo $pid ?>" id=""></td>
                    </tr>
                </tbody>
            </table>
            <table>
                <tr>
                    <td>
                        <button type="submit" name="save">Save</button>
                    </td>
                    <td>
                        <button type="submit" name="update">Update</button>
                    </td>
                </tr>
            </table>

        </form>
    </div>
    <h3 align="center">Available Products</h3>

    <table border="1px solid black" align="center">
        <thead>
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Product Type</th>
                <th>Manufacturer</th>
                <th>Remaining Stock</th>
                <th>MRP</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>

        <?php $products = getAllProduct(); ?>
        <?php for ($i = 0; $i < count($products); $i++) { ?>
            <tr>
                <td> <?php echo $products[$i]['p_id']; ?></td>
                <td> <?php echo $products[$i]['p_name']; ?></td>
                <td> <?php echo $products[$i]['p_type']; ?></td>
                <td> <?php echo $products[$i]['manufacturer']; ?></td>
                <td> <?php echo $products[$i]['stock']; ?></td>
                <td> <?php echo $products[$i]['mrp']; ?></td>
                <td>
                    <form action="../Controller/productCRUD.php" method="post"> <button type="submit" name="del">Delete</button>
                        <input type="hidden" name="del" value="<?php echo $products[$i]['p_id']; ?>">
                    </form>
                </td>

                <td>
                    <form action="../Controller/productCRUD.php" method="get"> <button type="submit" name="edit">Edit</button>
                        <input type="hidden" name="edit" value="<?php echo $products[$i]['p_id']; ?>">
                    </form>
                </td>


            </tr>
        <?php } ?>

    </table>

</body>

</html>