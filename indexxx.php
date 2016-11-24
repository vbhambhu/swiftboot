<?php get_header(); ?>
<div class="row">


  <div class="col-md-8">


<?php foreach (get_posts(array( 'posts_per_page' => 20 )) as $post ) : setup_postdata($post); ?>

<div class="media">
  <div class="media-left">
    <a href="#">
    <?php the_post_thumbnail('home-post-thumbnail'); ?>
      <img class="media-object" src="..." alt="...">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
    <?php //tie_excerpt() ?>
  </div>
</div>







<?php endforeach;  wp_reset_postdata(); ?>




   


  </div>
  <div class="col-md-4">


  	<div class="well">

  		<h3>Trending Now</h3>

      <?php 
$popularpost = new WP_Query( array( 'posts_per_page' => 4, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );


//echo '<pre>'; print_r($popularpost);


while ( $popularpost->have_posts() ) : $popularpost->the_post();

the_title();

endwhile;
?>



  		<?php //wpp_get_mostpopular(); ?>


  	</div>

  	



  </div>
</div>
<?php get_footer(); ?>