<?php
session_start();
echo $_SESSION['login'];
echo "<br>";
echo "tabekm".' '.$_SESSION['id'];
$tabel = $_SESSION['id'];




require_once 'includes/db.php';






    $select = "SELECT * FROM `users` WHERE `id` = $tabel ";
    $avt = mysqli_query($connect , $select);

    $a = mysqli_fetch_assoc($avt);
      print $a['name'].'<br>';
      echo $a['surname'].'<br>';
      echo $a['number'].'<br>';

?>
