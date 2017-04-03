<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
     <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
    include '../includes/dbvar.php';
if(isset($_POST['submit'])){
$userId = $_POST['message'];
 #   echo $userId;
}
$mysqli = new mysqli($serverMySQL, $dblog, $dbpass, $db);
#if ($mysqli->connect_errno) {
#    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
#}
#echo $mysqli->host_info . "\n";
$mysqli->set_charset("utf8");

$result = $mysqli->query("SELECT * FROM $table WHERE id = $userId ",MYSQLI_USE_RESULT);

$actor = $result->fetch_assoc();

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



#while($actor=$result->fetch_assoc()):
#	print "$actor[id]  $actor[name]  $actor[surname]<br>";
#endwhile;
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
