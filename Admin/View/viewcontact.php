<?php
$title = "Expenses";
require_once('../Model/db.php');
require_once('../Model/productModel.php');

$connection = getConnection();
$contactList = getAllcontact();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
        Feedback
    </title>
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
    </body>
</html>
<?php
    echo "<center><hr/><h2>Customer Contacted Issues</h2><hr/></center>";

        echo "<table align=center width = 50% border=1 cellspacing=15% cellpadding=15%>
            <tr>
                <td>Name</td>
                <td>Username</td>
                <td>Email</td>
                <td>Subject</td>
            </tr>";

        for($i = 0; $i < count($contactList); $i++)
        {
            echo "<tr>
                     <td>{$contactList[$i]['name']}</td>
                     <td>{$contactList[$i]['username']}</td>
                     <td>{$contactList[$i]['email']}</td>
                     <td>{$contactList[$i]['subject']}</td>
                </tr>";
        }

        echo "</table>";
    ?>