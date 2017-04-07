<?php
require_once 'includes/db.php';

if (empty($_POST['subm'])) {
  echo "введите данные";
  }

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
 </head>
 <body>
 <div class="container">
   <h1>Вход в систему</h1>
   <form class="" action="index.php" method="post">
     <div class="poly">
     <label for="login">Логин</label>
     <input type="text" name="login" value="">
     <label for="psw">Пароль</label>
     <input type="password" name="psw" value="">
   </div>
   <div class="btn">
     <input type="submit" name="subm" value="Войти">
   </div>
   </form>
   <div class="reg">
     <a href="reg.html">Зарегистрироваться</a>
   </div>

 </div>

 </body>
 </html>


<?php
if (isset($_POST['login'],$_POST['psw'])) {
  $login = $_POST['login'];
   $password = $_POST['psw'];
}



//Проверка логина и пароля
  if(isset($login,$password)){
    $select = "SELECT * FROM `account` WHERE `login` = '$login' AND `psw` = '$password'";
    $avt = mysqli_query($connect , $select);

    $result = mysqli_fetch_assoc($avt);
    $ids = $result['id_sotr'] ;
    $_SESSION['id_sotr'] = $result['id_sotr'];
    if ( mysqli_num_rows($avt) == 0) {

      echo "пароль или логин не верный!";
      
    }else {
      
      $_SESSION['login'] = $login;
      $_SESSION['id'] = $ids;
      header( 'Location: chekid.php');
      echo "приветствую ВАС";
    }
  }
    ?>
