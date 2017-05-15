<?php
  if (!isset($_POST['send'])) {
    include 'form.php';
    include 'select.php';
?>

<?php
}
else {
 $idq = $_POST['idq'];
 $question = $_POST['question'];
 include 'connect.php';
 $sql = "INSERT INTO question VALUES($idq, '$question');";
 $result = mysqli_query($link, $sql);
 if ($result) {
   include 'form.php';
   include 'select.php';
 }
 else {
   require_once 'form.php';
   include 'select.php';
   echo "It's failed<br>";
 }

}
?>
