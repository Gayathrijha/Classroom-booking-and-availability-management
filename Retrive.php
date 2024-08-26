<html>
<head>
<style>
table{
border-style:solid;
border-width:2px;
border-color:black;
border-collapse:collapse;
}
</style>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "allot";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT on_date, classroom_no, event_type, event_title, start_time, end_time FROM schedule";
$result = mysqli_query($conn, $sql);

echo "<table border='1'>
<tr>
<th>on_date</th>
<th>classroom_no</th>
<th>event_type</th>
<th>event_title</th>
<th>start_time</th>
<th>end_time</th>
</tr>";
while($row = mysqli_fetch_assoc($result))
{
  echo "<tr>";
  echo "<td>" . $row['on_date'] . "</td>";
  echo "<td>" . $row['classroom_no'] . "</td>";
  echo "<td>" . $row['event_type'] . "</td>";
  echo "<td>" . $row['event_title'] . "</td>";
  echo "<td>" . $row['start_time'] . "</td>";
  echo "<td>" . $row['end_time'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>
</body>
</html>