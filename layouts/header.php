<?php
session_start();
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Мой сайт"/>
    <link href="../css/reset.css" rel="stylesheet">
    <link rel="shortcut icon" href="https://ikt.muctr.ru/images/1logo.png">
    <link rel="stylesheet" type="text/css" href="../css/tmp.css" />
    <link rel="stylesheet" type="text/css" href="../css/forms.css" />
    <title>A4</title>
</head>
<body>

    <header>
        <a href="#">
            <div class="logo">
                <img class="imsa" src="<?= $_SESSION['user']['avatar']?>" alt="">
                <h2><?= $_SESSION['user']['email'] ?></h2>
                <a href="logout.php" class="logout">Выход</a>
            </div>
        </a>

        <nav class="nava">
            <ul>
                <li><a href="profile.php">Основная</a></li>
                <li><a href="mn_page.php">Работа с БД</a></li>
                <li><a href="game.html" target="_blank">Игра</a></li>
            </ul>
        </nav>

    </header>
<main>