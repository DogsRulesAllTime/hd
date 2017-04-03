    <?php
include '../includes/dbvar.php';
$mysqli = new mysqli($serverMySQL, $dblog, $dbpass, $db);
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
#echo $mysqli->host_info . "\n";
// Получение данных из предыдущей формы
if(isset($_POST['send'])){
$zhaloba = $_POST['comment'];
    "\n";
$tip = $_POST['radio'];
}
#echo $zhaloba . "\n";
#echo $tip . "<br>";
//Запрос на вставку в таблицу с записками
$vstavka = "INSERT INTO zapiski (tema, text) VALUES ('$tip' , '$zhaloba')";

if (mysqli_query($mysqli, $vstavka)) {
    echo "Ваша Заявка успешно отправлена";
} else {
    echo "Error: " . $vstavka . "<br>" . mysqli_error($mysqli);//сообщение об ошибке
}

// Записываем в переменную номер заявки при условии, что у нас АвтоИнкримент
$nomerZaprosa = $mysqli->insert_id;

echo "<br>". $nomerZaprosa;

$zapros = "SELECT * FROM users where id=$nomerZaprosa";
if (mysqli_query($mysqli, $zapros)) {
    echo "<br>"."вывод запроса обработан";
} else {
    echo "Error: " . $zapros . "<br>" . mysqli_error($mysqli);
}

echo '<a href="indexq.php">на главную</a>';





#printf("Номер вашего обращения %d\n", $mysqli->insert_id);


#$result = $mysqli->query("SELECT * FROM zapiski WHERE idzapiski = 5 #",MYSQLI_USE_RESULT);

#$actor = $result->fetch_assoc();
# echo $actor['idzapiski'];
#echo $actor['status'];
#echo $actor['tema'];
#echo $actor['text'];
?>
