<?php
$_POST = json_decode(file_get_contents('php://input'), true);
$fp = fopen('view.txt', "a+");
fwrite($fp, $_POST);
fclose($fp);
?>