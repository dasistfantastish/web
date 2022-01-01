<?php
/*
Template Name: submit
*/
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <title>submit</title>
</head>
<body>
<header class="header">
    <div class="logo">
        <a href="/" class="logo__text">Заболотівський ККП</a>
    </div>
    <nav class="nav table">
        <a href="/" class="nav__item">Головна</a>
    </nav>
</header>
<main>
    <div class="login">
        <div class="login__title">Подати показник</div>
        <form class="def__form" action="#" method="post">
            <input class="def__input" type="text" placeholder="Показник">
            <button class="def__btn reg" type="submit">Відправити</button>
        </form>
    </div>
</main>

</body>
</html>
