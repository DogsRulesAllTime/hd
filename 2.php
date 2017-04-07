<?php
require_once 'includes/db.php';
$id = $_GET['id'];

//вывод информации по конкретной заявке
$select = "SELECT * FROM `zapiski` WHERE `id`=$id"; //запрос для всех заявок
$rezult = mysqli_query($connect,$select);
$aq = mysqli_fetch_assoc($rezult);


if (mysqli_num_rows($rezult) == 0) {
  echo "Заявка не найдена!";
  die();
}else{
    echo $aq['tema']."<br>";
    echo $aq['text']."<br>";
    echo $aq['status']."<br>";
    echo $aq['data_sozdania']."<br>";
      echo $aq['id_otprav']."<br>";
        echo $aq['data_end']."<br>";
          echo $aq['specialist']."<br>";

  }
 ?>

