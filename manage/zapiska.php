<?php
//защита от перехода
require_once 'includes/db.php';
if (isset($_SESSION['id'])){
echo "этот текст видят только зарегистрированыые пользователи";}
else{
echo "вы не можете прочитать скрытый текст";
die();
}



$s=$_SESSION['id'];
$sam_zapr = "SELECT * FROM `users` WHERE `id` = $s";
echo $sam_zapr;
$zapros_dostupa = mysqli_query($connect,$sam_zapr);
$zapr_result = mysqli_fetch_assoc($zapros_dostupa);
echo '<br>'.'Status'.$zapr_result['dostup'].'<br>';
$dostup = $zapr_result['dostup'];

if ($dostup == 1) {
  require '1.php';
}elseif ($dostup == 2) {
  require '2.php';
}elseif($dostup == 3) {
require '3.php';
}
?>