<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package defTheme
 */

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <title>main</title>
</head>
<body>
    <div class="wrap">
    <header class="header">
        <div class="logo">
            <a href="/" class="logo__text">Заболотівський ККП</a>
        </div>
        <div class="modal">
            <div class="modal__content">
                <button class="close__btn"><img src="<?php echo get_template_directory_uri();?>/img/closebtn.svg" width="25px" alt=""></button>
                <?php
                    $contact = CFS()->get('modal');
                    foreach($contact as $row){
                        ?>
                            <span class="modal__text"><?= $row['name'] ?> :  <?= $row['contact']?></span>

                        <?php
                    }
                ?>
            </div>
        </div>
        <nav class="nav">
            <button type="button" class="contact__modal">Контакти</button>
            <a id="navLogin" href="/login" class="nav__item active">Вхід</a>
            <a href="news/" class="nav__item">Новини</a>
            <a  id="headerName"class="nav__item havesub"></a>
            <ul id="subMenu" class="submenu">
                <li class="submenu__item"><a href="submit/">Подати показник</a></li>
                <li class="submenu__item"><a href="history/">Історія подання</a></li>
                <li class="submenu__item"><a href="payment/">Оплати</a></li>
                <li  class="submenu__item"><a id="logout" href="/">Вийти</a></li>
              </ul>
        </nav>
        <div class="burger-menu">
            <input id="menu-toggle" type="checkbox" />
            <label class="menu-btn" for="menu-toggle">
              <span></span>
            </label>
         
            <ul class="menubox">
                <div><a id="navLogin" href="/login/" class="nav__item active">Вхід</a></div>
                <div><button type="button" class="contact__modal bur">Контакти</button></div>
                <div><a href="news/" class="nav__item bur">Новини</a></div>
                <a id="headerName" class="nav__item bur havesub"></a>
                <ul id="subMenu" class="submenu">
                    <li class="submenu__item"><a href="submit/">Подати показник</a></li>
                    <li class="submenu__item"><a href="history/">Історія подання</a></li>
                    <li class="submenu__item"><a href="payment/">Оплати</a></li>
                    <li  class="submenu__item"><a id="logout" href="/">Вийти</a></li>
                </ul>
            </ul>
          </div>
    </header>