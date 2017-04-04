<?php
$st = $_GET['st'];
  require_once 'includes/db.php'; //подключение соединения бд
  $select = "SELECT * FROM `zapiski` WHERE `status`= $st "; //запрос для всех заявок
  $avt = mysqli_query($connect , $select);
  $a = mysqli_fetch_assoc($avt);


$new = "";
$inWork = "";
$done = "";

if ($st == 0 ) {
  $new = "green";
}elseif ($st == 1) {
  $inWork = "green";
}elseif ($st == 2) {
  $done = "green";
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<form action="exit.php" method="POST">
  <input type="submit" value= "Выход"" name="">
</form>

  <div class="container">
    <div class="status">
      <div class="statusData new" style="background-color:<?php echo $new; ?>;">
      <a href="panel.php?st=0" >  <h2>Новые заявки</h2></a>
      </div>
      <div class="statusData inWork" style="background-color:<?php echo $inWork; ?>;">
      <a href="panel.php?st=1"><h2>В процессе</h2></a>
          </div>
      <div class="statusData done" style="background-color:<?php echo $done; ?>;">
          <a href="panel.php?st=2"><h2>Выполненые</h2></a>
      </div>
    </div>
    <div class="table">
      <div class="captions">
            <div class="tableCaption">№ заявки</div>
            <div class="tableCaption">Отдел</div>
            <div class="tableCaption">Дата создания</div>
            <div class="tableCaption">Тема</div>
      </div>

      <?php
          //Одна строка с информацией
        while ($a = mysqli_fetch_assoc($avt))
        {
          ?>
          <div class="dataString">
            <div class="dataPole"><?php echo $a['id']?></div>
            <div class="dataPole"><?php echo $a['id_otprav']?></div>
            <div class="dataPole"><?php echo $a['data_sozdania']?></div>
            <div class="dataPole"><?php echo $a['tema']?></div>
            <br>
            <a href="zapiska.php?id=<?php echo $a['id']?>">Подробнее</a>
            </div>
          </div>
          <?php
        }
       ?>



    </div>

  </div>
</body>
</html>
