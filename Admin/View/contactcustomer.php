<?php
	$title = "Contact Customer Page";

	require_once('../Model/contactcustomermodel.php');

	$contactcustomer = getAllContactCustomer();	
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body background="../Asset/bg.jpg">
        <div class="main" id="home">
            <br />
            <h3 align="center">
                <font face="sans" size="4">
                    <a href="home.html">BACK</a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="../index.html">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="../Controller/logout.php">LOGOUT</a>&nbsp;&nbsp;&nbsp;&nbsp;
                </font>
            </h3>
        </div>
        <br><br>


<center>
    <form method="post" action="../Controller/addcontactcustomercheck.php">
		<fieldset style="width:30%">
			<table>
				<center>
				<tr>
					<td>Text</td>
				</tr>
				<tr>
					<td><input type="text" name="text" value=""></td>
				</tr>
				<tr>
					<td>
					    <input type="submit" name="submit" value="Send">
					</td>
				</tr>
			</table>
		</fieldset>
	</form><br><br><br>
</center>

    <center>
	<table border = 1>
	<tr>
		<td>Texts</td>
		<td>Operation</td>
	</tr>

	<?php for($i = 0; $i < count($contactcustomer); $i++){ ?>
		<tr>
			<td><?=$contactcustomer[$i]['text']?></td>
			<td><a href="../Controller/deleteContactCustomer.php?text=<?=$contactcustomer[$i]['text']?>"> Delete </a>
			</td>
		</tr>
	<?php } ?>

	</table>
	</center><br><br>