<?php
require_once 'includes/db.php';

if (empty($_POST['btn'])) {
  echo "введите данные";
  }

 ?>

 <form class="" action="index.php" method="post">
   <input type="text" name="login" value="">
   <input type="password" name="psw" value="">
   <input type="submit" name="btn" value="Вперёд">
 </form>

<?php
if (isset($_POST['login'],$_POST['psw'])) {
  $login = $_POST['login'];
   $password = $_POST['psw'];
}




  if(isset($login,$password)){
    $select = "SELECT * FROM `account` WHERE `login` = '$login' AND `psw` = '$password'";
    $avt = mysqli_query($connect , $select);

    $result = mysqli_fetch_assoc($avt);

    if ( mysqli_num_rows($avt) == 0) {

      echo "пароль или логин не верный!";
    }else {
      session_start();
      $_SESSION['login'] = $login;
      $_SESSION['id'] = $result['id_sotr'];
      header( 'Location: dir.php');
      echo "приветствую ВАС";
    }
  }
    ?>
