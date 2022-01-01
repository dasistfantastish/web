<?php
/**
 * Template Name: main
 * 
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package defTheme
 */

get_header();
?>
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package defTheme
 */
?>
    <div class="main">
        <div class="main__inner">
        <div class="main__text">
            <div class="main__title">
            <?php the_field('title'); ?>
            </div>
            <div class="main__subtitle">
            <?php the_field('subtitle'); ?>
            </div>
        </div>
        <button class="def__btn">Подати показник</button>
        </div>
        <div class="main__amin">
             <img class="main__img" src="<?php echo get_template_directory_uri(); ?>/img/water.png" alt="">
        </div>
    </div>
    <footer class="footer">
        <ul class="footer__nav">
            <li class="footer-nav__item"><a href="/news">Новості</a></li>
            <li class="footer-nav__item"><a href="/main">Головна</a></li>
            <li class="footer-nav__item"><a href="/payment">Оплати</a></li>
            <li class="footer-nav__item"><a href="/history">Історія</a></li>
            <li class="footer-nav__item"><a href="/submit">Подати показник</a></li>
        </ul>
        <span><?php the_field('addres'); ?></span>
        <a class="footer__link" href="https://goo.gl/maps/CTGBLuq62LRn2weu5">На карті</a>
    </footer>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/js/modal.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
</html>
</body>