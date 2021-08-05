<?php
	session_start();
	if(isset($_SESSION['flag']))
	{
?>

<!DOCTYPE html>
<html>
<head>
	<title>Request Medicine</title>
</head>
<body>
	<table border="1" width="100%" cellspacing="0">
		<tr>
			<td align="right" colspan="3">
			<?php include 'head.php';?>

			</td>
		</tr>
		<tr height = "200px">
			<td width="33%">
				<h4> &nbsp &nbsp &nbsp Account </h4>
				<hr width="90%">
				<ul>
				<?php include 'item.php';?>


				</ul>
			</td>
			<td colspan="2">
            <?php

#require_once('../model/dbConnection.php');
require_once('../model/webtech.php');

require_once('../model/orderModel.php');

$connection = getConnection();
$productList = getAllProduct();
#print_r($productList);
?>

<div id="main_content">
<fieldset style="width: 20%">
    <legend><b>DISPLAY</b></legend>
    <?php
    echo "<table border = 1 cellspacing = 0>
        <tr>
            <td>Customer  ID</td>
            <td>Value</td>
            <td>Ship Method</td>
            <td>Ship Address</td>


        </tr>";

    for($i = 0; $i < count($productList); $i++)
    {
        echo "<tr>
                 <td>{$productList[$i]['cid']}</td>

                 <td>{$productList[$i]['o_value']}</td>
                 <td>{$productList[$i]['ship_method']}</td>
                 <td>{$productList[$i]['ship_address']}</td>



            </tr>";
    }

    echo "</table>";
?>
</fieldset>
</div>
			</td>
		</tr>
		<tr height = "50px">
			<td colspan="3">
			<?php include 'foot.php';?>

			</td>
		</tr>
	</table>
</body>
</html>

<?php

	}else{
		echo "Please do Registration before login in";
		header('location: registration.php');
	}

?>