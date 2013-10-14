<?php get_header(); ?>

<section id="main">


<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<small>Publicado el <?php the_time('j/m/Y') ?> por <?php the_author_posts_link() ?> </small>


<?php 
if ( has_post_thumbnail()) {
	$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
	echo '<div class="thumbnail">';
	echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" class="thickbox" >';
	the_post_thumbnail('thumbnail');
	echo '</a>';
	echo '</div>';
}
?>

<?php the_excerpt(); ?>


<?php endwhile; ?>

<?php if (function_exists("pagination")) {
    pagination($additional_loop->max_num_pages);
} ?>

<?php else: ?>
<p><?php _e('No hay entradas .'); ?></p>
<?php endif; ?>


</section> <!-- Fin de section#main -->

<?php  get_sidebar()?>

<?php get_footer(); ?>