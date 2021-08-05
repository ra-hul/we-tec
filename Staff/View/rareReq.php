<?php
require_once('../model/reqModel.php');
$data = getAll();
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


    <?php include('internalheader.php');
    ?>
    <td>
        <h2 align='center'>Customer's Rare Medicine Requests </h2>
        <table border="1px solid black" width='80%' align='center'>

            <th>Id</th>
            <th>Name</th>
            <th>Category</th>
            <th>State</th>
            <th>Action</th>
            </tr>
            <?php for ($i = 0; $i < count($data); $i++) { ?>
                <tr>
                    <td><?= $data[$i]['Id'] ?></td>
                    <td><?= $data[$i]['Name'] ?></td>
                    <td><?= $data[$i]['Category'] ?></td>
                    <td><?= $data[$i]['Action'] ?></td>
                    <td>
                        <a href="../Controller/medcontroll.php?id=<?= $data[$i]['Id'] ?>"> Change </a>
                    </td>
                </tr>

            <?php } ?>
        </table>

    </td>
    </tr>
    </table>
    <br>
    <?php
    include('internalfooter.php');
    ?>

</body>

</html>