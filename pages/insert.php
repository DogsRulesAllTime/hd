    <?php
    session_start();
    $id_otprav = $_SESSION['id'];
include '../includes/dbvar.php';

// Получение данных из предыдущей формы
if(isset($_POST['send'])){
$zhaloba = $_POST['comment'];
    "\n";
$tip = $_POST['radio'];
}
#echo $zhaloba . "\n";
#echo $tip . "<br>";
//Запрос на вставку в таблицу с записками
$vstavka = "INSERT INTO zapiski (`tema`, `text`,`id_otprav`) VALUES ('$tip' , '$zhaloba' ,'$id_otprav' )";

if (mysqli_query($connect, $vstavka)) {
    echo "Ваша Заявка успешно отправлена";
} else {
    echo "Error: " . $vstavka . "<br>" . mysqli_error($connect);//сообщение об ошибке
}

// Записываем в переменную номер заявки при условии, что у нас АвтоИнкримент
$nomerZaprosa = mysqli_insert_id($connect);

echo "<br>". $nomerZaprosa;

$zapros = "SELECT * FROM users where id=$nomerZaprosa";
if (mysqli_query($connect, $zapros)) {
    echo "<br>"."вывод запроса обработан";
} else {
    echo "Error: " . $zapros . "<br>" . mysqli_error($mysqli);
}

echo '<a href="../index.php">на главную</a>';

?>
