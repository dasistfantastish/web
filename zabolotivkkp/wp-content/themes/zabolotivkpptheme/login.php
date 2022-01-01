<?php
/*
Template Name: login
*/
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <title>login</title>
</head>
<body>
<header class="header">
    <div class="logo">
        <a href="/" class="logo__text">Заболотівський ККП</a>
    </div>
    <nav class="nav table">
        <a href="/" class="nav__item">Назад</a>
    </nav>
</header>
<main>
    <div class="login">
        <div class="login__title">Вхід</div>
        <form class="def__form" action="" method="post">
            <input type="text" class="def__input" name="login" placeholder="Логін">
            <input type="password" class="def__input" name="pass" placeholder="Пароль">
            <span>Немає особистого кабінету ? <a href="/register" class="login__link">Реєстрація</a></span>
            <button class="def__btn login" type="submit">Увійти</button>
        </form>
    </div>
</main>
<script src="<?php echo get_template_directory_uri(); ?>/js/login.js"></script>
</body>
</html>
<?php
$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);
$pass = md5($pass."fffff");

$cookieLogin = $_COOKIE["login"];
$cookiePass = $_COOKIE["pass"];
$password = md5($cookiePass."fffff");

$db = new mysqli('localhost', 'root', '', 'zabolotivdatabase');
$result = $db->query("SELECT * FROM `користувачі` WHERE `login` = '$cookieLogin' AND `password` = '$password'");
$user = $result->fetch_assoc();
setcookie('username', $user['name'], time() + 3600*24*30*12,'/');
?>