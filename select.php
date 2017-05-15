<?php
include 'connect.php';
$sql = "SELECT * FROM question;";
$result = mysqli_query($link, $sql);
echo "<table border=1>";
echo "<tr>";
echo "<th>id</th>";
echo "<th>question</th>";
echo "</tr>";
while ($dbarr = mysqli_fetch_array($result))
{
  echo "<tr>";
  echo "<th>".$dbarr['idq']."</th>";
  echo "<th>".$dbarr['question']."</th>";
  $id= $dbarr['idq'];
  echo "<th><a href=edit.php?idq=$id>answer</a></th>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($link);
?>
