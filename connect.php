<?php
  $link = mysqli_connect("localhost", "root");
  mysqli_set_charset($link,'utf8');
  $sql = "use testdb";
  $result = mysqli_query($link, $sql);
 ?>
