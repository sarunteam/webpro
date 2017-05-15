<?php
  $idq = $_GET['idq'];
  $answer = $_POST['answer'];
  include 'connect.php';
  $sql = "INSERT INTO answer VALUES($idq, '$answer');";
  $result = mysqli_query($link, $sql);
  if ($result)
  {
    echo "Thanks you for answer!";
    include 'aselect.php';
    mysqli_close($link);
  }
  else
  {
    echo "error!";
  }
?>
