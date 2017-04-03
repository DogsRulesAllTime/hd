<?php
require_once '../includes/dbvar.php';//подключаем файл


$mysqli = mysqli_connect($serverMySQL, $dblog, $dbpass, $db);//создаем подключение к БД
//Проверка соединения
if ($mysqli->connect_errno){
  die('Ошибка соединения: ' . $mysqli->connect_error);
}else{
  echo 'Connect true';
}
//берем переменные с главной страницы(номер записки)
if(isset($_POST['knopka'])){
$id = $_POST['text'];
}
//echo $id; номер заявки
// запрос статуса заявки
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id = $id "); //тут вставка айди записки из формы

$actor = $result->fetch_assoc();  //делаем ассоц. массив
//вывод
if (empty($actor)) {
//Проверка существует ли записка
     echo "<br>"."Записка с номером ".$id." не найдена.";
//вывод статуса запискИ(Позже подставить условие IF в зависимости от статуса записки(0 или 1 )
//будут разные сообщения
} else {
  echo "<br>"."Записка с номером "."$actor[name]". " Выполнена\ не выполнена";
}
//echo "<br>"."Записка с номером "."$actor[name]". "Выполнена\ не выполнена";

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
    <div class="wrapper">
      <?php echo "$actor[name]"; ?>
    <a href="indexq.php">на главную</a>
  </div>
  </body>
</html>
