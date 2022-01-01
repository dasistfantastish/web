<?php
/**
 * The template for displaying archive pages
 *  Template Name: news1
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
    <title>login</title>
</head>
<body class="no-scroll">
<header class="header">
    <div class="logo">
        <a href="/" class="logo__text">Заболотівський ККП</a>
    </div>
    <nav class="nav table">
        <a href="/" class="nav__item table">Назад</a>
    </nav>
    
</header>
<main>
    <div class="news">
        <h1 class="news__main-title">Новини</h1>



<?php   $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
    $custom_args = array(
    'post_type' => 'post',
    'order' => 'DESC',
    'posts_per_page' => 5,
        'paged' => $paged
    );

// custom query
$recent_posts = new WP_Query($custom_args);

// check that we have results
if($recent_posts->have_posts()) : ?>



    <?php
    // start loop
    while ($recent_posts->have_posts() ) : $recent_posts->the_post(); ?>
    <article class="news__item">
            <h3 class="news__title"><?= the_title();?></h3>
            <div class="news__text"><?= the_content(); ?></div>
            <div class="news__date"><?= get_post_time('j.n.Y в H:i');?></div>
            </article>
    
    
<?php endwhile; ?>

<?php endif;
echo '<div class="pagination__container">';
echo '<div class="pagination">';
if(function_exists('wp_pagenavi')) { wp_pagenavi(array( 'query' => $recent_posts )); }
echo '</div>';
echo '</div>';
wp_reset_postdata();
?>

    </div>
</main>

</body>
</html>
