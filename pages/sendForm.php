<<?php
require_once '../includes/db.php';

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
     <link rel="stylesheet" href="../style/style.css">
</head>
<body>
  <?php

if(isset($_POST['submit'])){
$userId = $_POST['message'];
 #   echo $userId;
}




$result = mysqli_query($connect,"SELECT * FROM `users` WHERE id = $userId ");

$actor = mysqli_fetch_assoc($result);

// Определяет есть ли пользователь в базе
// функция с глобальной переменной
$text = "Ваши данные";
$display = ""; // для отображения информации
function status(){
  global $text;
  echo "<h2>". "$text". "</h2>";
}
if (empty($actor)) {

     $text = "Не найден";
     $display = "style='display:none'";  // скрыть основной блок, что бы не было пустого запроса.
}


require_once '../includes/func.php';
test();

?>
  <div class="wrapper">
<?php status(); ?>

    <div class="inf" <?php echo $display ?>>

      <div class="userblock" >
          <p>Табельный номер</p>
            <div class="userinf">  <?php echo "$actor[id]" ?>
          </div>
      </div>
      <div class="userblock">
          <p>Табельный номер</p>
            <div class="userinf">  <?php echo "$actor[name]" ?>
          </div>
      </div>
      <div class="userblock">
          <p>Табельный номер</p>
            <div class="userinf">  <?php echo "$actor[surname]" ?>
          </div>
      </div>
      <div class="userblock">
          <p>Табельный номер</p>
            <div class="userinf">  <?php echo "$actor[dostup]" ?>
          </div>
      </div>



      <div class="userblock">
          <p>Табельный номер</p>
            <div class="userinf">  <?php echo "$actor[number]" ?>
          </div>
      </div>
      <div class="userblock">
          <p>Табельный номер</p>
            <div class="userinf">  <?php echo "$actor[number]" ?>
          </div>
      </div>
      <div class="userblock">
          <p>Табельный номер</p>
            <div class="userinf">  <?php echo "$actor[number]" ?>
          </div>
      </div>
      <div class="userblock">
          <p>Табельный номер</p>
            <div class="userinf">  <?php echo "$actor[number]" ?>
          </div>
      </div>

    </div>


    <div class="formproblem">
        <form action="insert.php" method="post">
           <div class="typeprob">
            <input class="radio" name="radio" type="radio" value="pc" id="radio">
            <label for="radio">ПК</label>
            <input class="radio" name="radio" type="radio" value="printer" id="radiotwo">
             <label for="radiotwo">Принтер</label>
            <input class="radio"  name="radio" type="radio" value="po" id="radiothree">
             <label for="radiothree">Программа</label>
            <input class="radio" name="radio" type="radio" value="cad" id="radiofour">
             <label for="radiofour">КАД системы</label>
        </div>
        <div class="textprob">

                <textarea name="comment"></textarea>
                <input type="submit" value="Отправить" name="send">

        </div>
        </form>
    </div>
    </div>
</body>
</html>
