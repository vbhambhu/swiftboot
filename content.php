
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

		<?php


the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );

?>
<?php if (is_home()) { ?>
<?php the_excerpt(); ?>
<?php } else { ?>
	<?php the_content(); ?>
<?php } ?>




</article><!-- #post-## -->
