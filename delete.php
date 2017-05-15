<?php
  $id = $_GET['id'];
  $link = mysqli_connect("localhost", "root");
  mysqli_set_charset($link,'utf8');
  $sql = "use testdb";
  $result = mysqli_query($link, $sql);
  $sql = "DELETE FROM testtable where id=$id ";
  $result = mysqli_query($link, $sql);
  if ($result)
  {
    echo "Data deleted!<br>";
    include 'select.php';
    mysqli_close($link);
  }
  else
  {
    echo "Data could not delete!<br>";
  }
  echo "<a href=conbine.php>home</a>";
?>
