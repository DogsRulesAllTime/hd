<?php
//кнопка выхода
require_once 'includes/db.php';
unset($_SESSION['id'] );
header('location: index.php ');
?>
