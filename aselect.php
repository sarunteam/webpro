<?php
$sql = "SELECT question.question, answer.answer FROM question, answer where question.idq = answer.idq;";
$result = mysqli_query($link, $sql);
echo "<table border=1>";
echo "<tr>";
echo "<th>question</th>";
echo "<th>answer</th>";
echo "</tr>";
while ($dbarr = mysqli_fetch_array($result))
{
  echo "<tr>";
  echo "<th>".$dbarr['question']."</th>";
  echo "<th>".$dbarr['answer']."</th>";
  echo "</tr>";
}
echo "</table>";
?>
