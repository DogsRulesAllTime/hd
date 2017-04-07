<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Приветствую</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>


    <div class="wrap">
        <div class="caption">
            <h1>Служба ИТ</h1>
        </div>


          <div class="column">
         <a class="btn leftc" id="btnreq" href="#">
                   <div class="div">
              <img src="img/check.png" >
               <p class="p">Статус заявки</p>
                   </div>
         </a>
         <div class="enter send">
            <div class="caption">
                <h1 class="hform">Введите номер заявки</h1>
            </div>
             <div class="form">
            <form action="pages/checkStatus.php" method="post">
                <input class="input" type="text" name="text" placeholder="123">
                <br>
                <input class="sub" type="submit" name="knopka" value="Проверить">
            </form>

        </div>
         </div>
         </div>

             <script>
              
                document.querySelector("#btnreq").addEventListener("click", function(){
                document.querySelector(".enter").style.display = "block";
                document.querySelector(".requare").style.display = "none";
                });
              </script>
    </div>

</body>
</html>
