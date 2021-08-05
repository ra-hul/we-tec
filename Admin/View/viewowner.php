<?php
$title = "Show All Owner";
include('header.php');
require_once('../Model/userModel.php');
$data = getAllemployee();

?>
<td>
    <h2 align='center'>Owner List </h2>
    <br><br>
    <table align=center width = 50% border=1 cellspacing=15% cellpadding=15%>
        <tr>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Gender</th>
            <th>DOB</th>
        </tr>
        <?php for ($i = 0; $i < count($data); $i++) { ?>
            <tr>
                <td><?= $data[$i]['name'] ?></td>
                <td><?= $data[$i]['username'] ?></td>
                <td><?= $data[$i]['email'] ?></td>
                <td><?= $data[$i]['gender'] ?></td>
                <td><?= $data[$i]['date'] ?></td>
            </tr>
        <?php } ?>
    </table>
</td>