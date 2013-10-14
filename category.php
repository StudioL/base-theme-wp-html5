<?php get_header(); ?>

<section id="main">

<?php $post = $posts[0];  ?>
<?php  if (is_category()) { ?>
<h2>Categoría &#8216;<?php single_cat_title(); ?>&#8217;</h2>
<?php } elseif( is_tag() ) { ?>
<h2>Etiqueta &#8216;<?php single_tag_title(); ?>&#8217;</h2>
<?php } elseif (is_day()) { ?>
<h2>Archivo para <?php the_time('F jS Y'); ?>:</h2>
<?php  } elseif (is_month()) { ?><h2>Archivo para <?php the_time('F, Y'); ?>:</h2>
<?php } elseif (is_year()) { ?>
<h2>Archivo para <?php the_time('Y'); ?>:</h2>
<?php } elseif (is_author()) { ?>
<h2>Archivo del autor </h2>
<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
<h2>Archivos del blog</h2>
<?php } ?>

<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<small>Publicado el <?php the_time('j/m/Y') ?> por <?php the_author_posts_link() ?> </small>

<?php if ( has_post_thumbnail() ) { ?>
<div class="thumbnail">
<?php the_post_thumbnail(); ?>
</div>
<?php } ?>

<?php the_excerpt(); ?>


<?php endwhile; else: ?>
<p><?php _e('No hay entradas .'); ?></p>
<?php endif; ?>


</section> <!-- Fin de section#main -->

<?php  get_sidebar()?>

<?php get_footer(); ?>
