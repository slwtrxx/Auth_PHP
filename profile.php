<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: index.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="Assets/CSS/main.css">
</head>
<body>

<!-- Профиль -->

<form>
    <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
    <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
    <a href="#"><?= $_SESSION['user']['email'] ?></a>
    <a href="Vendor/logout.php" class="logout">Выход</a>
</form>

</body>
</html>