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

 <?php
 //Выбираем спецов пот отделам
 $select_sotr = '';
 if ($aq['tema']=='cad') {
 	$select_sotr = "SELECT * FROM `users` WHERE `otd`= 165";
}elseif($aq['tema']=='po') {
 	$select_sotr = "SELECT * FROM `users` WHERE `otd`= 132";
 }elseif($aq['tema']=='printer') {
  $select_sotr = "SELECT * FROM `users` WHERE `otd`= 133";
 }

 $zapr_sotr = mysqli_query($connect,$select_sotr);
 $res_sotr = mysqli_fetch_assoc($zapr_sotr);

//Вывод  сотрудников
?>

 <form class="" action="" method="post">
   <select >
  <?php
  $zapr_sotr = mysqli_query($connect,$select_sotr);
  $res_sotr = mysqli_fetch_assoc($zapr_sotr);
   while ($res_sotr = mysqli_fetch_assoc($zapr_sotr)) {
    echo  '<option >'. $res_sotr['surname'].'</option>';
   }
    ?>
</select>
   <input type="submit" name="sub" value="Применить">
 </form>