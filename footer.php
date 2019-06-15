<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Susty
 */
?>

	</div>

	<footer id="colophon">
&copy; Copyright <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php $blog_title = get_bloginfo(); ?></a> <?php echo date('Y'); ?>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
