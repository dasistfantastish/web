<?php
/*
Template Name: register
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
        <a href="/login.php" class="nav__item">Увійти</a>
    </nav>
</header>
<main>
<div class="login">
        <div class="login__title">Реєстрація</div>
        <form class="def__form" action=""  method="post">
            <input type="text" class="def__input" name="name1" placeholder="ім'я фамілія"> <span id="JSregSpan"></span>
            <input type="text" class="def__input" name="login" placeholder="Логін">
            <input type="text" class="def__input" name="addres" placeholder="Адреса">
            <input type="password" class="def__input" name="pass" placeholder="Пароль">
            <button id="regBtn" class="def__btn reg no-show" type="submit">Реєстрація</button>
        </form>
    </div>
</main>
<script src="<?php echo get_template_directory_uri(); ?>/js/register.js"></script>
</body>
</html>

<?php
$name1 = filter_var(trim($_POST['name1']),
FILTER_SANITIZE_STRING);
$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$addres = filter_var(trim($_POST['addres']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);



$pass = md5($pass."fffff");

$db = new mysqli('localhost', 'root', '', 'zabolotivdatabase');
$cookie = $_COOKIE["login"];
if($cookie == ""){
    exit();
}
$result = $db->query("SELECT * FROM `користувачі` WHERE `login` = '$cookie'");
$user = $result->fetch_assoc();
if(count($user) > 1){
    echo "Такий логін уже існує";
    exit();
}

$db->query("INSERT INTO `користувачі`(`name`, `adress`, `login`, `password`) VALUES('$name1', '$addres','$login', '$pass')");



?>