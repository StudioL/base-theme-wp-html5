</div> <!-- Fin de inner-wrapper -->

<footer>

<section class="footer-widgets">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 1') ) : ?>
<p>Contenido en caso de que no haya "Footer 1"</p>
<?php endif; ?>
</section>
<section class="footer-widgets">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 2') ) : ?>
<p>Contenido en caso de que no haya "Footer 2"</p>
<?php endif; ?>
</section>
<section class="footer-widgets">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 3') ) : ?>
<p>Contenido en caso de que no haya "Footer 3"</p>
<?php endif; ?>
</section>

<p><?php wp_nav_menu( array('theme_location' => 'footer' ) ); ?></p>

<p>&copy;<?=date('Y');?> - <?php bloginfo('name'); ?></p>
</footer>

</div> <!-- Fin de wrapper -->

<?php wp_footer(); ?>

<? include("inc.stats.php"); ?>

</body>
</html>
