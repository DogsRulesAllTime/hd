<?php
require_once '../includes/dbvar.php';//подключаем файл



//берем переменные с главной страницы(номер записки)
if(isset($_POST['knopka'])){
$id = $_POST['text'];
}
//echo $id; номер заявки
// запрос статуса заявки
$result = mysqli_query($connect, "SELECT * FROM zapiski WHERE id = $id "); //тут вставка айди записки из формы

$actor = $result->fetch_assoc();  //делаем ассоц. массив
//вывод
if (empty($actor)) {
//Проверка существует ли записка
     echo "<br>"."Записка с номером ".$id." не найдена.";
//вывод статуса запискИ(Позже подставить условие IF в зависимости от статуса записки(0 или 1 )
//будут разные сообщения
} elseif ($actor['status'] == 0)  {
  echo "<br>"."Записка с номером ". $actor['id'] . " находится в процессе выполнения.";
}elseif ($actor['status'] == 1)  {
  echo "<br>"."Записка с номером ". $actor['id'] . " Выполнена.";
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
    <a href="../index.php">на главную</a>
  </div>
  </body>
</html>
