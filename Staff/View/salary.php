<?php
session_start();
require_once('../Model/salaryModel.php');
if ($_SESSION['flag'] != true) {
    header('location: login.php');
}
?>

<?php

if (isset($_POST['del'])) {
    $id = $_POST['lid'];
    if (!deleteSal($id)) {
        echo "Deletion Failed";
        echo  $id;
        return;
    } else {
        header('location: ../view/salary.php');
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
    <?php include 'internalheader.php'; ?>

    <?php

    if ($result = getAllempoloyeeSalary()) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $id = $row['sal_id'];
                echo "<table>";
                echo "<hr>";
                echo "<tr>";
                echo "<td> <strong>Month:</strong>  {$row['month']}  </td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td> <strong>Employee Type:</strong>  {$row['etype']}  </td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td> <strong>Amount:</strong>  {$row['amount']}  </td>";
                echo "</tr>";
                echo "<tr>";
                echo '<form action="salary.php" method="post">';
                echo '<td><input type="hidden" type="number" name="lid" value="{$id}" id=""></td>';
                //echo '<button  type="submit" name="del">Withdraw</button>';
                echo "</form>";

                echo "</tr>";
                echo "</table>";
                echo "<hr>";
            }
            // Free result set
            mysqli_free_result($result);
        } else {
            echo "No records matching your query were found.";
        }
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    ?>



    <?php include 'internalfooter.php'; ?>
</body>

</html>