<?php
$connect = mysqli_connect("localhost", "roma", "", "baza");
if ($connect == false) {
	echo "не удалось установить соединение с базой";
	die();
	}else {
	echo "<H3>"."база подключена"."</H3>";
	}

?>
