<?php
    session_start();
    
    if ($_SESSION['user']) {
     header('Location: /pages/profile.php');
    }
?>

    <!-- Форма авторизации -->
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <form action="pages/signin.php" method="post">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button type="submit">Войти</button>
        <p>
            У вас нет аккаунта? - <a href="/pages/register.php">зарегистрируйтесь</a>!
        </p>
        <?php
        if ($_SESSION['message']) {
            echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
        }
        unset($_SESSION['message']);
        ?>
    </form>