<?php
require_once('../model/webtech.php');

?>

<?php





 $sql = "select * from contactcustomer";
$conn = getConnection();
$result = mysqli_query($conn, $sql);

 echo "<table align=center width = 50% border=1 cellspacing=15% cellpadding=15%>
<tr>
<td align = center><b>Check Feedback</b></td>

</tr>";

 while($row = mysqli_fetch_assoc($result)){
echo "<tr>
<td align = center>{$row['text']}</td>

</tr>";
}
?>