<?php get_header(); ?>

<section id="main">
<article id="single">
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace permanente a <?php the_title_attribute(); ?>"><?php the_title(); ?>. </a></h2>
<small> Publicado por <?php the_author_posts_link() ?>  el <?php the_time('j/m/Y') ?>. Categoría: <?php the_category(', '); ?>. <?php the_tags('Etiquetas: ',', '); ?></small><br>

<div class="post">

<?php the_content(); ?>

</div>

<?php
$tags = wp_get_post_tags($post->ID);
if ($tags) {
$tag_ids = array();
foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
$args=array(
'tag__in' => $tag_ids,
'post__not_in' => array($post->ID),
'showposts'=>5, // Number of related posts that will be shown.
'caller_get_posts'=>1
);
$my_query = new wp_query($args);
if( $my_query->have_posts() ) {
echo '<h3>Artículos relacionados</h3><ul>';
while ($my_query->have_posts()) {
$my_query->the_post();
?>
<li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
<?php
}
echo '</ul>';
}
wp_reset_query(); 
}
?>

<div class="comentarios">
<?php comments_template(); ?>
</div>



<?php endwhile; ?>

<?php endif; ?>

</article> <!-- Fin de single -->

</section> <!-- Fin de main -->
<?php  get_sidebar()?>

<?php get_footer(); ?>
