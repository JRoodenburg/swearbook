<?php
$q = intval($_GET['q']);

$dbc = mysqli_connect('localhost','root','rooot','swearbook');
if (!$dbc) {
    die('Could not connect: ' . mysqli_error($dbc));
}

mysqli_select_db($dbc,"swearbook");
$sql = "SELECT word FROM swearbook WHERE word LIKE '%" . $_GET['q'] . "%' ";
$result = mysqli_query($dbc, $sql) or die("error querry");


echo "<table>
<tr>
<th>Word</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td onclick=\"infouser('". $row['word'] . "')\">". $row['word'] . "</td> ";
    echo "</tr>";
}
echo "</table>";
mysqli_close($dbc);
?>
