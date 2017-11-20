<?php
$q = intval($_GET['q']);

$dbc = mysqli_connect('localhost','root','rooot','swearbook');
if (!$dbc) {
    die('Could not connect: ' . mysqli_error($dbc));
}

mysqli_select_db($dbc,"swearbook");
$sql = "SELECT * FROM swearbook WHERE word LIKE '" . $_GET['q'] . "'";
$result = mysqli_query($dbc, $sql) or die("error querry getinfo");

echo "<table>
<tr>
<th>word</th>
<th>definition</th>
</tr>";
while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
  echo "<td>" . $row['word'] . "</td>";
   echo "<td>" . $row['definition'] . "</td>";
  echo "</tr>";
}
echo "</table>";
echo "<br><p>Type again to go back</p>";

mysqli_close($dbc);
?>
