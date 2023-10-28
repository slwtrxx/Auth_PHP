<?php

$connect = mysqli_connect('localhost', 'root', 'root', 'test');
if (!$connect) {
    die('Произошла ошибка при подключении к БД!');
}