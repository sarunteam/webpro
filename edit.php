<?php
    $idq = $_GET['idq'];
    include 'connect.php';
    $sql = "SELECT * FROM question WHERE idq = $idq;";
    $result = mysqli_query($link, $sql);
    echo "<form action=update.php?idq=$idq method=post>";
    $dbarr = mysqli_fetch_array($result);
    echo $idq.".";
    echo $dbarr['question']." -> ";
    echo "<input type=text name=answer>";
    echo "<input type=submit name=Submit value=Submit>";
    echo "<input type=reset name=reset value=Cancel>";
    echo "</form>";
    mysqli_close($link);
?>
