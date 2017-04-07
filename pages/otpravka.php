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
         <a class="btn leftc" id="btn" href="#">
                   <div class="div">
              <img src="../img/mail.png" >
               <p class="p">Создать заявку</p>
                   </div>
         </a>
         <div class="requare send">
            <div class="caption">
                <h1 class="hform">Введите табельный номер</h1>
            </div>
             <div class="form">
            <form action="pages/sendForm.php" method="post">
                <input class="input" type="text" name="message" placeholder="125459">
                <br>
                <input class="sub" type="submit" name="submit" value="Далее">
            </form>

        </div>
         </div>
         </div>
         </div>

         <script>
                document.querySelector("#btn").addEventListener("click", function(){
                  document.querySelector(".requare").style.display = "block";
                  document.querySelector(".enter").style.display = "none";

                });
                </script>
                </body>
</html>