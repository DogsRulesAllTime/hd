<?php
//запись данных в сессию
 $_SESSION['id']=$actor['id'];
 $_SESSION['user']['id'] = $actor['id'];
 $_SESSION['user']['name'] = $actor['name'];
 $_SESSION['user']['surname'] = $actor['surname'];
 $_SESSION['user']['number'] = $actor['number'];
 $_SESSION['user']['otd'] = $actor['otd'];
 $_SESSION['user']['dostup'] = $actor['dostup'];
  

 //Проверка доступа юзера
 //перенаправление на определенную страницу соответствующую доступу 
 function test(){
 if ($_SESSION['user']['dostup'] == 0) {
   header( 'Location: 1.php');
 }elseif ($_SESSION['user']['dostup'] >= 1 || $_SESSION['user']['dostup'] <= 4) {
header( 'Location: panel.php?st=0');
 }
}
?>




<!-- <div>
<a href="otpravka.php">Создать заявку</a>
<a href="proverka.php">Проверить заявку</a>

</div> -->
